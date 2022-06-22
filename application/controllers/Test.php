<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Agivest_model');
        $this->load->model('Home_model');
        $this->load->model('Email_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('string');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $data = [];
        $data = [
            "levelUser" => "",
            "prov" =>  $this->db->get_where('wilayah_provinsi')->result_array()
        ];
        $data['namaInstansi'] = $this->session->userdata('user')['nama_kantin'];

        $this->load->view('kantin/template/header.php', $data);
        $this->load->view('kantin/template/navigation.php', $data);
        $this->load->view('Test/index', $data);
    }
    public function getDAtaSiswa()
    {
        $__siswa  = $this->Home_model->getSelectData("*", "bulk_data_user, tbl_siswa", "WHERE bulk_data_user.nis=tbl_siswa.nis AND bulk_data_user.qrcode LIKE 'ppad%' ORDER BY bulk_data_user.id ASC");

        $dup = [];
        $data = [];
        foreach ($__siswa->result_array() as  $value) {
            $_d = $this->db->get_where('bulk_data_user', ["nis" => $value['nis']])->num_rows();
            $_data = $this->db->get_where('bulk_data_user', ["nis" => $value['nis']])->result_array();
            if ($_d > 1) {
                array_push($dup, $_d);
                array_push($data, $_data);
            }
        }
        print_r([
            "jml" => $dup,
            "data" => $data,
            "data_all" => $__siswa->result_array(),
            "jumlahData" => count($__siswa->result_array())
        ]);
    }
    public function getDataGuru()
    {
        $d_guru = $this->db->get_where('guru')->result_array();
        $d = [];
        foreach ($d_guru as $keyss) {
            $this->db->where('foto', $keyss['NIK'] . '.jpg');
            $g = $this->db->get_where('bulk_data_user')->row_array();
            array_push($d, $g);
        }

        $dup = [];
        $data = [];
        foreach ($d as  $value) {
            $_d = $this->db->get_where('bulk_data_user', ["nis" => $value['nis']])->num_rows();
            $_data = $this->db->get_where('bulk_data_user', ["nis" => $value['nis']])->result_array();;
            if ($_d > 1) {
                array_push($dup, $_d);
                array_push($data, $_data);
            }
        }
        print_r([
            "jumlah_duplikat" => count($dup) > 0 ? $dup : 0,
            "data_duplikat" => $data,
            "total_guru" => count($d)
        ]);
    }
    public function JsonDataFilter()
    {
        $data = json_decode(file_get_contents('https://oncard.phoenixkreatifdigital.com/assets/json/data_siswa.json'), true);
        $filter = [
            "Nauval nurrahman",
            "Romelta devlino",
            "Risvi tri destina",
            "Muhammad abid",
            "Khairil amri",
            "Aifa athiyyah zahra",
            "Afla yestia indri",
            "Aditya Putri Helviani",
            "Rafvi Zulta Sadewa",
            "Rizqullah syaril Aziz"
        ];

        $result = [];
        foreach ($data['Form Responses 1'] as $val) {

            if (!empty($val['Nama Santri'])) {
                foreach ($filter as  $vas) {

                    if ($val['Nama Santri'] == $vas) {
                        array_push($result, $val);
                    }
                }
            }
        }
        echo json_encode($result);
    }
    public function repair($user_id = null)
    {
        if (!empty($_GET['cari'])) {
            $user_id = $_GET['cari'];
        }
        $this->db->order_by('created_at', 'ASC');
        $data = $this->db->get_where('repair_bugs', ["id_user" => $user_id])->result_array();
        if (count($data) > 1) {
            echo "ini di pending dulu karna ada 2 item";
            die();
        }
        $this->db->order_by('id_user', 'ASC');
        $data_rep = $this->db->get_where('repair_bugs', ["id_user" => $user_id])->row_array();
        if (empty($data_rep)) {
            echo "id tidak ditemukan";
            die();
        }
        $d = [
            "main" => $data_rep
        ];

        $main = json_decode($data_rep['history_transaksi_siswa'], true);

        foreach ($main as  $value) {
            if ($value['status'] && empty($this->db->get_where('riwayat_saldo', ["id_riwayat_saldo" => $value['id_riwayat_saldo']])->row_array()['status'])) {
                $this->db->where('id_riwayat_saldo', $value['id_riwayat_saldo']);
                $this->db->update('riwayat_saldo', ["status" => "issue"]);
            }
        }

        $this->load->view('Test/repair', $d);
    }
    public function update_repair()
    {
        $req = $_POST;
        $valid = explode(',', $req['valid_riwayat']);
        $inValid = explode(',', $req['invalid_riwayat']);
        $this->db->where('id_bug', $req['id_repair']);
        $d = $this->db->update('repair_bugs', [
            "perubahan_saldo_siswa" => $req['saldo'],
            "pesan" => $req['catatan'],
            "status" => "pending"
        ]);

        if (!empty($valid)) {
            foreach ($valid as  $value1) {
                $this->db->where('id_riwayat_saldo', $value1);
                $this->db->update('riwayat_saldo', ["status" => "valid"]);
            }
        }
        if (!empty($inValid)) {
            foreach ($inValid as  $value2) {
                $this->db->where('id_riwayat_saldo', $value2);
                $this->db->update('riwayat_saldo', ["status" => "inValid"]);
            }
        }
        $get = $this->db->get_where("repair_bugs", ["id_bug" => $req["id_repair"]])->row_array()['id_user'];
        redirect('Test/repair/' . $get);
    }
    public function pengembalian_dana()
    {
        $headers  = [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->session->userdata('_token')
        ];
        // $ok = curl_request('', $headers, $data = null);

        $data['getDataRiwayat'] = "";

        if ($this->session->userdata('_token')) {
            $data = [
                "levelUser" => "",
                "prov" =>  $this->db->get_where('wilayah_provinsi')->result_array()
            ];


            $data['nis'] = '';
            $nis = $this->uri->segment(3);
            $id_user = $this->uri->segment(4);

            $getLink = curl_no_post('https://oncard.phoenixkreatifdigital.com/engine/api/siswa/get-siswa-in-relation/' . $nis, $this->session->userdata('_token'));
            $getAllSiswa = curl_no_post('https://oncard.phoenixkreatifdigital.com/engine/api/siswa/get', $this->session->userdata('_token'));
            $getSiswaById = curl_no_post('https://oncard.phoenixkreatifdigital.com/engine/api/siswa/getOne?nis=' . $id_user, $this->session->userdata('_token'));
            $data['getDataRiwayat'] = $getLink['response']['riwayat_transaksi'];
            $data['namaInstansi'] = $this->session->userdata('user')['nama_instansi'];
            $data['getAllSiswa'] = $getAllSiswa;


            if ($nis != '') {
                $data['nis'] = $id_user;
                $data['getNamaSiswa'] = $getSiswaById['nama_siswa'];
            }

            $data['id_user'] = $nis;

            $this->load->view('manajemen/template/header.php', $data);
            $this->load->view('manajemen/template/navigation.php', $data);
            $this->load->view('Test/pengembalian.php', $data);
        } else {
            $data['levelUser'] = "";
            $this->load->view('loginregister/login.php', $data);
        }
    }
}

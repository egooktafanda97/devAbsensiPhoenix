<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') or exit('No direct script access allowed');

class Kartu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Agivest_model');
        $this->load->model('Home_model');
        $this->load->model('Email_model');
        // $this->load->model('Email_Notification_Expired_model');
        // $this->load->model('OnlineCashierEmailLibrary');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('string');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
    }
    public function kartuSiswa()
    {

        $data = $this->db->get_where('bulk_data_user')->result_array();
        $d = [];
        foreach ($data as $value) {
            if (explode('_', $value['qrcode'])[0] == "ppad") {
                $pra = $value;
                unset($pra['foto']);
                $fix = $pra + ["foto" => base_url("assets/kartu/userprofil/" . $value['foto'])];
                array_push($d, $fix);
            }
        }
        echo json_encode($d);
    }
    public function kartuGuru()
    {

        $data = $this->db->get_where('bulk_data_user')->result_array();
        $d = [];
        foreach ($data as $value) {
            if (explode('_', $value['qrcode'])[0] == "guru") {
                $pra = $value;
                unset($pra['foto']);
                $fix = $pra + ["foto" => base_url("assets/kartu/guru/" . $value['foto'])];
                array_push($d, $fix);
            }
        }
        echo json_encode($d);
    }

    public function CreateKartuSiswa()
    {
        $_d = up("foto", $_POST['nis'], "assets/kartu/userprofil/");
        if ($_d == false) {
            echo json_encode(["error" => "file yang di upload gagal mungkin size terlalu bersar atau pun format harus jpg"]);
            return false;
        }
        $data = $this->db->get_where('bulk_data_user')->result_array();
        $d = [];
        $num_qr = [];
        foreach ($data as $value) {
            if (explode('_', $value['qrcode'])[0] == "ppad") {
                array_push($num_qr, explode('_', $value['qrcode'])[1]);
            }
        }
        $num_qrcode = max($num_qr) + 1;
        $data = [
            "nama"          => $_POST['nama'],
            "nis"           => $_POST['nis'],
            "qrcode"        => "ppad_" . $num_qrcode . "_oncard.png",
            "foto"          => $_d,
            "dateCreated"   => date("Y-m-d H:i:s")
        ];

        $this->db->insert('bulk_data_user', $data);
        echo json_encode(true);
    }
    public function EditKartuSiswa()
    {
        $data = [
            "nama"          => $_POST['nama'],
            "nis"           => $_POST['nis'],
            "dateCreated"   => date("Y-m-d H:i:s")
        ];

        $_d = up("foto", $_POST['nis'], "assets/kartu/userprofil/");
        if ($_d != false) {
            $data = array_merge($data, ["foto" => $_d]);
        }

        $this->db->where('id', $_POST['id']);
        $this->db->update('bulk_data_user', $data);
        echo json_encode(true);
    }
    public function CreateKartuGuru()
    {
        $_d = up("foto", $_POST['nis'], "assets/kartu/guru/");
        if ($_d == false) {
            echo json_encode(["error" => "file yang di upload gagal mungkin size terlalu bersar atau pun format harus jpg"]);
            return false;
        }
        $data = $this->db->get_where('bulk_data_user')->result_array();
        $d = [];
        $num_qr = [];
        foreach ($data as $value) {
            if (explode('_', $value['qrcode'])[0] == "guru") {
                array_push($num_qr, explode('_', $value['qrcode'])[2]);
            }
        }
        $num_qrcode = max($num_qr) + 1;
        $data = [
            "nama"          => $_POST['nama'],
            "nis"           => $_POST['nis'],
            "qrcode"        => "guru_ppad_" . $num_qrcode . "_oncard.png",
            "foto"          => $_d,
            "dateCreated"   => date("Y-m-d H:i:s")
        ];

        $this->db->insert('bulk_data_user', $data);
        echo json_encode(true);
    }
    public function EditKartuGuru()
    {
        $data = [
            "nama"          => $_POST['nama'],
            "nis"           => $_POST['nis'],
            "dateCreated"   => date("Y-m-d H:i:s")
        ];

        $_d = up("foto", $_POST['nis'], "assets/kartu/guru/");
        if ($_d != false) {
            $data = array_merge($data, ["foto" => $_d]);
        }

        $this->db->where('id', $_POST['id']);
        $this->db->update('bulk_data_user', $data);
        echo json_encode(true);
    }

    public function getJoin()
    {

        $data = $this->db->get_where('bulk_data_user')->result_array();
        $d = [];
        foreach ($data as $value) {
            if (explode('_', $value['qrcode'])[0] == "ppad") {
                $pra = $value;
                unset($pra['foto']);
                $fix = $pra + ["foto" => base_url("assets/kartu/userprofil/" . $value['foto'])];
                array_push($d, $fix);
            }
        }
        $_d = [];
        $_miss = [];
        foreach ($d as $values) {
            $s = $this->db->get_where('tbl_siswa', ["nis" => $values['nis']])->result_array();
            if (!empty($s)) {
                array_push($_d, $values);
            } else {
                array_push($_miss, $values);
            }
        }
        echo json_encode(["kartu" => $_d, "jmlK" => count($_d), "missing" => $_miss, "jmlM" => count($_miss)]);
    }
    public function getSiswa()
    {
        $s = $this->db->get_where('tbl_siswa')->result_array();
        echo json_encode($s);
    }
    public function getSiswaNoSync()
    {
        $data = $this->db->get_where('bulk_data_user')->result_array();
        $d = [];
        foreach ($data as $value) {
            if (explode('_', $value['qrcode'])[0] == "ppad") {
                $pra = $value;
                unset($pra['foto']);
                $fix = $pra + ["foto" => base_url("assets/kartu/userprofil/" . $value['foto'])];
                array_push($d, $fix);
            }
        }

        $ss = $this->db->get_where('tbl_siswa')->result_array();
        $fix = [];
        $dis = [];
        foreach ($ss as  $valuee) {
            $cek = false;
            foreach ($d as  $value) {
                if ($valuee['nis'] == $value['nis']) {
                    array_push($fix, $valuee);
                    $cek = true;
                }
            }
            if ($cek == false) {
                array_push($dis, $valuee);
            }
        }

        foreach ($dis as  $va) {
            $this->db->where("nis", $va['nis']);
            $this->db->delete('tbl_siswa');
        }

        echo json_encode(["kartu" => $fix, "jmlK" => count($fix), "missing" => $dis, "jmlM" => count($dis)]);
    }
}

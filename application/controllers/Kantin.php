<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') or exit('No direct script access allowed');

class Kantin extends CI_Controller
{
    // public $auth_cek = false;

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

        // auto login jika token invalid
        // $getLink = curl_no_post(base_url('engine/api/auth/login-checks'), $this->session->userdata('_token'));
        // if ($getLink['status'] == false) {
        //     redirect('Login');
        // }
    }


    public function kasir()
    {

        if ($this->session->userdata('_token')) {
            $data = [
                "levelUser" => "",
                "prov" =>  $this->db->get_where('wilayah_provinsi')->result_array()
            ];


            $data['namaInstansi'] = $this->session->userdata('user')['nama_kantin'];


            $this->load->view('kantin/template/header.php', $data);
            $this->load->view('kantin/template/navigation.php', $data);
            $this->load->view('kantin/index.php', $data);
        } else {
            $data['levelUser'] = "";
            $this->load->view('loginregister/login.php', $data);
        }
    }

    public function struk()
    {

        if ($this->session->userdata('_token')) {
            $data = [
                "levelUser" => "",
                "prov" =>  $this->db->get_where('wilayah_provinsi')->result_array()
            ];


            $data['namaInstansi'] = $this->session->userdata('user')['nama_kantin'];


            $this->load->view('kantin/template/header.php', $data);
            $this->load->view('kantin/template/navigation.php', $data);
            $this->load->view('kantin/riwayat_transaksi.php', $data);
        } else {
            $data['levelUser'] = "";
            $this->load->view('loginregister/login.php', $data);
        }
    }
    public function menu()
    {

        if ($this->session->userdata('_token')) {
            $data = [
                "levelUser" => "",
                "prov" =>  $this->db->get_where('wilayah_provinsi')->result_array()
            ];


            $data['namaInstansi'] = $this->session->userdata('user')['nama_kantin'];


            $this->load->view('kantin/template/header.php', $data);
            $this->load->view('kantin/template/navigation.php', $data);
            $this->load->view('kantin/menu.php', $data);
        } else {
            $data['levelUser'] = "";
            $this->load->view('loginregister/login.php', $data);
        }
    }
    public function Profile()
    {
        if ($this->session->userdata('_token')) {
            $getLink = curl_no_post('https://oncard.phoenixkreatifdigital.com/engine/api/kantin/get-by-auth', $this->session->userdata('_token'));
            $getProduct = curl_no_post('https://oncard.phoenixkreatifdigital.com/engine/api/product/get', $this->session->userdata('_token'));

            $data = [
                "levelUser" => "",
                "prov" =>  $this->db->get_where('wilayah_provinsi')->result_array(),
                "usData" => $getLink,
                "product" => $getProduct
            ];

            $data['namaInstansi'] = $this->session->userdata('user')['nama_kantin'];

            $this->load->view('kantin/template/header.php', $data);
            $this->load->view('kantin/template/navigation.php', $data);
            $this->load->view('kantin/profile', $data);
        }
    }
}

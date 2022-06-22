<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') or exit('No direct script access allowed');

class Orangtua extends CI_Controller
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


    public function beranda()
    {

        if ($this->session->userdata('_token')) {
            $data = [
                "levelUser" => "",
                "prov" =>  $this->db->get_where('wilayah_provinsi')->result_array()
            ];

            $data['namaInstansi'] = $this->session->userdata('user')['email'];
            $data['namaUser'] = $this->session->userdata('user')['username'];
            $data['foto'] = $this->session->userdata('user')['foto'];
            $data['id'] = $this->session->userdata('user')['id'];


            $this->load->view('orangtua/template/header.php', $data);
            $this->load->view('orangtua/template/navigation.php', $data);
            $this->load->view('orangtua/index.php', $data);
        } else {
            $data['levelUser'] = "";
            $this->load->view('loginregister/login.php', $data);
        }
    }
    
    public function anak()
    {

        if ($this->session->userdata('_token')) {
            $data = [
                "levelUser" => "",
                "prov" =>  $this->db->get_where('wilayah_provinsi')->result_array()
            ];

            $data['namaInstansi'] = $this->session->userdata('user')['email'];
            $data['namaUser'] = $this->session->userdata('user')['username'];
            $data['foto'] = $this->session->userdata('user')['foto'];
            $data['id'] = $this->session->userdata('user')['id'];


            $this->load->view('orangtua/template/header.php', $data);
            $this->load->view('orangtua/template/navigation.php', $data);
            $this->load->view('orangtua/anak.php', $data);
        } else {
            $data['levelUser'] = "";
            $this->load->view('loginregister/login.php', $data);
        }
    }
    
    public function pembayaran()
    {

        if ($this->session->userdata('_token')) {
            $data = [
                "levelUser" => "",
                "prov" =>  $this->db->get_where('wilayah_provinsi')->result_array()
            ];

            $data['namaInstansi'] = $this->session->userdata('user')['email'];
            $data['namaUser'] = $this->session->userdata('user')['username'];
            $data['foto'] = $this->session->userdata('user')['foto'];
            $data['id'] = $this->session->userdata('user')['id'];


            $this->load->view('orangtua/template/header.php', $data);
            $this->load->view('orangtua/template/navigation.php', $data);
            $this->load->view('orangtua/pembayaran.php', $data);
        } else {
            $data['levelUser'] = "";
            $this->load->view('loginregister/login.php', $data);
        }
    }
    
    public function notifikasi()
    {

        if ($this->session->userdata('_token')) {
            $data = [
                "levelUser" => "",
                "prov" =>  $this->db->get_where('wilayah_provinsi')->result_array()
            ];

            $data['namaInstansi'] = $this->session->userdata('user')['email'];
            $data['namaUser'] = $this->session->userdata('user')['username'];
            $data['foto'] = $this->session->userdata('user')['foto'];
            $data['id'] = $this->session->userdata('user')['id'];


            $this->load->view('orangtua/template/header.php', $data);
            $this->load->view('orangtua/template/navigation.php', $data);
            $this->load->view('orangtua/notifikasi.php', $data);
        } else {
            $data['levelUser'] = "";
            $this->load->view('loginregister/login.php', $data);
        }
    }

    public function checkAuth()
    {
        $req = curl_request_noheader('https://oncard.phoenixkreatifdigital.com/engine/api/auth/loginTime', [
            "username" => $this->session->userdata()['user']['username'],
            "password" => $this->input->post('pass')
        ]);
       echo json_encode($req);
    }
    
}

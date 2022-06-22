<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') or exit('No direct script access allowed');

class Manajemen extends CI_Controller
{
    function __construct()
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
        
        if ($this->session->userdata('_token')) {
            $data = [
                "levelUser" => "",
                "prov" =>  $this->db->get_where('wilayah_provinsi')->result_array()
            ];

            // $data['namaInstansi'] = $this->session->userdata('user')['nama_instansi'];


            $this->load->view('manajemen/template/header.php', $data);
            $this->load->view('manajemen/template/navigation.php', $data);
            $this->load->view('manajemen/index.php', $data);
        } else {
            $data['levelUser'] = "";
            $this->load->view('loginregister/login.php', $data);
        }
    }
    
    public function konfigurasi()
    {
        
        if ($this->session->userdata('_token')) {
            $data = [
                "levelUser" => "",
                "prov" =>  $this->db->get_where('wilayah_provinsi')->result_array()
            ];

            // $data['namaInstansi'] = $this->session->userdata('user')['nama_instansi'];


            $this->load->view('manajemen/template/header.php', $data);
            $this->load->view('manajemen/template/navigation.php', $data);
            $this->load->view('manajemen/konfigurasi.php', $data);
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

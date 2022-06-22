<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_kantin extends CI_Controller
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
    public function detail($slug)
    {
        if ($this->session->userdata('_token')) {
            $data = [
                "levelUser" => "",
                "prov" =>  $this->db->get_where('wilayah_provinsi')->result_array(),
                "id_ins" =>  $this->session->userdata('user')['kode_instansi'],
                "id_usr" => $this->session->userdata('user')['id'],
                "namaInstansi" => $this->session->userdata('user')['nama_instansi'],
                "kantin" => $this->db->get_where('kantin', ["user_id" => $slug])->row_array()
            ];


            $this->load->view('manajemen/template/header.php', $data);
            $this->load->view('manajemen/template/navigation.php', $data);
            $this->load->view('manajemen/Kantin/ProfilKantin.php', $data);
        } else {
            $data['levelUser'] = "";
            $this->load->view('loginregister/login.php', $data);
        }
    }
}

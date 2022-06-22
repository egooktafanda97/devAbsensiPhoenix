<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') or exit('No direct script access allowed');

class Inisiasi extends CI_Controller
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
        
        if($this->session->userdata('_token')){
            $data = [
                "levelUser" => "",
                "prov" =>  $this->db->get_where('wilayah_provinsi')->result_array()
            ];
            
            
            $this->load->view('inisiasi/index.php', $data);
            
        }else {
            $data['levelUser'] = "";
            $this->load->view('loginregister/login.php', $data);
        }

        
    }
}

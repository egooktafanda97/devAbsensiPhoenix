<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Agivest_model');
        $this->load->model('Email_model');
        $this->load->helper('cookie');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->library('form_validation');
        $this->load->model('Home_model');
    }

    public function index()
    {



        if ($this->session->userdata('adminSession')) {
            $data['errormsg'] = "";

            redirect('Welcome/index', 'refresh', $data);
        } elseif ($this->session->userdata('userSession')) {
            $data['errormsg'] = "";

            redirect('Welcome/index', 'refresh', $data);
        } else {

            $data['errormsg'] = "";
            $this->load->view('loginregister/login', $data);
        }
    }

    // ajax login actions
    public function loginActions()
    {
        $posts = $this->input->post();
        $headers  = [
            'Content-Type: application/json'
        ];
        // curl_request berasal dari function curl funsi_helper.php  
        $result = curl_request(api_url('auth/login'), $headers, $posts);
        if ($result['status'] == 200) {
            $this->session->set_userdata([
                "_token" => $result['result']['access_token'],
                "user" => $result['result']['user'],
                "kode_instansi" => $result['result']['user']['kode_instansi'],
                "role" => $result['result']['user']['role']
            ]);
        }
        echo json_encode($result);
    }


    public function selectLogin()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //Check berdasarkan username
        $result = $this->Agivest_model->getData($username, md5($password));
        if ($result) {
            //Status
            $statusUser = '';
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'idUser'  => $row->id,
                    'username'  => $row->username,
                    'namaLengkap' => $row->namaLengkap,
                    'levelUser' => $row->statusLevelUser
                );
                $statusUser = $row->statusLevelUser;
            }


            if ($statusUser == '5') {
                //SET SESSION
                $this->session->set_userdata('userSession', $sess_array);
                $hasil['resultnya'] = "true";
                echo json_encode($hasil);
            } else if ($statusUser == '10') {
                $this->session->set_userdata('adminSession', $sess_array);
                //SET SESSION
                $hasil['resultnya'] = "true_adm";
                echo json_encode($hasil);
            } else {
                //SET SESSION
                $this->session->set_userdata('noSession', $sess_array);
                $this->load->view('loginregister/login');
            }
        } else {
            $hasil['resultnya'] = "false";
            echo json_encode($hasil);
            // if (!empty($modalInvestasi)) {
            //   $this->session->set_flashdata('gagalmasuk','Username atau Password anda salah');
            //   $this->load->view('loginregister/login');
            // }else{
            //   $this->session->set_flashdata('gagalmasuk','Username atau Password yang dimasukkan salah');
            //   redirect(base_url().'Login', 'refresh');
            // }
        }
    }


    public function LoginMunguMobileAppsMaya()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('pass');


        if ($username == '' || $password == '') {
            echo json_encode(array("status" => "false", "message" => "Parameter missing!"));
        } else {
            $result = $this->Agivest_model->getData($username, md5($password));

            if ($result) {
                $result2 = $this->Agivest_model->getData($username, md5($password));

                $emparray = array();
                if ($result2) {
                    foreach ($result2 as $row) {
                        $emparray = array(
                            'idUser'  => $row->idUser,
                            'username' => $row->username,
                            'namaLengkap' => $row->namaLengkap,
                            'alamat' => $row->alamatUser,
                            'levelUser' => $row->levelUser,
                            'jenisKelamin' => $row->jenisKelamin


                        );
                    }
                    echo json_encode(array("status" => "true", "message" => "Login successfully!", "datalol" => $emparray));
                }
            } else {
                echo json_encode(array("status" => "false", "message" => "Invalid username or password!"));
            }
        }
    }

    function logout()
    {
        $this->session->unset_userdata('userSession');
        session_destroy();
        redirect('Welcome/index', 'refresh');
    }

    function logoutUser()
    {
        
        $this->session->unset_userdata('adminSession');
        $this->session->unset_userdata('userSession');
        $this->session->unset_userdata('loginedShoppers');
        $this->session->unset_userdata('loginedDistributor');
        $this->session->unset_userdata('loginedHQ');
        session_destroy();
        redirect('Landingpage/index', 'refresh');
    }

    function logoutEmployee()
    {

        $this->session->unset_userdata('loginedShoppers');

        redirect('Welcome/homepage', 'refresh');
    }

    function logoutDistributor()
    {

        $this->session->unset_userdata('loginedDistributor');

        redirect('Welcome/homepage', 'refresh');
    }

    function logoutHQ()
    {

        $this->session->unset_userdata('loginedDistributor');

        redirect('Welcome/homepage', 'refresh');
    }

    function logoutPenambak()
    {
        $this->session->unset_userdata('siswaSession');
        session_destroy();
        redirect('Welcome/index', 'refresh');
    }

    function logoutAdmin()
    {
        $this->session->unset_userdata('adminSession');
        session_destroy();
        redirect('Welcome/index', 'refresh');
    }

    function verify($verificationText = NULL)
    {
        $dataInput = array(
            'status' => "belum_aktif",
            'verification_code' => "activated_by_verification",


        );

        $simpan = $this->Home_model->updateData('user', $dataInput, " verification_code='$verificationText'");
        if ($simpan) {
            $data['errormsg'] = "ok";
            $this->load->view('loginregister/login', $data);
        } else {
            $data['errormsg'] = "failed";
            $this->load->view('loginregister/login', $data);
        }
    }
    public function cek()
    {
        var_dump(engine);
    }
}

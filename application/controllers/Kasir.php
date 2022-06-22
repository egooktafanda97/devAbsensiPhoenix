<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') or exit('No direct script access allowed');

class Kasir extends CI_Controller
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
        $data['levelUser'] = "";
        $this->load->view('kasir/index.php', $data);
    }

    public function adminUser()
    {

        if ($this->session->userdata('userSession')) {
            $namaadmin = $this->session->userdata('userSession');
            $data['namaLengkap'] = $namaadmin['namaLengkap'];
            $userLoginName = $namaadmin['namaLengkap'];
            $data['levelUser'] = "";
            $data['levelUser'] = $namaadmin['levelUser'];
            $data['idUser'] = $namaadmin['idUser'];

            $idUser = $namaadmin['idUser'];

            $usernameGiven = "";
            $namaUser = "";
            $pictureUser = "";
            $aktifgak = "";
            $lengkapgak = "";
            $email = "";

            $adaktp = "";
            $adask1 = "";
            $adask2 = "";
            $adaijazah = "";

            $cekKelengkapanDokumenUpload = $this->Home_model->getSelectData("*", "user", "WHERE id='$idUser' AND f_ktp!='' AND f_sk1!='' AND f_sk2!='' AND f_ijazah!=''");

            if ($cekKelengkapanDokumenUpload->result()) {
                $lengkapgak = "lengkap";
            } else {
                $lengkapgak = "belum_lengkap";
            }



            if ($lengkapgak == 'belum_lengkap') {
                return redirect()->to('index');
            } else {

                $selectUser = $this->Home_model->getSelectData("*", "user", "WHERE id=$idUser");
                $data['getUser'] = $this->Home_model->getSelectData("*", "user", "WHERE id=$idUser");


                foreach ($selectUser->result() as $row) {
                    # code...
                    $usernameGiven = $row->username;
                    $namaUser = $row->namaLengkap;
                    $aktifgak = $row->status;
                    $email = $row->email;

                    if ($row->f_ktp == '') {
                        $adaktp = "belum";
                    } else {
                        $adaktp = 'ada';
                    }
                    if ($row->f_sk1 == '') {
                        $adask1 = "belum";
                    } else {
                        $adask1 = 'ada';
                    }
                    if ($row->f_sk2 == '') {
                        $adask2 = "belum";
                    } else {
                        $adask2 = 'ada';
                    }
                    if ($row->f_ijazah == '') {
                        $adaijazah = "belum";
                    } else {
                        $adaijazah = 'ada';
                    }
                }

                $data['usernameGiven'] = $usernameGiven;
                $data['namaUserGiven'] = $namaUser;
                $data['pictureUserGiven'] = $pictureUser;
                $data['emailGiven'] = $email;

                $data['dataJenisPTK'] = $this->Home_model->getSelectData("*", "jenisPTK", "WHERE status='aktif'");
                $data['dataJenisKepegawaian'] = $this->Home_model->getSelectData("*", "statuskepegawaian", "WHERE status='aktif'");
                $data['dataLembagaPengangkatan'] = $this->Home_model->getSelectData("*", "lembagapengangkatan", "WHERE status='aktif'");
                $data['dataSumberGaji'] = $this->Home_model->getSelectData("*", "sumbergaji", "WHERE status='aktif' ");
                $data['dataKabupaten'] = $this->Home_model->getSelectData("*", "wilayah", "WHERE status='aktif' GROUP BY kabupaten ");


                $cekKelengkapanDokumenUpload = $this->Home_model->getSelectData("*", "user", "WHERE id='$idUser' AND f_ktp!='' AND f_sk1!='' AND f_sk2!='' AND f_ijazah!=''");

                if ($cekKelengkapanDokumenUpload->result()) {
                    $lengkapgak = "lengkap";
                } else {
                    $lengkapgak = "belum_lengkap";
                }

                if ($aktifgak == 'request' && $lengkapgak == 'belum_lengkap') {
                    $lengkapgak = 'lengkapi_data_upload';
                } else if ($aktifgak == 'request' && $lengkapgak == 'lengkap') {
                    $lengkapgak = 'requesting';
                }

                $data['namaUser'] = $namaUser;
                $data['statusAktif'] = $aktifgak;
                $data['statusKelengkapan'] = $lengkapgak;

                $data['adaktp'] = $adaktp;
                $data['adask1'] = $adask1;
                $data['adask2'] = $adask2;
                $data['adaijazah'] = $adaijazah;



                // $sendEmail = $this->Email_model->sendVerificationCode("ridhohawali.rh@gmail.com","Ridho Hawali Fani","qweqkleekjQKwkj2k191"); 

                $this->load->view('adminPage/template/header', $data);
                $this->load->view('adminPage/template/sidebar_admin', $data);
                $this->load->view('adminPage/admin', $data);
            }
        } else {
            $data['levelUser'] = "";
            $this->load->view('loginregister/login.php', $data);
        }

        // $this->load->view('index');
    }


    public function seePTKInfo()
    {
        $keyword = $this->uri->segment(3);

        $data['getUser'] = $this->Home_model->getSelectData("*", "user", "WHERE id=$keyword");

        $this->load->view('adminPage/template/header', $data);
        // $this->load->view('adminPage/template/sidebar_admin',$data);
        $this->load->view('adminPage/seeptkinfo', $data);

        // $this->load->view('index');
    }

    public function seePTKInfoRequest()
    {
        $keyword = $this->uri->segment(3);

        $data['getUser'] = $this->Home_model->getSelectData("*", "user", "WHERE id=$keyword");

        $this->load->view('adminPage/template/header', $data);
        // $this->load->view('adminPage/template/sidebar_admin',$data);
        $this->load->view('adminPage/seeptkinforequest', $data);

        // $this->load->view('index');
    }

    public function adminAdmin()
    {

        if ($this->session->userdata('adminSession')) {
            $namaadmin = $this->session->userdata('adminSession');
            $data['namaLengkap'] = $namaadmin['namaLengkap'];
            $userLoginName = $namaadmin['namaLengkap'];
            $data['levelUser'] = "";
            $data['levelUser'] = $namaadmin['levelUser'];
            $data['idUser'] = $namaadmin['idUser'];

            $idUser = $namaadmin['idUser'];

            $usernameGiven = "";
            $namaUser = "";
            $pictureUser = "";
            $aktifgak = "";
            $lengkapgak = "";
            $email = "";

            $adaktp = "";
            $adask1 = "";
            $adask2 = "";
            $adaijazah = "";

            $cekKelengkapanDokumenUpload = $this->Home_model->getSelectData("*", "user", "WHERE id='$idUser' AND f_ktp!='' AND f_sk1!='' AND f_sk2!='' AND f_ijazah!=''");

            if ($cekKelengkapanDokumenUpload->result()) {
                $lengkapgak = "lengkap";
            } else {
                $lengkapgak = "belum_lengkap";
            }



            if ($lengkapgak == 'belum_lengkap') {
                return redirect()->to('index');
            } else {

                $selectUser = $this->Home_model->getSelectData("*", "user", "WHERE id=$idUser");
                $data['getUser'] = $this->Home_model->getSelectData("*", "user", "WHERE id=$idUser");


                foreach ($selectUser->result() as $row) {
                    # code...
                    $usernameGiven = $row->username;
                    $namaUser = $row->namaLengkap;
                    $aktifgak = $row->status;
                    $email = $row->email;

                    if ($row->f_ktp == '') {
                        $adaktp = "belum";
                    } else {
                        $adaktp = 'ada';
                    }
                    if ($row->f_sk1 == '') {
                        $adask1 = "belum";
                    } else {
                        $adask1 = 'ada';
                    }
                    if ($row->f_sk2 == '') {
                        $adask2 = "belum";
                    } else {
                        $adask2 = 'ada';
                    }
                    if ($row->f_ijazah == '') {
                        $adaijazah = "belum";
                    } else {
                        $adaijazah = 'ada';
                    }
                }

                $data['usernameGiven'] = $usernameGiven;
                $data['namaUserGiven'] = $namaUser;
                $data['pictureUserGiven'] = $pictureUser;
                $data['emailGiven'] = $email;

                $data['dataJenisPTK'] = $this->Home_model->getSelectData("*", "jenisPTK", "WHERE status='aktif'");
                $data['dataJenisKepegawaian'] = $this->Home_model->getSelectData("*", "statuskepegawaian", "WHERE status='aktif'");
                $data['dataLembagaPengangkatan'] = $this->Home_model->getSelectData("*", "lembagapengangkatan", "WHERE status='aktif'");
                $data['dataSumberGaji'] = $this->Home_model->getSelectData("*", "sumbergaji", "WHERE status='aktif' ");
                $data['dataKabupaten'] = $this->Home_model->getSelectData("*", "wilayah", "WHERE status='aktif' GROUP BY kabupaten ");




                $cekKelengkapanDokumenUpload = $this->Home_model->getSelectData("*", "user", "WHERE id='$idUser' AND f_ktp!='' AND f_sk1!='' AND f_sk2!='' AND f_ijazah!=''");

                if ($cekKelengkapanDokumenUpload->result()) {
                    $lengkapgak = "lengkap";
                } else {
                    $lengkapgak = "belum_lengkap";
                }

                if ($aktifgak == 'request' && $lengkapgak == 'belum_lengkap') {
                    $lengkapgak = 'lengkapi_data_upload';
                } else if ($aktifgak == 'request' && $lengkapgak == 'lengkap') {
                    $lengkapgak = 'requesting';
                }

                $data['dataListPTK'] = $this->Home_model->getSelectData("*", "user", "WHERE status='aktif' AND statusLevelUser='5'");
                $data['dataListPTKRequest'] = $this->Home_model->getSelectData("*", "user", "WHERE status='request' AND statusLevelUser='5'");

                $data['namaUser'] = $namaUser;
                $data['statusAktif'] = $aktifgak;
                $data['statusKelengkapan'] = $lengkapgak;

                $data['adaktp'] = $adaktp;
                $data['adask1'] = $adask1;
                $data['adask2'] = $adask2;
                $data['adaijazah'] = $adaijazah;



                // $sendEmail = $this->Email_model->sendVerificationCode("ridhohawali.rh@gmail.com","Ridho Hawali Fani","qweqkleekjQKwkj2k191"); 

                $this->load->view('adminPage/template/header', $data);
                $this->load->view('adminPage/template/sidebar_admin', $data);
                $this->load->view('adminPage/adminadmin', $data);
            }
        } else {
            $data['levelUser'] = "";
            $this->load->view('loginregister/login.php', $data);
        }

        // $this->load->view('index');
    }

    public function uploadBerkas()
    {

        if ($this->session->userdata('userSession')) {
            $namaadmin = $this->session->userdata('userSession');
            $data['namaLengkap'] = $namaadmin['namaLengkap'];
            $userLoginName = $namaadmin['namaLengkap'];
            $data['levelUser'] = "";
            $data['levelUser'] = $namaadmin['levelUser'];
            $data['idUser'] = $namaadmin['idUser'];

            $idUser = $namaadmin['idUser'];
            $tipe = $this->input->post('tipe');

            $imagename = "";

            $initialize = $this->upload->initialize(array(
                "upload_path" => 'assets/png/berkas/',
                "allowed_types" => "*",
                "remove_spaces" => TRUE,
                "overwrite" => TRUE
            ));

            if (!$this->upload->do_upload('filesss')) {
                $error = array('error' => $this->upload->display_errors());
                // echo $this->upload->display_errors();
            } else {
                $data = $this->upload->data();
                $imagename = $data['file_name'];


                if ($imagename != "") {
                    if ($tipe == 'ktp') {

                        $date = date('m-d-Y-h-i-s', time());
                        $dateTable = date('Y-m-d h:i:s', time());

                        $namafile = "ktp______" . $date . "______" . $imagename;

                        $dataInput = array(
                            'f_ktp' => 'assets/png/berkas/' . $namafile,
                            'tglCreated' => $dateTable
                        );
                    } else if ($tipe == 'sk1') {

                        $date = date('m-d-Y-h-i-s', time());
                        $dateTable = date('Y-m-d h:i:s', time());
                        $namafile = "sk______" . $date . "______" . $imagename;

                        $dataInput = array(
                            'f_sk1' => 'assets/png/berkas/' . $namafile,
                            'tglCreated' => $dateTable
                        );
                    } else if ($tipe == 'sk2') {

                        $date = date('m-d-Y-h-i-s', time());
                        $dateTable = date('Y-m-d h:i:s', time());
                        $namafile = "sk2______" . $date . "______" . $imagename;

                        $dataInput = array(
                            'f_sk2' => 'assets/png/berkas/' . $namafile,
                            'tglCreated' => $dateTable
                        );
                    } else if ($tipe == 'ijazah') {

                        $date = date('m-d-Y-h-i-s', time());
                        $dateTable = date('Y-m-d h:i:s', time());
                        $namafile = "ijazah______" . $date . "______" . $imagename;

                        $dataInput = array(
                            'f_ijazah' => 'assets/png/berkas/' . $namafile,
                            'tglCreated' => $dateTable
                        );
                    }

                    $simpan = $this->Home_model->updateData('user', $dataInput, " id=$idUser");

                    if ($simpan) {
                        $hasil['resultnya'] = "true";
                        echo json_encode($hasil);
                    } else {
                        $hasil['resultnya'] = "false";
                        echo json_encode($hasil);
                    }
                } else {
                    $hasil['resultnya'] = "null";
                    echo json_encode($hasil);
                }
            }




            //Menampilkan Array dalam Format JSON


        } else {

            $data['getDataDesa'] = $this->Home_model->getSelectData("*", "o_data_desa", "WHERE status='aktif'");
            $this->load->view('loginregister/login.php', $data);
        }
    }



    public function getKecamatan()
    {
        $result = array();

        $kabupatenKota = $this->input->post('kabupatenKota');
        // $keyword = $this->input->post('term');

        $getDataKades = $this->Home_model->getSelectData("*", "wilayah", "WHERE kabupaten='$kabupatenKota' AND status='aktif' GROUP BY kecamatan");
        foreach ($getDataKades->result() as $row) {
            //Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 


            array_push($result, array(
                'value'  => $row->kecamatan,
                'text'  => $row->kecamatan,

            ));
        }

        //Menampilkan Array dalam Format JSON
        echo json_encode(array('items' => $result));
    }
    public function getDesaKelurahan()
    {
        $result = array();

        $kecamatan = $this->input->post('kecamatan');
        // $keyword = $this->input->post('term');

        $getDataKades = $this->Home_model->getSelectData("*", "wilayah", "WHERE kecamatan='$kecamatan' AND status='aktif' GROUP BY kelurahan");
        foreach ($getDataKades->result() as $row) {
            //Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 


            array_push($result, array(
                'value'  => "[" . $row->id . "] " . $row->kelurahan,
                'text'  => $row->kelurahan,

            ));
        }

        //Menampilkan Array dalam Format JSON
        echo json_encode(array('items' => $result));
    }
    public function getKodeDesa()
    {
        $result = array();

        $kodeWilayah = $this->input->post('kodeWilayah');
        $parseIDData = explode(" ", $kodeWilayah);
        $exe = $parseIDData[0];
        $exe = substr($parseIDData[0], 1, -1);;
        // $keyword = $this->input->post('term');
        $val = "";

        $getDataKades = $this->Home_model->getSelectData("*", "wilayah", "WHERE id=$exe AND status='aktif'");
        foreach ($getDataKades->result() as $row) {
            //Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
            $val = $row->kodepos;
        }


        //Menampilkan Array dalam Format JSON
        $hasil['resultnya'] = $val;
        echo json_encode($hasil);
    }

    public function searchingItem()
    {
        $result = array();
        $hasil['htmlnya'] = "";
        $hasil['htmlnya'] .= '<table class="table table-striped table-bordered" width="100%"><tr>
            <td width="10">No</td>
            <td>NIK</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>NPSN</td>
            <td>Nama Ibu Kandung</td>
            <td>Username</td>
          </tr>';

        $key = $this->input->post('key');
        $type = $this->input->post('type');
        if ($type == 'ptk') {
            $getDataKades = $this->Home_model->getSelectData("*", "user", "WHERE status='aktif' AND statusLevelUser='5' AND (NIK LIKE '%$key%' || namaLengkap LIKE '%$key%' ||penugasan LIKE '%$key%')");
        } else {
            $getDataKades = $this->Home_model->getSelectData("*", "user", "WHERE status='request' AND statusLevelUser='5' AND (NIK LIKE '%$key%' || namaLengkap LIKE '%$key%' ||penugasan LIKE '%$key%')");
        }

        $datasent = "";
        $no = 1;
        foreach ($getDataKades->result() as $row) {
            //Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
            $getDataKepegawaian = explode(";", $row->penugasan);
            $getDataIbuAgamaKawin = explode(";", $row->ibuAgamaKawin);

            $hasil['htmlnya'] .= '

            <tr>
                <td>' . $no++ . '</td>
                <td><a href="#" onclick="window.open(\'' . base_url() . '/Welcome/seePTKInfo/' . $row->id . '\',\'name\',\'width=600,height=700,toolbar=no,location=no\')">' . $row->NIK . '</a></td>
                <td>' . $row->namaLengkap . '</td>
                <td>' . $row->jenisKelamin . '</td>
                <td>' . $getDataKepegawaian[3] . '</td>
                <td>' . $getDataIbuAgamaKawin[0] . '</td>
                <td>' . $row->username . '</td>
              </tr>

            ';
        }


        $hasil['htmlnya'] .= '</table>';
        //Menampilkan Array dalam Format JSON


        echo json_encode($hasil);
    }

    public function addPengajuanPTK()
    {
        $result = array();

        $id = $this->input->post('id');
        $nik = $this->input->post('nik');
        $Nama = $this->input->post('Nama');
        $jenisKelamin = $this->input->post('jenisKelamin');
        $tempatLahir = $this->input->post('tempatLahir');
        $tglLahir = $this->input->post('tglLahir');
        $namaIbu = $this->input->post('namaIbu');
        $agama = $this->input->post('agama');
        $statusPerkawinan = $this->input->post('statusPerkawinan');
        $email = $this->input->post('email');

        $statusKepegawaian = $this->input->post('statusKepegawaian');
        $NIP = $this->input->post('NIP');
        $jenisPTK = $this->input->post('jenisPTK');
        $lembagaPengangkat = $this->input->post('lembagaPengangkat');
        $sk = $this->input->post('sk');
        $tmtPengangkatan = $this->input->post('tmtPengangkatan');
        $sumberGaji = $this->input->post('sumberGaji');
        $lisensiSekolah = $this->input->post('lisensiSekolah');

        $kabupatenKota = $this->input->post('kabupatenKota');
        $kecamatan = $this->input->post('kecamatan');
        $desaKelurahan = $this->input->post('desaKelurahan');

        $desaKelurahanParsing = explode(" ", $desaKelurahan);
        $desaKelurahan = array_shift($desaKelurahanParsing);

        $desaKelurahan = implode(" ", $desaKelurahanParsing);

        $kodePos = $this->input->post('kodePos');
        $alamat = $this->input->post('alamat');

        $kabupatenKotaTugas = $this->input->post('kabupatenKotaTugas');
        $kecamatanTugas = $this->input->post('kecamatanTugas');
        $sekolahTugas = $this->input->post('sekolahTugas');
        $nomorSuratTugas = $this->input->post('nomorSuratTugas');
        $tmtPengangkatan2 = $this->input->post('tmtPengangkatan2');
        $tmtTugas = $this->input->post('tmtTugas');


        //get random string----------------------------------------------------
        $chars = array(
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
            'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
            'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
            '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
        );

        shuffle($chars);

        $num_chars = count($chars) - 1;
        $token = '';

        for ($i = 0; $i < $num_chars; $i++) { // <-- $num_chars instead of $len
            $token .= $chars[mt_rand(0, $num_chars)];
        }


        $dataInput = array(
            'NIK' => $nik,
            'namaLengkap' => $Nama,
            'jenisKelamin' => $jenisKelamin,
            'tempatLahir' => $tempatLahir,
            'tanggalLahir' => $tglLahir,
            'ibuAgamaKawin' => $namaIbu . ";" . $agama . ";" . $statusPerkawinan,
            'email' => $email,

            'kepegawaian' => $statusKepegawaian . ";" . $NIP . ";" . $jenisPTK . ";" . $lembagaPengangkat . ";" . $sk . ";" . $tmtPengangkatan . ";" . $sumberGaji . ";" . $lisensiSekolah,
            'domisili' => $kabupatenKota . ";" . $kecamatan . ";" . $desaKelurahan . ";" . $kodePos . ";" . $alamat,
            'penugasan' => $kabupatenKotaTugas . ";" . $kecamatanTugas . ";" . $sekolahTugas . ";" . $nomorSuratTugas . ";" . $tmtPengangkatan2 . ";" . $tmtTugas,
            'verification_code' => $token,
            'status' => "request",

        );

        $simpan = $this->Home_model->updateData('user', $dataInput, "id=$id");


        if ($simpan) {
            $hasil['resultnya'] = "true";
            echo json_encode($hasil);
        } else {
            $hasil['resultnya'] = "false";
            echo json_encode($hasil);
        }
    }

    public function updateStatusPengajuan()
    {
        $result = array();

        $id = $this->input->post('id');
        $status = $this->input->post('status');
        $pesannya = $this->input->post('pesannya');

        if ($status == 'tolak') {
            $dataInput = array(
                'f_ktp' => '',
                'f_sk1' => '',
                'f_sk2' => '',
                'f_ijazah' => '',
                'status' => "request",

            );
        } else if ($status == 'terima') {
            $dataInput = array(
                'status' => "aktif",

            );
        }

        $simpan = $this->Home_model->updateData('user', $dataInput, "id=$id");


        if ($simpan) {
            $hasil['resultnya'] = "true";
            echo json_encode($hasil);
        } else {
            $hasil['resultnya'] = "false";
            echo json_encode($hasil);
        }
    }


    public function getKecamatanTugas()
    {
        $result = array();

        $kabupatenKota = $this->input->post('kabupatenKota');
        // $keyword = $this->input->post('term');

        $getDataKades = $this->Home_model->getSelectData("*", "wilayah_sekolah", "WHERE kabupaten='$kabupatenKota' AND status='aktif' GROUP BY kecamatan");
        foreach ($getDataKades->result() as $row) {
            //Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 


            array_push($result, array(
                'value'  => $row->kecamatan,
                'text'  => $row->kecamatan,

            ));
        }

        //Menampilkan Array dalam Format JSON
        echo json_encode(array('items' => $result));
    }

    public function getDataSekolah()
    {
        $result = array();

        $kabupatenKota = $this->input->post('kabupaten');
        $kecamatan = $this->input->post('kecamatan');
        // $keyword = $this->input->post('term');

        $getDataKades = $this->Home_model->getSelectData("*", "wilayah_sekolah", "WHERE kabupaten='$kabupatenKota' AND kecamatan='$kecamatan' AND status='aktif'");
        foreach ($getDataKades->result() as $row) {
            //Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 


            array_push($result, array(
                'value'  => $row->namaSekolah,
                'text'  => $row->namaSekolah,

            ));
        }

        //Menampilkan Array dalam Format JSON
        echo json_encode(array('items' => $result));
    }
}

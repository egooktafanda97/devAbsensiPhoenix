<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AutorunScript extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Agivest_model');
        $this->load->model('Home_model');
        $this->load->model('Email_model');
        $this->load->model('OnlineCashierEmailLibrary');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('string');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->library('Pdf');
    }

    protected $statsSent = 0;

    public function index()
    {

        $tglExpired = "";
        $dataBelumBayar = $this->Home_model->getSelectData("*, DATE_FORMAT(tagihanpembayaran.tglExpiredPesanan, '%d %M %Y') tglExpired, DATE_FORMAT(tagihanpembayaran.tglExpiredPesanan, '%H:%i:%s') jamExpired, TIMESTAMPDIFF(day,NOW(),tagihanpembayaran.tglExpiredPesanan) as rentangWaktu", "user, tagihanpembayaran, pakettourtravel", "WHERE user.idUser=tagihanpembayaran.idUser AND pakettourtravel.idPaket=tagihanpembayaran.idPaket AND tagihanpembayaran.statusPembayaran='Menunggu Pembayaran'");

        foreach ($dataBelumBayar->result() as $row) {
            if ($row->tglExpiredPesanan < date("Y-m-d")) {
                $dataInput = array(
                    'statusPembayaran' => 'Dibatalkan',
                );


                $update = $this->Home_model->updateData('tagihanpembayaran', $dataInput, " idPembayaran=$row->idPembayaran");
                if ($update) {
                    $this->Email_model->sendPembatalanTagihanExpired($row->email, $row->kodePaketTour, $row->username);
                }
            } elseif ($row->rentangWaktu == 1) {
                $this->Email_model->sendReminderTagihanExpired($row->email, $row->kodePaketTour, $row->username);
            }
        }
    }
}

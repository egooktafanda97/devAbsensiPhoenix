<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wilayah extends CI_Controller
{
    public function index()
    {
    }
    public function Provinsi($id = null)
    {
        if (!empty($id) && $id != null) {
            $this->db->where('id', $id);
        }
        $propv = $this->db->get_where('wilayah_provinsi')->result_array();
        echo json_encode($propv);
    }
    public function Kabupaten($prov = null)
    {
        if (!empty($prov) && $prov != null) {
            $this->db->where('provinsi_id', $prov);
        }
        $kab = $this->db->get_where('wilayah_kabupaten')->result_array();
        echo json_encode($kab);
    }
    public function kecamatan($kab = null)
    {
        if (!empty($kab) && $kab != null) {
            $this->db->where('kabupaten_id', $kab);
        }
        $kec = $this->db->get_where('wilayah_kecamatan')->result_array();
        echo json_encode($kec);
    }
    public function Desa($kec = null)
    {
        if (!empty($kec) && $kec != null) {
            $this->db->where('kecamatan_id', $kec);
        }
        $des = $this->db->get_where('wilayah_desa')->result_array();
        echo json_encode($des);
    }
}

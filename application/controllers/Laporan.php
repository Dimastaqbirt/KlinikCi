<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    function __construct(){
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect("auth");
        }
        $this->load->model('m_dokter');
        $this->load->model('m_pasien');
        $this->load->model('m_kunjungan');
    }
	public function index()
	{
        redirect('dashboard');
	}

    function data_dokter(){

        $data['title'] = "LAPORAN DATA DOKTER";
        $data['dokter'] = $this->m_dokter->tampil_data()->result_array();

        $this->load->view('laporan/corp/v_lap_head',$data);
        $this->load->view('laporan/v_lap_dokter',$data);
        $this->load->view('laporan/corp/v_lap_foot',$data);
    }
    function data_pasien(){

        $data['title'] = "LAPORAN DATA PASIEN";
        
        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();

        $this->load->view('laporan/corp/v_lap_head',$data);
        $this->load->view('laporan/v_lap_pasien',$data);
        $this->load->view('laporan/corp/v_lap_foot',$data);
    }
    function data_kunjungan(){

        $data['title'] = "LAPORAN DATA KUNJUNGAN";
        $data['kunjungan'] = $this->m_kunjungan->tampil_data()->result_array();

        $this->load->view('laporan/corp/v_lap_head',$data);
        $this->load->view('laporan/v_lap_kunjungan',$data);
        $this->load->view('laporan/corp/v_lap_foot',$data);
    }

    public function cetakLaporanKunjungan(){
        $data['title'] = "LAPORAN DATA KUNJUNGAN";
        $data['kunjungan'] = $this->m_kunjungan->tampil_data()->result_array();

        if(empty($this->input->post("bulan"))){
            $tahun = $this->input->post("tahun");
            $data["cetak"] =  $this->db->query("SELECT * FROM `rekam_medis` WHERE YEAR(`tgl_rekam_medis`) = $tahun")->result_array();
            $data['waktu'] = $tahun;
        } else {
            $tahun = $this->input->post("tahun");
            $bulan = $this->input->post("bulan");
            $data["cetak"] =  $this->db->query("SELECT * FROM `rekam_medis` WHERE MONTH(`tgl_rekam_medis`) = $bulan AND YEAR(`tgl_rekam_medis`) = $tahun")->result_array();
            $data['waktu'] = tanggal_indo($tahun.'-'.$bulan.'-');

        }


        $this->load->view('laporan/v_lap_kunjungan',$data);


    }
}

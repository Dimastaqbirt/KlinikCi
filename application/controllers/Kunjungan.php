<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan extends CI_Controller {

    function __construct(){
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect("auth");
        }
        $this->load->model('m_kunjungan');
        $this->load->model('m_pasien');
        $this->load->model('m_dokter');
        $this->load->model('m_obat');
    }
	public function index()
	{
        $data['title'] = 'Manajemen Data kunjungan';

        $data['kunjungan'] = $this->m_kunjungan->tampil_data()->result_array();
        $data["bulan"] = [
            [
                "no" => 1,
                "nama" => "Januari",
            ],
            [
                "no" => 2,
                "nama" => "Februari",
            ],
            [
                "no" => 3,
                "nama" => "Maret",
            ],
            [
                "no" => 4,
                "nama" => "April",
            ],
            [
                "no" => 5,
                "nama" => "Mei",
            ],
            [
                "no" => 6,
                "nama" => "Juni",
            ],
            [
                "no" => 7,
                "nama" => "Juli",
            ],
            [
                "no" => 8,
                "nama" => "Agustus",
            ],
            [
                "no" => 9,
                "nama" => "September",
            ],
            [
                "no" => 10,
                "nama" => "Oktober",
            ],
            [
                "no" => 11,
                "nama" => "November",
            ],
            [
                "no" => 12,
                "nama" => "Desember",
            ],
        ];

        $data["tahun"] = [
            2021, 2022, 2023, 2024, 2025
        ];

		$this->load->view('v_header',$data);
		$this->load->view('kunjungan/v_data',$data);
		$this->load->view('v_footer');
	}

    public function tambah(){
        $data['title'] = 'Kunjungan Baru';
        $data['dokter'] = $this->m_dokter->tampil_data()->result_array();
        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();



        $this->load->view('v_header',$data);
		$this->load->view('kunjungan/v_data_tambah',$data);
		$this->load->view('v_footer');
    }

    public function insert(){
        $id = $this->input->post('id');
        $nama_pasien = $this->input->post('nama_pasien');
        $nama_dokter = $this->input->post('nama_dokter');
        $tgl_rekam_medis = $this->input->post('tgl_rekam_medis');

        $data = array (
            'id' => $id,
            'id_pasien' => $nama_pasien,
            'id_dokter' => $nama_dokter,
            'tgl_rekam_medis' => $tgl_rekam_medis
        );

        $this->m_kunjungan->insert_data($data);

        redirect('kunjungan');
    }
    
    public function edit($id){
        $data['title'] = 'Edit Data Kunjungan';
        $where = array ('id_rekam_medis' => $id);
        $data['u']= $this->m_kunjungan->edit_data($where)->row_array();
        $data['dokter'] = $this->m_dokter->tampil_data()->result_array();
        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();

        $this->load->view('v_header',$data);
        $this->load->view('kunjungan/v_data_edit',$data);
        $this->load->view('v_footer');
}

    public function update(){
        $id = $this->input->post('id_rekam_medis');
        $nama_pasien = $this->input->post('nama_pasien');
        $nama_dokter = $this->input->post('nama_dokter');
        $tgl_rekam_medis = $this->input->post('tgl_rekam_medis');

        $data = array (
            'id_pasien' => $nama_pasien,
            'id_dokter' => $nama_dokter,
            'tgl_rekam_medis' => $tgl_rekam_medis
        );



        $where = array('id_rekam_medis' => $id);

        $this->m_kunjungan->update_data($data,$where);

        redirect('kunjungan');
}

    public function hapus($id){
        $where = array ('id_rekam_medis' => $id);
        $this->m_kunjungan->hapus_data($where);

        redirect('kunjungan');
    }

    


    function rekam($id){
        $data['title'] = 'Rekam medis';

        $data['d']= $this->m_kunjungan->tampil_rm($id)->row_array();

        $q=$this->db->query("SELECT id_pasien FROM rekam_medis WHERE id_rekam_medis='$id'")->row_array();

        $id_pasien = $q['id_pasien'];
        $data['riwayat'] = $this->m_kunjungan->tampil_riwayat($id_pasien)->result_array();

        $data['obat']= $this->m_obat->tampil_data()->result_array();
        $data['resep']= $this->m_kunjungan->tampil_resep($id)->result_array();








        $this->load->view('v_header',$data);
        $this->load->view('kunjungan/v_rekam_medis',$data);
        $this->load->view('v_footer');
    }

    function insert_rm(){
        $id_rekam_medis = $this->input->post('id_rekam_medis');
        $keluhan = $this->input->post('keluhan');
        $diagnosa = $this->input->post('diagnosa');
        $penatalaksanaan = $this->input->post('penatalaksanaan');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'keluhan' => $keluhan,
            'hasil_diagnosa' => $diagnosa,
            'penatalaksanaan' => $penatalaksanaan,
            'keterangan' => $keterangan
        );

        $where = array('id_rekam_medis'=>$id_rekam_medis);

        $this->m_kunjungan->update_data($data,$where);

        redirect('kunjungan/rekam/'.$id_rekam_medis);
    }
    function insert_resep(){
        $id_rekam_medis = $this->input->post('id');
        $obat = $this->input->post('obat');

        $data = array(
            'id_rekam_medis' => $id_rekam_medis,
            'id_obat' => $obat
        );

        $this->m_kunjungan->insert_resep($data);

        redirect('kunjungan/rekam/'.$id_rekam_medis);


    }
    function hapus_resep($id,$id_rekam_medis){
        $where = array('id_resep'=>$id);
        $this->m_kunjungan->hapus_resep($where);
        redirect('kunjungan/rekam/'.$id_rekam_medis);

    }

    public function cari(){
        $keyword = $this->input->post('keyword');
        $data['title'] = 'Rekam medis';

        $data['kunjungan']=$this->m_kunjungan->get_keyword($keyword)->result_array();
        


        $this->load->view('v_header',$data);
		$this->load->view('kunjungan/v_data',$data);
		$this->load->view('v_footer');
    }


}

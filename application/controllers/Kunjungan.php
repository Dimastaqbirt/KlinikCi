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
    }
	public function index()
	{
        $data['title'] = 'Manajemen Data kunjungan';

        $data['kunjungan'] = $this->m_kunjungan->tampil_data()->result_array();

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
        $nama_pasien = $this->input->post('nama_pasien');
        $nama_dokter = $this->input->post('nama_dokter');
        $tgl_berobat = $this->input->post('tgl_berobat');

        $data = array (
            'id_pasien' => $nama_pasien,
            'id_dokter' => $nama_dokter,
            'tgl_berobat' => $tgl_berobat
        );

        $this->m_kunjungan->insert_data($data);

        redirect('kunjungan');
    }
    
    public function edit($id){
        $data['title'] = 'Edit Data Kunjungan';
        $where = array ('id_berobat' => $id);
        $data['u']= $this->m_kunjungan->edit_data($where)->row_array();
        $data['dokter'] = $this->m_dokter->tampil_data()->result_array();
        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();

        $this->load->view('v_header',$data);
        $this->load->view('kunjungan/v_data_edit',$data);
        $this->load->view('v_footer');
}

    public function update(){
        $id = $this->input->post('id_berobat');
        $nama_pasien = $this->input->post('nama_pasien');
        $nama_dokter = $this->input->post('nama_dokter');
        $tgl_berobat = $this->input->post('tgl_berobat');

        $data = array (
            'id_pasien' => $nama_pasien,
            'id_dokter' => $nama_dokter,
            'tgl_berobat' => $tgl_berobat
        );



        $where = array('id_berobat' => $id);

        $this->m_kunjungan->update_data($data,$where);

        redirect('kunjungan');
}

    public function hapus($id){
        $where = array ('id_berobat' => $id);
        $this->m_kunjungan->hapus_data($where);

        redirect('kunjungan');
    }




    

}

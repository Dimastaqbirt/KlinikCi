<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan extends CI_Controller {

    function __construct(){
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect("auth");
        }
        $this->load->model('m_kunjungan');
    }
	public function index()
	{
        $data['title'] = 'Manajemen Data Pasien';

        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();

		$this->load->view('v_header',$data);
		$this->load->view('pasien/v_data',$data);
		$this->load->view('v_footer');
	}

    public function tambah(){
        $data['title'] = 'Tambah Data Pasien';

        $this->load->view('v_header',$data);
		$this->load->view('pasien/v_data_tambah');
		$this->load->view('v_footer');
    }

    public function insert(){
        $nama = $this->input->post('nama_pasien');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $umur = $this->input->post('umur');

        $data = array (
            'nama_pasien' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'umur' => $umur
        );

        $this->m_pasien->insert_data($data);

        redirect('pasien');
    }
    
    public function edit($id){
        $data['title'] = 'Edit Data pasien';
        $where = array ('id_pasien' => $id);
        $data['u']= $this->m_pasien->edit_data($where)->row_array();

        $this->load->view('v_header',$data);
        $this->load->view('pasien/v_data_edit',$data);
        $this->load->view('v_footer');
}

    public function update(){
        $id = $this->input->post('id_pasien');
        $nama = $this->input->post('nama_pasien');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $umur = $this->input->post('umur');

        $data = array (
            'nama_pasien' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'umur' => $umur
        );


        $where = array('id_pasien' => $id);

        $this->m_pasien->update_data($data,$where);

        redirect('pasien');
}

    public function hapus($id){
        $where = array ('id_pasien' => $id);
        $this->m_pasien->hapus_data($where);

        redirect('pasien');
    }






}

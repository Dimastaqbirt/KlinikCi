<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

    function __construct(){
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect("auth");
        }
        $this->load->model('m_dokter');
    }
	public function index()
	{
        $data['title'] = 'Manajemen Data Dokter';

        $data['dokter'] = $this->m_dokter->tampil_data()->result_array();

		$this->load->view('v_header',$data);
		$this->load->view('dokter/v_data',$data);
		$this->load->view('v_footer');
	}

    public function tambah(){
        $data['title'] = 'Tambah Data Dokter';

        $this->load->view('v_header',$data);
		$this->load->view('dokter/v_data_tambah');
		$this->load->view('v_footer');
    }

    public function insert(){
        $nama = $this->input->post('nama_dokter');
        $spesialis = $this->input->post('spesialis');

            $config['max_size'] = 2048;
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['remove_spaces'] = TRUE;
            $config['overwrite'] = TRUE;
            $config['upload_path'] = FCPATH.'assets/images';
            
            
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('foto');
            $data_image=$this->upload->data('file_name');
            $location = 'assets/images/';
            $foto =$location.$data_image;

            $data = array(
                'nama_dokter' => $nama,
                'foto' => $foto,
                'spesialis' => $spesialis
                );
        $this->m_dokter->insert_data($data);

        redirect('dokter');
    }
    
    public function edit($id){
        $data['title'] = 'Edit Data Dokter';
        $where = array ('id_dokter' => $id);
        $data['u']= $this->m_dokter->edit_data($where)->row_array();
        $this->load->view('v_header',$data);
        $this->load->view('dokter/v_data_edit',$data);
        $this->load->view('v_footer');
}

    public function update(){
        $id = $this->input->post('id_dokter');
        $nama = $this->input->post('nama_dokter');
        $spesialis = $this->input->post('spesialis');


            $config['max_size'] = 2048;
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $config['remove_spaces'] = TRUE;
            $config['overwrite'] = TRUE;
            $config['upload_path'] = FCPATH.'assets/images';
            
            
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('foto');
            $data_image=$this->upload->data('file_name');
            $location = 'assets/images/';
            $foto =$location.$data_image;

            $data = array(
                'nama_dokter' => $nama,
                'foto' => $foto,
                'spesialis' => $spesialis
                );


        $where = array('id_dokter' => $id);

        $this->m_dokter->update_data($data,$where);

        redirect('dokter');
}

    public function hapus($id){
        $where = array ('id_dokter' => $id);
        $this->m_dokter->hapus_data($where);

        redirect('dokter');
    }

    public function cari(){
        $keyword = $this->input->post('keyword');
        $data['title'] = 'Manajemen Data Dokter';

        $data['dokter']=$this->m_dokter->get_keyword($keyword)->result_array();


        $this->load->view('v_header',$data);
		$this->load->view('dokter/v_data',$data);
		$this->load->view('v_footer');
    }




}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct(){
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect("auth");
        }
        $this->load->model('m_users');
    }
	public function index()
	{
        $data['title'] = 'Manajemen Data User';

        $data['users'] = $this->m_users->tampil_data()->result_array();

		$this->load->view('v_header',$data);
		$this->load->view('users/v_data',$data);
		$this->load->view('v_footer');
	}

    public function tambah(){
        $data['title'] = 'Tambah Data User';

        $this->load->view('v_header',$data);
		$this->load->view('users/v_tambah_data');
		$this->load->view('v_footer');
    }

    public function insert(){

    }
    
    public function edit($id){
        $data['title'] = 'Edit Data User';

        $this->load->view('v_header',$data);
        $this->load->view('users/v_edit_data',$data);
        $this->load->view('v_footer');
}

    public function update($id){
        $data['title'] = 'update Data User';

        $this->load->view('v_header',$data);
        $this->load->view('users/v_update_data',$data);
        $this->load->view('v_footer');
}







}

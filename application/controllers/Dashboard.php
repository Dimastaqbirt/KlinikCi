<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct(){
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect("auth");
        }
        $this->load->helper('url');
    }
	public function index()
	{
        $data['title'] = 'Dashboard';
        $data['pengguna'] = $this->db->get("users")->num_rows();
        $data['dokter'] = $this->db->get("dokter")->num_rows();
        $data['pasien'] = $this->db->get("pasien")->num_rows();
        $data['rekam_medis'] = $this->db->get("rekam_medis")->num_rows();

		$this->load->view('v_header',$data);
		$this->load->view('v_dashboard',$data);
		$this->load->view('v_footer');
	}

    public function logout(){
		$this->session->sess_destroy();
		redirect('auth');
	}
}

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
		$this->load->view('v_header',$data);
		$this->load->view('v_dashboard',$data);
		$this->load->view('v_footer');
	}

    public function logout(){
		$this->session->sess_destroy();
		redirect('auth');
	}
}

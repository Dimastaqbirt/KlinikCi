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
        $data['title'] = 'Kunjungan/Berobat';

        $data['kunjungan'] = $this->m_kunjungan->tampil_data()->result_array();

		$this->load->view('v_header',$data);
		$this->load->view('kunjungan/v_data',$data);
		$this->load->view('v_footer');
	}

    public function tambah(){
        $data['title'] = 'Pemeriksaan Baru';


        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();
        $data['dokter'] = $this->m_dokter->tampil_data()->result_array();

        $this->load->view('v_header',$data);
		$this->load->view('kunjungan/v_data_tambah',$data);
		$this->load->view('v_footer');
    }

    public function insert(){
        $tgl = $this->input->post('tgl_berobat');
        $pasien = $this->input->post('pasien');
        $dokter = $this->input->post('dokter');

        $data = array (
            'tgl_berobat' => $tgl,
            'id_pasien' => $pasien,
            'id_dokter' => $dokter
        );

        $this->m_kunjungan->insert_data($data);

        redirect('kunjungan');
    }
    
    public function edit($id){
        $data['title'] = 'Edit Data kunjungan';
        $where = array ('id_berobat' => $id);
        $data['u']= $this->m_kunjungan->edit_data($where)->row_array();
        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();
        $data['dokter'] = $this->m_dokter->tampil_data()->result_array();

        $this->load->view('v_header',$data);
        $this->load->view('kunjungan/v_data_edit',$data);
        $this->load->view('v_footer');
        
        $this->load->model('m_kunjungan');
        $this->load->model('m_pasien');
        $this->load->model('m_dokter');
}

    public function update(){
        $id = $this->input->post('id');
        $tgl = $this->input->post('tgl_berobat');
        $pasien = $this->input->post('pasien');
        $dokter = $this->input->post('dokter');

        
        $data = array (
            'tgl_berobat' => $tgl,
            'id_pasien' => $pasien,
            'id_dokter' => $dokter
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

// fungsi rekam medis

    public function rekam($id){
        $data['title'] = "Rekam Medis";
        //tampil detail rekam medis
        $data['data'] = $this->m_kunjungan->tampil_rm($id)->row_array();

        //tampil riwayat kunjungan
        $q = $this->db->query("SELECT id_pasien FROM berobat WHERE id_berobat='$id'")->row_array();
        $id_pasien = $q['id_pasien'];
        $data['riwayat'] = $this->m_kunjungan->tampil_riwayat($id_pasien)->result_array();
        
        //tampil data obat combo box
        $data['obat'] = $this->m_obat->tampil_data()->result_array();

        // tampil resep obat
        $data['resep'] = $this->m_kunjungan->tampil_resep($id)->result_array();



        
        $this->load->view('v_header',$data);
        $this->load->view('kunjungan/v_rekam_medis',$data);
        $this->load->view('v_footer');

    }



}

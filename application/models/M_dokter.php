<?php  

class M_dokter extends CI_Model{

    function tampil_data(){
        return $this->db->get('dokter');
    }

    function insert_data($data){
        return $this->db->insert('dokter', $data);
    }

    function edit_data($where){
        return $this->db->get_where('dokter', $where);
    }

    function update_data($data,$where){
        $this->db->where($where);
        $this->db->update('dokter',$data);

    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('dokter');
    }
    function get_keyword($keyword){

        $query=$this->db->query("SELECT * FROM dokter WHERE
        nama_dokter LIKE '%$keyword%' OR
        spesialis LIKE '%$keyword%'");

        return $query;
    }
}
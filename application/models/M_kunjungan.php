<?php  

class M_kunjungan extends CI_Model{

    function tampil_data(){
        // return $this->db->get('rekam_medis');
        $query=$this->db->query('SELECT rekam_medis.*, 
        pasien.nama_pasien, 
        pasien.umur, 
        pasien.jenis_kelamin, 
        dokter.nama_dokter
    FROM rekam_medis
    INNER JOIN pasien ON rekam_medis.id_pasien=pasien.id_pasien
    INNER JOIN dokter ON rekam_medis.id_dokter=dokter.id_dokter
    ORDER BY tgl_rekam_medis DESC');

    return $query;
    }

    function insert_data($data){
        return $this->db->insert('rekam_medis', $data);
    }

    function edit_data($where){
        return $this->db->get_where('rekam_medis', $where);
    }

    function update_data($data,$where){
        $this->db->where($where);
        $this->db->update('rekam_medis',$data);

    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('rekam_medis');
    }
        // fungsi rekam medis
    function tampil_rm($id){
        $query=$this->db->query("SELECT rekam_medis.*, 
        pasien.nama_pasien, 
        pasien.umur, 
        pasien.jenis_kelamin, 
        dokter.nama_dokter
    FROM rekam_medis
    INNER JOIN pasien ON rekam_medis.id_pasien=pasien.id_pasien
    INNER JOIN dokter ON rekam_medis.id_dokter=dokter.id_dokter
    WHERE rekam_medis.id_rekam_medis='$id'");

    return $query;
    }

    function tampil_riwayat($pasien){
        $query=$this->db->query("SELECT rekam_medis.*, 
        pasien.nama_pasien, 
        pasien.umur, 
        pasien.jenis_kelamin, 
        dokter.nama_dokter
    FROM rekam_medis
    INNER JOIN pasien ON rekam_medis.id_pasien=pasien.id_pasien
    INNER JOIN dokter ON rekam_medis.id_dokter=dokter.id_dokter
    WHERE rekam_medis.id_pasien='$pasien'");

return $query;

    }

    function tampil_resep($id){
        $query = $this->db->query("SELECT resep_obat.*,
        obat.nama_obat
    FROM resep_obat 
    INNER JOIN obat ON resep_obat.id_obat=obat.id_obat
    WHERE resep_obat.id_rekam_medis='$id'");
return $query;

    }

    function insert_resep($data){
        return $this->db->insert('resep_obat',$data);
    }
    
    function hapus_resep($where){
        $this->db->where($where);
        $this->db->delete('resep_obat');
    }

    function get_keyword($keyword){

        $query=$this->db->query("SELECT rekam_medis.*, 
        pasien.nama_pasien, 
        pasien.umur, 
        pasien.jenis_kelamin, 
        dokter.nama_dokter
    FROM rekam_medis
    INNER JOIN pasien ON rekam_medis.id_pasien=pasien.id_pasien
    INNER JOIN dokter ON rekam_medis.id_dokter=dokter.id_dokter
    WHERE pasien.nama_pasien LIKE '%$keyword%' OR
    rekam_medis.tgl_rekam_medis LIKE '%$keyword%' OR
    pasien.umur LIKE '%$keyword%' OR
    dokter.nama_dokter LIKE '%$keyword%'
    ");

        return $query;
    }
}
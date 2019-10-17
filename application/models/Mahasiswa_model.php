<?php
class Mahasiswa_model extends CI_Model{

	function get_all_mahasiswa(){
		$hasil=$this->db->get('mahasiswa');
		return $hasil;
	}
	
	function simpan_mahasiswa($nim,$nama,$prodi,$klasifikasi,$deskripsi,$indukan,$riwayat,$image_name){
		$data = array(
			'nim' 		=> $nim,
			'nama' 		=> $nama,
			'prodi' 	=> $prodi, 
			'klasifikasi' 		=> $klasifikasi,
			'deskripsi' 		=> $deskripsi,
			'indukan' 	=> $indukan,
			'riwayat' 	=> $riwayat,
			'qr_code' 	=> $image_name
		);
		$this->db->insert('mahasiswa',$data);
	}
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
 
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	
}
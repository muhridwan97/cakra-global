<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class m_gallery_layanan extends CI_Model{
	
	function get_gellery($where=""){
		$query = $this->db->query("SELECT * FROM gallery_layanan ".$where);
		return $query->result_array();
	}
	
	function readGellery($layanan_id){
		$this->db->order_by("id","desc");
		$this->db->where("layanan_id",$layanan_id);
		$query=$this->db->get("gallery_layanan");
		return $query->result_array();
	}
	function set_data($data,$table){
		$query = $this->db->insert($table,$data);
		return $query;
	}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("gallery_layanan");
	}
	
	public function update_data($data, $id, $table)
	{
	   $this->db->where('id', $id);
	   $this->db->update($table,$data); 
	}
}
?>
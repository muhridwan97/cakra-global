<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class m_layanan extends CI_Model{
	
	function get_layanan_kami($where=""){
		$query = $this->db->query("SELECT * FROM layanan_kami ".$where);
		return $query->result_array();
	}
	
	function readLayananKami($slug){
		$this->db->order_by("id","desc");
		$this->db->where("slug",$slug);
		$query=$this->db->get("layanan_kami");
		return $query->result_array();
	}
	function set_data($data,$table){
		$query = $this->db->insert($table,$data);
		return $query;
	}
	
	public function update_data($data, $id, $table)
	{
	   $this->db->where('id', $id);
	   $this->db->update($table,$data); 
	}
}
?>
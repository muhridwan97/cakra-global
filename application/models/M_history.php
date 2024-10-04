<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class m_history extends CI_Model{
	
	function get_history($where=""){
		$query = $this->db->query("SELECT * FROM history ".$where);
		return $query->result_array();
	}
	
	function get_id($id){
		$this->db->where('id', $id);  // where dulu sebelum get
		$query = $this->db->get("history");  // kemudian get
		return $query->row_array();  // mengambil hasil sebagai array
	}	
	
	function read(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("history");
		return $query->result_array();
	}
	function set_data($data){
		$query = $this->db->insert("history",$data);
		return $query;
	}
	
	public function update_data($data, $id)
	{
	   $this->db->where('id', $id);
	   $this->db->update("history",$data); 
	}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("history");
	}
}
?>
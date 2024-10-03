<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class m_team extends CI_Model{
	
	function get_team($where=""){
		$query = $this->db->query("SELECT * FROM team ".$where);
		return $query->result_array();
	}
	
	function get_id($id){
		$this->db->where('id', $id);  // where dulu sebelum get
		$query = $this->db->get("team");  // kemudian get
		return $query->row_array();  // mengambil hasil sebagai array
	}	
	
	function read(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("team");
		return $query->result_array();
	}
	function set_data($data){
		$query = $this->db->insert("team",$data);
		return $query;
	}
	
	public function update_data($data, $id)
	{
	   $this->db->where('id', $id);
	   $this->db->update("team",$data); 
	}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("team");
	}
}
?>
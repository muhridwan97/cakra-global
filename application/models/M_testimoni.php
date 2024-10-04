<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class m_testimoni extends CI_Model{
	
	function get_testimoni($where=""){
		$query = $this->db->query("SELECT * FROM testimoni ".$where);
		return $query->result_array();
	}
	
	function get_id($id){
		$this->db->where('id', $id);  // where dulu sebelum get
		$query = $this->db->get("testimoni");  // kemudian get
		return $query->row_array();  // mengambil hasil sebagai array
	}	
	
	function read(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("testimoni");
		return $query->result_array();
	}
	function set_data($data){
		$query = $this->db->insert("testimoni",$data);
		return $query;
	}
	
	public function update_data($data, $id)
	{
	   $this->db->where('id', $id);
	   $this->db->update("testimoni",$data); 
	}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("testimoni");
	}
}
?>
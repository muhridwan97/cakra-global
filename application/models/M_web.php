<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_web extends CI_Model {

	

	/*
	Web Wisata Model
	*/

	public function get_all(){
			return $this->db->get('paketwisata')->result();
		}

		public function get_product_keyword($keyword){
			$this->db->select('*');
			$this->db->from('paketwisata');
			$this->db->like('namaWisata',$keyword);
			// $this->db->or_like('harga',$keyword);
			return $this->db->get()->result();
		}
		public function get_product_keyword1($keyword){
			$this->db->select('*');
			$this->db->from('guide');
			$this->db->like('namaGuide',$keyword);
			// $this->db->or_like('harga',$keyword);
			return $this->db->get()->result();
		}

	function get_wisata($where=""){
        $query = $this->db->query("SELECT * FROM paketwisata ".$where);
        return $query->result_array();
    }
    function get_guide($where=""){
        $query = $this->db->query("SELECT * FROM guide ".$where);
        return $query->result_array();
    }
	function set_wisata($data,$table){
		$query = $this->db->insert($table,$data);
		return $query;
	}
	function set_guide($data,$table){
		$query = $this->db->insert($table,$data);
		return $query;
	}
	public function update_wisata($data, $id, $table)
	{
	   $this->db->where('idWisata', $id);
	   $this->db->update($table,$data); 
	}
	public function update_guide($data, $id, $table)
	{
	   $this->db->where('idGuide', $id);
	   $this->db->update($table,$data); 
	}
	
	//Admin
	function get_produk(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("product");
		return $query->result_array();
	}
	
	function get_instagram(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("instagram");
		return $query->result_array();
	}
	function get_banner(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("banner");
		return $query->result_array();
	}
	function get_tentang_kami(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("tentang_kami");
		return $query->result_array();
	}
	function get_layanan_kami(){
		$this->db->order_by("id","desc");
		$this->db->where('is_warehouse', 0);
		$query=$this->db->get("layanan_kami");
		return $query->result_array();
	}
	function get_layanan_by_slug($id){
		$this->db->where('slug', $id);
		$query=$this->db->get("layanan_kami");
		return $query->row_array();
	}
	function get_gallery_layanan($id){
		$this->db->where('layanan_id', $id);
		$query=$this->db->get("gallery_layanan");
		return $query->result_array();
	}
	function get_layanan_warehouse(){
		$this->db->order_by("id","desc");
		$this->db->where('is_warehouse', 1);
		$query=$this->db->get("layanan_kami");
		return $query->result_array();
	}
	function get_gallery($id){
		$this->db->where('id', $id);
		$query=$this->db->get("gallery_layanan");
		return $query->row_array();
	}
	function get_artikel($id){
		// Update total_akses dengan menambah 1
		$this->db->set('total_akses', 'total_akses+1', FALSE);
		$this->db->where('id', $id);
		$this->db->update('artikel');

		//get
		$this->db->where('id', $id);
		$query=$this->db->get("artikel");
		return $query->row_array();
	}
	function get_artikel_all(){
		$this->db->order_by("created_at","desc");
		$query=$this->db->get("artikel");
		return $query->result_array();
	}
	function get_artikel_limit(){
		$this->db->order_by("created_at","desc");
		$this->db->limit(3);
		$query=$this->db->get("artikel");
		return $query->result_array();
	}
	function get_artikel_popular(){
		$this->db->order_by("total_akses","desc");
		$this->db->limit(3);
		$query=$this->db->get("artikel");
		return $query->result_array();
	}
	function hapusWisata($table,$where){
		$res=$this->db->delete($table,$where);
		return $res;
	}

	function delete($id){
		$this->db->where("idWisata",$id);
		$this->db->delete("paketwisata");
	}
	


}
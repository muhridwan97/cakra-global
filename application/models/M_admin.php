<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_admin extends CI_Model {

	/*
	Web Wisata Model
	*/
	public function get_all(){
			return $this->db->get('paketwisata')->result();
		}
		public function get_product_keyword($keyword){
			$this->db->select('*');
			$this->db->from('product');
			$this->db->like('nama',$keyword);
			$this->db->or_like('harga',$keyword);
			return $this->db->get()->result();
		}

	function get_galeri($id){
        $query = $this->db->query("SELECT * FROM galeri where idWisata='$id'");
        return $query->result_array();
    }
	function get_wisata2($id){
        $query = $this->db->query("SELECT * FROM guide where idWisata='$id'");
        return $query->result_array();
    }
    function get_wisataa($id){
        $query = $this->db->query("SELECT * FROM paketwisata where idWisata='$id'");
        return $query->result_array();
    }
    function get_bannerAdmin($where=""){
        $query = $this->db->query("SELECT * FROM banner ".$where);
        return $query->result_array();
    }
	
    function get_tentang_kami($where=""){
        $query = $this->db->query("SELECT * FROM tentang_kami ".$where);
        return $query->result_array();
    }
	function get_wisata($where=""){
        $query = $this->db->query("SELECT * FROM paketwisata JOIN galeri ON galeri.idWisata=paketwisata.idWisata ".$where);
        return $query->result_array();
    }
    function get_instagram($where=""){
        $query = $this->db->query("SELECT * FROM instagram ".$where);
        return $query->result_array();
	}
	function get_produk($where=""){
        $query = $this->db->query("SELECT * FROM product ".$where);
        return $query->result_array();
    }
	function set_banner($data,$table){
		$query = $this->db->insert($table,$data);
		return $query;
	}
	function set_data($data,$table){
		$query = $this->db->insert($table,$data);
		return $query;
	}
	function set_produk($data,$table){
		$query = $this->db->insert($table,$data);
		return $query;
	}
	function set_instagram($data,$table){
		$query = $this->db->insert($table,$data);
		return $query;
	}
	public function update_banner($data, $id, $table)
	{
	   $this->db->where('id', $id);
	   $this->db->update($table,$data); 
	}
	
	public function update_data($data, $id, $table)
	{
	   $this->db->where('id', $id);
	   $this->db->update($table,$data); 
	}
	public function update_instagram($data, $id, $table)
	{
	   $this->db->where('id', $id);
	   $this->db->update($table,$data); 
	}
	public function update_produk($data, $id, $table)
	{
	   $this->db->where('id', $id);
	   $this->db->update($table,$data); 
	}
	
	//Admin
	function readBanner(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("banner");
		return $query->result_array();
	}
	
	function readTentangKami(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("tentang_kami");
		return $query->result_array();
	}

	function readInstagram(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("instagram");
		return $query->result_array();
	}
	function readProduk(){
		$this->db->order_by("id","desc");
		$query=$this->db->get("product");
		return $query->result_array();
	}
	function hapusWisata($table,$where){
		$res=$this->db->delete($table,$where);
		return $res;
	}

	function delete($id){
		$this->db->where("id",$id);
		$this->db->delete("banner");
	}
	function deleteInstagram($id){
		$this->db->where("id",$id);
		$this->db->delete("instagram");
	}
	function deleteProduk($id){
		$this->db->where("id",$id);
		$this->db->delete("product");
	}
	




	/*
	Web Wisata Model
	*/

	function set_ijazahValid($id){
		$this->db->set('status', 'valid');
		$this->db->where('id_alumni', $id);
		$this->db->update('alumni');
	}
	function jumlahMember(){
		return $this->db->count_all('alumni');
	}
	function jumlahMemberPending(){
		$this->db->where('status', 'pending');
		return $this->db->count_all_results('alumni');
	}
	function jumlahMemberMembayar(){
		$this->db->where('statusPembayaran', 'terbayar');
		return $this->db->count_all_results('pembayaran');
	}
	function get_memberMembayar(){//SELECT * FROM alumni JOIN pengiriman ON id_alumni = id_pemesan JOIN pembayaran ON id_pengiriman =  where statusPembayaran='pending'
		$this->db->select('*');
		$this->db->from('alumni');
		$this->db->join('pengiriman', 'id_alumni = id_pemesan');
		$this->db->join('pembayaran', 'id_pengiriman = id_pengirim');
		$this->db->where('statusPembayaran', 'terbayar');
		return $this->db->get();
	}

}
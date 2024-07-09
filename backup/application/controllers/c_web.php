<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_web extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('m_web');
		$this->load->model('m_admin');
		$this->load->helper(array('form', 'url'));
		$this->load->database();
	}
	public function index()
	{
		$data["banner"]=$this->m_web->get_banner();
		$data["instagram"]=$this->m_web->get_instagram();
		$this->load->view('tampilanAwal',$data);
	}
	public function tampilanHome()
	{
		$data["banner"]=$this->m_web->get_banner();
		$data["instagram"]=$this->m_web->get_instagram();
		$this->load->view('tampilanAwal',$data);
	}
	public function tampilanDetail($id)
	{	
		$wst ["wisata"]= $this->m_admin->get_wisata2($id);
		$this->load->view('tampilanDetail',$wst);
	}
	public function tampilanSearch()
	{
		$data['wisata']=$this->m_web->get_all();
		
		$this->load->view('tampilanSearch',$data);
	}
	public function tampilanGuide()
	{
		$this->load->view('tampilanGuide');
	}

	public function tampilanDetailWisata($id){

		$data["galeri"] = $this->m_admin->get_galeri($id);
		$data["wisata"] = $this->m_admin->get_wisataa($id);
		// $wst = $this->m_admin->get_wisata("where paketwisata.idWisata='$id'");
		// $data = array(
		// 	"idWisata"=> $wst[0]['idWisata'], 
		// 	"namaWisata" => $wst[0]['namaWisata'], 
		// 	"foto" => $wst[0]['foto'], 
		// 	"tanggal" => $wst[0]['tanggal'], 
		// 	"preview" => $wst[0]['preview'], 
		// 	"latitude" => $wst[0]['latitude'],
		// 	"longitude" => $wst[0]['longitude'],
		// 	"idGaleri" => $wst[0]['idGaleri'],
		// 	"foto1" => $wst[0]['foto1'],
		// 	"foto2" => $wst[0]['foto2'],
		// 	"foto3" => $wst[0]['foto3'],
		// 	"foto4" => $wst[0]['foto4'],
		// 	// "idGuide"=> $wst[0]['idGuide'], 
		// 	// "namaGuide" => $wst[0]['namaGuide'], 
		// 	// "fotoGuide" => $wst[0]['fotoGuide'], 
		// 	// "emailGuide" => $wst[0]['emailGuide'], 
		// 	// "notelpGuide" => $wst[0]['notelpGuide'], 
		// 	// "umurGuide" => $wst[0]['umurGuide'],
		// 	// "alamatGuide" => $wst[0]['alamatGuide'],
		// );
		$data["guide"]=$this->m_admin->get_wisata2($id);
		$this->load->view('tampilanDetail',$data);
		
	}
	public function tampilanDetailGuide($id){

		$wst = $this->m_admin->get_guide("where idGuide='$id'");
		$data = array(
			"idGuide"=> $wst[0]['idGuide'], 
			"namaGuide" => $wst[0]['namaGuide'], 
			"fotoGuide" => $wst[0]['fotoGuide'], 
			"emailGuide" => $wst[0]['emailGuide'], 
			"notelpGuide" => $wst[0]['notelpGuide'], 
			"umurGuide" => $wst[0]['umurGuide'],
			"alamatGuide" => $wst[0]['alamatGuide'],
		);
		$this->load->view('tampilanDetailGuide',$data);
		
	}
	public function search(){
			$keyword = $this->input->post('keyword');
			$data['wisata']=$this->m_web->get_product_keyword($keyword);
			$data['guide']=$this->m_web->get_product_keyword1($keyword);
			$this->load->view('tampilanSearch',$data);
		}
	public function tampilanAbout(){
		$this->load->view('tampilanAboutUs');
	}
	public function tampilanProduk(){
		$data['produk']=$this->m_web->get_produk();
		$this->load->view('tampilanProduk',$data);
	}
	public function tampilanHow(){
		$this->load->view('tampilanHow');
	}
	public function tampilanLokasi(){
		$this->load->view('tampilanLokasi');
	}
	public function tampilanKontak(){
		$this->load->view('tampilanKontak');
	}
}
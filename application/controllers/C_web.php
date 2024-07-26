<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_web extends CI_Controller {


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
		$data["tentang_kami"]=$this->m_web->get_tentang_kami();
		$data["layanan_kami"]=$this->m_web->get_layanan_kami();
		$data["artikel"]=$this->m_web->get_artikel_limit();
		$data["artikel_popular"]=$this->m_web->get_artikel_popular();
		$this->load->view('tampilanAwal',$data);
	}
	public function tampilanHome()
	{
		$data["banner"]=$this->m_web->get_banner();
		$data["tentang_kami"]=$this->m_web->get_tentang_kami();
		$this->load->view('tampilanAwal',$data);
	}
	public function layananKami($id)
	{
		$layanan = $this->m_web->get_layanan_by_slug($id);
		$data["layanan_kami"]=$layanan;
		$data["galleries"]=$this->m_web->get_gallery_layanan($layanan["id"]);
		$this->load->view('layananKami',$data);
	}
	public function warehouse()
	{
		$data["layanan_kami"]=$this->m_web->get_layanan_warehouse();
		$this->load->view('warehouse',$data);
	}
	public function gallery_detail($id)
	{
		$data["gallery"]=$this->m_web->get_gallery($id);
		$this->load->view('galleryDetail',$data);
	}
	public function artikel()
	{
		$data["artikel"]=$this->m_web->get_artikel_all();
		$data["artikel_popular"]=$this->m_web->get_artikel_popular();
		$data["artikel_last"]=$this->m_web->get_artikel_limit();
		$this->load->view('artikel',$data);
	}
	public function artikelDetail($id)
	{
		$data["artikel"]=$this->m_web->get_artikel($id);
		$data["artikel_popular"]=$this->m_web->get_artikel_popular();
		$data["artikel_last"]=$this->m_web->get_artikel_limit();
		$this->load->view('artikelDetail',$data);
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
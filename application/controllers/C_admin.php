<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->helper(array('form', 'url'));
		$this->load->database();
	}

	public function index()
	{
		if($this->session->userdata('username')!=null){
			$this->tampilanAdmin();
		}
		else{
			
		$this->load->view('tampilanLoginAdmin');
		}
		
	}
	
	public function tampilanAdmin()
	{	

		$data["banner"]=$this->m_admin->readBanner();
		$this->load->view("tampilanAdmin",$data);
	}
	
	public function adminInstagram()
	{
		$data["instagram"]=$this->m_admin->readInstagram();
		$this->load->view("adminInstagram",$data);

	}
	public function adminProduk()
	{
		$data["produk"]=$this->m_admin->readProduk();
		$this->load->view("adminProduk",$data);

	}
	
	public function tampilanTambahBanner($error=''){
		$this->load->view('tampilanTambahBanner', array('error' => ' ' ));
	}
	public function tampilanTambahIg($error=''){
		$data["instagram"]=$this->m_admin->readInstagram();
		$data["error"]=$error;
		$this->load->view('tampilanTambahInstagram', $data);
	}
	public function tampilanTambahProduk($error=''){
		$data["produk"]=$this->m_admin->readProduk();
		$data["error"]=$error;
		$this->load->view('tampilanTambahProduk', $data);
	}
	public function tampilanInfoBanner($id){

		$wst = $this->m_admin->get_bannerAdmin("where id='$id'");
		$data = array(
			"id"=> $wst[0]['id'], 
			"namaBanner" => $wst[0]['namaBanner'], 
			"fotoBanner" => $wst[0]['fotoBanner']
		);
		$this->load->view('tampilanInfoBanner',$data);
		
	}
		public function tampilanEditBanner($id){

		$wst = $this->m_admin->get_bannerAdmin("where id='$id'");
		$data = array(
			"id"=> $wst[0]['id'], 
			"namaBanner" => $wst[0]['namaBanner'], 
			"fotoBanner" => $wst[0]['fotoBanner']
		);
		$this->load->view('tampilanEditBanner',$data);
		
	}
	public function tampilanEditInstagram($id){

		$wst = $this->m_admin->get_instagram("where id='$id'");
		$data = array(
			"id"=> $wst[0]['id'], 
			"namaIg" => $wst[0]['namaIg'], 
			"fotoIg" => $wst[0]['fotoIg'], 
			"linkIg" => $wst[0]['linkIg']
		);
		$this->load->view('tampilanEditInstagram',$data);
		
	}
	public function tampilanInfoInstagram($id){

		$wst = $this->m_admin->get_instagram("where id='$id'");
		$data = array(
			"id"=> $wst[0]['id'], 
			"namaIg" => $wst[0]['namaIg'], 
			"fotoIg" => $wst[0]['fotoIg'], 
			"linkIg" => $wst[0]['linkIg']
		);
		$this->load->view('tampilanInfoInstagram',$data);
		
	}
	public function tampilanEditProduk($id){

		$wst = $this->m_admin->get_produk("where id='$id'");
		$data = array(
			"id"=> $wst[0]['id'], 
			"keterangan" => $wst[0]['keterangan'], 
			"fotoProduk" => $wst[0]['fotoProduk']
		);
		$this->load->view('tampilanEditProduk',$data);
		
	}
	public function tampilanInfoProduk($id){

		$wst = $this->m_admin->get_produk("where id='$id'");
		$data = array(
			"id"=> $wst[0]['id'], 
			"keterangan" => $wst[0]['keterangan'], 
			"fotoProduk" => $wst[0]['fotoProduk']
		);
		$this->load->view('tampilanInfoProduk',$data);
		
	}

	

	public function aksi_upload(){
		$config['upload_path']          = './assets/images/foto/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 5000;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->tampilanTambahBanner($error);
		}else{
			$nama =  $this->input->post('nama');
			$upload_data = $this->upload->data();
			$foto =  $upload_data['file_name'];
			
			$this->load->model('m_admin');
		
		$data = array(
			'namaBanner' => $nama,
			'fotoBanner' => $foto,
			);

			$this->m_admin->set_banner($data,'banner');
			$data = array('upload_data' => $this->upload->data());
			$this->tampilanAdmin();
		}
	}
	public function aksi_uploadIg(){
		$config['upload_path']          = './assets/images/foto/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 5000;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->tampilanTambahIg($error);
		}else{
			$nama =  $this->input->post('nama');
			$link =  $this->input->post('link');
			$upload_data = $this->upload->data();
			$foto =  $upload_data['file_name'];
			
			$this->load->model('m_admin');
		
		$data = array(
			'namaIg' => $nama,
			'fotoIg' => $foto,
			'linkIg' => $link
			);

			$this->m_admin->set_instagram($data,'instagram');
			$data = array('upload_data' => $this->upload->data());
			$this->adminInstagram();
		}
	}
	public function aksi_uploadProduk(){
		$config['upload_path']          = './assets/images/produk/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 5000;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_upload', $error);
		}else{
			$keterangan =  $this->input->post('keterangan');
			$upload_data = $this->upload->data();
			$foto =  $upload_data['file_name'];
			
			$this->load->model('m_admin');
		
		$data = array(
			'keterangan' => $keterangan,
			'fotoProduk' => $foto
			);

			$this->m_admin->set_produk($data,'product');
			$data = array('upload_data' => $this->upload->data());
			$this->adminProduk();
		}
	}
	public function editBanner($id){
		$config['upload_path']          = './assets/images/foto/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 10000;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->tampilanTambahBanner($error);
		}else{
			
			$nama =  $this->input->post('nama');
			$upload_data = $this->upload->data();
			$foto =  $upload_data['file_name'];
			
			$this->load->model('m_admin');
		
		$data = array(
			'namaBanner' => $nama,
			'fotoBanner' => $foto
			);

			$this->m_admin->update_banner($data,$id,'banner');
			$data = array('upload_data' => $this->upload->data());
			$this->tampilanAdmin();
		}

	}
	public function editInstagram($id){
		$config['upload_path']          = './assets/images/foto/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 10000;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_upload', $error);
		}else{
			
			$nama =  $this->input->post('nama');
			$upload_data = $this->upload->data();
			$foto =  $upload_data['file_name'];
			$link =  $this->input->post('link');
			
			$this->load->model('m_admin');
		
		$data = array(
			'namaIg' => $nama,
			'fotoIg' => $foto,
			'linkIg' => $link
			);

			$this->m_admin->update_instagram($data,$id,'instagram');
			$data = array('upload_data' => $this->upload->data());
			$this->adminInstagram();
		}

	}
	public function editProduk($id){
		$config['upload_path']          = './assets/images/produk/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 10000;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_upload', $error);
		}else{
			
			$keterangan =  $this->input->post('nama');
			$upload_data = $this->upload->data();
			$foto =  $upload_data['file_name'];
			
			$this->load->model('m_admin');
		
		$data = array(
			'keterangan' => $keterangan,
			'fotoProduk' => $foto
			);

			$this->m_admin->update_produk($data,$id,'product');
			$data = array('upload_data' => $this->upload->data());
			$this->adminProduk();
		}

	}

	public function hapus(){
		$id= $this->input->post("id");
		$this->m_admin->delete($id);
		echo "{}";
	}
	public function hapusInstagram(){
		$id= $this->input->post("id");
		$this->m_admin->deleteInstagram($id);
		echo "{}";
	}
	public function hapusProduk(){
		$id= $this->input->post("id");
		$this->m_admin->deleteProduk($id);
		echo "{}";
	}

	public function hapusWisata($id)
	{	
		$where = array('idWisata' => $id );
		$res=$this->m_admin->hapusWisata('paketwisata',$where);
		if ($res>=1) {
			$this->tampilanAdmin();
		}

	}


}
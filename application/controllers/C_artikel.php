<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_artikel extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('m_artikel');
		$this->load->model('m_gallery_layanan');
		$this->load->helper(array('form', 'url'));
		$this->load->database();
	}
    
	public function index()
	{
		$data["datas"]=$this->m_artikel->read();
		$data["sidebar"]='artikel';
		$data["title"]="Data Artikel";
		$data["menu"]='artikel';
		$this->load->view("artikel/index",$data);

	}
	public function tambah($error=''){
		$data["sidebar"]='artikel';
		$data["menu"]='artikel';
		$data["title"]="Tambah artikel";
		$data["error"]=$error;
		$this->load->view('artikel/tambah', $data);
	}
	public function edit($id){

		$wst = $this->m_artikel->get_artikel("where id='$id'");
		$data = array(
			"id"=> $wst[0]['id'], 
			"judul" => $wst[0]['judul'], 
			"foto" => $wst[0]['foto'], 
			"isi" => $wst[0]['isi'],
		);
		$data["sidebar"]='artikel';
		$data["menu"]='artikel';
		$data["title"]="Edit Artikel";
		$this->load->view('artikel/edit',$data);
		
	}
	public function save(){
		$config['upload_path']          = './assets/images/foto/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 5242880; // 5mb dalam byte
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = $this->upload->display_errors();
			$this->tambahLayananKami($error);
		}else{
			$judul =  $this->input->post('judul');
			$isi =  $this->input->post('isi');
			$upload_data = $this->upload->data();
			$foto =  $upload_data['file_name'];
			
			date_default_timezone_set('Asia/Jakarta');
			$data = array(
				'judul' => $judul,
				'isi' => $isi,
				'foto' => $foto,
				'created_at' => date("Y-m-d H:i:s"),
				'created_name' => 'Admin',
				'total_akses' => 0,
				);

			$this->m_artikel->set_data($data,'artikel');
			$data = array('upload_data' => $this->upload->data());
			redirect('c_artikel');
		}
	}
	
	public function update($id){
		$config['upload_path']          = './assets/images/foto/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 5242880; // 5mb dalam byte
 
		$this->load->library('upload', $config);
 
		if (!empty($_FILES['berkas']['name'])) {
			if ( ! $this->upload->do_upload('berkas')){
				$error = $this->upload->display_errors();
				$this->edit($error);
			}else{
				$judul =  $this->input->post('judul');
				$isi =  $this->input->post('isi');
				$upload_data = $this->upload->data();
				$foto =  $upload_data['file_name'];
			
				$data = array(
					'judul' => $judul,
					'foto' => $foto,
					'isi' => $isi,
					);

				$this->m_artikel->update_data($data,$id,'artikel');
				$data = array('upload_data' => $this->upload->data());
				redirect('c_layanan/layananKami/'.$slug);
			}
		}else{//jika tidak ada file
			
			$judul =  $this->input->post('judul');
			$isi =  $this->input->post('isi');
			$foto =  $this->input->post('foto');
		
		$data = array(
			'judul' => $judul,
			'foto' => $foto,
			'isi' => $isi,
			);

			$this->m_artikel->update_data($data,$id,'artikel');
			$data = array('upload_data' => $this->upload->data());
			redirect('c_artikel');
		}

	}

	public function hapus(){
		$id= $this->input->post("id");
		$this->m_artikel->delete($id);
		echo "{}";
	}
		
}
?>
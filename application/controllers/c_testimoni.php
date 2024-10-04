<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_testimoni extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('m_testimoni');
		$this->load->helper(array('form', 'url'));
		$this->load->database();
	}
    
	public function index()
	{
		$data["datas"]=$this->m_testimoni->read();
		$data["sidebar"]='testimoni';
		$data["title"]="Data Testimoni";
		$data["menu"]='testimoni';
		$this->load->view("testimoni/index",$data);

	}
	public function tambah($error=''){
		$data["sidebar"]='testimoni';
		$data["menu"]='testimoni';
		$data["title"]="Tambah testimoni";
		$data["error"]=$error;
		$this->load->view('testimoni/tambah', $data);
	}
	public function edit($id){

		$wst = $this->m_testimoni->get_testimoni("where id='$id'");
		$data = array(
			"id"=> $wst[0]['id'], 
			"nama" => $wst[0]['nama'], 
			"jabatan" => $wst[0]['jabatan'], 
			"foto" => $wst[0]['foto'], 
			"testimoni" => $wst[0]['testimoni'],
		);
		$data["sidebar"]='testimoni';
		$data["menu"]='testimoni';
		$data["title"]="Edit Testimoni";
		$this->load->view('testimoni/edit',$data);
		
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
			$nama =  $this->input->post('nama');
			$jabatan =  $this->input->post('jabatan');
			$testimoni =  $this->input->post('testimoni');
			$upload_data = $this->upload->data();
			$foto =  $upload_data['file_name'];
			
			date_default_timezone_set('Asia/Jakarta');
			$data = array(
				'nama' => $nama,
				'jabatan' => $jabatan,
				'foto' => $foto,
				'testimoni' => $testimoni,
				);

			$this->m_testimoni->set_data($data);
			$data = array('upload_data' => $this->upload->data());
			redirect('c_testimoni');
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
				$nama =  $this->input->post('nama');
				$jabatan =  $this->input->post('jabatan');
				$testimoni =  $this->input->post('testimoni');
				$upload_data = $this->upload->data();
				$foto =  $upload_data['file_name'];
			
				$data = array(
					'nama' => $nama,
					'jabatan' => $jabatan,
					'foto' => $foto,
					'testimoni' => $testimoni,
					);

				$this->m_testimoni->update_data($data,$id);
				$data = array('upload_data' => $this->upload->data());
				redirect('c_testimoni');
			}
		}else{//jika tidak ada file
			
			$nama =  $this->input->post('nama');
			$jabatan =  $this->input->post('jabatan');
			$testimoni =  $this->input->post('testimoni');
			$foto =  $this->input->post('foto');
		
			$data = array(
				'nama' => $nama,
				'jabatan' => $jabatan,
				'foto' => $foto,
				'testimoni' => $testimoni,
			);

			$this->m_testimoni->update_data($data,$id);
			$data = array('upload_data' => $this->upload->data());
			redirect('c_testimoni');
		}

	}

	public function hapus(){
		$id= $this->input->post("id");
		$this->m_testimoni->delete($id);
		echo "{}";
	}
		
}
?>
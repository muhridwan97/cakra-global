<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_team extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('m_team');
		$this->load->helper(array('form', 'url'));
		$this->load->database();
	}
    
	public function index()
	{
		$data["datas"]=$this->m_team->read();
		$data["sidebar"]='team';
		$data["title"]="Data Team";
		$data["menu"]='team';
		$this->load->view("team/index",$data);

	}
	public function tambah($error=''){
		$data["sidebar"]='team';
		$data["menu"]='team';
		$data["title"]="Tambah team";
		$data["error"]=$error;
		$this->load->view('team/tambah', $data);
	}
	public function edit($id){

		$wst = $this->m_team->get_team("where id='$id'");
		$data = array(
			"id"=> $wst[0]['id'], 
			"nama" => $wst[0]['nama'], 
			"jabatan" => $wst[0]['jabatan'], 
			"foto" => $wst[0]['foto'], 
			"bio" => $wst[0]['bio'],
		);
		$data["sidebar"]='team';
		$data["menu"]='team';
		$data["title"]="Edit Team";
		$this->load->view('team/edit',$data);
		
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
			$bio =  $this->input->post('bio');
			$upload_data = $this->upload->data();
			$foto =  $upload_data['file_name'];
			
			date_default_timezone_set('Asia/Jakarta');
			$data = array(
				'nama' => $nama,
				'jabatan' => $jabatan,
				'foto' => $foto,
				'bio' => $bio,
				);

			$this->m_team->set_data($data);
			$data = array('upload_data' => $this->upload->data());
			redirect('c_team');
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
				$bio =  $this->input->post('bio');
				$upload_data = $this->upload->data();
				$foto =  $upload_data['file_name'];
			
				$data = array(
					'nama' => $nama,
					'jabatan' => $jabatan,
					'foto' => $foto,
					'bio' => $bio,
					);

				$this->m_team->update_data($data,$id);
				$data = array('upload_data' => $this->upload->data());
				redirect('c_team');
			}
		}else{//jika tidak ada file
			
			$nama =  $this->input->post('nama');
			$jabatan =  $this->input->post('jabatan');
			$bio =  $this->input->post('bio');
			$foto =  $this->input->post('foto');
		
			$data = array(
				'nama' => $nama,
				'jabatan' => $jabatan,
				'foto' => $foto,
				'bio' => $bio,
			);

			$this->m_team->update_data($data,$id);
			$data = array('upload_data' => $this->upload->data());
			redirect('c_team');
		}

	}

	public function hapus(){
		$id= $this->input->post("id");
		$this->m_team->delete($id);
		echo "{}";
	}
		
}
?>
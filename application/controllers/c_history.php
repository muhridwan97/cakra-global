<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_history extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('m_history');
		$this->load->helper(array('form', 'url'));
		$this->load->database();
	}
    
	public function index()
	{
		$data["datas"]=$this->m_history->read();
		$data["sidebar"]='history';
		$data["title"]="Data History";
		$data["menu"]='history';
		$this->load->view("history/index",$data);

	}
	public function tambah($error=''){
		$data["sidebar"]='history';
		$data["menu"]='history';
		$data["title"]="Tambah history";
		$data["error"]=$error;
		$this->load->view('history/tambah', $data);
	}
	public function edit($id){

		$wst = $this->m_history->get_history("where id='$id'");
		$data = array(
			"id"=> $wst[0]['id'], 
			"judul" => $wst[0]['judul'], 
			"narasi" => $wst[0]['narasi'], 
			"foto" => $wst[0]['foto'], 
		);
		$data["sidebar"]='history';
		$data["menu"]='history';
		$data["title"]="Edit History";
		$this->load->view('history/edit',$data);
		
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
			$narasi =  $this->input->post('narasi');
			$upload_data = $this->upload->data();
			$foto =  $upload_data['file_name'];
			
			date_default_timezone_set('Asia/Jakarta');
			$data = array(
				'judul' => $judul,
				'narasi' => $narasi,
				'foto' => $foto,
				);

			$this->m_history->set_data($data);
			$data = array('upload_data' => $this->upload->data());
			redirect('c_history');
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
				$narasi =  $this->input->post('narasi');
				$upload_data = $this->upload->data();
				$foto =  $upload_data['file_name'];
			
				$data = array(
					'judul' => $judul,
					'narasi' => $narasi,
					'foto' => $foto,
					);

				$this->m_history->update_data($data,$id);
				$data = array('upload_data' => $this->upload->data());
				redirect('c_history');
			}
		}else{//jika tidak ada file
			
			$judul =  $this->input->post('judul');
			$narasi =  $this->input->post('narasi');
			$foto =  $this->input->post('foto');
		
			$data = array(
				'judul' => $judul,
				'narasi' => $narasi,
				'foto' => $foto,
			);

			$this->m_history->update_data($data,$id);
			$data = array('upload_data' => $this->upload->data());
			redirect('c_history');
		}

	}

	public function hapus(){
		$id= $this->input->post("id");
		$this->m_history->delete($id);
		echo "{}";
	}
		
}
?>
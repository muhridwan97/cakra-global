<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_gallery_layanan extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('m_gallery_layanan');
		$this->load->model('m_layanan');
		$this->load->helper(array('form', 'url'));
		$this->load->database();
	}
	public function tambah($id, $error=''){
		$wst = $this->m_layanan->get_layanan_kami("where id='$id'");
		$data["sidebar"]=$wst[0]['slug'];
		$modified_string = strtoupper(str_replace('_', ' ', $wst[0]['slug']));
		$data["menu"]=$modified_string;
		$data["title"]="Tambah Gallery".$modified_string;
		$data["error"]=$error;
		$data["layanan_id"]=$id;
		$this->load->view('gallery_layanan/tambah', $data);
	}
	public function edit($id, $error=''){
		
		$galley = $this->m_gallery_layanan->get_gellery("where id='$id'");
		$tanggal = $galley[0]['tanggal_projek'];
		// Membuat objek DateTime dari string tanggal dengan format MM/DD/YYYY
		$date = DateTime::createFromFormat('Y-m-d', $tanggal);
		// Mengubah format tanggal menjadi YYYY-MM-DD
		$tanggal_projek = $date->format('m/d/Y');
		$data = array(
			"id"=> $galley[0]['id'], 
			"kategori" => $galley[0]['kategori'], 
			"foto" => $galley[0]['foto'], 
			"deskripsi" => $galley[0]['deskripsi'],
			"client" => $galley[0]['client'],
			"tanggal_projek" => $tanggal_projek,
			"url" => $galley[0]['url'],
			"judul" => $galley[0]['judul'],
		);
		$layanan_id = $galley[0]['layanan_id'];
		$wst = $this->m_layanan->get_layanan_kami("where id='$layanan_id'");
		$data["sidebar"]=$wst[0]['slug'];
		$modified_string = strtoupper(str_replace('_', ' ', $wst[0]['slug']));
		$data["error"]=$error;
		$data["menu"]=$modified_string;
		$data["layanan_id"]=$layanan_id;
		$data["title"]="Edit Gallery".$modified_string;

		$this->load->view('gallery_layanan/edit',$data);
		
	}
	public function save(){
		$config['upload_path']          = './assets/images/foto/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 5000;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->tambah($error);
		}else{
			$judul =  $this->input->post('judul');
			$deskripsi =  $this->input->post('deskripsi');
			$kategori =  $this->input->post('kategori');
			$client =  $this->input->post('client');
			$dateString =  $this->input->post('tanggal_projek');
			$url =  $this->input->post('url');
			$layanan_id =  $this->input->post('layanan_id');
			$upload_data = $this->upload->data();
			$foto =  $upload_data['file_name'];

			// Membuat objek DateTime dari string tanggal dengan format MM/DD/YYYY
			$date = DateTime::createFromFormat('m/d/Y', $dateString);

			// Mengubah format tanggal menjadi YYYY-MM-DD
			$tanggal_projek = $date->format('Y-m-d');

			$data = array(
				'judul' => $judul,
				'deskripsi' => $deskripsi,
				'foto' => $foto,
				'kategori' => $kategori,
				'client' => $client,
				'tanggal_projek' => $tanggal_projek,
				'url' => $url,
				'layanan_id' => $layanan_id
				);

			$this->m_gallery_layanan->set_data($data,'gallery_layanan');
			$data = array('upload_data' => $this->upload->data());
			redirect('c_layanan/detailLayananKami/'.$layanan_id);
		}
	}
	
	public function update($id){
		$config['upload_path']          = './assets/images/foto/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 5000;
 
		$this->load->library('upload', $config);
 
		$slug =  $this->input->post('slug');
		if (!empty($_FILES['berkas']['name'])) {
			if ( ! $this->upload->do_upload('berkas')){
				$error = array('error' => $this->upload->display_errors());
				$this->editLayananKami($slug, $error);
			}else{
				$judul =  $this->input->post('judul');
				$deskripsi =  $this->input->post('deskripsi');
				$kategori =  $this->input->post('kategori');
				$client =  $this->input->post('client');
				$dateString =  $this->input->post('tanggal_projek');
				$url =  $this->input->post('url');
				$layanan_id =  $this->input->post('layanan_id');
				$upload_data = $this->upload->data();
				$foto =  $upload_data['file_name'];

				// Membuat objek DateTime dari string tanggal dengan format MM/DD/YYYY
				$date = DateTime::createFromFormat('m/d/Y', $dateString);
				// Mengubah format tanggal menjadi YYYY-MM-DD
				$tanggal_projek = $date->format('Y-m-d');
			
				$data = array(
					'judul' => $judul,
					'deskripsi' => $deskripsi,
					'foto' => $foto,
					'kategori' => $kategori,
					'client' => $client,
					'tanggal_projek' => $tanggal_projek,
					'url' => $url,
					'layanan_id' => $layanan_id
					);

				$this->m_gallery_layanan->update_data($data,$id,'gallery_layanan');
				$data = array('upload_data' => $this->upload->data());
				redirect('c_layanan/detailLayananKami/'.$layanan_id);
			}
		}else{//jika tidak ada file
			$judul =  $this->input->post('judul');
			$deskripsi =  $this->input->post('deskripsi');
			$kategori =  $this->input->post('kategori');
			$client =  $this->input->post('client');
			$dateString =  $this->input->post('tanggal_projek');
			$url =  $this->input->post('url');
			$layanan_id =  $this->input->post('layanan_id');
			$foto =  $this->input->post('foto');

			// Membuat objek DateTime dari string tanggal dengan format MM/DD/YYYY
			$date = DateTime::createFromFormat('m/d/Y', $dateString);
			// Mengubah format tanggal menjadi YYYY-MM-DD
			$tanggal_projek = $date->format('Y-m-d');
		
		$data = array(
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'foto' => $foto,
			'kategori' => $kategori,
			'client' => $client,
			'tanggal_projek' => $tanggal_projek,
			'url' => $url,
			'layanan_id' => $layanan_id
			);

			$this->m_gallery_layanan->update_data($data,$id,'gallery_layanan');
			$data = array('upload_data' => $this->upload->data());
			redirect('c_layanan/detailLayananKami/'.$layanan_id);
		}

	}	

	public function hapus(){
		$id= $this->input->post("id");
		$this->m_gallery_layanan->delete($id);
		echo "{}";
	}
		
}
?>
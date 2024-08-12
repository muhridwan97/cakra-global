<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_layanan extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('m_layanan');
		$this->load->model('m_gallery_layanan');
		$this->load->helper(array('form', 'url'));
		$this->load->database();
	}
    
	public function layananKami($slug)
	{
		$data["datas"]=$this->m_layanan->readLayananKami($slug);
		$data["sidebar"]=$slug;
		$modified_string = strtoupper(str_replace('_', ' ', $slug));
		$data["title"]="DATA ".$modified_string;
		$data["menu"]=$modified_string;
		$this->load->view("layanan_kami/index",$data);

	}
	public function tambahLayananKami($slug, $error=''){
		$data["sidebar"]=$slug;
		$modified_string = strtoupper(str_replace('_', ' ', $slug));
		$data["menu"]=$modified_string;
		$data["title"]="Tambah ".$modified_string;
		$data["error"]=$error;
		$this->load->view('layanan_kami/tambah', $data);
	}
	public function editLayananKami($slug, $id){

		$wst = $this->m_layanan->get_layanan_kami("where id='$id'");
		$data = array(
			"id"=> $wst[0]['id'], 
			"nama" => $wst[0]['nama'], 
			"foto" => $wst[0]['foto'], 
			"deskripsi" => $wst[0]['deskripsi'],
			"slug" => $wst[0]['slug'],
			"is_warehouse" => $wst[0]['is_warehouse'],
		);
		$data["sidebar"]=$slug;
		$modified_string = strtoupper(str_replace('_', ' ', $slug));
		$data["menu"]=$modified_string;
		$data["title"]="Edit Layanan ".$modified_string;
		$this->load->view('layanan_kami/edit',$data);
		
	}
	public function save_layanan_kami(){
		$config['upload_path']          = './assets/images/foto/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 5242880; // 5mb dalam byte
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = $this->upload->display_errors();
			$this->tambahLayananKami($error);
		}else{
			$nama =  $this->input->post('nama');
			$deskripsi =  $this->input->post('deskripsi');
			$slug =  $this->input->post('slug');
			$upload_data = $this->upload->data();
			$foto =  $upload_data['file_name'];
		
			$active_warehouse = ['open_yard_jakarta_umum', 'gudang_plb_jakarta', 'gudang_plb_surabaya',
            'gudang_umum_surabaya'];

			$data = array(
				'nama' => $nama,
				'deskripsi' => $deskripsi,
				'foto' => $foto,
				'slug' => $slug,
				'is_warehouse' => in_array($slug, $active_warehouse) ? 1 : 0,
				);

			$this->m_layanan->set_data($data,'layanan_kami');
			$data = array('upload_data' => $this->upload->data());
			redirect('c_layanan/layananKami/'.$slug);
		}
	}
	
	public function edit_layanan_kami($id){
		$config['upload_path']          = './assets/images/foto/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 5242880; // 5mb dalam byte
 
		$this->load->library('upload', $config);
 
		$slug =  $this->input->post('slug');
		if (!empty($_FILES['berkas']['name'])) {
			if ( ! $this->upload->do_upload('berkas')){
				$error = $this->upload->display_errors();
				$this->editLayananKami($slug, $error);
			}else{
				$nama =  $this->input->post('nama');
				$deskripsi =  $this->input->post('deskripsi');
				$is_warehouse =  $this->input->post('is_warehouse');
				$upload_data = $this->upload->data();
				$foto =  $upload_data['file_name'];
			
				$data = array(
					'nama' => $nama,
					'foto' => $foto,
					'deskripsi' => $deskripsi,
					'slug' => $slug,
					'is_warehouse' => $is_warehouse,
					);

				$this->m_layanan->update_data($data,$id,'layanan_kami');
				$data = array('upload_data' => $this->upload->data());
				redirect('c_layanan/layananKami/'.$slug);
			}
		}else{//jika tidak ada file
			
			$nama =  $this->input->post('nama');
			$deskripsi =  $this->input->post('deskripsi');
			$is_warehouse =  $this->input->post('is_warehouse');
			$foto =  $this->input->post('foto');
		
		$data = array(
			'nama' => $nama,
			'foto' => $foto,
			'deskripsi' => $deskripsi,
			'slug' => $slug,
			'is_warehouse' => (int) $is_warehouse,
			);

			$this->m_layanan->update_data($data,$id,'layanan_kami');
			$data = array('upload_data' => $this->upload->data());
			redirect('c_layanan/layananKami/'.$slug);
		}

	}
    
	public function detailLayananKami($id){

		$wst = $this->m_layanan->get_layanan_kami("where id='$id'");
        $gallery = $this->m_gallery_layanan->readGellery($id);
		$data = array(
			"id"=> $wst[0]['id'], 
			"nama" => $wst[0]['nama'], 
			"foto" => $wst[0]['foto'], 
			"deskripsi" => $wst[0]['deskripsi'],
			"slug" => $wst[0]['slug'],
			"is_warehouse" => $wst[0]['is_warehouse'],
            "galleries" => $gallery
		);
		$data["sidebar"]=$wst[0]['slug'];
		$modified_string = strtoupper(str_replace('_', ' ', $wst[0]['slug']));
		$data["menu"]=$modified_string;
		$data["title"]="Detail ".$modified_string;
		$this->load->view('layanan_kami/detail',$data);
		
	}
		
}
?>
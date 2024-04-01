<?php
class Galeri extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library("session");
		$this->load->model("galeri_model");
		$user_session_id = $this->session->userdata('logged_in');

		if ($user_session_id == '') {
			redirect(base_url(""));
		}
	}

	public function index() {
		$galeri = $this->galeri_model->getGaleri();
		$this->load->view("panel/galeri/list", array("galeri" => $galeri));
	}

	public function saveIndex() {
		$this->load->view("panel/galeri/save");
	}

	public function save() {
		// Dosya yükleme işlemi
		$config['upload_path'] = 'img/'; // Yüklenen dosyanın kaydedileceği klasör
		$config['allowed_types'] = 'gif|jpg|png'; // İzin verilen dosya türleri
		$config['max_size'] = 1024; // Maksimum dosya boyutu (KB)

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('medya_url')) {
			$image_data = $this->upload->data();
			$image = 'img/' . $image_data['file_name'];

			$data = array(
				'medya_url' => $image
			);

			$this->galeri_model->galeriKaydet($data);

			redirect(base_url("galeri/"));
		} else {
			redirect(base_url("galeri/"));
		}
	}
	public function deleteGaleri($id) {
		$this->galeri_model->deleteGaleri($id);
		redirect(base_url("galeri/"));
	}
}
?>

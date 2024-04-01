<?php
class Yazilar extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library("session");
		$this->load->model("yazilar_model");
		$user_session_id = $this->session->userdata('logged_in');

		if ($user_session_id == '') {
			redirect(base_url(""));
		}
	}

	public function index() {
		$yazilar = $this->yazilar_model->getYazilar();
		$this->load->view("panel/yazilar/list", array("yazilar" => $yazilar));
	}

	public function saveIndex() {
		$this->load->view("panel/yazilar/save");
	}

	public function save() {
		$baslik = $this->input->post("baslik");
		$kisa_aciklama = $this->input->post("kisa_aciklama");
		$aciklama = $this->input->post("aciklama");
		$kategori = $this->input->post("kategori");

		// Dosya yükleme işlemi
		$config['upload_path'] = 'img/'; // Yüklenen dosyanın kaydedileceği klasör
		$config['allowed_types'] = 'gif|jpg|png'; // İzin verilen dosya türleri
		$config['max_size'] = 1024; // Maksimum dosya boyutu (KB)

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('resim')) {
			$image_data = $this->upload->data();
			$image = 'img/' . $image_data['file_name'];

			$data = array(
				'baslik' => $baslik,
				'kisa_aciklama' => $kisa_aciklama,
				'aciklama' => $aciklama,
				'resim' => $image,
				'kategori' => $kategori
			);

			$this->yazilar_model->saveYazi($data);

			redirect(base_url("yazilar"));
		} else {
			redirect(base_url("yazilar"));
		}
	}

	public function edit($id){
		$yazilar = $this->yazilar_model->getYazi($id);
		$this->load->view("panel/yazilar/edit", array("yazilar" => $yazilar));
	}

	public function update() {
		$id = $this->input->post('id');
		$baslik = $this->input->post("baslik");
		$kisa_aciklama = $this->input->post("kisa_aciklama");
		$aciklama = $this->input->post("aciklama");
		$kategori = $this->input->post("kategori");

		// Dosya yükleme işlemi
		$config['upload_path'] = 'images/'; // Yüklenen dosyanın kaydedileceği klasör
		$config['allowed_types'] = 'gif|jpg|png'; // İzin verilen dosya türleri
		$config['max_size'] = 1024; // Maksimum dosya boyutu (KB)

		$this->load->library('upload', $config);

		// Eğer resim dosyası seçildiyse
		if (!empty($_FILES['resim']['name'])) {
			if ($this->upload->do_upload('resim')) {
				$image_data = $this->upload->data();
				$image = 'img/' . $image_data['file_name'];
			} else {
				$error = $this->upload->display_errors();
				redirect(base_url("yazilar"));
				return; // Hata durumunda işlemi sonlandır
			}
		} else {
			$image = '';
		}

		$data = array(
			'baslik' => $baslik,
			'kisa_aciklama' => $kisa_aciklama,
			'aciklama' => $aciklama,
			'resim' => $image,
			'kategori' => $kategori
		);

		$this->yazilar_model->updateYazi($id, $data);

		redirect(base_url("yazilar"));
	}
	public function deleteYazi($id) {
		$this->yazilar_model->deleteYazi($id);
		redirect(base_url("yazilar"));
	}
}
?>

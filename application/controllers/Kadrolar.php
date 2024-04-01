<?php
class Kadrolar extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library("session");
		$this->load->model("kadro_model");
		$user_session_id = $this->session->userdata('logged_in');

		if ($user_session_id == '') {
			redirect(base_url(""));
		}
	}

	public function index() {
		$kadro = $this->kadro_model->getKadro();
		$this->load->view("panel/kadromuz/list", array("kadro" => $kadro));
	}

	public function saveIndex() {
		$this->load->view("panel/kadromuz/save");
	}

	public function save() {
		$name = $this->input->post("name");
		$alan = $this->input->post("alan");
		$telefon = $this->input->post("telefon");

		// Dosya yükleme işlemi
		$config['upload_path'] = 'img/'; // Yüklenen dosyanın kaydedileceği klasör
		$config['allowed_types'] = 'gif|jpg|png'; // İzin verilen dosya türleri
		$config['max_size'] = 1024; // Maksimum dosya boyutu (KB)

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('resim')) {
			$image_data = $this->upload->data();
			$image = 'img/' . $image_data['file_name'];

			$data = array(
				'name' => $name,
				'resim' => $image,
				'alan' => $alan,
				'telefon' => $telefon
			);

			$this->kadro_model->saveKadro($data);

			redirect(base_url("kadrolar"));
		} else {
			redirect(base_url("kadrolar"));
		}
	}

	public function edit($id){
		$kadro = $this->kadro_model->getKadroTek($id);
		$this->load->view("panel/kadromuz/edit", array("kadro" => $kadro));
	}

	public function update() {
		$id = $this->input->post('id');
		$name = $this->input->post("name");
		$alan = $this->input->post("alan");
		$telefon = $this->input->post("telefon");

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
				redirect(base_url("kadrolar"));
				return; // Hata durumunda işlemi sonlandır
			}
		} else {
			$image = '';
		}

		$data = array(
			'name' => $name,
			'resim' => $image,
			'alan' => $alan,
			'telefon' => $telefon
		);

		$this->kadro_model->updateKadro($id, $data);

		redirect(base_url("kadrolar"));
	}
	public function deleteKadro($id) {
		$this->kadro_model->deleteKadro($id);
		redirect(base_url("kadrolar"));
	}
}
?>

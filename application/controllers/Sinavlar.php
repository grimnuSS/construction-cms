<?php
class Sinavlar extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library("session");
		$this->load->model("sinav_model");
		$user_session_id = $this->session->userdata('logged_in');

		if ($user_session_id == '') {
			redirect(base_url(""));
		}
	}

	public function index() {
		$sinav = $this->sinav_model->getSinav();
		$this->load->view("panel/sinavlar/list", array("sinav" => $sinav));
	}

	public function saveIndex() {
		$this->load->view("panel/sinavlar/save");
	}

	public function save() {
		$ad_soyad = $this->input->post("ad_soyad");
		$sinav_saati = $this->input->post("sinav_saati");
		$sonuc = $this->input->post("sonuc");
		$tarih = $this->input->post("tarih");

		$data = array(
			"ad_soyad" => $ad_soyad,
			"sinav_saati" => $sinav_saati,
			"sonuc" => $sonuc,
			"tarih" => $tarih
		);
		$this->sinav_model->saveSinav($data);
		redirect(base_url("sinavlar/"));
	}
	public function deleteSinav($id) {
		$this->sinav_model->deleteSinav($id);
		redirect(base_url("sinavlar/"));
	}
}
?>

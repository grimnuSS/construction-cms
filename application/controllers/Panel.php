<?php
	class Panel extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library("session");
			$this->load->model("Contact");
			$user_session_id = $this->session->userdata('logged_in');

			if ($user_session_id == '') {
				redirect(base_url(""));
			}
		}

		public function index() {
			$contact = $this->Contact->getIletisim();
			$this->load->view("panel/index", array("contact" => $contact));
		}
		public function deleteIletisim($id) {
			$this->Contact->deleteIletisim($id);
			$success = "Başarıyla Silindi!";
			$this->load->view("Panel/index", compact("success"));
		}
	}
?>

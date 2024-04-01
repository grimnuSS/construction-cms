<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("Contact");
		$this->load->model("Hakkimizda_Model");
		$this->load->model("Sinav_Model");
		$this->load->model("Kadro_Model");
		$this->load->model("Galeri_Model");
		$this->load->model("Yazilar_Model");
		$this->load->helper('url');
		$this->load->library("session");
	}

	public function index()
	{
		$yazilar = $this->Yazilar_Model->getYazilar("bilgi");
		$hizmetler = $this->Yazilar_Model->getYazilar("hizmet");
		$signed_in = false;
		if ($this->session->userdata("logged_in") != "") {
			$signed_in = true;
		}
		$this->load->view("index",array("signed_in" => $signed_in, "yazilar" => $yazilar, "hizmetler" => $hizmetler));
	}
	public function contact() {
		$signed_in = false;
		if ($this->session->userdata("logged_in") != "") {
			$signed_in = true;
		}
		$this->load->view("contact",array("signed_in" => $signed_in));
	}
	public function hakkimizda() {
		$hakkimizda = $this->Hakkimizda_Model->getHakkimizda();
		$signed_in = false;
		if ($this->session->userdata("logged_in") != "") {
			$signed_in = true;
		}
		$this->load->view("hakkimizda",array("signed_in" => $signed_in, "hakkimizda" => $hakkimizda));
	}
	public function kadromuz() {
		$kadro = $this->Kadro_Model->getKadro();
		$signed_in = false;
		if ($this->session->userdata("logged_in") != "") {
			$signed_in = true;
		}
		$this->load->view("kadrolarimiz",array("signed_in" => $signed_in, "kadro" => $kadro));
	}
	public function sinavlar() {
		$sinav = $this->Sinav_Model->getSinav();
		$signed_in = false;
		if ($this->session->userdata("logged_in") != "") {
			$signed_in = true;
		}
		$this->load->view("sinavlar",array("signed_in" => $signed_in, "sinav" => $sinav));
	}
	public function galeri() {
		$galeri = $this->Galeri_Model->getGaleri();
		$signed_in = false;
		if ($this->session->userdata("logged_in") != "") {
			$signed_in = true;
		}
		$this->load->view("galeri",array("signed_in" => $signed_in, "galeri" => $galeri));
	}
	public function yazi($id = "") {
		if ($id == "") {
			$id = $this->input->post("yazi_id");
		}
		$yazilar = $this->Yazilar_Model->getYazi($id);
		$signed_in = false;
		if ($this->session->userdata("logged_in") != "") {
			$signed_in = true;
		}
		$this->load->view("yazi",array("signed_in" => $signed_in, "yazilar" => $yazilar));
	}
	public function bilgiler() {
		$bilgiler = $this->Yazilar_Model->getYazilar("bilgi");
		$signed_in = false;
		if ($this->session->userdata("logged_in") != "") {
			$signed_in = true;
		}
		$this->load->view("bilgiler",array("signed_in" => $signed_in, "bilgiler" => $bilgiler));
	}
	public function hizmetler() {
		$hizmetler = $this->Yazilar_Model->getYazilar("hizmet");
		$signed_in = false;
		if ($this->session->userdata("logged_in") != "") {
			$signed_in = true;
		}
		$this->load->view("hizmetler",array("signed_in" => $signed_in, "hizmetler" => $hizmetler));
	}



	public function contact_kaydet() {
		$array = array(
			"isim" => $this->input->post("isim"),
			"email" => $this->input->post("email"),
			"konu" => $this->input->post("konu"),
			"aciklama" => $this->input->post("aciklama"),
		);

		$islem = $this->Contact->iletisimKaydet($array);

		if ($islem) {
			redirect(base_url(''));
		} else {
			redirect(base_url('main/contact'));
		}
	}
}

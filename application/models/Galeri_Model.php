<?php
class Galeri_Model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getGaleri() {
		return $this->db->get("galeri")->result();
	}
	public function galeriKaydet($veriler = array()) {
		return $this->db->insert("galeri",$veriler);
	}
	public function deleteGaleri($id) {
		$this->db->where('id', $id)->delete('galeri');
	}
}
?>

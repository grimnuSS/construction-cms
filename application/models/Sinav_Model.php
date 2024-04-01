<?php
class Sinav_Model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getSinav($order = "tarih ASC, sinav_saati ASC") {
		return $this->db->order_by($order)->get("sinavlar")->result();
	}
	public function saveSinav($data) {
		$this->db->insert('sinavlar', $data);
	}
	public function updateSinav($id, $data) {
		$this->db->where('id', $id)->update('sinavlar', $data);
	}
	public function deleteSinav($id) {
		$this->db->where('id', $id)->delete('sinavlar');
	}
}
?>

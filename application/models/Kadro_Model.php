<?php
class Kadro_Model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getKadro() {
		return $this->db->get("kadrolar")->result();
	}
	public function getKadroTek($where = array()) {
		return $this->db->where("id" ,$where)->get("kadrolar")->result();
	}
	public function saveKadro($data) {
		$this->db->insert('kadrolar', $data);
	}
	public function updateKadro($id, $data) {
		$this->db->where('id', $id)->update('kadrolar', $data);
	}
	public function deleteKadro($id) {
		$this->db->where('id', $id)->delete('kadrolar');
	}
}
?>

<?php
class Yazilar_Model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getYazilar($where = array()) {
		if (empty($where)) {
			return $this->db->get("yazilar")->result();
		} else {
			return $this->db->where("kategori", $where)->get("yazilar")->result();
		}
	}
	public function getYazi($where = array()) {
		return $this->db->where("id", $where)->get("yazilar")->result();
	}
	public function saveYazi($data) {
		$this->db->insert('yazilar', $data);
	}
	public function updateYazi($id, $data) {
		$this->db->where('id', $id)->update('yazilar', $data);
	}
	public function deleteYazi($id) {
		$this->db->where('id', $id)->delete('yazilar');
	}
}
?>

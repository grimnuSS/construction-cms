<?php
class Hakkimizda_Model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getHakkimizda() {
		return $this->db->get("hakkimizda")->result();
	}
}
?>

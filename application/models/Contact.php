<?php
    class Contact extends CI_Model {
        public function __construct() {
            parent::__construct();
        }
		public function getIletisim() {
			return $this->db->get("iletisim")->result();
		}
        public function iletisimKaydet($veriler = array()) {
            return $this->db->insert("iletisim",$veriler);
        }
		public function deleteIletisim($id) {
			$this->db->where('id', $id)->delete('iletisim');
		}
    }
?>

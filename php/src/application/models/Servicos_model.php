<?php
class Servicos_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_servicos() {
        $query = $this->db->get('servicos');
        return $query->result();
    }
}

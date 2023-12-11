<?php
class Produto_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_produtos() {
        $query = $this->db->get('produtos');
        return $query->result();
    }
}

<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_users() {
        // Consulta para obter todos os usuários
        $query = $this->db->get('users');
        return $query->result();
    }
}


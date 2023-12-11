<?php
class Mensagem_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function salvar_mensagem($dados) {
        return $this->db->insert('mensagens', $dados);
    }
}

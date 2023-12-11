<?php
class Mensagem_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function salvar_mensagem($dados) {
        return $this->db->insert('mensagens', $dados);
    }
    public function obterMensagens() {
        // Substitua isso com sua lógica para obter mensagens do banco de dados
        // Este é apenas um exemplo fictício
        return array(
            array('Nome', 'Email', 'Mensagem'),
            array('João', 'joao@example.com', 'Olá, isso é uma mensagem de exemplo.'),
            // ... adicione mais dados conforme necessário
        );
    }
    public function obterTodasAsMensagens() {
        // Substitua 'mensagens' pelo nome real da sua tabela de mensagens
        $query = $this->db->get('mensagens');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return array(); // Retorna um array vazio se não houver mensagens
    }
}

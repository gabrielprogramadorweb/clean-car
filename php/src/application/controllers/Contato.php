<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Mensagem_model');
    }

    public function index() {
        $this->load->view('contato');
    }

    public function enviar_mensagem() {
        $dados = array(
            'nome' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'mensagem' => $this->input->post('mensagem')
        );

        $this->Mensagem_model->salvar_mensagem($dados);

        // Redirecionar ou exibir uma mensagem de sucesso
        
    }

}

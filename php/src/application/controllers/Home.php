<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Mensagem_model');
    }

    public function index() {
        $this->load->view('home');
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

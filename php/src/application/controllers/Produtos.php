<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function index() {
        $this->load->model('Produto_model');
        $data['produtos'] = $this->Produto_model->get_produtos();
        $this->load->view('produtos/index', $data);
    }
}

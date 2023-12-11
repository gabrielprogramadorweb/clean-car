<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {
        // Obter dados do modelo
        $data['users'] = $this->user_model->get_users();

        // Carregar a view com dados
        $this->load->view('principal', $data);
    }
}

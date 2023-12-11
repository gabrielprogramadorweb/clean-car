<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicos extends CI_Controller {

    public function index() {
        $this->load->model('Servicos_model');
        $data['servicos'] = $this->Servicos_model->get_servicos();

        $this->load->view('servicos/index', $data);
    }
}

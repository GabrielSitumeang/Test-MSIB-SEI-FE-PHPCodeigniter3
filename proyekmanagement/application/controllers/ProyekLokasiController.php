<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProyekLokasiController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ProyekModel');
        $this->load->model('LokasiModel');
    }

    public function index() {
        $data['projects'] = $this->ProyekModel->get_all_projects();
        $data['locations'] = $this->LokasiModel->get_all_locations();
        $this->load->view('home', $data);
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LokasiController extends CI_Controller {

    private $api_url = 'http://localhost:8080/api'; 

    public function __construct() {
        parent::__construct();
        $this->load->model('LokasiModel', 'lokasimodel');
    }

    public function index() {
        $data['locations'] = $this->lokasimodel->get_all_locations();
        $this->load->view('home', $data);
    }

    public function create() {
        $this->load->view('lokasi/create');
    }

    public function store() {
        $data = array(
            'nama_lokasi' => $this->input->post('nama_lokasi'),
            'negara' => $this->input->post('negara'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota'),
        );
        
        log_message('debug', 'Data to save: ' . print_r($data, true));
        
        $this->lokasimodel->create_location($data);
        redirect('home');
    }

    public function edit($id) {
        $data['type'] = 'lokasi';
        $data['item'] = $this->lokasimodel->getLokasiById($id);
        $this->load->view('lokasi/edit', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        $data = array(
            'nama_lokasi' => $this->input->post('nama_lokasi'),
            'negara' => $this->input->post('negara'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota'),
        );
    
        log_message('debug', 'Data to update: ' . print_r($data, true));
    
        $this->lokasimodel->update_location($id, $data);
        redirect('home');
    }

    public function delete($id) {
        $this->lokasimodel->delete_location($id);
        redirect('home');
    }
}

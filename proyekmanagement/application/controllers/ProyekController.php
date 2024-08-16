<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProyekController extends CI_Controller {

    private $api_url = 'http://localhost:8080/api'; 

    public function __construct() {
        parent::__construct();
        $this->load->model('ProyekModel', 'proyekmodel');
    }

    public function index() {
        $data['projects'] = $this->proyekmodel->get_all_projects();
        $this->load->view('home', $data);
    }

    public function create() {
        $this->load->view('create');
    }

    public function store() {
        $data = array(
            'nama_proyek' => $this->input->post('nama_proyek'),
            'client' => $this->input->post('client'),
            'tgl_mulai' => $this->input->post('tgl_mulai'),
            'tgl_selesai' => $this->input->post('tgl_selesai'),
            'pimpinan_proyek' => $this->input->post('pimpinan_proyek'),
            'keterangan' => $this->input->post('keterangan'),
        );
        
        log_message('debug', 'Data to save: ' . print_r($data, true));
        
        $this->proyekmodel->create_project($data);
        redirect('home');
    }

    public function edit($id) {
        $data['item'] = $this->proyekmodel->get_item($id);
        $data['type'] = 'proyek';
    
        if (empty($data['item'])) {
            show_404();
        }
    
        $this->load->view('edit', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        $data = array(
            'nama_proyek' => $this->input->post('nama_proyek'),
            'client' => $this->input->post('client'),
            'tgl_mulai' => $this->input->post('tgl_mulai'),
            'tgl_selesai' => $this->input->post('tgl_selesai'),
            'pimpinan_proyek' => $this->input->post('pimpinan_proyek'),
            'keterangan' => $this->input->post('keterangan'),
        );
    
        log_message('debug', 'Data to update: ' . print_r($data, true));
    
        $this->proyekmodel->update_project($id, $data);
        redirect('home');
    }

    public function delete($id) {
        $this->proyekmodel->delete_project($id);
        redirect('home');
    }
}

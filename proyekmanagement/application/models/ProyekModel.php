<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProyekModel extends CI_Model {
    private $api_url = 'http://localhost:8080/api';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_projects() {
        $query = $this->db->get('proyek');
        return $query->result_array();
    }

    public function get_item($id) {
        $query = $this->db->get_where('proyek', array('id' => $id));
        return $query->row_array();
    }

    public function create_project($data) {
        $this->db->insert('proyek', $data);
    }

    public function update_project($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('proyek', $data);
    }

    public function delete_project($id) {
        return $this->send_delete_request('/proyek/' . $id);
    }

    private function send_post_request($endpoint, $data) {
        $ch = curl_init($this->api_url . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); // Use JSON format
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Set content type to JSON
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            log_message('error', 'CURL error: ' . curl_error($ch));
        }
        curl_close($ch);
        return json_decode($response, true);
    }

    private function send_put_request($endpoint, $data) {
        $ch = curl_init($this->api_url . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); // Use JSON format
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Set content type to JSON
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            log_message('error', 'CURL error: ' . curl_error($ch));
        }
        curl_close($ch);
        return json_decode($response, true);
    }

    private function send_delete_request($endpoint) {
        $ch = curl_init($this->api_url . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            log_message('error', 'CURL error: ' . curl_error($ch));
        }
        curl_close($ch);
        return json_decode($response, true);
    }
}

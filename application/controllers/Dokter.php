<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dokter extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Dokter_model');
    }

    public function index() {
        $data = [
            'title'     => 'Data Dokter',
            'dokter'    => $this->Dokter_model->get_all()
        ]; 
        $data['content'] = $this->load->view('content/dokter/view_dokter', $data, true);
        $this->load->view('layouts/template', $data);
        
    }

    public function add() {
        if ($_POST) {
            $data = $this->input->post();
            $this->Dokter_model->insert($data);
            redirect('dokter');
        }
        $data = [
                'title'     => 'Tambah Data Dokter'
            ]; 
        $data['content'] = $this->load->view('content/dokter/form', $data, true);
        $this->load->view('layouts/template', $data);
    }
    
    public function edit($id) {
        if ($_POST) {
            $data = $this->input->post();
            $this->Dokter_model->update($id, $data);
            redirect('dokter');
        }
         $data = [
                'title'     => 'Edit Data Dokter',
                'row'       => $this->Dokter_model->get_by_id($id)
            ]; 
        $data['content'] = $this->load->view('content/dokter/form', $data, true);
        $this->load->view('layouts/template', $data);
    }

    public function delete($id) {
        $this->Dokter_model->delete($id);
        redirect('dokter');
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pasien extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('email')) {
                redirect('auth/login');
            }
        $this->load->model('Pasien_model');
    }

    public function index() {
        $data = [
            'title'     => 'Data Pasien',
            'pasien'    => $this->Pasien_model->get_all()
        ]; 
        $data['content'] = $this->load->view('content/pasien/view_pasien', $data, true);
        $this->load->view('layouts/template', $data);
    }

    public function add() {
        if ($_POST) {
            $data = $this->input->post();
            $this->Pasien_model->insert($data);
            redirect('pasien');
        }
        $data = [
                'title'     => 'Tambah Data Pasien',
                'norm'      => 'RM' . mt_rand(100000, 999999) // contoh: RM123456
            ]; 
        $data['content'] = $this->load->view('content/pasien/form', $data, true);
        $this->load->view('layouts/template', $data);
    }

    public function edit($norm) {
        if ($_POST) {
            $data = $this->input->post();
            $this->Pasien_model->update($norm, $data);
            redirect('pasien');
        }
         $data = [
                'title'     => 'Edit Data Pasien',
                'row'       => $this->Pasien_model->get_by_id($norm)
            ]; 
        $data['content'] = $this->load->view('content/pasien/form', $data, true);
        $this->load->view('layouts/template', $data);
    }

    public function delete($norm) {
        $this->Pasien_model->delete($norm);
        redirect('pasien');
    }
}

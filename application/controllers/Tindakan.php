<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('email')) {
                redirect('auth/login');
            }
        $this->load->model('Tindakan_model');
    }

    public function index() {
         $data = [
            'title'     => 'Data Tindakan',
            'tindakan'    => $this->Tindakan_model->get_all()
        ]; 
        $data['content'] = $this->load->view('content/tindakan/view_tindakan', $data, true);
        $this->load->view('layouts/template', $data);
    }

    public function add() {
        if ($_POST) {
            $data = $this->input->post();
            $this->Tindakan_model->insert($data);
            redirect('tindakan');
        }
        $data = [
                'title'     => 'Tambah Data Tindakan',
            ]; 
        $data['content'] = $this->load->view('content/tindakan/form', $data, true);
        $this->load->view('layouts/template', $data);
    }

    public function edit($id) {
        if ($_POST) {
            $data = $this->input->post();
            $this->Tindakan_model->update($id, $data);
            redirect('tindakan');
        }
         $data = [
                'title'     => 'Edit Data Tindakan',
                'row'       => $this->Tindakan_model->get_by_id($id)
            ]; 
        $data['content'] = $this->load->view('content/tindakan/form', $data, true);
        $this->load->view('layouts/template', $data);
    }


    public function delete($id) {
        $this->Tindakan_model->delete($id);
        redirect('tindakan');
    }
}

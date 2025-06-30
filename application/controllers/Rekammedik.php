<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Rekammedik extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Rekammedik_model');
        $this->load->model('Pasien_model');
        $this->load->model('Dokter_model');
        $this->load->model('Tindakan_model');
    }

    public function index() {
        $data = [
            'title'     => 'Data Rekam medis',
            'rekammedik'    => $this->Rekammedik_model->get_with_relations()
        ]; 
        $data['content'] = $this->load->view('content/rekammedik/view_rekammedik', $data, true);
        $this->load->view('layouts/template', $data);
    }

    public function add() {
        if ($_POST) {
            $data = $this->input->post();
            $this->Rekammedik_model->insert($data);
            redirect('rekammedik');
        }
        $data = [
                'title'     => 'Tambah Data Rekam Medis',
                'pasien'    => $this->Pasien_model->get_all(),
                'dokter'    => $this->Dokter_model->get_all(),
                'tindakan'  => $this->Tindakan_model->get_all()
            ]; 
        $data['content'] = $this->load->view('content/rekammedik/form', $data, true);
        $this->load->view('layouts/template', $data);
    }

    public function edit($id) {
        if ($_POST) {
            $data = $this->input->post();
            $this->Rekammedik_model->update($id, $data);
            redirect('rekammedik');
        }
         $data = [
                'title'     => 'Edit Data Rekam Medis',
                'row'       => $this->Rekammedik_model->get_by_id($id),
                'pasien'    => $this->Pasien_model->get_all(),
                'dokter'    => $this->Dokter_model->get_all(),
                'tindakan'  => $this->Tindakan_model->get_all(),
            ]; 
        $data['content'] = $this->load->view('content/rekammedik/form', $data, true);
        $this->load->view('layouts/template', $data);
    }

    

    public function delete($id) {
        $this->Rekammedik_model->delete($id);
        redirect('rekammedik');
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('email')) {
                redirect('auth/login');
            }
        $this->load->model('Dokter_model');
        $this->load->model('Pasien_model');
        $this->load->model('Rekammedik_model');
        $this->load->model('Tindakan_model');
    }
    
    public function index() {
        $data = [
            'title' => 'Dashboard',
            'jml_pasien' => count($this->Pasien_model->get_all()),
            'jml_dokter' => count($this->Dokter_model->get_all()),
            'jml_tindakan' => count($this->Tindakan_model->get_all()),
            'jml_rekammedik' => count($this->Rekammedik_model->get_all()),

            // Contoh data bulanan dummy (bisa dari database)
            'bulan' => ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
            'jumlah_kunjungan' => [12, 19, 3, 5, 2, 3],

        ];
        $data['content'] = $this->load->view('content/view_dashboard', $data, true);
        $this->load->view('layouts/template', $data);
    }

}

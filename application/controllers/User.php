<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth/login');
        }
        $this->load->model('User_model');
    }

    public function index() {
        $data = [
            'title' => 'Data User',
            'list'  => $this->User_model->get_all()
        ];
        $data['content'] = $this->load->view('content/user/view_user', $data, true);
        $this->load->view('layouts/template', $data);
    }

    public function add() {
        if ($_POST) {
            $this->User_model->insert([
                'nama'  => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'paswd' => md5($this->input->post('paswd')), // md5 password
                'akses' => $this->input->post('akses'),
                'kelas' => $this->input->post('kelas')
            ]);
            redirect('user');
        }
        $data = [
            'title' => 'Tambah Data User'
        ];
        $data['content'] = $this->load->view('content/user/form', $data, true);
        $this->load->view('layouts/template', $data);
    }

    public function edit($id) {
        if ($_POST) {
            $update_data = [
                'nama'  => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'akses' => $this->input->post('akses'),
                'kelas' => $this->input->post('kelas')
            ];

            $password = $this->input->post('paswd');
            if (!empty($password)) {
                $update_data['paswd'] = md5($password); // hanya update jika diisi
            }

            $this->User_model->update($id, $update_data);
            redirect('user');
        }

        $data = [
            'title' => 'Edit Data user',
            'row'   => $this->User_model->get($id)
        ];
        $data['content'] = $this->load->view('content/user/form', $data, true);
        $this->load->view('layouts/template', $data);
    }

    public function delete($id) {
        $this->User_model->delete($id);
        redirect('user');
    }
}

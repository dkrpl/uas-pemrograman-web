<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function login() {
        if ($this->session->userdata('email')) {
            redirect('dashboard');
        }

        if ($_POST) {
            $user = $this->User_model->check_login(
                $this->input->post('email'),
                $this->input->post('paswd')
            );

            if ($user) {
                $this->session->set_userdata([
                    'id' => $user->id,
                    'email' => $user->email,
                    'nama' => $user->nama,
                    'akses' => $user->akses,
                    'kelas' => $user->kelas
                ]);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Email atau password salah');
                redirect('content/auth/login');
            }
        }

        $this->load->view('content/auth/login');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}

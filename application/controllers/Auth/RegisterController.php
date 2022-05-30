<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegisterController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->view('register');
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == false) {
            //failed
            $this->index();
        } else {
            $this->session->set_flashdata('success', 'Berhasil Didaftarkan!');
            redirect('login');
        }
    }
    public function action_register()
    {
        if ($this->input->post('register') != null) {
            $this->form_validation->set_rules('email', 'Email', array('required', 'is_unique[users.email]'));
            $this->form_validation->set_rules('username', 'Username', array('required', 'is_unique[users.username]'));

            $this->form_validation->set_rules('password', 'Password', array('required', 'min_length[6]'));
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
            if ($this->form_validation->run() != FALSE) {
                $data = array(
                    'id' => '',
                    'email' => $this->input->post('email'),
                    'username' => $this->input->post('username'),
                    'password' => md5($this->input->post('password'))
                );
                $this->db->insert('users', $data);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('message' , 'Berhasil Registrasi. Silahkan Login!');
                    redirect(base_url('login'));
                }
            }
        }
        $this->session->set_flashdata('error', validation_errors());
        redirect(base_url('register'));
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function index()
    {
        if ($this->session->has_userdata('login')) {
            return $this->load->view('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Silahkan Login Terlebih Dahulu!');
            redirect(base_url('login'));
        }
    }
}

<?php

/**
 * Created by PhpStorm.
 * User: daksh
 * Date: 12/06/16
 * Time: 18:00
 */
class Cp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->Validation();
    }

    public function Validation()
    {
        if ($this->session->userdata('aid') != null) {
            header('location:' . base_url() . 'Admin/Dashboard?Error=2');
        }
    }

    public function index()
    {
        $this->load->view('Admin/Login');
    }

    public function Login()
    {
        extract($_POST);
        $admin = $this->data_model->Admin_login();
        if ($admin != null) {
            redirect(base_url() . 'Admin/Dashboard');
        } else {
            redirect(base_url() . 'cp?alert=1');
        }
    }
} 
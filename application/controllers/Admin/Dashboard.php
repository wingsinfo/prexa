<?php
/**
 * Created by PhpStorm.
 * User: daksh
 * Date: 12/06/16
 * Time: 12:44
 */

class Dashboard extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->Validation();
    }
    public function Validation()
    {
        if ($this->session->userdata('aid') == null) {
            header('location:' . base_url() . 'Cp?alert=2');
        }
    }
    public function index(){
        $this->load->view('Admin/Dashboard');
    }
} 
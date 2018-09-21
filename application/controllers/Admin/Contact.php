<?php

/**
 * Created by PhpStorm.
 * User: daksh
 * Date: 12/06/16
 * Time: 12:27
 */
class Contact extends CI_Controller
{
    public $tbl = "tbl_contact";
    public $controll = "Contact";

    public function __construct()
    {
        parent::__construct();
        $this->Validation();
    }

    public function Validation()
    {
        if ($this->session->userdata('aid') == null) {
            header('location:' . base_url() . 'Cp?alert=2');
        }
    }

    public function index()
    {
        $data[$this->tbl] = $this->data_model->Get_data($this->tbl);
        $this->load->view('Admin/' . $this->controll, $data);
    }

    public function Add_data()
    {
        extract($_POST);
        $data = array(
            'title' => $title,
            'address' => $address,
            'mobile' => $mobile,
            'email' => $email,
            'mlink' => $mlink,
            'c_date' => date('Y-m-d H:i:s')
        );
        $this->data_model->Insert_data($this->tbl, $data);
        redirect(base_url() .'Admin/'. $this->controll . '?alert=1');
    }

    public function Update_data()
    {
        extract($_POST);
        $con = array(
            $this->tbl . '_id' => $id
        );
        $data = array(
            'title' => $title,
            'address' => $address,
            'mobile' => $mobile,
            'email' => $email,
            'mlink' => $mlink,
            'm_date' => date('Y-m-d H:i:s')
        );
        $this->data_model->Update_data($this->tbl, $con, $data);
        redirect(base_url() .'Admin/'. $this->controll . '?alert=1');
    }
} 
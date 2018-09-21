<?php

/**
 * Created by PhpStorm.
 * User: daksh
 * Date: 12/06/16
 * Time: 12:27
 */
class Blog extends CI_Controller
{
    public $tbl = "tbl_blog";
    public $controll = "Blog";

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
            'link' => $link,
            'date' => $date,
            'by' => $by,
            'description' => $desc,
            //'type' => $type,
            'c_date' => date('Y-m-d H:i:s')
        );
        $this->data_model->Insert_data($this->tbl, $data);
        redirect(base_url() . 'Admin/' . $this->controll . '?alert=1');
    }

    public function Update_data()
    {
        extract($_POST);
        $con = array(
            $this->tbl . '_id' => $id
        );
        $data = array(
            'title' => $title,
            'link' => $link,
            'date' => $date,
            'by' => $by,
            'description' => $desc,
            //'type' => $type,
            'm_date' => date('Y-m-d H:i:s')
        );
        $this->data_model->Update_data($this->tbl, $con, $data);
        redirect(base_url() . 'Admin/' . $this->controll . '?alert=1');
    }
} 
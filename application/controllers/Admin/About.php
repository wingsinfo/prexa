<?php

/**
 * Created by PhpStorm.
 * User: daksh
 * Date: 12/06/16
 * Time: 12:27
 */
class About extends CI_Controller
{
    public $tbl="tbl_about_us";
    public $controll="About";
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
        $this->load->view('Admin/'.$this->controll, $data);
    }

    public function Add_data()
    {
        extract($_POST);
        $path = $_SERVER['DOCUMENT_ROOT'] . '/Vastramela/assets/images/web_img/'.$this->controll.'/' . $_FILES['img']['name'];
        if (move_uploaded_file($_FILES['img']['tmp_name'], $path)) {
            $data = array(
                'img' => $_FILES['img']['name'],
                'title' => $title,
                'sub_title' => $sub_title,
                'description' => $desc,
                'c_date' => date('Y-m-d H:i:s')
            );
            $this->data_model->Insert_data($this->tbl, $data);
        }
        redirect(base_url() .'Admin/'. $this->controll.'?alert=1');
    }
    public function Update_data()
    {
        extract($_POST);
        $path = $_SERVER['DOCUMENT_ROOT'] . '/Vastramela/assets/images/web_img/'.$this->controll.'/' . $_FILES['img']['name'];
        $con=array(
            $this->tbl.'_id'=>$id
        );
        if($_FILES['img']['name']!=""){
            if (move_uploaded_file($_FILES['img']['tmp_name'], $path)) {
                $data = array(
                    'img' => $_FILES['img']['name'],
                    'title' => $title,
                    'sub_title' => $sub_title,
                    'description' => $desc,
                    'm_date' => date('Y-m-d H:i:s')
                );
                $this->data_model->Update_data($this->tbl, $con,$data);
            }
        }else{
            $data = array(
                'title' => $title,
                'sub_title' => $sub_title,
                'description' => $desc,
                'm_date' => date('Y-m-d H:i:s')
            );
            $this->data_model->Update_data($this->tbl, $con,$data);
        }
        redirect(base_url() .'Admin/'. $this->controll.'?alert=1');
    }
} 
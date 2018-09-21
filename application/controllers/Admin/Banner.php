<?php

/**
 * Created by PhpStorm.
 * User: daksh
 * Date: 12/06/16
 * Time: 12:27
 */
class Banner extends CI_Controller {

    public $tbl = "tbl_banner";
    public $controll = "Banner";
    public $folder = "vastramela.com";

    public function __construct() {
        parent::__construct();
        $this->Validation();
    }

    public function Validation() {
        if ($this->session->userdata('aid') == null) {
            header('location:' . base_url() . 'Cp?alert=2');
        }
    }

    public function index() {
        $data[$this->tbl] = $this->data_model->Get_data($this->tbl);
        $this->load->view('Admin/' . $this->controll, $data);
    }

    public function Add_data() {
        extract($_POST);
        $path = $_SERVER['DOCUMENT_ROOT'] . "/Assets/images/web_img/$this->controll";
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        if ($this->data_model->createthumb($_FILES['img']['name'], $_FILES['img']['tmp_name'], $path . "/", '1420', '850', '0', '0') == 1) {
            $data = array(
                'img' => $_FILES['img']['name'],
                'title' => $title,
                'c_date' => date('Y-m-d H:i:s')
            );

            $this->data_model->Insert_data($this->tbl, $data);
            redirect(base_url() . 'Admin/' . $this->controll . '?alert=1');
        } else {
            redirect(base_url() . 'Admin/' . $this->controll . '?alert=2');
        }
    }

    public function Update_data() {
        extract($_POST);
        $path = $_SERVER['DOCUMENT_ROOT'] . "/Assets/images/web_img/$this->controll";
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        $con = array(
            $this->tbl . '_id' => $id
        );
        if ($_FILES['img']['name'] != "") {
            if ($this->data_model->createthumb($_FILES['img']['name'], $_FILES['img']['tmp_name'], $path . "/", '1420', '850', '0', '0') == 1) {
                $data = array(
                    'img' => $_FILES['img']['name'],
                    'title' => $title,
                    'm_date' => date('Y-m-d H:i:s')
                );
                $this->data_model->Update_data($this->tbl, $con, $data);
            } else {
                redirect(base_url() . 'Admin/' . $this->controll . '?alert=2');
            }
        } else {
            $data = array(
                'title' => $title,
                'm_date' => date('Y-m-d H:i:s')
            );
            $this->data_model->Update_data($this->tbl, $con, $data);
        }
        redirect(base_url() . 'Admin/' . $this->controll . '?alert=1');
    }

//    public function Add_data()
//    {
//        extract($_POST);
//        $path = $_SERVER['DOCUMENT_ROOT'] . '/Assets/images/web_img/'.$this->controll.'/' . $_FILES['img']['name'];
//        if (move_uploaded_file($_FILES['img']['tmp_name'], $path)) {
//            $data = array(
//                'img' => $_FILES['img']['name'],
//                'title' => $title,
//                'c_date' => date('Y-m-d H:i:s')
//            );
//            $this->data_model->Insert_data($this->tbl, $data);
//        }
//        redirect(base_url() .'Admin/'. $this->controll.'?alert=1');
//    }
//    public function Update_data()
//    {
//        extract($_POST);
//        $path = $_SERVER['DOCUMENT_ROOT'] . '/Assets/images/web_img/'.$this->controll.'/' . $_FILES['img']['name'];
//        $con=array(
//            $this->tbl.'_id'=>$id
//        );
//        if($_FILES['img']['name']!=""){
//            if (move_uploaded_file($_FILES['img']['tmp_name'], $path)) {
//                $data = array(
//                    'img' => $_FILES['img']['name'],
//                    'title' => $title,
//                    'm_date' => date('Y-m-d H:i:s')
//                );
//                $this->data_model->Update_data($this->tbl, $con,$data);
//            }
//        }else{
//            $data = array(
//                'title' => $title,
//                'm_date' => date('Y-m-d H:i:s')
//            );
//            $this->data_model->Update_data($this->tbl, $con,$data);
//        }
//        redirect(base_url() .'Admin/'. $this->controll.'?alert=1');
//    }
}

<?php

/**
 * Created by PhpStorm.
 * User: daksh
 * Date: 12/06/16
 * Time: 12:27
 */
class Contactus extends CI_Controller
{
    public $tbl = "tbl_contact";
    public $controll = "Contact";

    public function __construct()
    {
        parent::__construct();
//        $this->Validation();
    }

    public function Validation()
    {
        if ($this->session->userdata('id') == null) {
            header('location:' . base_url() . 'Cp?alert=2');
        }
    }

    public function index()
    {
        extract($_GET);
        if(isset($alert)){
            $data['alert']="Thank You For Your Suggestion";
        }
        else{
            $data['alert']="";
        }
        $data['config'] = $this->data_model->Get_data('tbl_config');
        if(isset($_SESSION['id'])){
            $data['cart']=$this->data_model->Custome_query('select * from tbl_shoping_cart WHERE tbl_customer_id='.$_SESSION['id']);
            $data['cartitem']=$this->data_model->Custome_query('select * from tbl_shoping_cart tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id='.$_SESSION['id'].' limit 0,2');
        } else {
            $hua = $_SERVER['HTTP_USER_AGENT'];
            $ra = $_SERVER['REMOTE_ADDR'];
            $fstr = $hua.'-'.$ra;
            $data['cart'] = $this->data_model->Custome_query('select * from tbl_shoping_cart_ip WHERE tbl_customer_id="' . md5($fstr).'"');
            $data['cartitem'] = $this->data_model->Custome_query('select * from tbl_shoping_cart_ip tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id="'.md5($fstr).'"  limit 0,2');
        }
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $data['sm'] = $this->data_model->Get_data('tbl_social_media');
        $data['mc'] = $this->data_model->Get_data('tbl_main_category');
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $this->load->view('Client/contact-us', $data);
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
        redirect(base_url() . $this->controll . '?alert=1');
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
        redirect(base_url() . $this->controll . '?alert=1');
    }
} 
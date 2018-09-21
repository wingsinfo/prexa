<?php

/**
 * Created by PhpStorm.
 * User: daksh
 * Date: 12/06/16
 * Time: 12:27
 */
class Account extends CI_Controller
{
    public $tbl = "tbl_wishlist";
    public $controll = "tbl_wishlist";

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
        if($this->session->userdata('id') == null){
            $data[$this->tbl] = array();
            $hua = $_SERVER['HTTP_USER_AGENT'];
            $ra = $_SERVER['REMOTE_ADDR'];
            $fstr = $hua.'-'.$ra;
            $data['cart'] = $this->data_model->Custome_query('select * from tbl_shoping_cart_ip WHERE tbl_customer_id="' . md5($fstr).'"');
            $data['cartitem'] = $this->data_model->Custome_query('select * from tbl_shoping_cart_ip tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id="'.md5($fstr).'"  limit 0,2');
        } else {
            $data['cart'] = $this->data_model->Custome_query('select * from tbl_shoping_cart WHERE tbl_customer_id=' . $_SESSION['id']);
            $data['cartitem'] = $this->data_model->Custome_query('select * from tbl_shoping_cart tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id=' . $_SESSION['id'] . ' limit 0,2');
            $data[$this->tbl] = $this->data_model->Custome_query("select * from tbl_wishlist tw LEFT JOIN tbl_product tp on tw.tbl_product_id=tp.tbl_product_id where tbl_customer_id=".$_SESSION['id']);
        }
        $data['config'] = $this->data_model->Get_data('tbl_config');
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $data['sm'] = $this->data_model->Get_data('tbl_social_media');
        $data['mc'] = $this->data_model->Get_data('tbl_main_category');
        $this->load->view('Client/Account', $data);
    }

    public function Add_data()
    {
        extract($_POST);
        if (!empty($pro)) {
            $check = $this->data_model->Custome_query('select * from tbl_wishlist WHERE tbl_customer_id=' . $_SESSION['id'].' and tbl_product_id='.base64_decode($pro));
            if(count($check)>0){
                echo json_encode(array('success' => '2'));
            } else {
                $data = array(
                'tbl_product_id' => base64_decode($pro),
                'tbl_customer_id' => $_SESSION['id'],
//                'tbl_customer_id' => '1',
                'cdate' => date('Y-m-d H:i:s'),
            );
            $this->data_model->Insert_data($this->tbl, $data);
            echo json_encode(array('success' => '1'));
            }
        } else {
            redirect(base_url());
        }

//        redirect(base_url() . $this->controll . '?alert=1');
    }
    
    public function RemoveWish(){
        extract($_POST);
        if(!empty($_POST)){
            $this->data_model->Custome_query_exc('delete from tbl_wishlist WHERE tbl_customer_id=' . $_SESSION['id'].' and tbl_product_id='.base64_decode($pro));
            echo json_encode(array('success' => '1'));
        } else {
            redirect(base_url());
        }
            
    
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
<?php

/**
 * Created by PhpStorm.
 * User: daksh
 * Date: 12/06/16
 * Time: 12:27
 */
class Product extends CI_Controller
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
        $this->load->view('Client/wishlist', $data);
    }

    public function getdata($ids)
    {
        $id=base64_decode($ids);
        $data['config'] = $this->data_model->Get_data('tbl_config');
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $data['sm'] = $this->data_model->Get_data('tbl_social_media');
        $data['mc'] = $this->data_model->Get_data('tbl_main_category');
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
        $con=array(
            'tbl_product_id'=>$id
        );
        $data['pro1']=$this->data_model->Get_data_all('tbl_product',$con);
        $data['pro']=$this->data_model->Custome_query('select * from tbl_product tp left join tbl_main_category tmc on tp.tbl_main_category_id=tmc.tbl_main_category_id where tp.tbl_product_id='.$id);
        $data['productsimg']=$this->data_model->Custome_query('select tim.tbl_addpro_img_id,tim.img,tim.is_csv from tbl_addpro_img tim LEFT JOIN tbl_product tp on tim.tbl_product_id=tp.tbl_product_id WHERE tp.tbl_product_id='.$id);
        $data['variant']= $this->data_model->Custome_query('SELECT tp.tbl_product_id,tp.product_name,GROUP_CONCAT(DISTINCT(if(tpt.name="Color",tt.name,\'\'))) color,GROUP_CONCAT(DISTINCT(if(tpt.name="Materials",tt.name,\'\'))) materials,GROUP_CONCAT(DISTINCT(if(tpt.name="Neck",tt.name,\'\'))) neck,GROUP_CONCAT(DISTINCT(if(tpt.name="Size",tt.name,\'\'))) size FROM tbl_product tp LEFT JOIN tbl_addpro_type tap ON tap.tbl_product_id=tp.tbl_product_id LEFT JOIN tbl_type tt ON tt.tbl_type_id=tap.tbl_type_id LEFT JOIN tbl_product_type tpt ON tpt.tbl_product_type_id=tt.tbl_product_type_id where tp.tbl_product_id='.$id.' GROUP BY tp.tbl_product_id');
        $this->load->view('Client/single-product', $data);
    }
}
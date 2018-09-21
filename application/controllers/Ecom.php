<?php

/**
 * Created by PhpStorm.
 * User: daksh
 * Date: 14/06/16
 * Time: 20:53
 */
class Ecom extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        extract($_GET);
        $td = $this->data_model->Get_data('tbl_product');
        $limit = 8;
        if (count($td) > 0) {
            $data['pages'] = ceil(count($td) / 8);
        } else {
            $data['pages'] = 0;
        }
        $data['config'] = $this->data_model->Get_data('tbl_config');
        /*$data['menu'] = $this->data_model->Get_data('tbl_menu');
        foreach ($data['menu'] as $dt) {
            $con = array(
                'tbl_menu_id' => $dt['tbl_menu_id']
            );
            $data['sub_menu'][$dt['tbl_menu_id']] = $this->data_model->Get_data_all('tbl_sub_menu', $con);
        }*/
        $data['slider'] = $this->data_model->Get_data('tbl_banner');
        foreach ($data['slider'] as $dt) {
            $con = array(
                'tbl_banner_id' => $dt['tbl_banner_id']
            );
            $data['tbl_banner_adv'][$dt['tbl_banner_id']] = $this->data_model->Get_data_all('tbl_banner_adv', $con);
        }
        $data['blog'] = $this->data_model->Get_data_limit('tbl_blog', 'tbl_blog_id', 'desc', 4);
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $data['sm'] = $this->data_model->Get_data('tbl_social_media');
        $data['mc'] = $this->data_model->Get_data('tbl_main_category');
        $data['totalproduct'] = $this->data_model->Get_data('tbl_product');
        $data['pro'] = $this->data_model->Custome_query('select *,count(tbl_product_id) count from tbl_main_category tmc,tbl_product tp where tp.tbl_main_category_id=tmc.tbl_main_category_id group by tmc.tbl_main_category_id order by tp.tbl_product_id desc');
        //$data['fpro']=$this->data_model->Get_data_limit('tbl_product','tbl_product_id','asc',12);

        if (!isset($page)) {
            $data['fpro'] = $this->data_model->Custome_query('select * from tbl_product p,tbl_main_category tmc  WHERE tmc.tbl_main_category_id=p.tbl_main_category_id AND p.product_name!="" order by rand() LIMIT  0,8');
            $data['fpro2'] = $this->data_model->Custome_query('select * from tbl_product p,tbl_main_category tmc WHERE tmc.tbl_main_category_id=p.tbl_main_category_id AND p.product_name!="" order by rand() LIMIT  0,8');
        } else {
            $fl = ($page - 1) * $limit;
            $data['fpro'] = $this->data_model->Custome_query('select * from tbl_product p,tbl_main_category tmc WHERE tmc.tbl_main_category_id=p.tbl_main_category_id AND p.product_name!="" order by rand() LIMIT ' . $fl . ',8');
            $data['fpro2'] = $this->data_model->Custome_query('select * from tbl_product p,tbl_main_category tmc WHERE tmc.tbl_main_category_id=p.tbl_main_category_id AND p.product_name!="" order by rand() LIMIT ' . $fl . ',8');
        }

        if (isset($_SESSION['id'])) {
            $data['cart'] = $this->data_model->Custome_query('select * from tbl_shoping_cart WHERE tbl_customer_id=' . $_SESSION['id']);
            $data['cartitem'] = $this->data_model->Custome_query('select * from tbl_shoping_cart tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id=' . $_SESSION['id'] . ' limit 0,2');
        } else {
            $hua = $_SERVER['HTTP_USER_AGENT'];
            $ra = $_SERVER['REMOTE_ADDR'];
            $fstr = $hua . '-' . $ra;
            $data['cart'] = $this->data_model->Custome_query('select * from tbl_shoping_cart_ip WHERE tbl_customer_id="' . md5($fstr) . '"');
            $data['cartitem'] = $this->data_model->Custome_query('select * from tbl_shoping_cart_ip tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id="' . md5($fstr) . '"  limit 0,2');
        }

        /*foreach ($data['mc'] as $dt) {
            $con1 = array(
                'tbl_main_category_id' => $dt['tbl_main_category_id']
            );
            $data['sc'][$dt['tbl_main_category_id']] = $this->data_model->Get_data_all('tbl_second_category', $con1);
            foreach ($data['sc'][$dt['tbl_main_category_id']] as $dts) {
                $con2 = array(
                    'tbl_second_category_id' => $dts['tbl_second_category_id']
                );
                $data['tc'][$dts['tbl_second_category_id']] = $this->data_model->Get_data_all('tbl_thired_category', $con2);
            }
        }*/
        $this->load->view('Client/index', $data);
    }

    public function getpro()
    {
        extract($_POST);
        $sql = "select * from tbl_product tp LEFT JOIN tbl_main_category tmc ON tp.tbl_main_category_id=tmc.tbl_main_category_id WHERE tp.tbl_product_id='".base64_decode($pro)."'";
//        $sql = "select * from tbl_product WHERE tbl_product_id='" . base64_decode($pro) . "'";
        $data = $this->data_model->Custome_query($sql);
        echo json_encode(array('prodata' => $data));
    }


    public function Product()
    {
        extract($_GET);
        if (isset($limit) && $limit != "") {
            $limits = $limit + 4;
        } else {
            $limits = 8;
        }
        $data['config'] = $this->data_model->Get_data('tbl_config');
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $data['sm'] = $this->data_model->Get_data('tbl_social_media');
        $data['mc'] = $this->data_model->Get_data('tbl_main_category');
        $data['product'] = $this->data_model->Get_data_limit('tbl_product', 'tbl_product_id', 'asc', $limits);
        $data['configration'] = array('datas' => ceil(count($data['product']) / 4), 'tp' => count($data['product']));
        for ($i = 1; $i <= ceil(count($data['product']) / 4); $i++) {
            $data['products'][$i] = $this->data_model->Custome_query('select * from tbl_product LIMIT ' . (($i * $i) - 1) . ', 4');
        }

        if (isset($_SESSION['id'])) {
            $data['cart'] = $this->data_model->Custome_query('select * from tbl_shoping_cart WHERE tbl_customer_id=' . $_SESSION['id']);
            $data['cartitem'] = $this->data_model->Custome_query('select * from tbl_shoping_cart tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id=' . $_SESSION['id'] . ' limit 0,2');
        }
        $this->load->view('Client/products', $data);
    }

    public function Sp($ids)
    {
        $id = base64_decode($ids);
        $data['config'] = $this->data_model->Get_data('tbl_config');
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $data['sm'] = $this->data_model->Get_data('tbl_social_media');
        $data['mc'] = $this->data_model->Get_data('tbl_main_category');
        if (isset($_SESSION['id'])) {
            $data['cart'] = $this->data_model->Custome_query('select * from tbl_shoping_cart WHERE tbl_customer_id=' . $_SESSION['id']);
            $data['cartitem'] = $this->data_model->Custome_query('select * from tbl_shoping_cart tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id=' . $_SESSION['id'] . ' limit 0,2');
        } else {
            $hua = $_SERVER['HTTP_USER_AGENT'];
            $ra = $_SERVER['REMOTE_ADDR'];
            $fstr = $hua . '-' . $ra;
            $data['cart'] = $this->data_model->Custome_query('select * from tbl_shoping_cart_ip WHERE tbl_customer_id="' . md5($fstr) . '"');
            $data['cartitem'] = $this->data_model->Custome_query('select * from tbl_shoping_cart_ip tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id="' . md5($fstr) . '"  limit 0,2');
        }
        $con = array(
            'tbl_product_id' => $id
        );
        $data['pro'] = $this->data_model->Get_data_all('tbl_product', $con);
        $data['productsimg'] = $this->data_model->Custome_query('select tim.tbl_addpro_img_id,tim.img,tim.is_csv from tbl_addpro_img tim LEFT JOIN tbl_product tp on tim.tbl_product_id=tp.tbl_product_id WHERE tp.tbl_product_id=' . $id);
        $data['variant'] = $this->data_model->Custome_query('SELECT tp.tbl_product_id,tp.product_name,GROUP_CONCAT(DISTINCT(if(tpt.name="Color",tt.name,\'\'))) color,GROUP_CONCAT(DISTINCT(if(tpt.name="Materials",tt.name,\'\'))) materials,GROUP_CONCAT(DISTINCT(if(tpt.name="Neck",tt.name,\'\'))) neck,GROUP_CONCAT(DISTINCT(if(tpt.name="Size",tt.name,\'\'))) size FROM tbl_product tp LEFT JOIN tbl_addpro_type tap ON tap.tbl_product_id=tp.tbl_product_id LEFT JOIN tbl_type tt ON tt.tbl_type_id=tap.tbl_type_id LEFT JOIN tbl_product_type tpt ON tpt.tbl_product_type_id=tt.tbl_product_type_id where tp.tbl_product_id=' . $id . ' GROUP BY tp.tbl_product_id');
        $this->load->view('Client/single-product', $data);
    }

    public function About_us()
    {
        $data['config'] = $this->data_model->Get_data('tbl_config');
        /*$data['menu'] = $this->data_model->Get_data('tbl_menu');
        foreach ($data['menu'] as $dt) {
            $con = array(
                'tbl_menu_id' => $dt['tbl_menu_id']
            );
            $data['sub_menu'][$dt['tbl_menu_id']] = $this->data_model->Get_data_one('tbl_sub_menu', $con);
        }*/
        if (isset($_SESSION['id'])) {
            $data['cart'] = $this->data_model->Custome_query('select * from tbl_shoping_cart WHERE tbl_customer_id=' . $_SESSION['id']);
            $data['cartitem'] = $this->data_model->Custome_query('select * from tbl_shoping_cart tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id=' . $_SESSION['id'] . ' limit 0,2');
        }
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $data['sm'] = $this->data_model->Get_data('tbl_social_media');
        $data['mc'] = $this->data_model->Get_data('tbl_main_category');
        $data['about'] = $this->data_model->Get_data('tbl_about_us');
        $this->load->view('Client/about_us', $data);
    }

    public function Blog()
    {
        if (isset($_SESSION['id'])) {
            $data['cart'] = $this->data_model->Custome_query('select * from tbl_shoping_cart WHERE tbl_customer_id=' . $_SESSION['id']);
            $data['cartitem'] = $this->data_model->Custome_query('select * from tbl_shoping_cart tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id=' . $_SESSION['id'] . ' limit 0,2');
        }
        $data['config'] = $this->data_model->Get_data('tbl_config');
        /*$data['menu'] = $this->data_model->Get_data('tbl_menu');
        foreach ($data['menu'] as $dt) {
            $con = array(
                'tbl_menu_id' => $dt['tbl_menu_id']
            );
            $data['sub_menu'][$dt['tbl_menu_id']] = $this->data_model->Get_data_one('tbl_sub_menu', $con);
        }*/
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $data['sm'] = $this->data_model->Get_data('tbl_social_media');
        $data['blog'] = $this->data_model->Get_data('tbl_blog');
        $this->load->view('Client/blog', $data);
    }

    public function Contact()
    {
        extract($_GET);
        if (isset($_SESSION['id'])) {
            $data['cart'] = $this->data_model->Custome_query('select * from tbl_shoping_cart WHERE tbl_customer_id=' . $_SESSION['id']);
            $data['cartitem'] = $this->data_model->Custome_query('select * from tbl_shoping_cart tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id=' . $_SESSION['id'] . ' limit 0,2');
        }
        if (isset($alert)) {
            $data['alert'] = "Thank You For Your Suggestion";
        } else {
            $data['alert'] = "";
        }
        $data['config'] = $this->data_model->Get_data('tbl_config');
        /*$data['menu'] = $this->data_model->Get_data('tbl_menu');
        foreach ($data['menu'] as $dt) {
            $con = array(
                'tbl_menu_id' => $dt['tbl_menu_id']
            );
            $data['sub_menu'][$dt['tbl_menu_id']] = $this->data_model->Get_data_one('tbl_sub_menu', $con);
        }*/
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $data['sm'] = $this->data_model->Get_data('tbl_social_media');
        $data['mc'] = $this->data_model->Get_data('tbl_main_category');
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $this->load->view('Client/contact-us', $data);
    }

    public function Add_feadback()
    {
        extract($_POST);
        $data = array(
            'name' => $name,
            'email' => $email,
            'phone_number' => $phone_number,
            'message' => $message
        );
        $this->data_model->Insert_data('tbl_feedback', $data);
        redirect(base_url() . 'Ecom/Contact?alert=1');
    }

    public function Reg()
    {
        if (isset($_SESSION['id'])) {
            $data['cart'] = $this->data_model->Custome_query('select * from tbl_shoping_cart WHERE tbl_customer_id=' . $_SESSION['id']);
            $data['cartitem'] = $this->data_model->Custome_query('select * from tbl_shoping_cart tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id=' . $_SESSION['id'] . ' limit 0,2');
        }
        $data['config'] = $this->data_model->Get_data('tbl_config');
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $data['sm'] = $this->data_model->Get_data('tbl_social_media');
        $data['mc'] = $this->data_model->Get_data('tbl_main_category');
        $data['about'] = $this->data_model->Get_data('tbl_about_us');
        $this->load->view('Client/reg', $data);
    }

    public function Cart()
    {
        if (isset($_SESSION['id'])) {
            $data['cart'] = $this->data_model->Custome_query('select * from tbl_shoping_cart WHERE tbl_customer_id=' . $_SESSION['id']);
            $data['cartitem'] = $this->data_model->Custome_query('select * from tbl_shoping_cart tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id=' . $_SESSION['id'] . ' limit 0,2');
        }
        $data['config'] = $this->data_model->Get_data('tbl_config');
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $data['sm'] = $this->data_model->Get_data('tbl_social_media');
        $data['mc'] = $this->data_model->Get_data('tbl_main_category');
        $data['about'] = $this->data_model->Get_data('tbl_about_us');
        $this->load->view('Client/cart', $data);
    }

    public function Login()
    {
        extract($_POST);
        $con = array(
            'email' => $email,
            'pass' => $password
        );
        $data = $this->data_model->Get_data_all('tbl_customer', $con);
        if (count($data) > 0) {
            $con2 = array(
                'email' => $email,
                'pass' => $password,
                'status' => 1
            );
            $fdata = $this->data_model->Get_data_all('tbl_customer', $con2);
            if (count($fdata) > 0) {
                $data = array(
                    'lid' => $fdata[0]['tbl_customer_id'],
                    'validated' => true,
                    'name' => $fdata[0]['f_name']
                );
                $this->session->set_userdata($data);
                echo json_encode(array('status' => 'success', 'msg' => $fdata));
            } else {
                echo json_encode(array('status' => 'fail', 'msg' => 'Your Account Not Activate'));
            }
        } else {
            echo json_encode(array('status' => 'fail', 'msg' => "User Doest Exis't..! Registration First"));
        }
    }

    public function Logout()
    {
        $this->session->sess_destroy();
        header('location:' . base_url() . 'Ecom');
    }

    public function Track()
    {
        $data['config'] = $this->data_model->Get_data('tbl_config');
        /*$data['menu'] = $this->data_model->Get_data('tbl_menu');
        foreach ($data['menu'] as $dt) {
            $con = array(
                'tbl_menu_id' => $dt['tbl_menu_id']
            );
            $data['sub_menu'][$dt['tbl_menu_id']] = $this->data_model->Get_data_one('tbl_sub_menu', $con);
        }*/
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $data['sm'] = $this->data_model->Get_data('tbl_social_media');
        $this->load->view('Client/track', $data);
    }
} 
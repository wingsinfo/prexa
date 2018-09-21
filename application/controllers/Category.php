<?php

/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/06/16
 * Time: 12:27
 */
class Category extends CI_Controller
{
    public $tbl = "tbl_main_category";
    public $controll = "Category";

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
        $id = base64_decode($ids);
        $limit = 12;
        $con = array(
            'tbl_main_category_id' => $id
        );
        $td = $this->data_model->Get_data_all('tbl_product', $con);

        if (count($td) > 0) {
            $data['pages'] = ceil(count($td) / 12);
        } else {
            $data['pages'] = 0;
        }

        $data['config'] = $this->data_model->Get_data('tbl_config');
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $data['sm'] = $this->data_model->Get_data('tbl_social_media');
        $data['mc'] = $this->data_model->Get_data('tbl_main_category');
        $data['configration'] = array('datas' => ceil(12 / 4), 'tp' => 12);
//        for($i=1;$i<=ceil(8/4);$i++){
        if (!isset($page)) {
            $data['products'] = $this->data_model->Custome_query('select * from tbl_product where tbl_main_category_id=' . $id . ' and product_name!="" order by tbl_product_id desc LIMIT  0,12');
        } else {
            $fl = ($page - 1) * $limit;
            $data['products'] = $this->data_model->Custome_query('select * from tbl_product where tbl_main_category_id=' . $id . ' and product_name!="" order by tbl_product_id desc LIMIT ' . $fl . ',12');
        }
//        }
        $this->load->view('Client/shop', $data);
    }

    public function getdata($name)
    {
        extract($_REQUEST);
        extract($_POST);
        if (isset($name)) {
            $limit = 12;
            $sql = "select * from tbl_main_category where name= '" . urldecode($name) . "'";
            $nm = $this->data_model->Custome_query($sql);
            if (count($nm) > 0) {
                $con1 = array(
                    'tbl_main_category_id' => $nm[0]['tbl_main_category_id']
                );
                $td = $this->data_model->Get_data_all('tbl_product', $con1);

                if (count($td) > 0) {
                    $data['pages'] = ceil(count($td) / 12);
                } else {
                    $data['pages'] = 0;
                }

                $data['config'] = $this->data_model->Get_data('tbl_config');
                $data['contact'] = $this->data_model->Get_data('tbl_contact');
                $data['sm'] = $this->data_model->Get_data('tbl_social_media');
                $data['mc'] = $this->data_model->Get_data('tbl_main_category');
                $data['configration'] = array('datas' => ceil(12 / 4), 'tp' => 12);
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
//        for($i=1;$i<=ceil(8/4);$i++){
                if (!isset($page)) {
                    $data['products'] = $this->data_model->Custome_query('select * from tbl_product p, tbl_main_category tmc  where p.tbl_main_category_id=tmc.tbl_main_category_id and p.tbl_main_category_id=' . $nm[0]['tbl_main_category_id'] . ' and p.product_name!="" order by p.tbl_product_id desc LIMIT  0,12');
                } else {
                    $fl = ($page - 1) * $limit;
                    $data['products'] = $this->data_model->Custome_query('select * from tbl_product p, tbl_main_category tmc  where p.tbl_main_category_id=tmc.tbl_main_category_id and p.tbl_main_category_id=' . $nm[0]['tbl_main_category_id'] . ' and p.product_name!="" order by p.tbl_product_id desc LIMIT ' . $fl . ',12');
                }
                $this->load->view('Client/shop', $data);
            }
            else {

//                $data['config'] = $this->data_model->Get_data('tbl_config');
//                $data['contact'] = $this->data_model->Get_data('tbl_contact');
//                $data['sm'] = $this->data_model->Get_data('tbl_social_media');
//                $data['mc'] = $this->data_model->Get_data('tbl_main_category');
//                show_404();
                redirect(base_url().'PageNotFound');
            }
        } else {
            redirect(base_url());
        }
    }

    public function Add_data()
    {
        extract($_POST);
        $data = array(
            'name' => $name,
            'created_date' => date('Y-m-d H:i:s')
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
            'name' => $name,
            'modified_date' => date('Y-m-d H:i:s')
        );
        $this->data_model->Update_data($this->tbl, $con, $data);
        redirect(base_url() . $this->controll . '?alert=1');
    }
} 
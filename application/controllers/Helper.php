<?php

/**
 * Created by PhpStorm.
 * User: daksh
 * Date: 12/06/16
 * Time: 12:41
 */
class Helper extends CI_Controller
{
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

    public function Delete_data()
    {
        extract($_POST);
        $con = array(
            $tbl . '_id' => $id
        );
        $this->data_model->Deleta_data($tbl, $con);
    }

    public function Change_status()
    {
        extract($_POST);
        echo $this->data_model->change_status($id, $tbl);
    }

    public function Edit_data()
    {
        extract($_POST);
        $con = array(
            $tbl . '_id' => $id
        );
        $data = $this->data_model->Get_data_all($tbl, $con);
        echo json_encode(array('data' => $data));
    }

    public function Logout()
    {
        $this->session->sess_destroy();
        header('location:' . base_url() . 'Cp');
    }

    public function Logout1()
    {
        $this->session->sess_destroy();
        header('location:' . base_url());
    }
    
    public function Add_data(){
        extract($_POST);
        if(!empty($_POST)){
            $data = array(
                
            );
        } else {
            header('location:' . base_url());
        }
    }

    public function checklogin()
    {
        extract($_POST);
//        print_r($_POST);
//        die;
        $cust = $this->data_model->check_login_cust($username, $password);
        $cust_active = $this->data_model->check_login_cust_active($username, $password);
        if(count($cust) > 0) {
            $data = array(
                'username' => $cust[0]['email'],
                'password' => $cust[0]['pass'],
                'id' => $cust[0]['tbl_customer_id'],
                'validated' => true
            );
            $this->session->set_userdata($data);
            $hua = $_SERVER['HTTP_USER_AGENT'];
            $ra = $_SERVER['REMOTE_ADDR'];
            $fstr = $hua . '-' . $ra;
            $crt = $this->data_model->Custome_query('select * from tbl_shoping_cart_ip WHERE tbl_customer_id="' . md5($fstr) . '"');
            if(count($crt)>0){
                foreach ($crt as $dt){
                    $check = $this->data_model->Custome_query('select * from tbl_shoping_cart WHERE tbl_customer_id=' . $cust[0]['tbl_customer_id'] . ' and tbl_product_id=' . $dt['tbl_product_id']);
                    if(count($check)>0){
                        $this->data_model->Custome_query_exc("update tbl_shoping_cart set qty=" . $check[0]['qty'] . "+".$dt['qty']." WHERE tbl_shoping_cart_id=" . $check[0]['tbl_shoping_cart_id']);
                    } else {
                        $data1= array(
                            'tbl_product_id' => $dt['tbl_product_id'],
                            'tbl_customer_id' => $cust[0]['tbl_customer_id'],
                            'qty' => $dt['qty'],
                            'c_date' => $dt['c_date'],
                        );
                        $this->data_model->Insert_data('tbl_shoping_cart', $data1);
                    }
                    $this->data_model->Custome_query_exc('delete from tbl_shoping_cart_ip WHERE tbl_customer_id="' . md5($fstr) . '"');
                }
            }
            echo json_encode(array('success'=>'1', 'msg'=>'Sorry Your Account Not Activate'));
        }
        elseif (count($cust_active)>0) {
            echo json_encode(array('success'=>'2','msg'=>'Sorry Your Account Not Activate'));
        } else {
            echo json_encode(array('success'=>'3','msg'=>'Sorry Invalid Username & Password'));
        }
    }
} 
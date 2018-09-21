<?php

class Order extends CI_Controller
{

    public $tbl = "tbl_order";
    public $controll = "Order";

    public function __construct()
    {
        parent::__construct();
    }

    public function Validation()
    {
        if ($this->session->userdata('id') == null) {
            header('location:' . base_url() . 'Cp?alert=2');
        }
    }

    public function index()
    {
        if ($this->session->userdata('id') == null) {
            $data[$this->tbl] = array();
            $hua = $_SERVER['HTTP_USER_AGENT'];
            $ra = $_SERVER['REMOTE_ADDR'];
            $fstr = $hua . '-' . $ra;
            $data['cart'] = $this->data_model->Custome_query('select * from tbl_shoping_cart_ip WHERE tbl_customer_id="' . md5($fstr) . '"');
            $data['cartitem'] = $this->data_model->Custome_query('select * from tbl_shoping_cart_ip tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id="' . md5($fstr) . '"  limit 0,2');
            $data['tbl_shoping_cart'] = $this->data_model->Custome_query("select * from tbl_shoping_cart_ip tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id where tbl_customer_id='" . md5($fstr) . "'");

        } else {
            $data['cart'] = $this->data_model->Custome_query('select * from tbl_shoping_cart WHERE tbl_customer_id=' . $_SESSION['id']);
            $data['cartitem'] = $this->data_model->Custome_query('select * from tbl_shoping_cart tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id=' . $_SESSION['id'] . ' limit 0,2');
            $data['tbl_shoping_cart'] = $this->data_model->Custome_query("select * from tbl_shoping_cart tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id where tbl_customer_id=" . $_SESSION['id']);
            $data['add'] = $this->data_model->Custome_query("select * from tbl_customer_address where tbl_customer_id=" . $_SESSION['id']);
            $data['order']=$this->data_model->Custome_query("SELECT tor.tbl_order_id,tor.qty,tor.price,date(tor.cdate) as dat ,tor.status,tp.product_name,tp.image,tc.email,tca.name,tca.address,tca.city,tca.state,tca.country,tca.pincode,tca.phone_no FROM tbl_order tor LEFT JOIN tbl_product tp on tor.tbl_product_id=tp.tbl_product_id LEFT JOIN tbl_customer tc on tor.tbl_customer_id=tc.tbl_customer_id LEFT JOIN tbl_customer_address tca on tor.address_id=tca.tbl_customer_address_id WHERE  tor.tbl_customer_id=" . $_SESSION['id']." order by tbl_order_id desc");
        }

        $data['config'] = $this->data_model->Get_data('tbl_config');
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $data['sm'] = $this->data_model->Get_data('tbl_social_media');
        $data['mc'] = $this->data_model->Get_data('tbl_main_category');
        $this->load->view('Client/order', $data);
    }

    public function cancleOrder($id)
    {
        extract($_REQUEST);
        if(isset($id)){
            $this->data_model->Custome_query_exc("UPDATE tbl_order SET status = '1' WHERE tbl_order_id=".base64_decode($id));
//            echo json_encode(array('success' => '1'));
            header("location:".base_url()."Order");
        } else {
            header("location:".base_url());
        }


    }


}

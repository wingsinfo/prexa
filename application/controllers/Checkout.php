<?php

/**
 * Created by PhpStorm.
 * User: daksh
 * Date: 12/06/16
 * Time: 12:27
 */
class Checkout extends CI_Controller
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
        }
        $data['config'] = $this->data_model->Get_data('tbl_config');
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $data['sm'] = $this->data_model->Get_data('tbl_social_media');
        $data['mc'] = $this->data_model->Get_data('tbl_main_category');
        $this->load->view('Client/checkout', $data);
    }

    public function chkout()
    {
        extract($_POST);
        if (!empty($_POST)) {
            $cnt = $this->data_model->Custome_query("select * from tbl_shoping_cart tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id where tbl_customer_id=" . $_SESSION['id']);
            $add = $this->data_model->Custome_query("select * from tbl_customer_address where is_default=1  and tbl_customer_id=" . $_SESSION['id']);
            $cust = $this->data_model->Custome_query("select * from tbl_customer where tbl_customer_id=" . $_SESSION['id']);
            if (count($cnt) > 0) {
                foreach ($cnt as $d) {
                    $data = array(
                        'tbl_customer_id' => $d['tbl_customer_id'],
                        'tbl_product_id' => $d['tbl_product_id'],
                        'qty' => $d['qty'],
                        'price' => $d['mrp'],
                        'address_id' => $add[0]['tbl_customer_address_id'],
                        'cdate' => date('Y-m-d H:i:s'),
                        'payment_type' => $payment
                    );
                    $lid = $this->data_model->Insert_data_id('tbl_order', $data);
                    if ($payment == 0) {
                        $paymentMethod = 'COD';
                    } else {
                        $paymentMethod = 'Prepaid';
                    }
                    $msg = $this->msg("Dear User, " . $add[0]['name'] . "<br>Your Order of ".$d['product_name']." Rs. " . $d['qty'] * $d['mrp'] . " is Successfully Placed Through " . $paymentMethod . ",<br> Your Order id is : VMORD" . $lid);
                    $title = "Vastamela";
                    $subject = "Order Placed";
                    $this->sentmail($cust[0]['email'], $title, $subject, $msg);
                }

                $this->data_model->Custome_query_exc("delete from tbl_shoping_cart where tbl_customer_id=" . $_SESSION['id']);
                header("location:" . base_url() . "Order");
            }
        }
    }


    public function sentmail($email, $title, $subject, $msg)
    {
        $ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.googlemail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "vipul.onus@gmail.com";
        $config['smtp_pass'] = "12301230";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";

        $ci->email->initialize($config);

        $ci->email->from("vipul.onus@gmail.com", $title);
        $list = array($email);
        $ci->email->to($list);
        $ci->email->subject($subject);
        $ci->email->message($msg);
        $ci->email->send();
    }

    public function msg($msg)
    {
        $m = "<table style='border-collapse:collapse;border-left:1px solid #e4e4e4;border-right:1px solid #e4e4e4;'><tbody><tr><td style='background-color:#f8f8f8;padding-left:18px;border-bottom:1px solid #e4e4e4;border-top:1px solid #e4e4e4'></td><td style='padding:13px 10px 8px 0px;background-color:#f8f8f8;border-top:1px solid #e4e4e4;border-bottom:1px solid #e4e4e4' valign='middle'><a href='http://vastramela.com' style='text-decoration:none' target='_blank'> <img class='CToWUd' src='http://vastramela.com/Assets/images/logo.png' style='height:100px;width:215px;' alt='Vastramela' border='0' height='25'> </a></td><td style='background-color:#f8f8f8;padding-left:18px;border-top:1px solid #e4e4e4;border-bottom:1px solid #e4e4e4'></td></tr><tr><td style='padding-left:32px'></td><td style='padding:18px 0px 0px 0px;vertical-align:middle;line-height:20px;font-family:Arial'><span style='color:#262626;font-size:22px'>Order Placed</span><div style='vertical-align:top;padding-top:6px;color:#aaa;font-size:12px;line-height:16px'><span style='padding:0px 4px 0px 4px'></span> <a style='color:#aaa;text-decoration:none'><span class='aBn' data-term='goog_524339017'><span class='aQJ'>" . date('M d,Y') . "</span></span></a></div></td><td style='padding-left:32px'></td></tr><tr><td style='padding-left:18px'></td><td style='padding:16px 0px 12px 0px;border-bottom:1px solid #e4e4e4'><span style='font-size:12px;color:#737373'></span></td><td style='padding-right:18px'></td></tr><tr><td style='padding-left:18px'></td><td style='padding:18px 0px 12px 0px;vertical-align:top;font-family:Arial'><a href='' style='text-decoration:none' target='_blank'></a><div><span style='padding:0px 6px 0px 0px'> <a href='' style='color:#427fed;display:inline;text-decoration:none;font-size:16px;line-height:20px' target='_blank'> <span>" . $msg . "</span></a> </span></div></td><td style='padding-right:18px'></td></tr><tr><td colspan='3' style='background-color:#f8f8f8;font-size:14px;vertical-align:middle;text-align:center;padding:10px 10px 10px 10px;line-height:20px;border:1px solid #e4e4e4;font-family:Arial' valign='middle'>Powered By <a href='http://vastramela.com' style='text-decoration:none'>Vastra Mela</a></td></tr></tbody></table>";
        return $m;
    }

    public function address()
    {
        extract($_POST);
        if (count($_POST) > 0) {
            $data = array(
                'name' => $name,
                'address' => $add,
                'state' => $state,
                'city' => $city,
                'pincode' => $pin,
                'phone_no' => $pno,
                'tbl_customer_id' => $_SESSION['id']
            );
            $lid = $this->data_model->Insert_data_id('tbl_customer_address', $data);
            if ($lid) {
                echo json_encode(array('success' => '1'));
            } else {
                echo json_encode(array('success' => '2'));
            }
        }
    }

    function setdefault()
    {
        extract($_POST);
        $cnt = $this->data_model->Custome_query("select * from tbl_customer_address WHERE tbl_customer_address_id=" . $upid);
        if ($cnt > 0) {
            $this->data_model->Custome_query_exc("update tbl_customer_address set is_default=0 WHERE tbl_customer_id=" . $_SESSION['id']);
            $this->data_model->Custome_query_exc("update tbl_customer_address set is_default=1 WHERE tbl_customer_address_id=" . $upid);
            echo json_encode(array('success' => '1'));
        }
    }

}

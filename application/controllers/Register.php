<?php

/**
 * Created by PhpStorm.
 * User: daksh
 * Date: 12/06/16
 * Time: 12:27
 */
class Register extends CI_Controller {

    public $tbl = "tbl_customer";
    public $controll = "";

    public function __construct() {
        parent::__construct();
//        $this->Validation();
    }

    public function Validation() {
        if ($this->session->userdata('id') == null) {
            header('location:' . base_url() . 'Cp?alert=2');
        }
    }

    public function index() {
        if ($this->session->userdata('id') == null) {
            $data[$this->tbl] = array();
            $hua = $_SERVER['HTTP_USER_AGENT'];
            $ra = $_SERVER['REMOTE_ADDR'];
            $fstr = $hua . '-' . $ra;
            $data['cart'] = $this->data_model->Custome_query('select * from tbl_shoping_cart_ip WHERE tbl_customer_id="' . md5($fstr) . '"');
            $data['cartitem'] = $this->data_model->Custome_query('select * from tbl_shoping_cart_ip tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id="' . md5($fstr) . '"  limit 0,2');
        } else {

            $data['cart'] = $this->data_model->Custome_query('select * from tbl_shoping_cart WHERE tbl_customer_id=' . $_SESSION['id']);
            $data['cartitem'] = $this->data_model->Custome_query('select * from tbl_shoping_cart tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id WHERE tbl_customer_id=' . $_SESSION['id'] . ' limit 0,2');
            $data[$this->tbl] = $this->data_model->Custome_query("select * from tbl_shoping_cart tsc LEFT JOIN tbl_product tp on tsc.tbl_product_id=tp.tbl_product_id where tbl_customer_id=" . $_SESSION['id']);
        }
        $data['config'] = $this->data_model->Get_data('tbl_config');
        $data['contact'] = $this->data_model->Get_data('tbl_contact');
        $data['sm'] = $this->data_model->Get_data('tbl_social_media');
        $data['mc'] = $this->data_model->Get_data('tbl_main_category');
        $this->load->view('Client/Register', $data);
    }

    public function Add_data() {
        extract($_POST);

        if (!empty($_POST)) {
            if (!empty($mobile) && !empty($email) && !empty($password)) {
                  $cnt = $this->data_model->Custome_query('select * from tbl_customer where email="' . $email . '" or phno=' . $mobile);
                $alphabet = "ABCDEFGHJKLMNOPQRSTUWXYZabcdefghigklmnopqrstuvwxyz1234567890";
                $pass = array();
                $alphaLength = strlen($alphabet) - 1;
                for ($j = 0; $j < 7; $j++) {
                    $n = rand(0, $alphaLength);
                    $pass[] = $alphabet[$n];
                }
                if (count($cnt) > 0) {
                    redirect(base_url() . 'Register?alert=4');
                } else {
                    $data = array(
                        'email' => $email,
                        'pass' => $password,
                        'phno' => $mobile,
                        'status' => 0,
                        'token' => implode($pass),
                        'c_date' => date('Y-m-d H:i:s'),
                    );
                    $id= $this->data_model->Insert_data_id($this->tbl, $data);
                    $msg = $this->msg("Dear User, " . $email . "<br>Your Account is Successfully created on Vastramela.com,<br> TO Activate Your Account Please Click Blow Link <br><a href='".base_url()."Register/active?sid=". base64_encode($id)."&token=".implode($pass)."'>Activate Account</a>");
                    $title = "Vastamela";
                    $subject = "Account Activation";
                    $this->sentmail($email, $title, $subject, $msg);
                    redirect(base_url() . 'Register?alert=1');
                    
                }
            } else {
                redirect(base_url() . 'Register?alert=3');
            }
        } else {
            redirect(base_url() . 'Register?alert=2');
        }
    }

    public function Update_data() {
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

    public function remove() {
        if (isset($_SESSION['id'])) {
            $this->data_model->Custome_query('delete from tbl_shoping_cart where tbl_customer_id=' . $_SESSION['id']);
        } else {
            redirect(base_url());
        }
    }

    public function active() {
        extract($_REQUEST);
        if (isset($sid) != "" and isset($token) != "") {
            $data = $this->data_model->Custome_query('select * from tbl_customer WHERE tbl_customer_id="' . base64_decode($sid) . '" and token="' . $token . '"');
            if (count($data) > 0) {
                $this->data_model->Custome_query_exc("update $this->tbl set status=1 WHERE tbl_customer_id=" . base64_decode($sid));
                redirect(base_url() . 'Register?alert=5');
            } else {
                redirect(base_url() . 'Register?alert=6');
            }
        } else {
            redirect(base_url());
        }
    }
    
    
    
    public function sentmail($email,$title,$subject,$msg){
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

            $ci->email->from("vipul.onus@gmail.com",$title);
            $list = array($email);
            $ci->email->to($list);
            $ci->email->subject($subject);
            $ci->email->message($msg);
            $ci->email->send();
    }

    public function msg($msg) {
        $m = "<table style='border-collapse:collapse;border-left:1px solid #e4e4e4;border-right:1px solid #e4e4e4;'><tbody><tr><td style='background-color:#f8f8f8;padding-left:18px;border-bottom:1px solid #e4e4e4;border-top:1px solid #e4e4e4'></td><td style='padding:13px 10px 8px 0px;background-color:#f8f8f8;border-top:1px solid #e4e4e4;border-bottom:1px solid #e4e4e4' valign='middle'><a href='http://vastramela.com' style='text-decoration:none' target='_blank'> <img class='CToWUd' src='http://vastramela.com/Assets/images/logo.png' style='height:100px;width:215px;' alt='Vastramela' border='0' height='25'> </a></td><td style='background-color:#f8f8f8;padding-left:18px;border-top:1px solid #e4e4e4;border-bottom:1px solid #e4e4e4'></td></tr><tr><td style='padding-left:32px'></td><td style='padding:18px 0px 0px 0px;vertical-align:middle;line-height:20px;font-family:Arial'><span style='color:#262626;font-size:22px'>Account Activation</span><div style='vertical-align:top;padding-top:6px;color:#aaa;font-size:12px;line-height:16px'><span style='padding:0px 4px 0px 4px'></span> <a style='color:#aaa;text-decoration:none'><span class='aBn' data-term='goog_524339017'><span class='aQJ'>".date('M d,Y')."</span></span></a></div></td><td style='padding-left:32px'></td></tr><tr><td style='padding-left:18px'></td><td style='padding:16px 0px 12px 0px;border-bottom:1px solid #e4e4e4'><span style='font-size:12px;color:#737373'></span></td><td style='padding-right:18px'></td></tr><tr><td style='padding-left:18px'></td><td style='padding:18px 0px 12px 0px;vertical-align:top;font-family:Arial'><a href='' style='text-decoration:none' target='_blank'></a><div><span style='padding:0px 6px 0px 0px'> <a href='' style='color:#427fed;display:inline;text-decoration:none;font-size:16px;line-height:20px' target='_blank'> <span>".$msg."</span></a> </span></div></td><td style='padding-right:18px'></td></tr><tr><td colspan='3' style='background-color:#f8f8f8;font-size:14px;vertical-align:middle;text-align:center;padding:10px 10px 10px 10px;line-height:20px;border:1px solid #e4e4e4;font-family:Arial' valign='middle'>Powered By <a href='http://vastramela.com' style='text-decoration:none'>Vastra Mela</a></td></tr></tbody></table>";
        return $m;
    }

}

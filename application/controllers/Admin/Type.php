<?php

/**
 * Created by PhpStorm.
 * User: daksh
 * Date: 12/06/16
 * Time: 12:27
 */
class Type extends CI_Controller
{
    public $tbl = "tbl_type";
    public $controll = "Type";

    public function __construct()
    {
        parent::__construct();
        $this->Validation();
    }

    public function Validation()
    {
        if ($this->session->userdata('aid') == null) {
            header('location:' . base_url() . 'Cp?alert=2');
        }
    }

    public function index()
    {
        $data[$this->tbl] = $this->data_model->Get_data($this->tbl);
        $data['tbl_product_type']=$this->data_model->Get_data('tbl_product_type');
        foreach($data[$this->tbl] as $dt){
            $con=array(
                'tbl_product_type_id'=>$dt['tbl_product_type_id']
            );
            $data['pro'][$dt['tbl_product_type_id']]=$this->data_model->Get_data_all('tbl_product_type',$con);
        }
        $this->load->view('Admin/' . $this->controll, $data);
    }

    public function Add_data()
    {
        extract($_POST);
        $data = array(
            'tbl_product_type_id' => $ptid,
            'name' => $name,
            'created_date' => date('Y-m-d H:i:s')
        );
        $this->data_model->Insert_data($this->tbl, $data);
        redirect(base_url() .'Admin/'. $this->controll . '?alert=1');
    }

    public function Update_data()
    {
        extract($_POST);
        $con = array(
            $this->tbl . '_id' => $id
        );
        $data = array(
            'tbl_product_type_id' => $ptid,
            'name' => $name,
            'modefied_date' => date('Y-m-d H:i:s')
        );
        $this->data_model->Update_data($this->tbl, $con, $data);
        redirect(base_url() .'Admin/'. $this->controll . '?alert=1');
    }
} 
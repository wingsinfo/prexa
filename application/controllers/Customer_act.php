<?php
    
    /**
     * Created by PhpStorm.
     * User: daksh
     * Date: 12/06/16
     * Time: 12:27
     */
    class Customer_act extends CI_Controller
    {
        public $tbl = "tbl_customer";
        public $controll = "Customer_act";
        
        public function __construct()
        {
            parent::__construct();
            $this->Validation();
        }
        
        public function Validation()
        {
            if ($this->session->userdata('id') == null) {
                header('location:' . base_url() . 'Cp?alert=2');
            }
        }
        
        public function index()
        {
            $data[$this->tbl] = $this->data_model->Get_data($this->tbl);
            $this->load->view('Admin/' . $this->controll, $data);
        }
                
    }
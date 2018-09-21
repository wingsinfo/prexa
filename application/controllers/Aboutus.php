<?php

/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/06/16
 * Time: 12:27
 */
class Aboutus extends CI_Controller
{
    public $tbl = "tbl_about_us";
    public $controll = "Aboutus";

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data[$this->tbl] = $this->data_model->Get_data($this->tbl);
        $this->load->view($this->controll, $data);
    }

} 
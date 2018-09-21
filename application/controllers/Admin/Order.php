<?php

/**
 * Created by PhpStorm.
 * User: daksh
 * Date: 12/06/16
 * Time: 12:27
 */
class Order extends CI_Controller {

    public $tbl = "tbl_order";
    public $controll = "Order";

    public function __construct() {
        parent::__construct();
        $this->Validation();
    }

    public function Validation() {
        if ($this->session->userdata('aid') == null) {
            header('location:' . base_url() . 'Cp?alert=2');
        }
    }

    public function index() {
        $data[$this->tbl] = $this->data_model->Get_data($this->tbl);
        $this->load->view('Admin/' . $this->controll, $data);
    }

    public function getData() {
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'tor.tbl_order_id',
            1 => 'tp.product_name',
            2 => 'tp.image',
            3 => 'tca.name',
            4 => 'tca.address',
            5 => 'tca.city',
            6 => 'tca.state',
            7 => 'tca.pincode',
            8 => 'tca.phone_no',
            9 => 'tor.qty',
            10 => 'tor.price',
            11 => 'tor.cdate',
        );

        $sql = "SELECT tor.tbl_order_id,tc.email,tp.product_name,tp.image,tp.SKU_NO,tca.name,tca.address,tca.city,tca.state,tca.pincode,tca.phone_no,tor.qty,tor.price,tor.cdate,tp.is_csv FROM tbl_order tor LEFT JOIN tbl_customer tc on tor.tbl_customer_id=tc.tbl_customer_id LEFT JOIN tbl_product tp on tor.tbl_product_id=tp.tbl_product_id LEFT JOIN tbl_customer_address tca on tor.address_id=tca.tbl_customer_address_id";
        $query = $this->data_model->Custome_query($sql);
        $totalData = count($query);
        $totalFiltered = $totalData;
//        $sql = "SELECT tor.tbl_order_id,tc.email,tp.product_name,tp.image,tp.SKU_NO,tca.name,tca.address,tca.city,tca.state,tca.pincode,tca.phone_no,tor.qty,tor.price,tor.cdate FROM tbl_order tor LEFT JOIN tbl_customer tc on tor.tbl_customer_id=tc.tbl_customer_id LEFT JOIN tbl_product tp on tor.tbl_product_id=tp.tbl_product_id LEFT JOIN tbl_customer_address tca on tor.address_id=tca.tbl_customer_address_id";
        if (!empty($requestData['search']['value'])) {
            $sql .= " AND ( tor.tbl_order_id LIKE '" . $requestData['search']['value'] . "%' ";
            $sql .= " OR tp.product_name LIKE '" . $requestData['search']['value'] . "%' ";
            $sql .= " OR tp.image LIKE '" . $requestData['search']['value'] . "%' ";
            $sql .= " OR tca.name LIKE '" . $requestData['search']['value'] . "%' ";
            $sql .= " OR tca.address LIKE '" . $requestData['search']['value'] . "%' ";
            $sql .= " OR tca.city LIKE '" . $requestData['search']['value'] . "%' ";
            $sql .= " OR tca.state LIKE '" . $requestData['search']['value'] . "%' ";
            $sql .= " OR tca.pincode LIKE '" . $requestData['search']['value'] . "%' ";
            $sql .= " OR tca.phone_no LIKE '" . $requestData['search']['value'] . "%' ";
            $sql .= " OR tor.qty LIKE '" . $requestData['search']['value'] . "%' ";
            $sql .= " OR tor.price LIKE '" . $requestData['search']['value'] . "%' ";
            $sql .= " OR tor.cdate LIKE '" . $requestData['search']['value'] . "%' )";
        }

        $query = $this->data_model->Custome_query($sql);
        $totalFiltered = count($query);

        $sql .= " ORDER BY " . $columns[$requestData['order'][0]['column']] . "   " . $requestData['order'][0]['dir'] . "   LIMIT " . $requestData['start'] . " ," . $requestData['length'] . "   ";  // adding length
        $query = $this->data_model->Custome_query($sql);


        $data = array();
        $cnt = $requestData['start'] + 1;
        foreach ($query as $dt) {
            if ($dt['is_csv'] == 1) {
                $mgs = $dt['image'];
            } else {
                $mgs = base_url() . "Assets/images/web_img/Product/" . $dt['image'];
            }
            $nestedData = array();
            $nestedData[] = $cnt++;
            $nestedData[] = "VMORD" . $dt['tbl_order_id'];
            $nestedData[] = $dt['product_name'];
            $nestedData[] = "<img src='" . $mgs . "' height='100' width='100'>";
            $nestedData[] = $dt['name'];
            $nestedData[] = $dt["address"];
            $nestedData[] = $dt["city"];
            $nestedData[] = $dt["state"];
            $nestedData[] = $dt["pincode"];
            $nestedData[] = $dt["phone_no"];
            $nestedData[] = $dt["qty"];
            $nestedData[] = $dt["price"];
            $nestedData[] = $dt["cdate"];
//            $nestedData[] = '<div class="form-group col-md-3 col-lg-3"><button type="button" class="btn btn-info" onclick="getimg(' . $dt['tbl_product_id'] . ');">Images</button></div><div class="form-group col-md-2 col-lg-2"><button class="btn btn-success" type="button" onclick="gettype(' . $dt['tbl_product_id'] . ');">Type</button></div><div class="form-group col-md-2 col-lg-2"><button class="btn btn-primary" type="button" onclick="getdata(' . $dt['tbl_product_id'] . ');">Edit</button></div><div class="form-group col-md-2 col-lg-2"><button class="btn btn-danger" type="button" onclick="deletes(' . $dt['tbl_product_id'] . ');">Delete</button></div>';

            $data[] = $nestedData;
        }

        $json_data = array(
            "draw" => intval($requestData['draw']),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );

        echo json_encode($json_data);
    }

}

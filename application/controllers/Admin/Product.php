<?php

/**
 * Created by PhpStorm.
 * User: daksh
 * Date: 12/06/16
 * Time: 12:27
 */
class Product extends CI_Controller
{

    public $tbl = "tbl_product";
    public $controll = "Product";

    public function __construct()
    {
        parent::__construct();
        $this->Validation();
        $this->load->helper('csv');
    }

    public function Validation()
    {
        if ($this->session->userdata('aid') == null) {
            header('location:' . base_url() . 'Cp?alert=2');
        }
    }

    public function index()
    {
        $data['pt'] = $this->data_model->Get_data('tbl_product_type');
        foreach ($data['pt'] as $dt) {
            $con = array(
                'tbl_product_type_id' => $dt['tbl_product_type_id']
            );
            $data['t'][$dt['tbl_product_type_id']] = $this->data_model->Get_data_all('tbl_type', $con);
        }
        $data['cat'] = $this->data_model->Get_data('tbl_main_category');
        $data[$this->tbl] = $this->data_model->Get_data($this->tbl);
        $this->load->view('Admin/' . $this->controll, $data);
    }

    public function Get_product()
    {
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'tp.tbl_product_id',
            1 => 'tp.tbl_product_id',
            2 => 'tmc.name',
            3 => 'tp.product_name',
            4 => 'tp.mrp',
            5 => 'tp.temp_rate',
            6 => 'tp.stock',
            7 => 'tp.tbl_product_id'
        );

        $sql = "SELECT * FROM tbl_product tp LEFT JOIN tbl_main_category tmc ON tp.tbl_main_category_id = tmc.tbl_main_category_id";
        $query = $this->data_model->Custome_query($sql);
        $totalData = count($query);
        $totalFiltered = $totalData;

        $sql = "SELECT * FROM tbl_product tp LEFT JOIN tbl_main_category tmc ON tp.tbl_main_category_id = tmc.tbl_main_category_id";

        if (!empty($requestData['search']['value'])) {
            $sql .= " AND ( tmc.name LIKE '" . $requestData['search']['value'] . "%' ";
            $sql .= " OR tp.product_name LIKE '" . $requestData['search']['value'] . "%' ";
            $sql .= " OR tp.mrp LIKE '" . $requestData['search']['value'] . "%' ";
            $sql .= " OR tp.temp_rate LIKE '" . $requestData['search']['value'] . "%' ";
            $sql .= " OR tp.stock LIKE '" . $requestData['search']['value'] . "%' )";
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
            $nestedData[] = "<img src='" . $mgs . "' height='100' width='100'>";
            $nestedData[] = $dt['name'];
            $nestedData[] = $dt["product_name"];
            $nestedData[] = $dt["mrp"];
            $nestedData[] = $dt["temp_rate"];
            $nestedData[] = $dt["stock"];
            $nestedData[] = '<div class="form-group col-md-3 col-lg-3"><button type="button" class="btn btn-info" onclick="getimg(' . $dt['tbl_product_id'] . ');">Images</button></div><div class="form-group col-md-2 col-lg-2"><button class="btn btn-success" type="button" onclick="gettype(' . $dt['tbl_product_id'] . ');">Type</button></div><div class="form-group col-md-2 col-lg-2"><button class="btn btn-primary" type="button" onclick="getdata(' . $dt['tbl_product_id'] . ');">Edit</button></div><div class="form-group col-md-2 col-lg-2"><button class="btn btn-danger" type="button" onclick="deletes(' . $dt['tbl_product_id'] . ');">Delete</button></div>';

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

    public function Add_data()
    {
        extract($_POST);
        $path = $_SERVER['DOCUMENT_ROOT'] . '/Assets/images/web_img/' . $this->controll . '/' . $_FILES['img']['name'];
        if (move_uploaded_file($_FILES['img']['tmp_name'], $path)) {
            $prodata = array(
                'tbl_main_category_id' => $tmcid,
                'product_name' => $pn,
                'sort_description' => $sd,
                'long_description' => $ld,
                'mrp' => $mrp,
                'rp' => $rp,
                'weight' => $weight,
                'stock' => $stock,
                'temp_rate' => $temp_rate,
                'c_date' => date('Y-m-d H:i:s'),
                'image' => $_FILES['img']['name']
            );
            $lid = $this->data_model->Insert_data_id('tbl_product', $prodata);
        }
        for ($i = 0; $i <= count($this->input->post('type')) - 1; $i++) {
            $protype = array(
                'tbl_product_id' => $lid,
                'tbl_type_id' => $this->input->post('type[' . $i . ']'),
                'c_date' => date('Y - m - d H:i:s')
            );
            $this->data_model->Insert_data('tbl_addpro_type', $protype);
        }
        for ($j = 0; $j <= count($_FILES['imgs']['name']) - 1; $j++) {
            $path = $_SERVER['DOCUMENT_ROOT'] . '/Assets/images/web_img/Product/' . $_FILES['imgs']['name'][$j];
            if (move_uploaded_file($_FILES['imgs']['tmp_name'][$j], $path)) {
                $proimg = array(
                    'tbl_product_id' => $lid,
                    'img' => $_FILES['imgs']['name'][$j],
                    'c_date' => date('Y - m - d H:i:s')
                );
                $this->data_model->Insert_data('tbl_addpro_img', $proimg);
            }
        }
        redirect(base_url() . 'Admin/' . $this->controll . '?alert=1');
    }

    public function Update_data()
    {
        extract($_POST);
        $path = $_SERVER['DOCUMENT_ROOT'] . '/Assets/images/web_img/' . $this->controll . '/' . $_FILES['img']['name'];
        if (move_uploaded_file($_FILES['img']['tmp_name'], $path)) {
            $prodata = array(
                'tbl_main_category_id' => $tmcid,
                'product_name' => $pn,
                'sort_description' => $sd,
                'long_description' => $ld,
                'mrp' => $mrp,
                'rp' => $rp,
                'weight' => $weight,
                'stock' => $stock,
                'temp_rate' => $temp_rate,
                'm_date' => date('Y-m-d H:i:s'),
                'image' => $_FILES['img']['name']
            );
        } else {
            $prodata = array(
                'tbl_main_category_id' => $tmcid,
                'product_name' => $pn,
                'sort_description' => $sd,
                'long_description' => $ld,
                'mrp' => $mrp,
                'rp' => $rp,
                'weight' => $weight,
                'stock' => $stock,
                'temp_rate' => $temp_rate,
                'm_date' => date('Y-m-d H:i:s')
            );
        }
        $con = array(
            $this->tbl . '_id' => $id
        );
        $this->data_model->Update_data($this->tbl, $con, $prodata);
        redirect(base_url() . 'Admin/' . $this->controll . '?alert=1');
    }

    public function Edit_type()
    {
        extract($_POST);
        $con = array(
            'tbl_product_id' => $id
        );
        $data = $this->data_model->Get_data_all($tbl, $con);
        echo json_encode(array('data' => $data));
    }

    public function Update_type()
    {
        extract($_POST);
        $con = array(
            'tbl_product_id' => $id
        );
        $this->data_model->Deleta_data('tbl_addpro_type', $con);
        for ($i = 0; $i <= count($this->input->post('type')) - 1; $i++) {
            $protype = array(
                'tbl_product_id' => $id,
                'tbl_type_id' => $this->input->post('type[' . $i . ']'),
                'c_date' => date('Y - m - d H:i:s')
            );
            $this->data_model->Insert_data('tbl_addpro_type', $protype);
        }
        redirect(base_url() . 'Admin/' . $this->controll . '?alert=1');
    }

    public function Update_img()
    {
        extract($_POST);
        if (isset($_FILES['imgs']['name'])) {
            for ($j = 0; $j <= count($_FILES['imgs']['name']) - 1; $j++) {
                $path = $_SERVER['DOCUMENT_ROOT'] . '/Assets/images/web_img/Product/' . $_FILES['imgs']['name'][$j];
                if (move_uploaded_file($_FILES['imgs']['tmp_name'][$j], $path)) {
                    $proimg = array(
                        'tbl_product_id' => $id,
                        'img' => $_FILES['imgs']['name'][$j],
                        'c_date' => date('Y - m - d H:i:s')
                    );
                    $this->data_model->Insert_data('tbl_addpro_img', $proimg);
                }
            }
        }
        redirect(base_url() . 'Admin/' . $this->controll . '?alert=1');
    }

    public function Upload_csv()
    {
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '50000';
        $config['upload_path'] = './Assets/demo/';
        $this->load->library('upload', $config);
        $path = $_SERVER['DOCUMENT_ROOT'] . '/Assets/demo/' . $_FILES['csv']['name'];
        $data = $_FILES['csv']['name'];
        $d = explode('.', $data);
        if (isset($_FILES['csv']['name']) && $_FILES['csv']['name'] != "") {
            if ($d[1] != "csv" && $d[1] != "CSV") {
                redirect(base_url() . 'Product?error=1');
            } else {
                if (move_uploaded_file($_FILES['csv']['tmp_name'], $path)) {
                    if ($this->csvimport->get_array($path)) {
                        $csv_array = $this->csvimport->get_array($path);
//                        echo "<pre>";
//                        print_r($csv_array);
//                        die;
                        foreach ($csv_array as $row) {
                            extract($row);
//                            echo "<pre>";
//                            print_r($row);
                            $con = array(
                                'name' => $category
                            );
                            $abcd = $this->data_model->Get_data_all('tbl_main_category', $con);
//                            print_r($abcd);
                            if (count($abcd) > 0) {
                                $id = $abcd[0]['tbl_main_category_id'];
                            } else {
                                $id = "";
                            }
                            $im = explode(",", $img);
                            $cnt = count($im);
                            if ($cnt > 1) {
                                $data = array(
                                    'tbl_main_category_id' => $id,
                                    'product_name' => $product_name,
                                    'image' => $im[0],
                                    'SKU_NO' => $SKUNO,
                                    'sort_description' => $sort_description,
                                    'long_description' => $long_description,
                                    'mrp' => $mrp,
                                    'rp' => $rp,
                                    'weight' => $weight,
                                    'stock' => $stock,
                                    'c_date' => date('Y-m-d H:i:s'),
                                    'status' => 1,
                                    'temp_rate' => $temp_rate,
                                    'is_csv' => 1
                                );
//                                print_r($data);
                                $res = $this->data_model->Insert_data_id('tbl_product', $data);
                                for ($i = 1; $i < count($im); $i++) {

                                    $data1 = array(
                                        'tbl_product_id' => $res,
                                        'img' => $im[$i],
                                        'c_date' => date('Y-m-d H:i:s'),
                                        'is_csv' => 1
                                    );
//                                    print_r($data1);
                                    $this->data_model->Insert_data('tbl_addpro_img', $data1);
                                }
                            } else {
                                $data = array(
                                    'tbl_main_category_id' => $id,
                                    'product_name' => $product_name,
                                    'image' => $im[0],
                                    'SKU_NO' => $SKUNO,
                                    'sort_description' => $sort_description,
                                    'long_description' => $long_description,
                                    'mrp' => $mrp,
                                    'rp' => $rp,
                                    'weight' => $weight,
                                    'stock' => $stock,
                                    'c_date' => date('Y-m-d H:i:s'),
                                    'status' => 1,
                                    'temp_rate' => $temp_rate,
                                    'is_csv' => 1
                                );
//                                print_r($data);

                                $res = $this->data_model->Insert_data_id('tbl_product', $data);
                            }
                        }
//                        die;
                        redirect(base_url() . 'Admin/' . 'Product?error=5');
                    } else {
                        redirect(base_url() . 'Admin/' . 'Product?error=4');
                    }
                } else {
                    redirect(base_url() . 'Admin/' . 'Product?error=3');
                }
            }
        } else {
            redirect(base_url() . 'Admin/' . 'Product?error=2');
        }
    }

}

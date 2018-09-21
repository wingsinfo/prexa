<?php
define("MAX_SIZE", "4000");

/**
 * Created by PhpStorm.
 * User: daksh
 * Date: 12/06/16
 * Time: 11:58
 */
class Data_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Calcutta');
    }

    function Get_data($tbl)
    {
        $query = $this->db->get($tbl);
        return $query->result_array();
    }

    function Get_data_order($tbl, $tblcol, $type)
    {
        $this->db->order_by($tblcol, $type);
        $query = $this->db->get($tbl);
        return $query->result_array();
    }

    function Insert_data($tbl, $data)
    {
        $this->db->insert($tbl, $data);
    }

    function Insert_data_id($tbl, $data)
    {
        $this->db->insert($tbl, $data);
        $query = $this->db->insert_id();
        return $query;
    }

    function Update_data($tbl, $con, $data)
    {
        $this->db->where($con);
        $this->db->update($tbl, $data);
    }

    function Deleta_data($tbl, $con)
    {
        $this->db->where($con);
        $this->db->delete($tbl);
    }

    function Get_data_all($tbl, $con)
    {
        $this->db->where($con);
        $query = $this->db->get($tbl);
        return $query->result_array();
    }

    function Get_data_order_all($tbl, $con, $tblcol, $type)
    {
        $this->db->order_by($tblcol, $type);
        $this->db->where($con);
        $query = $this->db->get($tbl);
        return $query->result_array();
    }

    function Get_data_one($tbl, $con)
    {
        $this->db->where($con);
        $res = $this->db->get($tbl);
        $query = $res->result_array();
        return $query[0];
    }

    function Get_data_limit($tbl, $tbl_filed, $order_type, $limit)
    {
        $this->db->order_by($tbl_filed, $order_type);
        $this->db->limit($limit, 0);
        $query = $this->db->get($tbl);
        return $query->result_array();
    }

    function Get_data_limit_con($tbl, $tbl_filed, $order_type, $limit, $con)
    {
        $this->db->order_by($tbl_filed, $order_type);
        $this->db->limit($limit, 0);
        $this->db->where($con);
        $query = $this->db->get($tbl);
        return $query->result_array();
    }

    function Custome_query($str)
    {
        $query = $this->db->query($str);
        if (!$query) {
//            show_404();
//            die;
            return array();
        } else {
            return $query->result_array();
        }

    }

    function Custome_query_exc($str)
    {
        $this->db->query($str);

    }


    function change_status($id, $table)
    {
        $this->db->where($table . '_id', $id);
        $ans = $this->db->get($table);
        $data = $ans->result_array();
        if ($data[0]['status'] == 0)
            $info['status'] = 1;
        else
            $info['status'] = 0;
        $this->db->where($table . '_id', $id);
        $this->db->update($table, $info);
        return $info['status'];
    }

    function Admin_login()
    {
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('status', 0);
        $query = $this->db->get('tbl_admin');
        $res = $query->result_array();
        if (count($res) == 1) {
            $row = $query->row();
            $data = array(
                'username' => $row->username,
                'password' => $row->password,
                'aid' => $row->tbl_admin_id,
                'validated' => true
            );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }


    function check_login_cust($username, $password)
    {
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $this->db->where('email', $username);
        $this->db->where('pass', $password);
        $this->db->where('status', '1');
        $query = $this->db->get('tbl_customer');
        return $query->result_array();
    }

    function check_login_cust_active($username, $password)
    {
        $this->db->where('email', $username);
        $this->db->where('pass', $password);
        $query = $this->db->get('tbl_customer');
        return $query->result_array();
    }


    function cust_login()
    {
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $this->db->where('email', $username);
        $this->db->where('pass', $password);
        $this->db->where('status', 0);
        $query = $this->db->get('tbl_customer');
        $res = $query->result_array();
        if (count($res) == 1) {

            $row = $query->row();
            $data = array(
                'username' => $row->email,
                'password' => $row->pass,
                'id' => $row->tbl_customer_id,
                'validated' => true
            );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }


    function createthumb($image, $uploadedfile, $folder, $finalwidth, $finalheight, $thumbwidth, $thumbheight)
    {

//        print_r($image);
//        print_r($uploadedfile);
//        print_r($folder);
//        print_r($finalheight);
//        print_r($finalwidth);
//        print_r($thumbwidth);
//        print_r($thumbheight);
//        die;

        if ($thumbwidth == 0) {
            $thumbwidth = '250';
        } else {
            $thumbwidth = $thumbwidth;
        }

        if ($thumbheight == 0) {
            $thumbheight = '400';
        } else {
            $thumbheight = $thumbheight;
        }


        //$image=$_FILES["image"]["name"] AND $uploadedfile=$_FILES['image']['tmp_name'] AND $folder = Foldr name
        if (!is_dir($folder . "thumb")) {
            mkdir($folder . "thumb", 0777, true);
        }

        if (!is_dir($folder . "icon")) {
            mkdir($folder . "icon", 0777, true);
        }
        if (!is_dir($folder . "uploads")) {
            mkdir($folder . "uploads", 0777, true);
        }
        $filename = stripslashes($image);
        $i = strrpos($filename, ".");
        if (!$i) {
            return "";
        }
        $l = strlen($filename) - $i;
        $extension = substr($filename, $i + 1, $l);

        $extension = strtolower($extension);
        if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
            return 0;
        } else {

            $size = filesize($uploadedfile);
            if ($size > MAX_SIZE * 1024) {
                return 0;
            }
            if ($extension == "jpg" || $extension == "jpeg") {
                $src = imagecreatefromjpeg($uploadedfile);
            } else if ($extension == "png") {
                $src = imagecreatefrompng($uploadedfile);
            } else {
                $src = imagecreatefromgif($uploadedfile);
            }

            list($width, $height) = getimagesize($uploadedfile);
            // thumb
            $newwidth = $thumbwidth;
            $newheight = $thumbheight;
            $tmp = imagecreatetruecolor($newwidth, $newheight);
            //icon
            $newwidth1 = 75;
            $newheight1 = 75;
            $tmp1 = imagecreatetruecolor($newwidth1, $newheight1);
            // full image
            $newwidth2 = $finalwidth;
            $newheight2 = $finalheight;
            $tmp2 = imagecreatetruecolor($newwidth2, $newheight2);
            imagecopyresampled($tmp, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            imagecopyresampled($tmp1, $src, 0, 0, 0, 0, $newwidth1, $newheight1, $width, $height);
            imagecopyresampled($tmp2, $src, 0, 0, 0, 0, $newwidth2, $newheight2, $width, $height);

            $filename = $folder . "thumb/" . $image;
            $filename1 = $folder . "icon/" . $image;
            $filename2 = $folder . $image;
            imagejpeg($tmp, $filename, 100);
            imagejpeg($tmp1, $filename1, 100);
            imagejpeg($tmp2, $filename2, 100);
            imagedestroy($src);
            imagedestroy($tmp);
            imagedestroy($tmp1);
            imagedestroy($tmp2);
            return 1;
        }
    }
} 
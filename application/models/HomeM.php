<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 12/11/2021
 * Time: 11:03 PM
 */

class HomeM extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function send_ucapan_model($data){
        try{
//            $this->db->insert('tr_ucapan', $data);
//            return ($this->db->affected_rows() != 1) ? false : true;
            return $data;
        } catch (Exception $e) {
            return false;
        }
    }
}
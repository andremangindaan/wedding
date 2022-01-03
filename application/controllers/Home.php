<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 12/11/2021
 * Time: 10:58 PM
 */

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
//        $this->load->model('HomeM');
    }

    public function index()
    {
        $this->load->view('v_home');
    }

//    public function send_ucapan(){
//        if ($this->input->post('value')){
//            $params = explode('|', $this->input->post('value'));
//            $data = array(
//                'NAMA' => $params[0],
//                'UCAPAN' => $params[1]
//            );
////        $response = $this->HomeM->send_ucapan_model($data);
//            echo json_encode($data, JSON_PRETTY_PRINT);
//        }
//    }
}
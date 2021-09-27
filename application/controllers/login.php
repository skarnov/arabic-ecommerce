<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function index()
    {
        $data = array();
        $data['title'] = 'Login';
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['home'] = $this->load->view('customer_login', $data, true);
        $this->load->view('master', $data);
    }
}
<?php defined('BASEPATH') OR exit('No direct script access allowed');

session_start();

class Evis_Customer extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $customer_id = $this->session->userdata('customer_id');
        if ($customer_id != NULL)
        {
            redirect('cart/show_cart', 'refresh');
        }
    }
    
    public function index()
    {
        $data = array();
        $data['title'] = 'Login';
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['home'] = $this->load->view('customer_login', $data, true);
        $this->load->view('master', $data);
    }
 
    public function customer_login_check()
    { 
        $data = array();
        $data['email'] = $this->input->post('email', true);
        $data['password'] = $this->input->post('password', true);
        $result = $this->evis_store_model->user_login_check($data);
        $sdata = array();
        if ($result != NULL)
        {
            $sdata['customer_id'] = $result->customer_id;
            $sdata['first_name'] = $result->first_name;
            $this->session->set_userdata($sdata);
            redirect('cart/show_cart');
        } 
        if ($result == NULL)
        {
            $sdata['exception'] = 'اسم المستخدم او كلمة المرور خطأ';
            $this->session->set_userdata($sdata);
            redirect('evis_customer');
        }
    }   
}
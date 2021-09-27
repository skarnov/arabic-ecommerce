<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Checkout extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $customer_id = $this->session->userdata('customer_id');
        if ($customer_id == NULL) 
        {
            redirect('evis_customer', 'refresh');
        }
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
    
    public function index() 
    {
        $data = array();
        $data['title'] = 'Checkout';
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['home'] = $this->load->view('shipping_form', $data, true);
        $this->load->view('master', $data);
    }
    
    public function save_shipping_form()
    {
        $this->evis_sale_model->save_shipping_form_info();
        redirect('checkout/payment_form');
    }
    
    public function payment_form() 
    {
        $data = array();
        $data['title'] = 'Payment';
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['home'] = $this->load->view('payment_form', $data, true);
        $this->load->view('master', $data);
    }
    
    public function save_payment_form()
    {
        $customer_id = $this->session->userdata('customer_id');
        $shipping_info = $this->evis_sale_model->select_customer_shipping_info($customer_id);
        $this->evis_sale_model->save_payment_form_info($shipping_info);
        redirect('checkout/confirm_order');
    }
    
    public function confirm_order() 
    {
        $customer_id = $this->session->userdata('customer_id');
        $payment_info = $this->evis_sale_model->select_customer_payment_info($customer_id);
        $this->evis_sale_model->save_order_info($payment_info);
        $mdata = array();
        $mdata['invoice_info'] = $this->evis_sale_model->select_invoice_info($customer_id);     
        $mdata['from_address'] = 'info@evis.com';
        $mdata['admin_full_name'] = 'Invoice';
        $mdata['to_address'] = $mdata['invoice_info']->email;
        $mdata['cc_address'] = 'info@evis.com';
        $mdata['subject'] = 'Order Invoice';
        $this->mailer_model->sendEmail($mdata, 'invoice');
        redirect('checkout/order_complete');
    }

    public function order_complete() 
    {
        $data = array();
        $data['title'] = 'Checkout';
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['home'] = $this->load->view('order_complete', $data, true);
        $this->load->view('master', $data);
    }
}
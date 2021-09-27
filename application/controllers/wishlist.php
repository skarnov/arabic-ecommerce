<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Wishlist extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $customer_id = $this->session->userdata('customer_id');
        if ($customer_id == NULL)
        {
            redirect('login', 'refresh');
        }
    }
        
    public function add_to_wishlist($product_id)
    {
        $customer_id = $this->session->userdata('customer_id');
        $product_info = $this->evis_inventory_model->select_product_by_id($product_id);   
        $data = array(
            'customer_id' => $customer_id,
            'product_id' => $product_info->product_id,
        );
        $this->evis_store_model->save_wishlist_info($data); 
    }

    public function show_wishlist($customer_id)
    {
        $data = array();
        $data['title'] = 'Wishlist';
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['all_category'] = $this->evis_inventory_model->select_all_published_category();
        $data['select_wishlist'] = $this->evis_store_model->select_user_wishlist($customer_id);
        $data['home'] = $this->load->view('wishlist', $data, true);
        $this->load->view('master', $data);
    }
}
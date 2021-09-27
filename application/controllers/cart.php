<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $customer_id = $this->session->userdata('customer_id');
        if ($customer_id == NULL)
        {
            redirect('login', 'refresh');
        }
    }
    
    public function add_to_cart($product_id)
    {
        $product_info = $this->evis_inventory_model->select_product_by_id($product_id);   
        $data = array(
            'id' => $product_info->product_id,
            'image' => $product_info->product_image_0,
            'name' => $product_info->product_name,
            'qty' => 1,
            'price' =>$product_info->product_price,
            'options' => array('colour' => 'Black')
        );
        $this->cart->insert($data);
        echo $this->load->view('small_cart');
    }
    
    public function add_cart($product_id,$qty,$color)
    {
        $product_info = $this->evis_inventory_model->select_product_by_id($product_id);   
        if($color==NULL)
        {
            $color='Black';
        }
        $data = array(
            'id' => $product_info->product_id,
            'image' => $product_info->product_image_0,
            'name' => $product_info->product_name,
            'qty' => $qty,
            'price' =>$product_info->product_price,  
            'options' => array('colour' => $color)
        );
        $this->cart->insert($data);
        echo $this->load->view('small_cart');
    }
    
    public function show_cart()
    {
        $data = array();
        $data['title'] = 'Shoping Cart';
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['all_category'] = $this->evis_inventory_model->select_all_published_category();
        $data['home'] = $this->load->view('cart_view', $data, true);
        $this->load->view('master', $data);
    }

    public function update_cart()
    {
        $qty = $this->input->post('product_quantity', true);
        $rowid = $this->input->post('rowid', true);
        $data = array(
            'rowid' => $rowid,
            'qty' => $qty
        );
        $this->cart->update($data);
        redirect('cart/show_cart');
    }
    
    public function remove($rowid)
    {
        $data = array(
            'rowid' => $rowid,
            'qty' => '0'
        );
        $this->cart->update($data);
        redirect('cart/show_cart');
    }
}
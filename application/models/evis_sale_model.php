<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Evis_Sale_Model extends CI_Model {

    public function save_brand_info($data)
    {
        $this->db->insert('tbl_brand',$data);
    }
    
    public function select_all_brand()
    {
        $this->db->select('*');
        $this->db->from('tbl_brand');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function delete_brand_by_id($brand_id)
    {
        $this->db->where('brand_id',$brand_id);
        $this->db->delete('tbl_brand');
    }
    
    public function save_customer_info()
    {
        $data=array();
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['email'] = $this->input->post('email', true);
        $data['phone'] = $this->input->post('phone', true);
        $data['fax'] = $this->input->post('fax', true);
        $data['password'] = $this->input->post('password', true);
        $data['company'] = $this->input->post('company', true);
        $data['address_1'] = $this->input->post('address_1', true);
        $data['address_2'] = $this->input->post('address_2', true);
        $data['city'] = $this->input->post('city', true);
        $data['zip'] = $this->input->post('zip', true);
        $data['state'] = $this->input->post('state', true);
        $data['region'] = $this->input->post('region', true);
        $data['customer_status'] = $this->input->post('customer_status', true);
        $this->db->insert('tbl_customer',$data);
    }
    
    public function select_all_customer($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_customer ORDER BY customer_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_customer_by_id($customer_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('customer_id',$customer_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_customer_info()
    {
        $data=array();
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['email'] = $this->input->post('email', true);
        $data['phone'] = $this->input->post('phone', true);
        $data['fax'] = $this->input->post('fax', true);
        $data['password'] = $this->input->post('password', true);
        $data['company'] = $this->input->post('company', true);
        $data['address_1'] = $this->input->post('address_1', true);
        $data['address_2'] = $this->input->post('address_2', true);
        $data['city'] = $this->input->post('city', true);
        $data['zip'] = $this->input->post('zip', true);
        $data['state'] = $this->input->post('state', true);
        $data['region'] = $this->input->post('region', true);
        $data['customer_status'] = $this->input->post('customer_status', true);
        $customer_id = $this->input->post('customer_id', true);
        $this->db->where('customer_id',$customer_id);
        $this->db->update('tbl_customer',$data);
    }
    
    public function delete_customer_by_id($customer_id)
    {
        $this->db->where('customer_id',$customer_id);
        $this->db->delete('tbl_customer');
    }
    
    public function select_customer_shipping_info($customer_id)
    {
        $sql = "SELECT * FROM tbl_shipping WHERE customer_id='$customer_id' ORDER BY shipping_id DESC ";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    
    public function save_shipping_form_info()
    {
        $data=array();
        $data['customer_id'] = $this->input->post('customer_id', true);
        $data['address'] = $this->input->post('address', true);
        $data['city'] = $this->input->post('city', true);
        $data['zip'] = $this->input->post('zip', true);
        $data['state'] = $this->input->post('state', true);
        $data['region'] = $this->input->post('region', true);
        $this->db->insert('tbl_shipping',$data);
    }

    public function save_payment_form_info($shipping_info)
    {
        $data=array();
        $data['customer_id'] = $shipping_info->customer_id;
        $data['shipping_id'] = $shipping_info->shipping_id;
        $data['payment_type'] = $this->input->post('payment_type', true);
        $data['payment_status'] = $this->input->post('payment_status', true);
        $this->db->insert('tbl_payment',$data);
    }
    
    public function select_customer_payment_info($customer_id)
    {
        $sql = "SELECT * FROM tbl_payment WHERE customer_id='$customer_id' ORDER BY payment_id DESC ";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }

    public function save_order_info($payment_info)
    {
        $data=array();
        $data['customer_id']=$payment_info->customer_id;
        $data['shipping_id']=$payment_info->shipping_id;
        $data['payment_id']=$payment_info->payment_id;
        $data['order_total']=$this->session->userdata('grand_total');
        $data['invoice_date']= date('Y-m-d');
        $this->db->insert('tbl_order',$data);
        $order_id=$this->db->insert_id();
        $contents=$this->cart->contents();
        $oddata=array();
        foreach($contents as $values)
        {
           $oddata['order_id']=$order_id;
           $oddata['product_id']=$values['id'];
           $oddata['product_price']=$values['price'];
           $oddata['product_name']=$values['name'].' - '.$values['options']['colour'];
           $oddata['product_sales_quantity']=$values['qty'];
           $this->db->insert('tbl_order_details',$oddata);
        }
        $sql = "update tbl_product, tbl_order_details
            set tbl_product.product_quantity = tbl_product.product_quantity - tbl_order_details.product_sales_quantity 
            where tbl_product.product_id = tbl_order_details.product_id
            and tbl_order_details.order_id = '$order_id' ";
        $this->db->query($sql);
    }
    
    public function select_invoice_info($customer_id) 
    {
        $sql = "SELECT * FROM tbl_customer AS c, tbl_order AS o WHERE c.customer_id = o.customer_id AND c.customer_id = '$customer_id'";
        $result = $this->db->query($sql)->row();
        return $result;
    }

    public function select_all_sale($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_order AS o, tbl_customer AS c, tbl_payment AS p WHERE o.customer_id=c.customer_id AND o.payment_id=p.payment_id AND order_status='1' ORDER BY o.order_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_order($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_order AS o, tbl_customer AS c, tbl_payment AS p WHERE o.customer_id=c.customer_id AND o.payment_id=p.payment_id AND order_status='0' ORDER BY o.order_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function paid($order_id)
    {
        $this->db->set('order_status',1);
        $this->db->where('order_id',$order_id);
        $this->db->update('tbl_order');
    }
    
    public function select_sales_report_info($start,$end)
    {
        $sql = "SELECT * FROM tbl_order AS o, tbl_customer AS c WHERE o.customer_id=c.customer_id AND order_status=1 AND invoice_date BETWEEN '$start' AND '$end' ";
        $result = $this->db->query($sql)->result();
        return $result;   
    }
    
    public function select_total_amount($start,$end)
    {
        $sql = "SELECT SUM(order_total) AS total FROM tbl_order WHERE order_status=1 AND (invoice_date BETWEEN '$start' AND '$end')";
        $result = $this->db->query($sql)->row();
        return $result;   
    }

    public function select_order_by_id($order_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_order_details');
        $this->db->where('order_id',$order_id);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }

    public function select_subscribe_list()
    {
        $sql = "SELECT * FROM tbl_newsletter_subscription WHERE subscription_status='1'";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_subscribe($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_newsletter_subscription ORDER BY subscription_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function deactive_subscription_by_id($subscription_id)
    {
        $this->db->set('subscription_status',0);
        $this->db->where('subscription_id',$subscription_id);
        $this->db->update('tbl_newsletter_subscription');
    }
    
    public function active_subscription_by_id($subscription_id)
    {
        $this->db->set('subscription_status',1);
        $this->db->where('subscription_id',$subscription_id);
        $this->db->update('tbl_newsletter_subscription');
    }
    
    public function delete_subscription_by_id($subscription_id)
    {
        $this->db->where('subscription_id',$subscription_id);
        $this->db->delete('tbl_newsletter_subscription');
    }    
}
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Evis_Store_Model extends CI_Model {
        
    public function user_login_check($data)
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('email',$data['email']);
        $this->db->where('password', $data['password']);
	$this->db->where('customer_status',1);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function select_display_category()
    {
        $sql = "SELECT * FROM tbl_category AS c, tbl_product p WHERE c.display_in_home='1' AND c.category_id = p.category_id GROUP BY c.category_id ORDER BY c.category_id DESC ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_10_product_by_category_id($category_id)
    {
        $sql = "SELECT * FROM tbl_product AS p WHERE p.category_id = '$category_id' LIMIT 10";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_published_product()
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_discount_time()
    {
        $sql = "SELECT * FROM tbl_product WHERE product_status=1 AND discount_end_time != 0 ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_discount_product()
    {
        $sql = "SELECT * FROM tbl_product WHERE product_status=1 AND product_discount_type='1' ORDER BY product_id DESC ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_most_discount_product()
    {
        $sql = "SELECT * FROM tbl_product WHERE product_status=1 AND product_discount_type='2' ORDER BY product_id DESC";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_product_by_category($category_id = null, $start=null, $limit=null)
    {
        $sql = "SELECT * ". "FROM tbl_product p, tbl_category as c WHERE c.category_id = $category_id AND p.category_id = c.category_id ";
        if ($category_id) 
        {
            $sql .= "AND p.category_id = $category_id ";
        }
        if ($limit != '' && $start >= 0) 
        {
            $sql .= " LIMIT $start, $limit ";
        }
        $result = $this->db->query($sql)->result();
        return $result;
    }
    
    public function select_category_by_name($category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function save_customer_info()
    {
        $data=array();
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['email'] = $this->input->post('email', true);
        $data['phone'] = $this->input->post('phone', true);
        $data['fax'] = $this->input->post('fax', true);
        $data['more_info'] = $this->input->post('more_info', true);
        $data['password'] = $this->input->post('password', true);
        $data['company'] = $this->input->post('company', true);
        $data['address_1'] = $this->input->post('address_1', true);
        $data['address_2'] = $this->input->post('address_2', true);
        $data['day'] = $this->input->post('day', true);
        $data['month'] = $this->input->post('month', true);
        $data['year'] = $this->input->post('year', true);
        $data['city'] = $this->input->post('city', true);
        $data['zip'] = $this->input->post('zip', true);
        $data['state'] = $this->input->post('state', true);
        $data['region'] = $this->input->post('region', true);
        $this->db->insert('tbl_customer',$data);
    }
    
    public function select_special_offer_product()
    {
        $sql = "SELECT * FROM tbl_product WHERE product_status=1 AND product_old_price != 0 ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
        
    public function select_latest_product_product($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
   
    public function select_best_selling_product()
    {
        $sql = "SELECT DISTINCT p.product_id, p.product_name, p.product_description, p.product_tag, p.product_image_0, p.product_price, p.product_old_price, p.product_quantity FROM tbl_product AS p, tbl_order_details AS o WHERE p.product_id=o.product_id AND p.product_status = 1 ORDER BY p.product_id DESC ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function save_wishlist_info($data)
    {        
        $this->db->insert('tbl_wishlist',$data);
    }

    public function select_user_wishlist($customer_id)
    {
        $sql = "SELECT * FROM tbl_product AS p, tbl_wishlist AS w, tbl_customer AS c WHERE p.product_id=w.product_id AND c.customer_id='$customer_id' ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function search_the_product($category_id,$product_name)
    {
        $sql = "SELECT * FROM tbl_product WHERE category_id='$category_id' AND product_name LIKE '%$product_name%'";
        $result = $this->db->query($sql)->result();
        return $result;   
    }
    
    public function save_newsletter_info()
    {
        $data=array();
        $data['subscription_email'] = $this->input->post('subscription_email', true);
        $this->db->insert('tbl_newsletter_subscription',$data);
    }  
}
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Evis_Inventory_Model extends CI_Model {
    
    public function save_category_info()
    {
        $data=array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['display_in_home'] = $this->input->post('display_in_home', true);
        $this->db->insert('tbl_category',$data);
    }
    
    public function select_all_category($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_category ORDER BY category_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_category_by_id($category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id',$category_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_category_info()
    {
        $data=array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['display_in_home'] = $this->input->post('display_in_home', true);
        $data['category_status'] = $this->input->post('category_status', true);
        $category_id = $this->input->post('category_id', true);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category',$data);
    }
    
    public function delete_category_by_id($category_id)
    {
        $this->db->where('category_id',$category_id);
        $this->db->delete('tbl_category');
    }
    
    public function select_all_published_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function save_product_info($data)
    {
        $this->db->insert('tbl_product',$data);
    }
        
    public function select_all_product($per_page, $offset)
    {
        if ($offset == NULL)
        {
            $offset = 0;
        }
        $sql = "SELECT * FROM tbl_product AS p, tbl_category AS c WHERE p.category_id=c.category_id ORDER BY product_id DESC LIMIT $offset,$per_page ";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_product_by_id($product_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id',$product_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_product_info()
    {
        $data=array();
        $data['category_id'] = $this->input->post('category_id', true);
        $data['product_name'] = $this->input->post('product_name', true);
        $data['product_tag'] = $this->input->post('product_tag', true);
        $data['product_quantity'] = $this->input->post('product_quantity', true);
        $data['product_color'] = $this->input->post('product_color', true);
        $data['discount_end_time'] = $this->input->post('discount_end_time', true);
        $data['product_discount_type'] = $this->input->post('product_discount_type', true);
        $data['product_price'] = $this->input->post('product_price', true);
        $data['product_old_price'] = $this->input->post('product_old_price', true);
        $data['product_summery'] = $this->input->post('product_summery', true);
        $data['product_description'] = $this->input->post('product_description', true);
        $data['product_status'] = $this->input->post('product_status', true);
        $product_id = $this->input->post('product_id', true);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product',$data);
    }
    
    public function delete_product_by_id($product_id)
    {
        $this->db->where('product_id',$product_id);
        $this->db->delete('tbl_product');
    }
    
    public function edit_image_one($data)
    {
        $product_id=$this->input->post('product_id',true);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product',$data);
    }
    
    public function edit_image_two($data)
    {
        $product_id=$this->input->post('product_id',true);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product',$data);
    }
    
    public function edit_image_three($data)
    {
        $product_id=$this->input->post('product_id',true);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product',$data);
    }
    
    public function edit_image_four($data)
    {
        $product_id=$this->input->post('product_id',true);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product',$data);
    }
    
    public function edit_image_five($data)
    {
        $product_id=$this->input->post('product_id',true);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product',$data);
    }
}
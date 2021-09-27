<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Evis_Store extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
        
    public function index()
    {
        $data = array();
        $data['title'] = 'Home';
        $data['best_selling'] = $this->evis_store_model->select_best_selling_product();
        $data['all_category'] = $this->evis_inventory_model->select_all_published_category();
        $data['display_category'] = $this->evis_store_model->select_display_category();
        foreach($data['display_category'] as $v_category)
        {
            $data['category_product'][$v_category->category_id] = $this->evis_store_model->select_10_product_by_category_id($v_category->category_id);
        }
        $data['all_slide'] = $this->evis_app_model->select_all_slide();
        $data['all_banner'] = $this->evis_app_model->select_all_banner();
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['all_product'] = $this->evis_store_model->select_all_published_product();
        $data['discount_time'] = $this->evis_store_model->select_discount_time();
        $data['discount_product'] = $this->evis_store_model->select_discount_product();
        $data['most_discount_product'] = $this->evis_store_model->select_most_discount_product();
        $data['home'] = $this->load->view('home', $data, true);
        $this->load->view('master', $data);
    }
    
    public function logout()
    {
        $this->session->unset_userdata('customer_id');
        $this->session->unset_userdata('first_name');
        $sdata['exception'] = 'You are Successfully Logout ';
        $this->session->set_userdata($sdata);
        redirect('evis_store');
    }
    
    public function product_details($product_id) 
    {
        $data = array();
        $data['title'] = 'Product Details';
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['all_category'] = $this->evis_inventory_model->select_all_published_category();
        $data['product_info'] = $this->evis_inventory_model->select_product_by_id($product_id);
        $data['home'] = $this->load->view('product_details', $data, true);
        $this->load->view('master', $data);
    }
    
    public function product_listing($category_id = null, $start = null)
    {
	$data = array();
        $data['title'] = 'Product Listing';
        if(!$start)
        {
            $start=0;
        }
        $data['start']= $start;
        $data['limit']= 12;
        $data['total_product'] = count($this->evis_store_model->select_product_by_category($category_id, '', ''));
        $data['category_product'] = $this->evis_store_model->select_product_by_category($category_id, $start, $data['limit']);
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['this_page'] = count($data['category_product']);
        $data['category'] = $this->evis_store_model->select_category_by_name($category_id);    
        $data['all_category'] = $this->evis_inventory_model->select_all_published_category();
        $data['home'] = $this->load->view('product_listing', $data, true);
        $this->load->view('master', $data);
    }
    
    public function contact() 
    {
        $data = array();
        $data['title'] = 'Contact';
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['all_category'] = $this->evis_inventory_model->select_all_published_category();
        $data['home'] = $this->load->view('contact', $data, true);
        $this->load->view('master', $data);
    }
    
    public function register() 
    {
        $data = array();
        $data['title'] = 'Register';
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['home'] = $this->load->view('register', $data, true);
        $this->load->view('master', $data);
    }
    
    public function save_customer()
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_customer.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[250]|matches[confirm_password]|xss_clean');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required');
        if ($this->form_validation->run() == False)
        {
            $data = array();
            $data['title'] = 'Register';
            $data['all_brand'] = $this->evis_sale_model->select_all_brand();
            $data['home'] = $this->load->view('register', $data, true);
            $this->load->view('master', $data);
        } 
        else 
        {
            $this->evis_store_model->save_customer_info();
            $sdata = array();
            $sdata['save_customer'] = 'Customer Saved';
            $this->session->set_userdata($sdata);
            redirect('evis_store/register');
        }
    }
    
    public function special_offer()
    {
        $data = array();
        $data['title'] = 'Special Offer';
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['all_category'] = $this->evis_inventory_model->select_all_published_category();
        $data['special_offer'] = $this->evis_store_model->select_special_offer_product();
        $data['home'] = $this->load->view('special_offer', $data, true);
        $this->load->view('master', $data);
    }
    
    public function latest_product()
    {
        $data = array();
        $data['title'] = 'Latest Product';
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['all_category'] = $this->evis_inventory_model->select_all_published_category();
        $config['base_url'] = base_url() . 'evis_store/latest_product/';
        $config['total_rows'] = $this->db->count_all('tbl_product');
        $config['per_page'] = '12';
        /** STYLE PAGINATION **/
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /** END STYLE PAGINATION **/
        $this->pagination->initialize($config);
        $data['latest_product'] = $this->evis_store_model->select_latest_product_product($config['per_page'], $this->uri->segment(3));
        $data['home'] = $this->load->view('latest_product', $data, true);
        $this->load->view('master', $data);
    }
    
    public function best_selling()
    {
        $data = array();
        $data['title'] = 'Best Selling';
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['all_category'] = $this->evis_inventory_model->select_all_published_category();
        $data['best_selling'] = $this->evis_store_model->select_best_selling_product();
        $data['home'] = $this->load->view('best_selling', $data, true);
        $this->load->view('master', $data);
    }
    
    public function search_product()
    {
        $data = array();
        $data['title'] = 'Search Product';
        $category_id = $this->input->post('category_id', true);
        $product_name = $this->input->post('product_name', true);
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['all_category'] = $this->evis_inventory_model->select_all_published_category();
        $data['product_search'] = $this->evis_store_model->search_the_product($category_id,$product_name);
        $data['home'] = $this->load->view('search_product', $data, true);
        $this->load->view('master', $data);
    }
    
    public function send_email()
    {
        $data = array();
        $name = $this->input->post('name', true);
        $email = $this->input->post('email', true);
        $message = $this->input->post('message', true);
        $mdata = array();
        $mdata['from_address'] = $email;
        $mdata['admin_full_name'] = 'Contact Us';
        $mdata['to_address'] = 'info@evis.com';
        $mdata['cc_address'] = 'info@evis.com';
        $mdata['subject'] = 'Contact Form';
        $mdata['name'] = $name;
        $mdata['message'] = $message;
        $this->mailer_model->sendEmail($mdata, 'contact');
        $sdata = array();
        $sdata['send_email'] = 'Send Mail!';
        $this->session->set_userdata($sdata);
        redirect('evis_store/contact');
    }
    
    public function about() 
    {
        $data = array();
        $data['title'] = 'About';
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['all_category'] = $this->evis_inventory_model->select_all_published_category();
        $data['home'] = $this->load->view('about', $data, true);
        $this->load->view('master', $data);
    }
    
    public function save_newsletter()
    {
        $this->evis_store_model->save_newsletter_info();
        $sdata = array();
        $sdata['save_newsletter'] = 'Thanks';
        $this->session->set_userdata($sdata);
        redirect('evis_store');
    }
}
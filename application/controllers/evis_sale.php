<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Evis_Sale extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) 
        {
            redirect('evis_login', 'refresh');
        }
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
    
    public function add_brand()
    {
        $data = array();
        $data['title'] = 'Add Brand';
        $data['dashboard'] = $this->load->view('admin/add_brand', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_brand()
    {
        $data=array();
        /** IF THEY DO NOT SELECT A IMAGE **/
	foreach ($_FILES as $eachFile)
	{
            if ($eachFile['size'] > 0)
            {
                $config['upload_path'] = 'upload_image/brand_image/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '10240';
                $config['max_width'] = '5000';
                $config['max_height'] = '5000';
                $error = '';
                $fdata = array();
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('brand_image'))
                {
                    $error = $this->upload->display_errors();
                    echo $error;
                    exit();
                } 
                else 
                {
                    $fdata = $this->upload->data();
                    $index = 'brand_image';
                    $up['main'] = $config['upload_path'] . $fdata['file_name'];
                }        
                /** START IMAGE RESIZE **/
                $config['image_library'] = 'gd2';
                $config['new_image'] = 'upload_image/brand_image/';
                $config['source_image'] = $up['main'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['maintain_ratio'] = true;
                $config['width'] = '870';
                $config['height'] = '440';
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                if (!$this->image_lib->resize()) {
                    $error = $this->image_lib->display_errors();
                    echo $error;
                    exit();
                } else {
                    $index = 'brand_image';
                    $data[$index] = $config['new_image'] . $fdata['raw_name'] . '_thumb' . $fdata['file_ext'];
                    unlink($fdata['full_path']);
                    }
                /** END IMAGE RESIZE **/
		}
	}
        /** END OF IF THEY DO NOT SELECT A IMAGE **/
        $this->evis_sale_model->save_brand_info($data);
        $sdata = array();
        $sdata['save_brand'] = 'Brand Saved';
        $this->session->set_userdata($sdata);
        redirect('evis_sale/add_brand');
    }
    
    public function manage_brand()
    {
        $data = array();
        $data['title'] = 'Manage Brand';
        $data['all_brand'] = $this->evis_sale_model->select_all_brand();
        $data['dashboard'] = $this->load->view('admin/manage_brand', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function delete_brand($brand_id) 
    {        
        $this->evis_sale_model->delete_brand_by_id($brand_id);
        redirect('evis_sale/manage_brand');
    }
    
    public function add_customer()
    {
        $data = array();
        $data['title'] = 'New Customer';
        $data['dashboard'] = $this->load->view('admin/add_customer', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function save_customer()
    {
        $this->evis_sale_model->save_customer_info();
        $sdata = array();
        $sdata['save_customer'] = 'Customer Saved';
        $this->session->set_userdata($sdata);
        redirect('evis_sale/add_customer');
    }
    
    public function manage_customer()
    {
        $data = array();
        $data['title'] = 'Manage Customer';
        $config['base_url'] = base_url() . 'evis_sale/manage_customer/';
        $config['total_rows'] = $this->db->count_all('tbl_customer');
        $config['per_page'] = '8';
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
        $data['all_customer'] = $this->evis_sale_model->select_all_customer($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_customer', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function edit_customer($customer_id) 
    {
        $data = array();
        $data['title'] = 'Edit Customer';
        $data['customer_info'] = $this->evis_sale_model->select_customer_by_id($customer_id);
        $data['dashboard'] = $this->load->view('admin/edit_customer', $data, true);
        $sdata = array();
        $sdata['edit_customer'] = 'Update Customer Product Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('admin/master', $data);
    }

    public function update_customer() 
    {
        $this->evis_sale_model->update_customer_info();
        redirect('evis_sale/manage_customer');
    }
    
    public function delete_customer($customer_id) 
    {
        $this->evis_sale_model->delete_customer_by_id($customer_id);
        redirect('evis_sale/manage_customer');
    }

    public function manage_sale()
    {
        $data = array();
        $data['title'] = 'Manage Sale';
        $config['base_url'] = base_url() . 'evis_sale/manage_sale/';
        $config['total_rows'] = $this->db->count_all('tbl_order');
        $config['per_page'] = '8';
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
        $data['all_sale'] = $this->evis_sale_model->select_all_sale($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_sale', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function manage_order()
    {
        $data = array();
        $data['title'] = 'Manage Order';
        $config['base_url'] = base_url() . 'evis_sale/manage_order/';
        $config['total_rows'] = $this->db->count_all('tbl_order');
        $config['per_page'] = '8';
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
        $data['all_order'] = $this->evis_sale_model->select_all_order($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_order', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function order_details($order_id) 
    {
        $data = array();
        $data['title'] = 'Edit Customer';
        $data['order_info'] = $this->evis_sale_model->select_order_by_id($order_id);
        $data['dashboard'] = $this->load->view('admin/order_details', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function paid_order($order_id) 
    {
        $this->evis_sale_model->paid($order_id);
        redirect('evis_sale/manage_order');
    }

    public function sales_report()
    {
        $data = array();
        $data['title'] = 'Sales Report';
        $data['dashboard'] = $this->load->view('admin/sales_report', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function show_sales_report()
    {
        $data = array();
        $data['title'] = 'Sales Report';
        $start = $this->input->post('start', true);
        $end = $this->input->post('end', true);
        $data['start'] = $start;
        $data['end'] = $end;
        $data['sales_report'] = $this->evis_sale_model->select_sales_report_info($start,$end,$data);
        $data['total_amount'] = $this->evis_sale_model->select_total_amount($start,$end,$data);
        $data['dashboard'] = $this->load->view('admin/show_sales_report', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function download_sales_report($start,$end)
    {
        $data = array();
        $data['start'] = $start;
        $data['end'] = $end;
        $data['sales_report'] = $this->evis_sale_model->select_sales_report_info($start,$end,$data);
        $data['total_amount'] = $this->evis_sale_model->select_total_amount($start,$end,$data);
        $this->load->view('admin/download_sales_report', $data);
        $html = $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("download_sales_report.pdf");
    }
    
    public function send_newsletter()
    {
        $data = array();
        $data['title'] = 'Send Newsletter';
        $data['dashboard'] = $this->load->view('admin/send_newsletter', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function send_newsletter_mail()
    {
        $all_subscribe = $this->evis_sale_model->select_subscribe_list();
        $subject = $this->input->post('subject', true);
        $message = $this->input->post('message', true);
        foreach($all_subscribe as $value){
            $mdata = array();
            $mdata['from_address'] = 'info@evistechnology.com';
            $mdata['to_address'] = $value->subscription_email;
            $mdata['admin_full_name'] = 'Evis Technology';
            $mdata['subject'] = $subject;
            $mdata['message'] = $message;
            $this->mailer_model->send_newsletter($mdata, 'newsletter');
        }
        $data = array();
        $data['title'] = 'Success';
        $data['dashboard'] = $this->load->view('admin/success', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function manage_subscription()
    {
        $data = array();
        $data['title'] = 'Subscribe Email';
        $config['base_url'] = base_url() . 'evis_sale/manage_subscription/';
        $config['total_rows'] = $this->db->count_all('tbl_newsletter_subscription');
        $config['per_page'] = '8';
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
        $data['all_subscribe'] = $this->evis_sale_model->select_all_subscribe($config['per_page'], $this->uri->segment(3));
        $data['dashboard'] = $this->load->view('admin/manage_subscription', $data, true);
        $this->load->view('admin/master', $data);
    }
    
    public function deactive_subscription($subscription_id) 
    {
        $this->evis_sale_model->deactive_subscription_by_id($subscription_id);
        redirect('evis_sale/manage_subscription');
    }

    public function active_subscription($subscription_id)
    {
        $this->evis_sale_model->active_subscription_by_id($subscription_id);
        redirect('evis_sale/manage_subscription');
    }
    
    public function delete_subscription($subscription_id) 
    {
        $this->evis_sale_model->delete_subscription_by_id($subscription_id);
        redirect('evis_sale/manage_subscription');
    }    
}
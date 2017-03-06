<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Super_Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('admin_login', 'refresh');
        }
    }

    public function index() {

        $data = array();
        $data['admin_content'] = $this->load->view('admin/admin_main_content','',TRUE);
        $data['title']='Home Page';
        $this->load->view('admin/admin_master',$data);
    }
    public function add_category()
    {
        $data = array();
        $data['admin_content'] = $this->load->view('admin/add_category','',TRUE);
        $data['title'] ='Add Category';
        $this->load->view('admin/admin_master',$data);
    }
    public function save_category()
    {
        $data=array();
        $data['category_name']=$this->input->post('category_name',true);
        //$data['category_description']=$this->input->post('category_description',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        $this->super_admin_model->save_category_info($data);
        $sdata=array();
        $sdata['message']="Save Category Information Successfully";
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_category');
    }
    public function manage_category()
    {
        $data = array();
		 $data['title']='Manage Category';
        $data['all_category']=$this->super_admin_model->select_all_category();
        $data['admin_content'] = $this->load->view('admin/category_grid',$data,TRUE);
        $this->load->view('admin/admin_master',$data);
    }
    public function unpublished_category($category_id)
    {
        $this->super_admin_model->unpublished_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }
    public function published_category($category_id)
    {
        $this->super_admin_model->published_category_by_id($category_id);
        redirect('super_admin/manage_category');
       
    }
     public function delete_category($category_id) {
        $this->super_admin_model->delete_category_by_id($category_id);
        redirect('super_admin/manage_category');
    }

    public function edit_category($category_id) {
        $data = array();
        $data['category_info'] = $this->super_admin_model->select_category_info_by_id($category_id);
        $data['admin_content'] = $this->load->view('admin/edit_category', $data, TRUE);
        $data['title'] = 'Edit Category';
        $this->load->view('admin/admin_master', $data);
    }
    public function update_category() {
        $data = array();
        $category_id = $this->input->post('category_id', TRUE);
        $data['category_id'] = $this->input->post('category_id', TRUE);
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);
        $this->super_admin_model->update_category_by_id($data, $category_id);

        $sdata = array();
        $sdata['message'] = "Update Category Information Successfully!";
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_category');
    }
    public function add_division()
            {
                 
                $data = array();
                $data['admin_content'] = $this->load->view('admin/add_division','',TRUE);
                $data['title'] ='Add Division';
                $this->load->view('admin/admin_master',$data);
            }
            
            public function save_division()
    {
        $data=array();
        $data['division_name']=$this->input->post('division_name',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        $this->super_admin_model->save_division_info($data);
        $sdata=array();
        $sdata['message']="Save Division Information Successfully";
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_division');
    }
     public function manage_division()
    {
        $data = array();
        $data['all_division']=$this->super_admin_model->select_all_division();
        $data['admin_content'] = $this->load->view('admin/division_grid',$data,TRUE);
        $data['title']='Manage Division';
        $this->load->view('admin/admin_master',$data);
    }
    public function unpublished_division($division_id)
    {
        $this->super_admin_model->unpublished_division_by_id($division_id);
        redirect('super_admin/manage_division');
    }
    public function published_division($division_id)
    {
        $this->super_admin_model->published_division_by_id($division_id);
        redirect('super_admin/manage_division');
       
    }
     public function delete_division($division_id) {
        $this->super_admin_model->delete_division_by_id($division_id);
        redirect('super_admin/manage_division');
    }

    public function edit_division($division_id) {
        $data = array();
        $data['division_info'] = $this->super_admin_model->select_division_info_by_id($division_id);
        $data['admin_content'] = $this->load->view('admin/edit_division', $data, TRUE);
        $data['title'] = 'Edit Division';
        $this->load->view('admin/admin_master', $data);
    }
    public function update_division() {
        $data = array();
        $division_id = $this->input->post('division_id', TRUE);
        $data['division_id'] = $this->input->post('division_id', TRUE);
        $data['division_name'] = $this->input->post('division_name', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);
        $this->super_admin_model->update_division_by_id($data, $division_id);

        $sdata = array();
        $sdata['message'] = "Update Division Information Successfully!";
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_division');
    }
    public function add_sub_category() {
        $data = array();
        $data['all_published_category']=$this->welcome_model->select_all_published_category();
        $data['admin_content'] = $this->load->view('admin/add_sub_category', $data, TRUE);
        $data['title'] = 'Add Sub_Category';
        $this->load->view('admin/admin_master', $data);
    }

    public function save_sub_category() {
        $data = array();
        $data['sub_category_name'] = $this->input->post('sub_category_name', TRUE);
        $data['category_id'] = $this->input->post('category_id', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);
        $this->super_admin_model->save_sub_category_info($data);
        $sdata = array();
        $sdata['message'] = "Save Sub Category Information Successfully!";
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_sub_category');
    }
public function manage_sub_category()
    {
        $data = array();
        $data['all_sub_category']=$this->super_admin_model->select_all_sub_category();
        $data['admin_content'] = $this->load->view('admin/sub_category_grid',$data,TRUE);
        $data['title']='Manage Sub Category';
        $this->load->view('admin/admin_master',$data);
    }
    public function unpublished_sub_category($sub_category_id)
    {
        $this->super_admin_model->unpublished_sub_category_by_id($sub_category_id);
        redirect('super_admin/manage_sub_category');
    }
    public function published_sub_category($sub_category_id)
    {
        $this->super_admin_model->published_sub_category_by_id($sub_category_id);
        redirect('super_admin/manage_sub_category');
       
    }
     public function delete_sub_category($sub_category_id) {
        $this->super_admin_model->delete_sub_category_by_id($sub_category_id);
        redirect('super_admin/manage_sub_category');
    }

    public function edit_sub_category($sub_category_id) {
        $data = array();
        //$data['sub_category_info'] = $this->super_admin_model->select__info_by_id($division_id)
        $data['sub_category_info'] = $this->super_admin_model->select_sub_category_info_by_id($sub_category_id);
        $data['admin_content'] = $this->load->view('admin/edit_sub_category', $data, TRUE);
        $data['title'] = 'Edit Sub Category';
        $this->load->view('admin/admin_master', $data);
    }
    public function update_sub_category() {
        $data = array();
        $sub_category_id = $this->input->post('sub_category_id', TRUE);
        $data['sub_category_id'] = $this->input->post('sub_category_id', TRUE);
        $data['sub_category_name'] = $this->input->post('sub_category_name', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);
        $this->super_admin_model->update_sub_category_by_id($data, $sub_category_id);

        $sdata = array();
        $sdata['message'] = "Update Category Information Successfully!";
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_sub_category');
    }
     public function add_service() {
        $data = array();
        $data['all_published_division']=$this->super_admin_model->select_all_published_division();
        //$data['all_published_category']=$this->welcome_model->select_all_published_category();
        //$data['all_published_sub_category']=$this->welcome_model->select_all_published_sub_category();
        $data['admin_content'] = $this->load->view('admin/add_service', $data, TRUE);
        $data['title'] = 'Add Service';
        $this->load->view('admin/admin_master', $data);
    }

	Public function get_countries()
	{
		$query=$this->db->get('tbl_category');
        $result= $query->result();
        $data=array();
		foreach($result as $r)
		{
			$data['value']=$r->category_id;
			$data['label']=$r->category_name;
			$json[]=$data;
			
			
		}
		echo json_encode($json);
		

	
	}

	Public function get_states()
	{

		  $result=$this->db->where('category_id',$_POST['sub_category_id'])
						->get('tbl_sub_category')
						->result();
     
        $data=array();
		foreach($result as $r)
		{
			$data['value']=$r->sub_category_id;
			$data['label']=$r->sub_category_name;
			$json[]=$data;
			
			
		}
		echo json_encode($json);

	}

		Public function get_cities()
	{

		  $result=$this->db->where('stateid',$_POST['id'])
						->get('city')
						->result();
     
        $data=array();
		foreach($result as $r)
		{
			$data['value']=$r->id;
			$data['label']=$r->city;
			$json[]=$data;
			
			
		}
		echo json_encode($json);

	}
        
        public function save_service()
    {
        $data=array();
        $data['company_name']=$this->input->post('company_name',true);
        $data['service']=$this->input->post('service',true);
        $data['service_description']=$this->input->post('service_description',true);
        $data['category_id']=$this->input->post('category_id',true);
        $data['sub_category_id']=$this->input->post('sub_category_id',true);
        
        $data['division_id']=$this->input->post('division_id',true);
        
        
        $data['address']=$this->input->post('address',true);
        $data['mobile']=$this->input->post('mobile',true);
        $data['publication_status']=$this->input->post('publication_status',true);
        $this->super_admin_model->save_service_info($data);
        $sdata=array();
        $sdata['message']="Save service Information Successfully";
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_service');
    }
        public function manage_service()
    {
        $data = array();
        $data['all_service']=$this->super_admin_model->select_all_service();
        $data['admin_content'] = $this->load->view('admin/service_grid',$data,TRUE);
        $data['title']='Mange Service';
        $this->load->view('admin/admin_master',$data);
    }
    public function unpublish_service($service_id)
    {
        $this->super_admin_model->unpublished_service_by_id($service_id);
        redirect('super_admin/manage_service');
    }
    public function publish_service($service_id)
    {
        $this->super_admin_model->published_service_by_id($service_id);
        redirect('super_admin/manage_service');
       
    }
     public function delete_service($service_id) {
        $this->super_admin_model->delete_service_by_id($service_id);
        redirect('super_admin/manage_service');
    }

    public function edit_service($service_id) {
        $data = array();
        $data['service_info'] = $this->super_admin_model->select_service_info_by_id($service_id);
        $data['admin_content'] = $this->load->view('admin/edit_service', $data, TRUE);
        $data['title'] = 'Edit Service';
        $this->load->view('admin/admin_master', $data);
    }
    public function update_service() {
        $data = array();
        $service_id = $this->input->post('service_id', TRUE);
        $data['company_name'] = $this->input->post('company_name',TRUE);
        $data['service'] = $this->input->post('service',TRUE);
        $data['service_description'] = $this->input->post('service_description',TRUE);
        $data['address'] = $this->input->post('address',TRUE);
        $data['mobile'] = $this->input->post('mobile',TRUE);
        $data['publication_status'] = $this->input->post('publication_status',TRUE);
        $this->super_admin_model->update_service_by_id($data, $service_id);

        $sdata = array();
        $sdata['message'] = "Update Service Information Successfully!";
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_service');
    }
	
	

	public function manage_company()
    {
        $data = array();
        $data['all_company']=$this->super_admin_model->select_all_company();
        $data['admin_content'] = $this->load->view('admin/company_grid',$data,TRUE);
        $data['title']='Manage Company';
        $this->load->view('admin/admin_master',$data);
    }
    public function unpublish_company($company_id)
    {
        $this->super_admin_model->unpublished_company_by_id($company_id);
        redirect('super_admin/manage_company');
    }
    public function publish_company($company_id)
    {
        $this->super_admin_model->published_company_by_id($company_id);
        redirect('super_admin/manage_company');
       
    }
	
	
	public function delete_company($company_id) {
        $this->super_admin_model->delete_company_by_id($company_id);
        redirect('super_admin/manage_company');
    }
	
	
	
	/*Comments*/
	
	public function all_comments()
    {
        $data=array();
		$data['title']='Manage Comment';
        $data['all_comments']=$this->super_admin_model->select_all_comments_info();
        $data['admin_content']=$this->load->view('admin/comments_grid',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function unpublish_comment($comments_id)
    {
       $this->super_admin_model->unpublish_comment_info($comments_id);
        redirect("super_admin/all_comments");
    }
    
    public function publish_comment($comments_id)
    {
       $this->super_admin_model->publish_comment_info($comments_id);
	   
        redirect("super_admin/mail/".$comments_id);
    }
	
	 public function mail($comments_id)
    {
	     
	    $data=$this->super_admin_model->select_email_id($comments_id);
	/* echo'<pre>';
		print_r($data->service_email);
		exit(); */
	    $from = "rafayet.monon@gmail.com";    //senders email address
        $subject = 'You have a Comment';  //email subject
        
        //sending confirmEmail($receiver) function calling link to the user, inside message body
        $message = 'Dear User,<br><br> You have a comment on your service<br><br>';
        
        
        
        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = 465;
        $config['smtp_user'] = $from;
        $config['smtp_pass'] = 'RAFAYET212803653alam';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = 'TRUE';
        $config['newline'] = "\r\n"; 
        
        $this->load->library('email', $config);
		$this->email->initialize($config);
        //send email
        $this->email->from($from);
        $this->email->to( $data->service_email);
        $this->email->subject($subject);
        $this->email->message($message);
        
        if($this->email->send()){
			//for testing
          /*   echo "sent to: 'kaziabir36@gmail.com'<br>";
			echo "from: ".$from. "<br>";
			echo "protocol: ". $config['protocol']."<br>";
			echo "message: ".$message;
            return true; */
			        redirect("super_admin/all_comments");

			
        }else{
            echo "email send failed";
            return false;
        }
	
	
       //$this->super_admin_model->publish_comment_info($comments_id);
        redirect("super_admin/all_comments");
    }
    
     public function delete_comment($comment_id)
    {
        $this->super_admin_model->delete_comment_info($comment_id);
        $sdata = array();
        $sdata['message'] = 'Comment deleted successfully!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/all_comments');
    }
    
	/*Comments*/
	
	

    
    public function logout() {
        $sdata = array();
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_id');
        $sdata['message'] = 'You are Successfully Logout !';
        $this->session->set_userdata($sdata);
        redirect('admin_login', 'refresh');
    }

}

?>
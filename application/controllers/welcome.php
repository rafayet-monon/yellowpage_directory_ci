<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
       
        $this->load->library('email');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('welcome_model');
		$this->load->library('email');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 
	public function index()
	{
	    $data=array();
            $data['title']='Home';
            $data['service']=1;
			$data['slider']=1;
			$data['search']=1;
			
			$data['all_published_division']=$this->welcome_model->select_all_published_division();
                 //$data['all_published_category']=$this->welcome_model->select_all_published_category();
            $data['all_published_service']=$this->welcome_model->select_all_published_service();
			//$data['all_company_by_user_id'] = $this->welcome_model->select_all_company_by_user_id();
            $data['all_published_category']=$this->welcome_model->select_all_published_category();
			$data['all_company']=$this->welcome_model->select_all_company();
			$data['popular_service'] = $this->welcome_model->display_popular_service();
			$data['popular_company'] = $this->welcome_model->display_popular_company();
            //$data['all_published_sub_category']=$this->welcome_model->select_all_published_sub_category();
            $data['maincontent']=$this->load->view('home_content',$data,true);
            $this->load->view('master',$data);
            
	}
        public function about_us()
	{
	    $data=array();
            $data['title']='About Us';
			$data['popular_service'] = $this->welcome_model->display_popular_service();
            $data['all_published_category']=$this->welcome_model->select_all_published_category();
            $data['maincontent']=$this->load->view('about_us','',true);
            $this->load->view('master',$data);
	}
         
        
         public function category_sub_category($category_id)
    {
        $data=array();
        $data['service']=1;
         $data['title']='Sub Category';
        $data['all_published_category']=$this->welcome_model->select_all_published_category();
		$data['popular_service'] = $this->welcome_model->display_popular_service();
       // $data['all_published_sub_category']=$this->welcome_model->select_all_published_sub_category();
        $data['all_published_sub_category_by_category']=$this->welcome_model->select_sub_category_info_by_category_id($category_id);
        $data['maincontent'] = $this->load->view('sub_category_content', $data, TRUE);
        $this->load->view('master', $data);
    }
    public function view_service($sub_category_id)
            {
                 $data=array();
                 $data['title']='Service';
                 $data['all_published_division']=$this->welcome_model->select_all_published_division();
                 $data['all_published_category']=$this->welcome_model->select_all_published_category();
                 $data['all_published_service']=$this->welcome_model->select_all_published_service();
				 $data['popular_service'] = $this->welcome_model->display_popular_service();
				 
       // $data['all_published_sub_category']=$this->welcome_model->select_all_published_sub_category();
                 //$data['all_published_service_by_sub_category']=$this->welcome_model->select_all_publis//hed_sub_category($sub_category_id);
				 
				 
				 
				 //Pagination starts
            $this->load->library('pagination');
            $config['base_url'] = base_url() . 'welcome/view_service/' . $sub_category_id . '/';
            $config['total_rows'] = count($this->welcome_model->select_service_info_by_sub_category_id($sub_category_id));
			$config['uri_segment'] = 4;
            $config['per_page'] = '8';
            $config['full_tag_open'] = "<div class='templatemo_paging'>";
            $config['full_tag_close'] = "</div>";
            $this->pagination->initialize($config);
        //Pagination ends
        $data['all_published_service_by_sub_category'] = $this->welcome_model->select_all_published_sub_category($sub_category_id,$config['per_page'], $this->uri->segment(4));
				 
				 
                 //$data['all_published_service_by_sub_category']=$this->welcome_model->select_service_in//fo_by_sub_category_id($sub_category_id);
                 $data['maincontent'] = $this->load->view('service', $data, TRUE);
                 $this->load->view('master', $data);
            }
            
            
            public function save_user()
                    {
                        $data=array();
                        $data['f_name']=$this->input->post('f_name',true);
                        $data['l_name']=$this->input->post('l_name',true);
                        $data['email_id']=$this->input->post('email_id',true);
                        $data['password']=md5($this->input->post('password',true));
                        $data['mobile_number']=$this->input->post('mobile_number',true);
                        $this->welcome_model->save_user_info($data);
                        $sdata=array();
                        $sdata['message']='Save User Information Successfully ! You may Login Now ';
                        $this->session->set_userdata($sdata);
                        redirect('welcome/user_login');
                        
                    }
                    public function user_login()
	{
	    $data=array();
            
            $data['title']='login';
            $data['all_published_category']=$this->welcome_model->select_all_published_category();
			$data['popular_service'] = $this->welcome_model->display_popular_service();
            $data['maincontent']=$this->load->view('user_login','',true);
            $this->load->view('master',$data);
	}
                    
                    public function check_user_login()
                    {
                        //$data=array();
                        //$data['all_published_user']=$this->welcome_model->select_all_published_user();
                        $email_id=$this->input->post('email_id');
                        $password=$this->input->post('password');
                        
                       $result= $this->welcome_model->check_user_login_info($email_id,$password);
                      $sdata=array();
                       if($result)
                       {
                           $sdata['user_id']=$result->user_id;
                           //$sdata['user_name']=$result->user_name;
                           $sdata['email_id']=$result->email_id;
                           $sdata['password']=$result->password;
                           $sdata['f_name']=$result->f_name;
                           $this->session->set_userdata($sdata);
                           redirect('welcome');
                       }
                       else{
                           $sdata['message']='Email Id / Password Invalide';
                           $this->session->set_userdata($sdata);
                           redirect('Welcome/user_login');
                       }
                    }
                    
                    public function user_logout()
                    {
                        $this->session->unset_userdata('password');
                        $this->session->unset_userdata('email_id');
                        $this->session->unset_userdata('user_id');
                        $this->session->unset_userdata('f_name');
						$this->cart->destroy();
                        redirect('welcome','refresh');
                    }
					
					
					
					public function check_customer_email($email_id)
                        {
						$result=$this->welcome_model->check_email_address($email_id);
						if($result)
						{
							echo 'Email Address Alredy Exists !';
						}
						else{
							echo 'Email Address Avilable';
						}
                        }
					
					
					
					
					
					
					
					
					
    
                   public function add_company() {
                   $data = array();
                   $data['all_published_division']=$this->welcome_model->select_all_published_division();
				   
                  //$data['all_published_category']=$this->welcome_model->select_all_published_category();
                   //$data['all_published_sub_category']=$this->welcome_model->select_all_published_sub_category();
                   $data['maincontent'] = $this->load->view('add_company', $data, TRUE);
                   $data['title'] = 'Start Service';
                   $this->load->view('master', $data);
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
        public function save_company()
    {
        $data=array();
        $data['company_name']=$this->input->post('company_name',true);
        $data['service']=$this->input->post('service',true);
        $data['service_description']=$this->input->post('service_description',true);
        $data['category_id']=$this->input->post('category_id',true);
        $data['sub_category_id']=$this->input->post('sub_category_id',true);
        $data['user_id'] = $this->session->userdata('user_id');
        $data['division_id']=$this->input->post('division_id',true);
        
        
        $data['address']=$this->input->post('address',true);
        $data['mobile']=$this->input->post('mobile',true);
		$data['service_email']=$this->input->post('service_email',true);
        //$data['publication_status']=$this->input->post('publication_status',true);
		//$data['popular_service'] = $this->welcome_model->display_popular_service();
        $this->welcome_model->save_company_info($data);
        $sdata=array();
        $sdata['message']="Save service Information Successfully";
        $this->session->set_userdata($sdata);
        redirect('welcome/add_company');
    }
    
    public function service_grid()
    {
        $data = array();
        $data['title'] = "My Service";
		//$data['popular_service'] = $this->welcome_model->display_popular_service();
        $data['all_service_by_user_id'] = $this->welcome_model->select_all_service_by_user_id();
        $data['maincontent'] = $this->load->view('service_grid', $data, TRUE);
        $this->load->view('master', $data);
    }
    
     public function display_service_by_user_id($user_id)
    {
        $data = array();
        $data['title'] = "Service by Company";
        //$data['all_category'] = $this->welcome_model->select_all_published_service();
        //$data['all_user'] = $this->welcome_model->select_all_user();
        $data['popular_service'] = $this->welcome_model->display_popular_service();     
        $data['all_service'] = $this->welcome_model->select_service_by_user_id($user_id);        
        $data['maincontent'] = $this->load->view('service_grid', $data, TRUE);
        $this->load->view('master', $data);
    }
     
    public function delete_service($service_id)
    {
        
        $this->welcome_model->delete_service_info_by_service_id($service_id);
        $sdata = array();
        $sdata['message'] = 'Service deleted successfully!';
        $this->session->set_userdata($sdata);
        redirect('welcome/service_grid');
    }
    
    public function edit_service($service_id)
    {
        $data = array();
        $data['title'] = "Edit Service";
		//$data['popular_service'] = $this->welcome_model->display_popular_service();
        $data['service_info'] = $this->welcome_model->select_service_by_service_id($service_id);
        //$data['all_category'] = $this->w_model->select_all_published_category();
        $data['maincontent'] = $this->load->view('edit_service',$data,TRUE);
        $this->load->view('master',$data);
    }
    
    public function update_service()
    {
        $data = array();
        $service_id = $this->input->post('service_id',TRUE);
        $data['company_name'] = $this->input->post('company_name',TRUE);
        $data['service'] = $this->input->post('service',TRUE);
        $data['service_description'] = $this->input->post('service_description',TRUE);
        $data['address'] = $this->input->post('address',TRUE);
        $data['mobile'] = $this->input->post('mobile',TRUE);
        $data['publication_status'] = $this->input->post('publication_status',TRUE);
		//$data['popular_service'] = $this->welcome_model->display_popular_service();
        $this->welcome_model->update_service_info($data,$service_id);
        $sdata = array();
        $sdata['message'] = 'Service updated successfully!';
        $this->session->set_userdata($sdata);
        redirect('welcome/edit_service/'.$service_id);
    }

        public function publish_service($service_id)
    {
        $this->welcome_model->publish_service_info($service_id);
        redirect("welcome/service_grid");
    }
    
    public function unpublish_service($service_id)
    {
        $this->welcome_model->unpublish_service_info($service_id);
        redirect("welcome/service_grid");
    }
    
    public function contact_us()
            {
            $data=array();
            $data['title']='Contact Us';
            $data['service']=1;
           $data['all_published_category']=$this->welcome_model->select_all_published_category();
           //$data['popular_service'] = $this->welcome_model->display_popular_service();
            $data['maincontent']=$this->load->view('contact_us','',true);
            $this->load->view('master',$data);
            }

         public function search() {

        $search_data = $_POST['search_data'];

        $query = $this->welcome_model->get_live_items($search_data);
        //$data['division_id']=$this->input->post('division_id',true);
        foreach ($query as $row):
            echo "<li><a href='welcome/view_service/$row->sub_category_id'>" . $row->service ."</a></li>";
			
			
        endforeach;
		
    }  

/*Start company profile*/
 public function add_company_profile() {
        $data = array();
        
       // $data['all_company'] = $this->welcome_model->select_all_company();
        $data['maincontent'] = $this->load->view('add_company_profile', $data, TRUE);
        $data['title'] = 'Add Company Profile';
        $this->load->view('master', $data);
    }


public function save_company_profile(){
        $data=array();
        $data['company_name']=$this->input->post('company_name',true);
        $data['user_id'] = $this->session->userdata('user_id');
        $data['company_description']=$this->input->post('company_description',true);
		$data['service']=$this->input->post('service',true);
		
         //$data['all_company'] = $this->welcome_model->select_all_company();
        /*
         * Start Image Upload------------------
         */
       
        $config['upload_path'] = 'images/company_images/';
        $config['allowed_types'] = 'gif|jpg|png|jgeg';
        $config['max_size']	= '1000';
        $config['max_width']  = '1600';
        $config['max_height']  = '1600';
        $error='';
        $fdata=array();
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('company_image'))
        {
                $error = $this->upload->display_errors();
                echo $error;
                exit();
                
        }
        else
        {
                $fdata = $this->upload->data();
                $data['company_image']=$config['upload_path'].$fdata['file_name'];
        }
          
        /* 
         * End Image Upload------------
         */
        
        $data['address']=$this->input->post('address',true);
        $data['contact_number']=$this->input->post('contact_number',true);
        $data['company_email']=$this->input->post('company_email',true);
        $this->welcome_model->save_company_profile_info($data);
        $sdata=array();
        $sdata['message']="Save company Information Successfully";
        $this->session->set_userdata($sdata);
        redirect('welcome/add_company_profile');
}
/*End Company profile*/


/*View company profile*/
public function view_company_profile()
{
	    $data=array();
            $data['title']='Company';
			$data['all_company']=$this->welcome_model->select_all_company();
			 
			  //Pagination starts
            $this->load->library('pagination');
            $config['base_url'] = base_url() . 'welcome/view_company_profile/';
            $config['total_rows'] = count($this->welcome_model->select_all_company());
            $config['per_page'] = '6';
            $config['full_tag_open'] = "<div class='templatemo_paging'>";
            $config['full_tag_close'] = "</div>";
            $this->pagination->initialize($config);
        //Pagination ends
        $data['all_company'] = $this->welcome_model->select_all_company_pg($config['per_page'], $this->uri->segment(3));			 
            $data['maincontent']=$this->load->view('view_company_profile',$data,true);
            $this->load->view('master',$data);
	}


/*End view*/



/*Start profile page*/

public function profile_page($company_id)
	{
	        $data=array();
            $data['title']='Profile';
			$data['all_service'] = $this->welcome_model->select_company_by_company_id($company_id);
			$data['products'] = $this->welcome_model->select_all_photo_by_company_id($company_id);
			$this->welcome_model->update_company_counter($company_id);			           
            $data['maincontent']=$this->load->view('profile_page',$data,true);			
            $this->load->view('master',$data);
	}


public function edit_company($company_id)
    {
        $data = array();
        $data['title'] = "Edit Company";
		$data['all_service'] = $this->welcome_model->select_company_by_company_id($company_id);        
        $data['maincontent'] = $this->load->view('profile_page',$data,TRUE);
        $this->load->view('master',$data);
    }
    
    public function update_company()
    {
        $data = array();
        $company_id = $this->input->post('company_id',TRUE);
        $data['user_id'] = $this->session->userdata('user_id');
		 $data['company_name']=$this->input->post('company_name',true);
		 
		 /*
         * Start Image Upload------------------
         */
       
        $config['upload_path'] = 'images/company_images/';
        $config['allowed_types'] = 'gif|jpg|png|jgeg';
        $config['max_size']	= '1000';
        $config['max_width']  = '1600';
        $config['max_height']  = '1600';
        $error='';
        $fdata=array();
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('company_image'))
        {
                $error = $this->upload->display_errors();
                echo $error;
                exit();
                
        }
        else
        {
                $fdata = $this->upload->data();
                $data['company_image']=$config['upload_path'].$fdata['file_name'];
        }
          
        /* 
         * End Image Upload------------
         */
		 
		 
		 
        $data['company_description']=$this->input->post('company_description',true);
		$data['service']=$this->input->post('service',true);
		$data['address']=$this->input->post('address',true);
        $data['contact_number']=$this->input->post('contact_number',true);
        $data['company_email']=$this->input->post('company_email',true);
        $this->welcome_model->update_company_info($data,$company_id);
        $sdata = array();
        $sdata['message'] = 'Service updated successfully!';
        $this->session->set_userdata($sdata);
        redirect('welcome/edit_company/'.$company_id);
    }

/*End profile page*/


/*Add photo for company*/


public function add_photo()
	{
		
	
	    $data=array();
		$data['user_id'] =$this->session->userdata('user_id');
        $data['product_name']=$this->input->post('product_name',true);
		 $data['company_id']=$this->input->post('company_id',true);
        $data['id']=$this->input->post('id',true);
        $data['product_description']=$this->input->post('product_description',true);
		$data['product_quantity']=$this->input->post('product_quantity',true);
		$data['price']=$this->input->post('price',true);
         
        /*
         * Start Image Upload------------------
         */
       
        $config['upload_path'] = 'images/product_image/';
        $config['allowed_types'] = 'gif|jpg|png|jgeg';
        $config['max_size']	= '1000';
        $config['max_width']  = '1600';
        $config['max_height']  = '1600';
        $error='';
        $fdata=array();
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('product_image'))
        {
                $error = $this->upload->display_errors();
                echo $error;
                exit();
                
        }
        else
        {
                $fdata = $this->upload->data();
                $data['product_image']=$config['upload_path'].$fdata['file_name'];
        }
          
        /* 
         * End Image Upload------------
         */
        
        
        $this->welcome_model->save_product_info($data);
        $sdata=array();
        $sdata['message']="Save product Information Successfully";
        $this->session->set_userdata($sdata); 
        redirect('welcome/view_company_profile');    
	}


	
	

/*End Add photo for company*/


public function photo_grid($company_id)
    {
        $data = array();
        $data['title'] = "Photos";
        $data['products'] = $this->welcome_model->select_all_photo_by_company_id($company_id);
        $data['maincontent'] = $this->load->view('profile_page', $data, TRUE);
        //$this->load->view('master', $data);
    }





/*My company*/

public function my_company()
    {
        $data = array();
        $data['title'] = "My Company";
        $data['all_company_by_user_id'] = $this->welcome_model->select_all_company_by_user_id();
        $data['maincontent'] = $this->load->view('my_company', $data, TRUE);
        $this->load->view('master', $data);
    }


/*My company*/

/*Service Details*/
 public function service_details($service_id) {
        $data = array();
        $data['title'] = "Service Details";
        
		//$data['popular_service'] = $this->welcome_model->display_popular_service();
		$data['single_service'] = $this->welcome_model->select_service_by_service_id($service_id);
        $this->welcome_model->update_counter($service_id);
      $data['comments_by_service_id'] = $this->welcome_model->display_comments_by_service_id($service_id);
        $data['maincontent'] = $this->load->view('service_details', $data, TRUE);
        $this->load->view('master', $data);
    }



/*comments*/




    public function post_comments() {
        $data = array();
        $data['service_id'] = $this->input->post('service_id', true);
        $data['user_id'] = $this->input->post('user_id', true);
        $data['service_email'] = $this->input->post('service_email', true);
        $data['comments'] = $this->input->post('comments', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->welcome_model->save_comments($data);
        $sdata = array();
        $sdata['message'] = ' ........... Your comment is waiting for approval  ...........';
        $this->session->set_userdata($sdata);
       redirect('welcome/service_details/' . $data['service_id']);
		



			
    }
/*comments*/


/*End service Details*/

/*Start cart*/

public function shopping_view($company_id)
	{	
                
		$data=array();
            $data['title']='Product';
            //$data['products'] = $this->welcome_model->select_all_photo_by_company_id($company_id);
			//$data['product'] = $this->welcome_model->select_photo_by_product_id($product_id);
			//$data['all_service'] = $this->welcome_model->select_company_by_company_id($company_id);
			
			
			
			//Pagination starts
            $this->load->library('pagination');
            $config['base_url'] = base_url() . 'welcome/shopping_view/' . $company_id . '/';
            $config['total_rows'] = count($this->welcome_model->select_product_info_by_company_id($company_id));
			$config['uri_segment'] = 4;
            $config['per_page'] = '6';
            $config['full_tag_open'] = "<div class='templatemo_paging'>";
            $config['full_tag_close'] = "</div>";
            $this->pagination->initialize($config);
        //Pagination ends
        $data['all_published_product_by_company_id'] = $this->welcome_model->select_all_published_product($company_id,$config['per_page'], $this->uri->segment(4));
			
			
			
			
			
			
			
			
			
			
			
            $data['maincontent']=$this->load->view('shopping_view',$data,true);
            $this->load->view('master',$data);
	}
	public function add_to_cart(){
		$product_id = $this->input->post('product_id', true);
        $qty = $this->input->post('quantity', true);
		//$data['product'] = $this->welcome_model->select_all_photo_by_company_id($company_id);
        $product_info = $this->welcome_model->select_product_by_product_id($product_id);
       /* echo '<pre>';
       print_r($product_info);
       exit();  */
        $data = array(
            'id' => $product_info->product_id,
            'qty' => $qty,
            'price' => $product_info->price,
            'name' => $product_info->product_name,
            'image' => $product_info->product_image,
            'company_id' => $product_info->company_id
        );
		
		 /* echo '<pre>';
       print_r($data);
       exit();  */ 
		

        $this->cart->insert($data); 
        redirect('welcome/show_cart');
	}
	
	public function show_cart(){
		    $data=array();
	        $data['title']='Checkout';
		    $data['maincontent']=$this->load->view('show_cart',$data,true);
            $this->load->view('master',$data);
	}
	
	
	public function update_cart()
    {
        $quantity=$this->input->post('qty',true);
        $rowid=$this->input->post('rowid',true);
        $data = array(
               'rowid' => $rowid,
               'qty'   => $quantity
            );

$this->cart->update($data); 
redirect('welcome/show_cart');
    }

	public function delete_to_cart($rowid)
    {
        
        $data = array(
               'rowid' => $rowid,
               'qty'   => 0
            );

$this->cart->update($data); 
redirect('welcome/show_cart');
    }
	/*End cart*/
	
      public function shipping_address()
    {
        $data = array();
        //$data['all_category']=$this->super_admin_model->select_all_published_category();
        //$data['all_manufacturer']=$this->super_admin_model->select_all_published_manufacturer();
        $data['title']='Shipping Address';
        $data['maincontent'] = $this->load->view('shipping_form', $data, true);
        $this->load->view('master', $data);
    }
	
	
	public function save_shipping_address()
    {
        $data['full_name'] = $this->input->post('full_name', true);
        $data['mobile_no'] = $this->input->post('mobile_no', true);
        $data['email_address'] = $this->input->post('email_address', true);
        $data['company_name'] = $this->input->post('company_name', true);
        $data['address'] = $this->input->post('address', true);
        $data['city'] = $this->input->post('city', true);
        //$data['country'] = $this->input->post('country', true);
        $data['zip_code'] = $this->input->post('zip_code', true);
        $this->welcome_model->save_shipping_info($data);
        redirect('welcome/payment_method');
     }
	 
	 public function payment_method() {
        $data = array();
        $data['maincontent'] = $this->load->view('payment_method', $data, true);
        $this->load->view('master', $data);
    }
	 
	 
	
	public function confirm_order()
    {
        $data=array();
		
			$payment_type=$this->input->post('payment_type',true);     
            if($payment_type == 'cash_on_delivery')
        {
            $data['payment_type']=$payment_type;
            $this->welcome_model->save_payment_info($data);
            $this->welcome_model->save_order_info();          
            $this->cart->destroy();
            redirect('welcome/order_successfull');   
        }			
        }
        
   
    
    public function order_successfull()
    {
        $data = array();
        $data['maincontent'] = $this->load->view('order_successfull', $data, true);
        $this->load->view('master', $data);
    }
	
	
	public function manage_order($company_id)
    {
        $data=array();
		$data['title']='Manage Order';
        $data['all_order']=$this->welcome_model->select_all_order($company_id);
		$data['products'] = $this->welcome_model->select_all_photo_by_company_id($company_id);
        $data['maincontent']=$this->load->view('manage_order',$data,true);
        $this->load->view('master',$data);
    }
    public function view_invoice($order_id)
    {
        $data=array();
		$data['title']='View Invoice';
        $data['order_info']=$this->welcome_model->select_order_by_id($order_id);
//        echo '<pre>';
//        print_r($order_info);
//        exit();
        $user_id=$data['order_info']->user_id;
        $shipping_id=$data['order_info']->shipping_id;
        $data['billing_info']=$this->welcome_model->select_customer_info_by_id($user_id);
        $data['shipping_info']=$this->welcome_model->select_shipping_info_by_id($shipping_id);
        $data['cart_contents']=$this->welcome_model->select_order_details_info($data['order_info']->order_id);
        $data['maincontent']=$this->load->view('invoice',$data,true);
        $this->load->view('master',$data);
    }
    public function download($order_id)
    {
        $data=array();
        $data['order_info']=$this->welcome_model->select_order_by_id($order_id);
//        echo '<pre>';
//        print_r($order_info);
//        exit();
        $user_id=$data['order_info']->user_id;
        $shipping_id=$data['order_info']->shipping_id;
        $data['billing_info']=$this->welcome_model->select_customer_info_by_id($user_id);
        $data['shipping_info']=$this->welcome_model->select_shipping_info_by_id($shipping_id);
        $data['cart_contents']=$this->welcome_model->select_order_details_info($data['order_info']->order_id);
        
        $this->load->helper('dompdf');
        $view_file=$this->load->view('invoice', $data, true);
        $file_name=pdf_create($view_file, 'inv-'.$data['order_info']->order_id);
        echo $file_name;
    }
	
	/*Order and Invoice End here*/
	
	
	
	/*Manage product*/
	
    public function product_grid($company_id)
    {
        $data = array();
        $data['title'] = "Manage Product ";
		
        $data['all_product_by_company_id'] = $this->welcome_model->select_all_product_by_company_id($company_id);
        $data['maincontent'] = $this->load->view('product_grid', $data, TRUE);
        $this->load->view('master', $data);
    }
  
    
    
    public function delete_product($product_id)
    {
        
        $this->welcome_model->delete_product_info_by_product_id($product_id);
        $sdata = array();
        $sdata['message'] = 'Product deleted successfully!';
        $this->session->set_userdata($sdata);
        redirect('welcome/product_grid/'.$product_id);
    }
     public function edit_product($product_id)
    {
        $data = array();
        $data['title'] = "Edit Product";
		$data['all_product'] = $this->welcome_model->select_product_edit_by_product_id($product_id);
        //$data['company_info'] = $this->welcome_model->select_company_by_company_id($company_id);
        //$data['all_category'] = $this->w_model->select_all_published_company();
        $data['maincontent'] = $this->load->view('edit_product',$data,TRUE);
        $this->load->view('master',$data);
    }
    
    public function update_product()
    {
        $data = array();
        $product_id = $this->input->post('product_id',TRUE);
        $data['user_id'] = $this->session->userdata('user_id');
		$data['product_name']=$this->input->post('product_name',true);
		 
		 /*
         * Start Image Upload------------------
         */
       
        $config['upload_path'] = 'images/product_image/';
        $config['allowed_types'] = 'gif|jpg|png|jgeg';
        $config['max_size']	= '1000';
        $config['max_width']  = '1600';
        $config['max_height']  = '1600';
        $error='';
        $fdata=array();
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('product_image'))
        {
                $error = $this->upload->display_errors();
                echo $error;
                exit();
                
        }
        else
        {
                $fdata = $this->upload->data();
                $data['product_image']=$config['upload_path'].$fdata['file_name'];
        }
          
        /* 
         * End Image Upload------------
         */
		 
		 
		 
        $data['product_description']=$this->input->post('product_description',true);
		$data['price']=$this->input->post('price',true);
		$data['product_quantity']=$this->input->post('product_quantity',true);
        $this->welcome_model->update_product_info($data,$product_id);
        $sdata = array();
        $sdata['message'] = 'Product updated successfully!';
        $this->session->set_userdata($sdata);
        redirect('welcome/edit_product/'.$product_id);
    }

	/*End Product Update*/
	/*Search Division*/

	/*End search division*/

}










	
    


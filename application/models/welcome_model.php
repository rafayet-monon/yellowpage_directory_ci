<?php
class Welcome_Model extends CI_Model {
    //put your code here
    
    public function select_all_published_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     
    public function select_sub_category_info_by_category_id($category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_sub_category');
        $this->db->where('category_id',$category_id);
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
        
        
    }
    public function select_all_published_division()
    {
        $this->db->select('*');
        $this->db->from('tbl_division');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
        
        
    }
    public function select_all_published_service()
    {
        $this->db->select('*');
        $this->db->from('tbl_service');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
        
        
    }
    
    public function select_service_info_by_sub_category_id($sub_category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_service');
        $this->db->where('sub_category_id',$sub_category_id);
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
        
        
    }
	
	
	public function select_all_published_sub_category($sub_category_id, $per_page, $offset)
    {
        $this->db->select('*');
        $this->db->from('tbl_service');
		$this->db->where('sub_category_id',$sub_category_id);
		
        $this->db->where('publication_status',1);
		$this->db->order_by('sub_category_id', 'desc');
        $query_result = $this->db->get('', $per_page, $offset);
        $result = $query_result->result();
        return $result;
    }
	
	
	/*Single service*/
	public function select_all_published_sub_category_for_service($sub_category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_service');
		$this->db->where('sub_category_id',$sub_category_id);
		
        $this->db->where('publication_status',1);
		//$this->db->order_by('sub_category_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
	/*End Single service*/

	
	
	
	
	
    public function save_user_info($data)
    {
        $this->db->insert('tbl_user',$data);
			
		
    }
    
    public function check_user_login_info($email_id,$password)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('email_id',$email_id);
        $this->db->where('password',md5($password));
        $query_result=$this->db->get();
        $result=$query_result->row();
       
        return $result;
    }
    public function save_company_info($data)
    {
        $this->db->insert('tbl_service',$data);
    }
    
      public function select_all_user()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
        public function select_service_by_user_id($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_service');
        $this->db->where('user_id',$user_id);
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
      public function select_all_service_by_user_id()
    {
        $user_id = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('tbl_service');
        $this->db->where('user_id',$user_id);
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function delete_service_info_by_service_id($service_id)
    {
        $this->db->where('service_id',$service_id);
        $this->db->delete('tbl_service');
    }
    public function select_service_by_service_id($service_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_service');
        $this->db->where('service_id',$service_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
	
	
	
	
	
	
	
	
	
    public function update_service_info($data,$service_id)
    {
        $this->db->where('service_id',$service_id);
        $this->db->update('tbl_service',$data);
    }
    
    public function publish_service_info($service_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('service_id',$service_id);
        $this->db->update('tbl_service');
    }
    
    public function unpublish_service_info($service_id)
    {
        $this->db->set('publication_status',0);
        $this->db->where('service_id',$service_id);
        $this->db->update('tbl_service');
    }
    
	
	
	function get_live_items($search_data) {

        $this->db->select('*');

        $this->db->from('tbl_service');
		//$this->db->where('division_id',$division_id);
        $this->db->group_start();
        $this->db->like('company_name', $search_data);
        $this->db->or_like('service', $search_data);
        $this->db->group_end();

        $this->db->limit(10);
        $this->db->order_by("service_id", 'desc');
        $query = $this->db->get();

        return $query->result();
		
    }
	
	public function save_company_profile_info($data) {

        $this->db->insert('tbl_company', $data);
		$company_id=$this->db->insert_id();
           $oddata=array();
           $oddata['company_id']=$company_id;
           $this->session->set_userdata($oddata);
    }
	
	
	
	public function select_all_company()
    {
        $this->db->select('*');
        $this->db->from('tbl_company');
		//$this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
	
	
	public function select_all_company_pg($per_page, $offset)
    {
        $this->db->select('*');
        $this->db->from('tbl_company');
		$this->db->where('publication_status',1);
        $query_result = $this->db->get('', $per_page, $offset);
        $result = $query_result->result();
        return $result;
    }
	
	public function select_product_by_product_id($product_id){
		//$user_id = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('tbl_product');
		//$this->db->where('user_id',$user_id);
        $this->db->where('product_id',$product_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
		return $result;
	}
	
	/*  public function select_product_by_product_id($product_id)
    {
        $sql="SELECT p.*,c.category_name,m.manufacturer_name FROM tbl_product as p,tbl_category as c, tbl_manufacturer as m WHERE  (p.manufacturer_id=m.manufacturer_id AND p.category_id=c.category_id) AND p.product_id='$product_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();

        return $result;
    }
	 */
	
	public function select_company_by_company_id($company_id)
    {
		$user_id = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('tbl_company');
		//$this->db->where('user_id',$user_id);
        $this->db->where('company_id',$company_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
	}
	
	/*public function select_company_by_company_id($company_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_company');
        $this->db->where('company_id',$company_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }*/
	
	
	
	public function select_product_info_by_company_id($company_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('company_id',$company_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
        
        
    }
	
	
	public function select_all_published_product($company_id, $per_page, $offset)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
		$this->db->where('company_id',$company_id);
		
        
		$this->db->order_by('company_id', 'desc');
        $query_result = $this->db->get('', $per_page, $offset);
        $result = $query_result->result();
        return $result;
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
    public function update_company_info($data,$company_id)
    {
        $this->db->where('company_id',$company_id);
        $this->db->update('tbl_company',$data);
    }

	
	public function save_product_info($data) {
        $this->db->insert('tbl_product', $data);
    }
	
	public function select_all_photo_by_company_id($company_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('company_id',$company_id);
        //$this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
		/* echo'<pre>';
		print_r($result);
		exit(); */
        return $result;
    }
	
	public function select_all_company_by_user_id()
    {
		$user_id = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('tbl_company');
        $this->db->where('user_id',$user_id);
        //$this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
	
	/*Popular service*/
	
	
	
	
	public function display_popular_service()
    {
        $sql = "SELECT * FROM tbl_service WHERE publication_status=1 ORDER BY counter DESC LIMIT 8";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function update_counter($service_id)
    {
        $sql = "UPDATE tbl_service SET counter = counter + 1 WHERE service_id = ".$service_id;
        $this->db->query($sql);
    }
	/*End popular service*/
	
	
	
	/*Popular Company*/
	
	
	
	
	public function display_popular_company()
    {
        $sql = "SELECT * FROM tbl_company ORDER BY counter DESC LIMIT 3";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function update_company_counter($company_id)
    {
        $sql = "UPDATE tbl_company SET counter = counter + 1 WHERE company_id = ".$company_id;
        $this->db->query($sql);
    }
	/*End popular company*/
	
	
	/*comment*/
   public function save_comments($data) {
        $this->db->insert('tbl_comments', $data);
    }
    
    public function display_comments_by_service_id($service_id)
    {
        $sql="SELECT b.f_name,c.comments FROM tbl_user as b,tbl_comments as c
          WHERE c.publication_status=1 AND c.user_id=b.user_id AND c.service_id='$service_id'";  
        
      $query_result = $this->db->query($sql);
      $result = $query_result->result();
      return $result;
    }	
	
	/*comment*/
	
	public function insert_customer($data)
	{
		$this->db->insert('customers', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;		
	}
	
        // Insert order date with customer id in "orders" table in database.
	public function insert_order($data)
	{
		$this->db->insert('orders', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
        // Insert ordered product detail in "order_detail" table in database.
	public function insert_order_detail($data)
	{
		$this->db->insert('order_detail', $data);
	}
	
	
	
	public function select_photo_by_product_id($product_id)
    {
		//$user_id = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('tbl_product');
		//$this->db->where('user_id',$user_id);
        $this->db->where('product_id',$product_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
		
		
		
        return $result;
	}
	
	public function check_email_address($email_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('email_id',$email_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
	
	
	public function save_shipping_info($data)
       {
           $this->db->insert('tbl_shipping',$data);
            $shipping_id=$this->db->insert_id();
            $sdata=array();
            $sdata['shipping_id']=$shipping_id;
            $this->session->set_userdata($sdata);
       }
	
	public function save_payment_info($data)
       {
           $this->db->insert('tbl_payment',$data);
           $payment_id=$this->db->insert_id();
           $sdata=array();
           $sdata['payment_id']=$payment_id;
           $this->session->set_userdata($sdata);
       }
       public function save_order_info()
       {
           $odata=array();
           $odata['user_id']=$this->session->userdata('user_id');
		  // $odata['company_id']=$this->session->userdata('company_id');
           $odata['shipping_id']=$this->session->userdata('shipping_id');
           $odata['payment_id']=$this->session->userdata('payment_id');
           $odata['order_total']=$this->session->userdata('grand_total');
           $this->db->insert('tbl_order',$odata);
           $order_id=$this->db->insert_id();
           
           $contents=$this->cart->contents();
           
           foreach($contents as $v_contents)
           {
               $oddata=array();
               $oddata['order_id']=$order_id;
			   $oddata['company_id']=$v_contents['company_id'];
               $oddata['product_id']=$v_contents['id'];
               $oddata['product_name']=$v_contents['name'];
               $oddata['product_price']=$v_contents['price'];
               $oddata['product_sales_quantity']=$v_contents['qty'];
               $this->db->insert('tbl_order_details',$oddata);
           }
            $sql="update tbl_product as p,  tbl_order_details as od
              set p.product_quantity = p.product_quantity - od.product_sales_quantity
              where p.product_id=od.product_id and od.order_id='$order_id' ";
			  

        $this->db->query($sql);
       }
	
	public function select_all_order($company_id) {
		
		
		
		
         /* $sql="SELECT o.*,u.f_name,u.l_name,p.payment_type FROM tbl_order as o,tbl_user as u, tbl_payment as p  WHERE  (o.user_id=u.user_id AND o.payment_id=p.payment_id )"; */
		 
		 $user_id = $this->session->userdata('user_id');
		 $sql="SELECT o . * ,od.company_id, c.f_name, c.l_name, p.payment_type FROM tbl_order o INNER JOIN tbl_order_details od ON o.order_id = od.order_id INNER JOIN tbl_user c ON o.user_id = c.user_id INNER JOIN tbl_payment p ON o.payment_id = p.payment_id WHERE od.company_id =$company_id GROUP BY o.order_id, od.company_id ORDER BY o.order_id DESC ";
		 
		 
		 
        $query_result = $this->db->query($sql);
        $result = $query_result->result();

        return $result;
    }
    public function select_order_by_id($order_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->where('order_id', $order_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
    public function select_customer_info_by_id($user_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
    public function select_shipping_info_by_id($shipping_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_shipping');
        $this->db->where('shipping_id', $shipping_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
    public function select_order_details_info($order_id)
    {
        
        $this->db->select('*');
        $this->db->from('tbl_order_details');
        $this->db->where('order_id', $order_id);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
	
	
	
	
	
	public function select_all_product_by_company_id($company_id)
    {
        //$user_id = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('company_id',$company_id);
       // $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function delete_product_info_by_product_id($product_id)
    {
        $this->db->where('product_id',$product_id);
        $this->db->delete('tbl_product');
    }
	 
	
	public function select_product_edit_by_product_id($product_id)
    {
		$user_id = $this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('tbl_product');
		//$this->db->where('user_id',$user_id);
        $this->db->where('product_id',$product_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
	}
	

	public function update_product_info($data,$product_id)
    {
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product',$data);
    }
	
	
	
	
	
	
	
}



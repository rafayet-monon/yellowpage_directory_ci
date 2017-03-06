<?php

class Super_Admin_Model extends CI_Model {
    //put your code here
    public function save_category_info($data)
    {
        $this->db->insert('tbl_category',$data);
    }
    
    public function select_all_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function unpublished_category_by_id($category_id)
    {
        $this->db->set('publication_status',0);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
    }
    public function published_category_by_id($category_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
    }
     public function select_category_info_by_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_category_by_id($data, $category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category', $data);
    }

    public function delete_category_by_id($category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->delete('tbl_category');
    }
    
    public function save_division_info($data)
    {
        $this->db->insert('tbl_division',$data);
    }
    public function select_all_division()
    {
        $this->db->select('*');
        $this->db->from('tbl_division');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_all_published_division()
    {
        $this->db->select('*');
        $this->db->from('tbl_division');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function unpublished_division_by_id($division_id)
    {
        $this->db->set('publication_status',0);
        $this->db->where('division_id',$division_id);
        $this->db->update('tbl_division');
    }
    public function published_division_by_id($division_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('division_id',$division_id);
        $this->db->update('tbl_division');
    }
     public function select_division_info_by_id($division_id) {
        $this->db->select('*');
        $this->db->from('tbl_division');
        $this->db->where('division_id', $division_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_division_by_id($data, $division_id) {
        $this->db->where('division_id', $division_id);
        $this->db->update('tbl_division', $data);
    }

    public function delete_division_by_id($division_id) {
        $this->db->where('division_id', $division_id);
        $this->db->delete('tbl_division');
    }
    public function save_sub_category_info($data)
    {
        $this->db->insert('tbl_sub_category',$data);
    }
    public function select_all_sub_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_sub_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function unpublished_sub_category_by_id($sub_category_id)
    {
        $this->db->set('publication_status',0);
        $this->db->where('sub_category_id',$sub_category_id);
        $this->db->update('tbl_sub_category');
    }
    public function published_sub_category_by_id($sub_category_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('sub_category_id',$sub_category_id);
        $this->db->update('tbl_sub_category');
    }
     public function select_sub_category_info_by_id($sub_category_id) {
        $this->db->select('*');
        $this->db->from('tbl_sub_category');
        $this->db->where('sub_category_id', $sub_category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_sub_category_by_id($data, $sub_category_id) {
        $this->db->where('sub_category_id', $sub_category_id);
        $this->db->update('tbl_sub_category', $data);
    }

    public function delete_sub_category_by_id($sub_category_id) {
        $this->db->where('sub_category_id', $sub_category_id);
        $this->db->delete('tbl_sub_category');
    }
    public function save_service_info($data)
    {
        $this->db->insert('tbl_service',$data);
    }
    public function select_all_service()
    {
        $this->db->select('*');
        $this->db->from('tbl_service');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function unpublished_service_by_id($service_id)
    {
        $this->db->set('publication_status',0);
        $this->db->where('service_id',$service_id);
        $this->db->update('tbl_service');
    }
    public function published_service_by_id($service_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('service_id',$service_id);
        $this->db->update('tbl_service');
    }
     public function select_service_info_by_id($service_id) {
        $this->db->select('*');
        $this->db->from('tbl_service');
        $this->db->where('service_id', $service_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_service_by_id($data, $service_id) {
        $this->db->where('service_id', $service_id);
        $this->db->update('tbl_service', $data);
    }

    public function delete_service_by_id($service_id) {
        $this->db->where('service_id', $service_id);
        $this->db->delete('tbl_service');
    }
	public function select_all_company()
    {
        $this->db->select('*');
        $this->db->from('tbl_company');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
	
	public function unpublished_company_by_id($company_id)
    {
        $this->db->set('publication_status',0);
        $this->db->where('company_id',$company_id);
        $this->db->update('tbl_company');
    }
    public function published_company_by_id($company_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('company_id',$company_id);
        $this->db->update('tbl_company');
    }
	
	public function delete_company_by_id($company_id) {
        $this->db->where('company_id', $company_id);
		$this->db->delete('tbl_company');
	}
	/*comments*/
	
	
	 public function select_comments_by_id($service_id)
    {
        $sql="SELECT * FROM tbl_comments WHERE service_id='$service_id'";
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    
    public function select_all_comments_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_comments');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function unpublish_comment_info($comments_id)
    {
        $this->db->set('publication_status',0);
        $this->db->where('comments_id',$comments_id);
        $this->db->update('tbl_comments');
    }
    
    public function publish_comment_info($comments_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('comments_id',$comments_id);
        $this->db->update('tbl_comments');
    }
    
    public function delete_comment_info($comments_id)
    {
        $this->db->where('comments_id',$comments_id);
        $this->db->delete('tbl_comments');
    }
	
		/*comments*/
	
		public function select_email_id($comments_id){
	$this->db->select('service_email');
        $this->db->from('tbl_comments');
        $this->db->where('comments_id',$comments_id);
		
        $query_result = $this->db->get();
        $result = $query_result->row();
		
        return $result;
	}
   
}

?>

<?php

class Admin_Login_model extends CI_Model {
    
    public function check_login_info($admin_email_address,$admin_password){
//        $sql = "SELECT * FROM tbl_admin WHERE admin_email_address ='$admin_email_address' 
//        AND admin_password ='$admin_password' ";
        
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->WHERE('admin_email_address', $admin_email_address);
        $this->db->WHERE('admin_password', md5($admin_password));
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
}

?>

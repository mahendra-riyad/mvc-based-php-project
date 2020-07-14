<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Model {
    public function login_cookie($email, $password)
    {
      $count = 0;
      $this->db->where('email',$email);
      $query = $this -> db -> get ("admin_login");
      foreach ( $query->result() as $row ) {
        $count = 1;
        if($row->password == $password) {
          $this->input->set_cookie('admin', $row->email,3600);

        } else {
          redirect('http://localhost/assignment_mvc_php/index.php/Admin/admin_login/mismatch');
        }
      }
      if($count == 0) {
        redirect('http://localhost/assignment_mvc_php/index.php/Admin/admin_login/mismatch');
      }
    }
};
?>
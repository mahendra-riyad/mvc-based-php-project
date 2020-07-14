<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_job extends CI_Model {
    public function user_data($data)
    {
         $this -> db -> insert ("user" , $data);
    }
};
?>
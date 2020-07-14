<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_job extends CI_Model {
    public function new_job_add($data)
    {
         $this -> db -> insert ("company" , $data);
    }
};
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	 public function __construct()
	 {
	 	parent :: __construct();
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');   
       // $this->load->model("admin/Admin_login");
        $this->load->model("All_job");
		$this->load->helper('cookie');
	 }

	public function index()
	{
		$this->load->view('index');
	}

	public function contact() {
		$this->load->view('contact');
	}

	public function viewJobDetails() {
		$message = $this->uri->segment(3);
		$this->load->view("viewJobDetails", $message);
	}

	public function user_data() {
		$message = $this->uri->segment(3);
		 $a=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',0,1,2,3,4,5,6,7,8,9);
        $b=array_rand($a,10);
        $random="";
        for($i=0;$i<sizeof($b);$i++){
            $random=$random.$a[$b[$i]];
        }
        $data = array(
			"userid" => $random,
			"jobid" => $message,
			"fname" => $this->input->post('fname'),
			"lname" => $this->input->post('lname'),
			"email" => $this->input->post('email'),
			"password" => $this->input->post('password'),
			"gender" => $this->input->post('gender'),
			"dob" => $this->input->post('dob'),
			"tenth" => $this->input->post('tenth'),
			"twelve" => $this->input->post('twelve'),
			"btech" => $this->input->post('btech'),
			"github" => $this->input->post('github'),
			"linkdin" => $this->input->post('linkdin'),
        );
        $this->All_job->user_data($data);
        redirect('http://localhost/assignment_mvc_php/index.php/User/index/insert');
        
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	 public function __construct()
	 {
	 	parent :: __construct();
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');   
        $this->load->model("admin/Admin_login");
        $this->load->model("admin/New_job");
		$this->load->helper('cookie');

	//	$this->load->view('show',$data);

	 }
	public function index()
	{
		$this->load->view('admin/login');
    }
    public function login_data()	{
        $email = $this->input->post('email');
        $password = $this->input->post('password');

		$this->Admin_login->login_cookie($email,$password);
		redirect('http://localhost/assignment_mvc_php/index.php/Admin/dashboard');
    }
    public function admin_login()	{
        $message = $this->uri->segment(3);
		$this->load->view("admin/login", $message);
    }
    public function dashboard() {
        $message = $this->uri->segment(3);
      //  $data["h"] = $this->New_job->getData();
        $this->load->view("admin/dashboard", $message);
    }
    public function new_job() {
        $a=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',0,1,2,3,4,5,6,7,8,9);
        $b=array_rand($a,10);
        $random="";
        for($i=0;$i<sizeof($b);$i++){
            $random=$random.$a[$b[$i]];
        }
        $data = array(
            "code" => $random,
            "name" => $this->input->post('company_name'),
            "title" => $this->input->post('title'),
            "description" => $this->input->post('description')
        );
        $this->New_job->new_job_add($data);
        redirect('http://localhost/assignment_mvc_php/index.php/Admin/dashboard/insert');
        
    }
    public function user() {
        $this->load->view('admin/user');
    }
}

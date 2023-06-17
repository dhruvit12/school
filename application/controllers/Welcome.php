<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('my_helper');
     	if(!is_logged_in())  // if you add in constructor no need write each function in above controller. 
        {
        //    echo base_url();
        }
    }
	public function index()
	{
		$this->load->view('login');
	}
	public function login()
	{
		$this->form_validation->set_rules('email','Email id','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run() == False){
	      $this->load->view('login');
		}else{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$this->load->model('Login_Model');
		$user=$this->Login_Model->index($email,$password);
		$this->session->set_userdata('name',$user->name);
		$this->session->set_userdata('user_id',$user->id);	

		if($user){
			// echo "<pre>";print_r($user->role);exit;
		 if($user->role==1)
		  {
			  $user='admin';
		  }
		  elseif($user->role==2)
		  {
			  $user='teacher';
		  }
		  elseif($user->role==3)
		  {
			  $user='student';
		  }
		   $this->session->set_userdata('role',$user);
		   redirect(base_url().$user);
		} else {
		    $this->session->set_flashdata('error','Invalid login details.Please try again.');
		    redirect(base_url());
		}
		} 
	}
	public function admin()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('dashboard');
		$this->load->view('layout/footer');

	}
	public function register()
	{
		$this->load->view('register');
	}
	public function logout()
	{
		$this->session->sess_destroy();
        redirect(base_url().'login');
	}
	public function user_insert()
	{
		$this->form_validation->set_rules("email", "Email-ID", "trim|required|xss_clean");
        $this->form_validation->set_rules("password", "Password", "trim|required|xss_clean");
		if ($this->form_validation->run())
        {
		$data['name']=$this->input->post('name');
		$data['email']=$this->input->post('email');
		$data['password']=$this->input->post('password');
		$this->load->model('Register_Model');
		$response=$this->Register_Model->saverecords($data);
			if($response==true){
				$this->session->set_flashdata('success', 'User Created Successfully');
					redirect(base_url().'login');
			}
			else{
				$this->session->set_flashdata('error', 'Please try again letter.');
					redirect(base_url().'register');
			}
    	}
	}
	public function school()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('school');
		$this->load->view('layout/footer');
	}
}

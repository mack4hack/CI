<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	 public function __construct()
    {
        parent::__construct();
		//header("Access-Control-Allow-Origin: *");
        $this->load->database();
		$this->load->model('Auth_model');
		$this->load->library("session");
    }
	public function index()
    {
        $this->load->view('admin/login');
    }
   
    
    public function ajax_login() 

	{
   //echo "<script>alert('in controller');</script>";
		$username =  $this->input->post('username');   

		$password =  $this->input->post('password'); 

		$role =  $this->input->post('role'); 

		//call the model for auth        

		if($this->Auth_model->user_login($username, $password))

			{

		         echo "1";

			}        

		else

			{

				echo "0";      

			}       

	}	


    public function profile()
    {
        if($user_id=$this->session->userdata('user_id')):
            $this->data['user_information']=$this->users->get($user_id);
            $this->load->view('profile',$this->data);               
        else :          
            redirect(site_url('welcome/ajax_login'));
        endif;      
    }

    public function logout(){

			$this->session->sess_destroy();
redirect('/');
        }
	
	
	
}

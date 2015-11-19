<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	 public function __construct()
    {
        parent::__construct();
		//header('Access-Control-Allow-Origin: *');
        //header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        $this->load->database();
		$this->load->model('Auth_model');
		$this->load->model('Getlocation');
		$this->load->model('Admin_model');
		$this->load->model('Bets_model');
		
    }
	public function index()
    {
        $this->load->view('admin/dashboard');
    }
	public function add_dealer()
    {        
	$result['list']=$this->Getlocation->getCountry();
	$this->load->view('admin/add_dealer',$result); 
	}
	public function lot_chart()
    {        
		$result['first_digit_data']=$this->Bets_model->getfirstdigitchart();
		$result['second_digit_data']=$this->Bets_model->getseconddigitchart();
		$result['jodi_data']=$this->Bets_model->getjodichart();
		$this->load->view('admin/main_chart',$result); 
	}
	public function edit()
    {        
	$this->db->where('id',$this->uri->segment(3));
    $query=$this->db->get('user_master');
    //$query1 = $query->result();
	$result['edit_data'] = $query;
	$this->load->view('admin/edit',$result); 
	}
	public function add_player()
    {        
	$result['list']=$this->Getlocation->getCountry();
	$this->load->view('admin/add_player',$result); 
	}
	
	public function chart()
    {
        $this->load->view('admin/main_chart');
    }
	public function info()
    {
        $this->load->view('admin/info');
    }
	
	public function loadData()
 {
   $loadType=$_POST['loadType'];
   $loadId=$_POST['loadId'];
   $this->load->model('Getlocation');
   $result=$this->Getlocation->getData($loadType,$loadId);
   $HTML="";

   if($result->num_rows() > 0){
     foreach($result->result() as $list){
       $HTML.="<option value='".$list->id."@".$list->name ."'>".$list->name ." ".$list->lname ."</option>";
     }
   }
   echo $HTML;
 }
 
 function ajax_player_data_save()
  {
	  
	  $city_id = explode('@',$_POST['city_id']);
	  $city_name = $city_id[1];
	  $cityid = $city_id[0];
	  
	 
	$ar = array('role_id'=>'3','city_id'=>$cityid);
	  $ret = $this->db
       ->where($ar)
       ->count_all_results('user_master');
	  
	  $paddedNum = sprintf("%05d", $ret+1);
	    
	  $query = $this->db->query("select * from user_master where id='".$_POST['dealer_id']."'");
      $row = $query->row_array(); 

	  $user_code = $row['user_code']."".$paddedNum;

	  $data = array("first_name" => $_POST['fname'], 
					"last_name" => $_POST['lname'],
					"country_id" => $_POST['country_id'],
					"user_code" => $user_code,
					"state_id" => $_POST['state_id'],
					"city_id" => $cityid,
					"email_id" => $_POST['email'],
					"password" => $_POST['password'],
					"role_id" => '3',
					"address_1" => $_POST['address1'],
					"contact_no" => $_POST['contact_no'],
					"alternate_no" => $_POST['alternate_no'],
					"address_2" => $_POST['address2'],
					"pincode" => $_POST['pincode'],
					"activation_date" => date("Y-m-d")
	  );
	  
	  $insert = $this->db->insert('user_master',$data);
	  $lastid = $this->db->insert_id();
	  
	  //Code to store data in dealer player table//
	  $data1 = array("dealer_id" => $_POST['dealer_id'],
					 "player_id" => $lastid,
					 "created_time" => date("Y-m-d h:s:a"));
	  $insert1 = $this->db->insert('dealer_player',$data1);
	  //code end//
	  $this->load->library('email');

	$this->email->from('credentials@pixmadness.in', 'Bidding');
	$this->email->to($_POST['email']); 
	////$this->email->cc('another@another-example.com'); 
	//$this->email->bcc('them@their-example.com'); 

	$this->email->subject('Account Creation');
	$this->email->message("Dear ".$_POST['fname'] ." ".$_POST['lname']."<BR><BR>Thank you for registering for bidding game.<BR>Your credentials are as below.<BR><BR>Link: ".base_url()."<BR>Username : ".$_POST['email']."<BR>Password : ".$_POST['password']."<BR><BR>Thanks Team");	
	$this->email->set_mailtype('html');
	$this->email->send();

	//echo $this->email->print_debugger();
	  //echo $this->db->last_query();
	  //$success =0 ;
	  echo $insert > 0 ?  1 : 0;
	  
  }  
  
  function ajax_player_data_edit()
  {
	  $data = array("first_name" => $_POST['fname'],
					"last_name" => $_POST['lname'],
					"email_id" => $_POST['email'],
					"address_1" => $_POST['address1'],
					"contact_no" => $_POST['contact_no'],
					"alternate_no" => $_POST['alternate_no'],
					"address_2" => $_POST['address2'],
					"pincode" => $_POST['pincode']
	  );
	  $this->db->where('id', $_POST['updateid']);
	  $update = $this->db->update('user_master', $data);
	  //echo $this->db->last_query();
	  echo $update > 0 ?  1 : 0;
	  
  }  
  
  
  
  
  function ajax_dealer_data_save()
  {
	  $city_id = explode('@',$_POST['city_id']);
	  $city_name = $city_id[1];
	  $cityid = $city_id[0];
	  
	  $dealer_city =substr(strtoupper($city_name), 0, 3);
	  
	  
	  ///$dealer_city_count = $this->db->get('user_master where role_id="0" and city_id ="$cityid"');
	  //$ret = $dealer_city_count->row();
	  $ar = array('role_id'=>'2','city_id'=>$cityid);
	  $ret = $this->db
       ->where($ar)
       ->count_all_results('user_master');
	 // echo $this->db->last_query();
	  $paddedNum = sprintf("%03d", $ret+1);
	 
	  $user_code = $dealer_city."".$paddedNum;
     //code
	  //$user_code ="PUN000005";
	  $data = array("first_name" => $_POST['fname'],
					"last_name" => $_POST['lname'],
					"country_id" => $_POST['country_id'],
					"state_id" => $_POST['state_id'],
					"user_code" => $user_code,
					"city_id" => $_POST['city_id'],
					"email_id" => $_POST['email'],
					"password" => $_POST['password'],
					"role_id" => '2',
					"address_1" => $_POST['address1'],
					"contact_no" => $_POST['contact_no'],
					"alternate_no" => $_POST['alternate_no'],
					"address_2" => $_POST['address2'],
					"pincode" => $_POST['pincode'],
					"activation_date" => date("Y-m-d")
	  );
	  $insert = $this->db->insert('user_master',$data);
	  $this->load->library('email');

	$this->email->from('credentials@pixmadness.in', 'Bidding');
	$this->email->to($_POST['email']); 
	////$this->email->cc('another@another-example.com'); 
	//$this->email->bcc('them@their-example.com'); 

	$this->email->subject('Account Creation');
	$this->email->message("Dear ".$_POST['fname'] ." ".$_POST['lname']."<BR><BR>Thank you for registering for bidding game.<BR>Your credentials are as below.<BR><BR>Link: ".base_url()."<BR>Username : ".$_POST['email']."<BR>Password : ".$_POST['password']."<BR><BR>Thanks Team");	
	$this->email->set_mailtype('html');
	$this->email->send();

	//echo $this->email->print_debugger();
	  //echo $this->db->last_query();
	  //$success =0 ;
	  echo $insert > 0 ?  1 : 0;
	  
  }  
  
  public function existing_email()
    {
		//echo "<script>alert('in controller');</script>";
		$table_row_count = $this->db->query("select * from user_master where email_id='".$_POST['email']."'");
		if($table_row_count->num_rows() > 0)
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
    }

    public function generateLuckyNumbers()
    {
    	$number = rand(00, 99);
    	if($number < 10){
    		$jodi = '0'.$number;
    	}
    	else{
    		$jodi = $number;
    	}

    	$luck_numbers = array(
    		'lucky_number' => $jodi,
    		'timeslot' => date('Y-m-d H:i:s')
    		);

    	//if() get numbers from db

    	if($this->Admin_model->saveLuckyNumbers($luck_numbers))
    	{
    		$json = array(
					'status' => TRUE,
					'message' => 'Luck Number Generated'
				);

    		echo json_encode($json);
    	}

    	lucky_draw($jodi);
    }

    public function lucky_draw($jodi=02)
    {
    	$players = $this->Admin_model->getLuckyPlayers($jodi);

    	print_r($players);
    	foreach ($players as $player) {
    		# code...
    	}
    	//add payout in users account
    	//update player history
    	//debit payout from admin account

    }
    
}

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
		$this->load->library('ion_auth');
		
    }
	public function index()
    {
    	if (!$this->ion_auth->logged_in())
			redirect('auth/login', 'refresh');
		else
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
//	echo "<pre>";print_r($result['jodi_data']->result());die;
                
                                    $result['total_payout']=$this->Bets_model->getTotalPayoutAndBets();
		$result['lucky_number']=$this->Bets_model->getLuckyNumber();
		
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
    	$result['first_digit_data']=$this->Bets_model->getfirstdigitchart();
		$result['second_digit_data']=$this->Bets_model->getseconddigitchart();
		$result['jodi_data']=$this->Bets_model->getjodichart();
		$result['total_payout']=$this->Bets_model->getTotalPayoutAndBets();
		$result['lucky_number']=$this->Bets_model->getLuckyNumber();
        $this->load->view('admin/chart',$result);
    }
	public function getLuckyNumber()
    {
    	$result['lucky_number'] = $this->Bets_model->getLuckyNumber();
                   echo $result['lucky_number'];
    }

    public function info()
    {
                  $info = array();
                   date_default_timezone_set("Asia/Calcutta");
        	
                  //code starts to get active draw
                  //get current time
                  $now = getdate();
	$rounded = $now['year']."-".$now['mon']."-".$now['mday']." ".$now['hours'].":".$now['minutes'].":".$now['seconds'];
	$time = strtotime($rounded);
                  $end = date("Y-m-d H:i:s", $time);
                 // echo $end;die;
                 
                  //get start time like 2015-26-11 00:00:00
                  $now = getdate();
	$rounded = $now['year']."-".$now['mon']."-".$now['mday']." "."00".":"."00".":00";
	$time = strtotime($rounded);
	$start = date("Y-m-d H:i:s", $time);
	//echo $date;die;
        
                   
                  $this->db->select('*');
                  $this->db->where('timeslot >=',$start);
                  $this->db->where('timeslot <=',$end);
                  $query=$this->db->get('lucky_numbers');
                  
                  if(!empty($query)){
                           $sr_no = 1;
                           
                           foreach($query->result() as $result) 
                           {
                                    $draw_id = $result->draw_id;
                                    $timeslot = $result->timeslot;
                                    
                                    $timeslot1 =  explode(' ', $timeslot);
                                    $date = $timeslot1['0'];
                                    $time = $timeslot1['1'];
                                    
                                    $date_in_detail =  explode('-', $date);
                                    $year = $date_in_detail['0'];
                                    $mon = $date_in_detail['1'];
                                    $day = $date_in_detail['2'];
                                    
                                    $time_in_detail =  explode(':', $time);
                                    $hours = $time_in_detail['0'];
                                    $minutes = $time_in_detail['1'];
                                    $secs = $time_in_detail['2'];
                                     
                                    $minutes = $minutes - $minutes%15;
                                    if($minutes<=9)
                                    {
                                        $minutes = "0".$minutes;
                                    }
		$rounded = $year."-".$mon."-".$day." ".$hours.":".$minutes.":00";
                                    $endTime = strtotime("+15 minutes", strtotime($rounded));
                                    $endTime  = date('Y-m-d H:i:s',$endTime);
                                    //credit
                                    $this->db->select('sum(bet_amount ) as credit');
                                    $this->db->where('result',0);
                                    $this->db->where('timeslot >=',$rounded);
                                    $this->db->where('timeslot <=',$endTime);
                                    $query=$this->db->get('player_history')->row();
                                    if(!empty($query)){
                                            $credit =  $query->credit;
                                    }else{
                                        $credit = 0;
                                    }
                                    if(empty($credit)){
                                        $credit =0;
                                    }//
                                    //debit
                                    $this->db->select('sum(payout) as debit');
                                    $this->db->where('result',1);
                                    $this->db->where('timeslot >=',$rounded);
                                    $this->db->where('timeslot <=',$endTime);
                                    $query=$this->db->get('player_history')->row();
                                    if(!empty($query)){
                                            $debit =  $query->debit;
                                    }else{
                                        $debit = 0;
                                    }
                                    if(empty($debit)){
                                        $debit =0;
                                    }
                                     //
                                    $number = $credit - $debit;
                                   $profit = 0;
                                    if($credit){
                                       $profit =  ($number/$credit) *100;
                                    }
                                    $info['active_draw'][]  = array(
                                     //   'sr_no' => $sr_no,
                                        'draw_id' => $draw_id,
                                        'timeslot' => $timeslot,
                                        'credit' => $credit,
                                        'debit' => $debit,
                                        //'profit' => number_format($profit, 2, '.', '')."%",
                                        'profit' => $credit - $debit,
                                    );
                                    
                                    $sr_no++;
                           }
                          if(!empty($info['active_draw'])){ 
                              $info['active_draw'] =  $this->aasort($info['active_draw'],"profit");
                          }
                          //$info['active_draw'] =  '';
                          // echo "<pre>";print_r($info['active_draw']);die;
                      
                  }else{
                      $info['active_draw'] = '';
                  }
                  
                  //code ends here
                  
                  
                  
                  $this->db->select('sum(bet_amount) as stake,player_id');
                  $this->db->where('timeslot >=',$rounded);
                  $this->db->where('timeslot <=',$end);
                  $this->db->group_by('player_id');
                  $this->db->order_by('stake','desc');
                  $query=$this->db->get('player_history');
                  if(!empty($query)){
                           foreach($query->result() as $result) 
                           {
                                            $stake =  $result->stake;
                                            $player_id =  $result->player_id;
                                            
                                            $this->db->select('user_code,first_name,last_name');
                                            $this->db->where('id',$player_id);
                                            $query1=$this->db->get('user_master')->row(); 
                                            
                                            
                                            $info['active_player'][]  = array(
                                                       'player_id' => $player_id,
                                                       'stake' => $stake,
                                                       'user_code' => $query1->user_code,
                                                       'name' => $query1->first_name." ".$query1->last_name,
                                             );
                                    
                           }
                          
                  }else{
                      $info['active_player'] =  '';
                  }
                  
                  
                  $this->db->select('sum(bet_amount) as stake,dealer_id');
                  $this->db->where('timeslot =',date('Y-m-d'));
                  $this->db->group_by('dealer_id');
                  $this->db->order_by('stake','desc');
                  $query=$this->db->get('dealer_history');
                  if(!empty($query)){
                           foreach($query->result() as $result) 
                           {
                                            $stake =  $result->stake;
                                            $player_id =  $result->dealer_id;
                                            
                                            $this->db->select('user_code,first_name,last_name');
                                            $this->db->where('id',$player_id);
                                            $query1=$this->db->get('user_master')->row(); 
                                            
                                            
                                            $info['active_dealer'][]  = array(
                                                       'player_id' => $player_id,
                                                       'stake' => $stake,
                                                       'user_code' => $query1->user_code,
                                                       'name' => $query1->first_name." ".$query1->last_name,
                                             );
                                    
                           }
                          
                  }else{
                      $info['active_dealer'] =  '';
                  }
                  
                  
                  
                  
                  //$info['active_player'] =  '';
                  //echo "<pre>";print_r($info['active_player']);die;
                  //code ends here
                   $this->load->view('admin/info',$info);
        
        
        
    }
public function aasort (&$array, $key) {
    $sorter=array();
    $ret=array();
    reset($array);
      
    foreach ($array as $ii => $va) {
        $sorter[$ii]=$va[$key];
    }
    
    arsort($sorter);
    //asort($sorter);
    
    foreach ($sorter as $ii => $va) {
        $ret[$ii]=$array[$ii];
    }
    
    $array=$ret;
    return $array;
}	
public function loadData()
 {
   $loadType=$_POST['loadType'];
   $loadId=$_POST['loadId'];
   $this->load->model('Getlocation');
   $result=$this->Getlocation->getData($loadType,$loadId);
   $HTML="";
   if(!empty($result)){
   if($result->num_rows() > 0){
     foreach($result->result() as $list){
		 if(isset($list->lname)){
       $HTML.="<option value='".$list->id."'>".$list->name ." ".$list->lname ."</option>";
       }else{
		   $HTML.="<option value='".$list->id."'>".$list->name ."</option>";
		   }
     }
    }
   }
   echo $HTML;
 }
 
 function ajax_player_data_save()
  {
	  
	 /* $city_id = explode('@',$_POST['city_id']);
	  $city_name = $city_id[1];
	  $cityid = $city_id[0];*/
	  $cityid = $_POST['city_id'];
	  $city_name = $_POST['city_name'];
	  
	  //die;
	 
	$ar = array('role_id'=>'3','city_id'=>$cityid);
	  $ret = $this->db
       ->where($ar)
       ->count_all_results('user_master');
	  
	  $paddedNum = sprintf("%05d", $ret+1);
	    
	  $query = $this->db->query("select * from user_master where id='".$_POST['dealer_id']."'");
      $row = $query->row_array(); 

	  $user_code = $row['user_code']."".$paddedNum;

	  $password = $_POST['password'];

	  $data = array("first_name" => $_POST['fname'], 
					"last_name" => $_POST['lname'],
					"country_id" => $_POST['country_id'],
					"user_code" => $user_code,
					"state_id" => $_POST['state_id'],
					"city_id" => $cityid,
					"email_id" => $_POST['email'],
					"password" => $this->hash_password($password, FALSE),
					"role_id" => '3',
					"address_1" => $_POST['address1'],
					"contact_no" => $_POST['contact_no'],
					"alternate_no" => $_POST['alternate_no'],
					"address_2" => $_POST['address2'],
					"pincode" => $_POST['pincode'],
					"deposited_amount" => $_POST['deposited_amount'],
					"present_amount" => $_POST['deposited_amount'],
					"activation_date" => date("Y-m-d"),
					"active" => 1
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
					"pincode" => $_POST['pincode'],
					"deposited_amount" => $_POST['deposited_amount'],
					"present_amount" => $_POST['add_amount']+$_POST['present_amount'],
					
	  );
	  $this->db->where('id', $_POST['updateid']);
	  $update = $this->db->update('user_master', $data);
	  //echo $this->db->last_query();
	  echo $update > 0 ?  1 : 0;
	  
  }  
  
  
  
  
  function ajax_dealer_data_save()
  {
	  /*$city_id = explode('@',$_POST['city_id']);
	  $city_name = $city_id[1];
	  $cityid = $city_id[0];*/
	  
	  $cityid = $_POST['city_id'];
	  $city_name = $_POST['city_name'];

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

	  $password = $_POST['password'];

	  $data = array("first_name" => $_POST['fname'],
					"last_name" => $_POST['lname'],
					"country_id" => $_POST['country_id'],
					"state_id" => $_POST['state_id'],
					"user_code" => $user_code,
					"city_id" => $_POST['city_id'],
					"email_id" => $_POST['email'],
					"password" => $this->hash_password($password, FALSE),
					"role_id" => '2',
					"address_1" => $_POST['address1'],
					"contact_no" => $_POST['contact_no'],
					"alternate_no" => $_POST['alternate_no'],
					"address_2" => $_POST['address2'],
					"pincode" => $_POST['pincode'],
					"activation_date" => date("Y-m-d"),
					"active" => 1
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
    	$number = mt_rand(00, 99);
    	if($number < 10){
    		$jodi = '0'.$number;
    	}
    	else{
    		$jodi = $number;
    	}
                  $this->db->select('draw_id');
                  $this->db->order_by('id','desc');
                  $this->db->limit(1);
                  $query=$this->db->get('lucky_numbers')->row();        
                  if(!empty($query))
                  {
                       $latest_id  =    $query->draw_id;
                       if($latest_id == 99999)
                       {
                           $latest_id = 0;
                       }
                       $latest_id = $latest_id +1 ;
                  }
          
            for($i=0*60;$i<24*60;$i+=15)
            {
              $hr = floor($i/60);
              if($hr < 9)
              $hr = '0'.$hr;

              $min = ($i/60-floor($i/60))*60;
              if($min < 9)
              $min = '0'.$min;

              $start = $hr . ":" . $min;

              $newTime = date("H:i",strtotime($start." +15 minutes"));
              //$time_slots[] = $start." To ".$newTime;
              $time_slots[] = array('start' => $start,'end' => $newTime, );
            }  

            $c_time = date('H:i');
            $time_slot_id = 1;
            foreach ($time_slots as $key => $slots) {
                if($c_time >= $slots['start'] && $c_time < $slots['end']){
                  $timeslot_id = $key;  
                }
            }

    	$luck_numbers = array(
    		'lucky_number' => $jodi,
    		'draw_id' => $latest_id,
        'timeslot' => date('Y-m-d H:i:s'),
    		'timeslot_id' => $timeslot_id
    		);

    	//if() get numbers from db

    	if($this->Admin_model->saveLuckyNumbers($luck_numbers))
    	{
    		$json = array(
					'status' => TRUE,
					'message' => 'Lucky Number Generated'
				);

    		echo json_encode($json);
    	}

    	$this->lucky_draw($jodi);
    }

    public function lucky_draw($jodi)
    {
    	$players = $this->Admin_model->getLuckyPlayers($jodi);

    	foreach ($players as $player) {
    		$credit = array(
				'id'=>$player->player_id,
				'bet_amount'=>$player->payout,
				);
    		$this->Bets_model->credit($credit);
    	}

    	$this->Admin_model->updatePlayerHistory($jodi);
    }
    public function Summary()
    {
          if(isset($_GET['time'])){
			
			   for($i=0*60;$i<=24*60;$i+=15){
			$hr = floor($i/60);
			if($hr < 9)
				$hr = '0'.$hr;
			
			$min = ($i/60-floor($i/60))*60;
			if($min < 9)
				$min = '0'.$min;

    
    
            
            
  			$start = date('Y-m-d')." ". $hr . ":" . $min;
  			
  			$newTime = date("Y-m-d H:i",strtotime($start." +15 minutes"));
  			$time_slots[] = $start." To ".$newTime;
		}
		
		$result['time_slots'] = $time_slots;
			
			  $time = explode(' To ',$_GET['time']);
			  $start = $time['0'];
			  $end = $time['1'];
			  
			  $result['first_digit_data']=$this->Bets_model->getfirstdigitchartAccToTime($start,$end);
              $result['second_digit_data']=$this->Bets_model->getseconddigitchartAccToTime($start,$end);
		      $result['jodi_data']=$this->Bets_model->getjodichartAccToTime($start,$end);
		      $result['total_payout']=$this->Bets_model->getTotalPayoutAndBetsAccToTime($start,$end);
		      $result['lucky_number']=$this->Bets_model->getLuckyNumberAccToTime($start,$end);
		      //print_r($result);die;
		      
          	  $this->load->view('admin/summary',$result);
        		
		     }
		}
		
    public function daySummary()
    {        
		
		
		$result['first_digit_data']=$this->Bets_model->getfirstdigitchart();
		$result['second_digit_data']=$this->Bets_model->getseconddigitchart();
		$result['jodi_data']=$this->Bets_model->getjodichart();
		$result['total_payout']=$this->Bets_model->getTotalPayoutAndBets();
		$result['lucky_number']=$this->Bets_model->getLuckyNumber();


		for($i=0*60;$i<=24*60;$i+=15){
			$hr = floor($i/60);
			if($hr < 9)
				$hr = '0'.$hr;
			
			$min = ($i/60-floor($i/60))*60;
			if($min < 9)
				$min = '0'.$min;

    
    
            
            
  			$start = date('Y-m-d')." ". $hr . ":" . $min;
  			
  			$newTime = date("Y-m-d H:i",strtotime($start." +15 minutes"));
  			$time_slots[] = $start." To ".$newTime;
		}
		
		$result['time_slots'] = $time_slots;

		//echo date('Y-m-d H:i');

		//print_r($time_slots); die;

		$this->load->view('admin/day_summary',$result); 
	}
	
	public function add_amount(){
		
		$result['list'] = $this->Getlocation->getCountry();
	    $this->load->view('admin/add_amount',$result); 
	}	
	public function update_amount(){
		  
		   if(isset($_POST['add_amount']) &&  isset($_POST['user_id']) ){
			    
			     $query = $this->db->query("select present_amount from user_master where id='".$_POST['user_id']."'");
                 $row = $query->row_array();
                 $amount =   $_POST['add_amount'] + $row['present_amount'];
 			     $data = array("present_amount" => $amount, 
		                );
					  $this->db->where('id', $_POST['user_id']);
					  $update = $this->db->update('user_master', $data);
					  //echo $this->db->last_query();
					  echo $update > 0 ?  1 : 0;
			     
			}
	}	
	public function block_player(){
		
		$result['list'] = $this->Getlocation->getCountry();
	    $this->load->view('admin/block_player',$result); 
	}	
	public function ajax_block_player(){
		  
		   if(isset($_POST['user_id']) ){
 			     $data = array("is_blocked" => 1, 
		                );
					  $this->db->where('id', $_POST['user_id']);
					  $update = $this->db->update('user_master', $data);
					  //echo $this->db->last_query();
					  echo $update > 0 ?  1 : 0;
			     
			}
	}

	public function Numbering_chart(){

      	
          	     $number = 31;
                     //  if(isset($_GET['month']))
                     //  {
                           
                           $result['months'] = array(

				array( 'no' => date("Y-m"),
						'name'=>date("F Y")
						),
				array(	'no' => date("Y-m",strtotime("-1 Months")),
						'name'=>date("F Y",strtotime("-1 Months"))
				));

                           
                           
                           /*$var  = explode('-', $_GET['month']);
                           $year = $var[0];
                           $month = $var[1];
                                    $number = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                   
                       
                                    
                                        $result['lucky_numbers']=$this->Bets_model->getLuckyNumberAccToMonth($_GET['month']);*/
		
			//print_r($result['lucky_numbers']); die;

			//$result['time_slots'] = $time_slots;
		
                       
                        /*$result['number'] = $number;
                        for($i=0*60;$i<24*60;$i+=15){
                        $hr = floor($i/60);
                        if($hr < 9)
                                $hr = '0'.$hr;

                        $min = ($i/60-floor($i/60))*60;
                        if($min < 9)
                          $min = '0'.$min;

                          $start = $hr . ":" . $min;

                          $newTime = date('H:i',strtotime($start." +15 minutes"));
                          $time_slots[] = $start." To ".$newTime;
                         
                          $time_slots1[] = array('start' => $start,'end' => $newTime, );
                          
                        }         
                                    
                       $result['data'] =array();
                               
                       for($i=0 ; $i<=96; $i++){
						   
                        //   for($j=0 ; $j <= $number; $j++){
                                     
								   if($i == 0){
											 for($j=0 ; $j <= $number; $j++){
											  if($j==0){
													$result['data'][$i][$j] = array(

														 'digit' => "Time slot",

												 );
											  }else{
												$result['data'][$i][$j] = array(

															 'digit' => $j,

												 );
											  }
									         }
								   }
								   if($i > 0){
											 for($j=0 ; $j <= $number; $j++){
												 
											  if($j==0){
													
													foreach ($time_slots as $k => $v){
                                                                                                                                                 
															 if( $k == $i-1){
																 $digit =  $v;
															 }
													   }
													
													$result['data'][$i][$j] = array(

														 'digit' => $digit,

												 );
											  }else{
												
												  foreach($result['lucky_numbers'] as $lucky){
													   if($lucky['date'] == $j && $lucky['timeslot_id'] == $i){
														   
														    $digit = $lucky['lucky_number'];  
  														     $result['data'][$i][$j] = array(

																	 'digit' => $digit,

																);break;

														 }else{
															 
															$result['data'][$i][$j] = array(

																	 'digit' => '',

																);

													     }
													
													   
													}
													// echo "<pre>";print_r($result['data']); 
																								  
											  }
									         }
								   }
                          //    }  
                           }*/
                        
                        
                    //   }
                       
                       
                        
                    //die;
                        
                       
                      // echo "<pre>";print_r($result['data']);die;
                       $this->load->view('admin/numbering',$result);
        	     	
        		
   }

                   

	
	/**
	 * Hashes the password to be stored in the database.
	 *
	 * @return void
	 * @author Mathew
	 **/
	public function hash_password($password, $salt=false, $use_sha1_override=FALSE)
	{
		if (empty($password))
		{
			return FALSE;
		}

		$this->hash_method = $this->config->item('hash_method', 'ion_auth');
		// bcrypt
		if ($use_sha1_override === FALSE && $this->hash_method == 'bcrypt')
		{
			return $this->bcrypt->hash($password);
		}


		if ($this->store_salt && $salt)
		{
			return  sha1($password . $salt);
		}
		else
		{
			$salt = $this->salt();
			return  $salt . substr(sha1($salt . $password), 0, -$this->salt_length);
		}
	}

	public function adminAccount()
	{
		$result['data']=$this->Admin_model->getAdminHistory();
        $this->load->view('admin/admin_account',$result);
	}

	public function dealerAccount()
	{
		$result['dealers']=$this->Admin_model->get_dealers();
		$result['data']=$this->Admin_model->getDealerHistory();
        $this->load->view('admin/dealer_account',$result);
	}
	
	public function dealerAccountChart()
  {
    $dealer_id = $_GET['dealer'];
    $result['data']=$this->Admin_model->getDealerHistoryById($dealer_id);
        $this->load->view('admin/dealer_account_chart',$result);
  }

  public function ajaxNumberingChart()
	{
		$number = 31;
                       if(isset($_GET['month']))
                       {
                           
                           $result['months'] = array(

        array( 'no' => date("Y-m"),
            'name'=>date("F Y")
            ),
        array(  'no' => date("Y-m",strtotime("-1 Months")),
            'name'=>date("F Y",strtotime("-1 Months"))
        ));

                           
                           
                           $var  = explode('-', $_GET['month']);
                           $year = $var[0];
                           $month = $var[1];
                                    $number = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                   
                       
                                    
                                        $result['lucky_numbers']=$this->Bets_model->getLuckyNumberAccToMonth($_GET['month']);
    
      //print_r($result['lucky_numbers']); die;

      //$result['time_slots'] = $time_slots;
    
                       
                        $result['number'] = $number;
                        for($i=0*60;$i<24*60;$i+=15){
                        $hr = floor($i/60);
                        if($hr < 9)
                                $hr = '0'.$hr;

                        $min = ($i/60-floor($i/60))*60;
                        if($min < 9)
                          $min = '0'.$min;

                          $start = $hr . ":" . $min;

                          $newTime = date('H:i',strtotime($start." +15 minutes"));
                          $time_slots[] = $start." To ".$newTime;
                         
                          $time_slots1[] = array('start' => $start,'end' => $newTime, );
                          
                        }         
                                    
                       $result['data'] =array();
                               
                       for($i=0 ; $i<=96; $i++){
               
                        //   for($j=0 ; $j <= $number; $j++){
                                     
                   if($i == 0){
                       for($j=0 ; $j <= $number; $j++){
                        if($j==0){
                          $result['data'][$i][$j] = array(

                             'digit' => "Time slot",

                         );
                        }else{
                        $result['data'][$i][$j] = array(

                               'digit' => $j,

                         );
                        }
                           }
                   }
                   if($i > 0){
                       for($j=0 ; $j <= $number; $j++){
                         
                        if($j==0){
                          
                          foreach ($time_slots as $k => $v){
                                                                                                                                                 
                               if( $k == $i-1){
                                 $digit =  $v;
                               }
                             }
                          
                          $result['data'][$i][$j] = array(

                             'digit' => $digit,

                         );
                        }else{
                        
                          foreach($result['lucky_numbers'] as $lucky){
                             if($lucky['date'] == $j && $lucky['timeslot_id'] == $i){
                               
                                $digit = $lucky['lucky_number'];  
                                   $result['data'][$i][$j] = array(

                                   'digit' => $digit,

                                );break;

                             }else{
                               
                              $result['data'][$i][$j] = array(

                                   'digit' => '',

                                );

                               }
                          
                             
                          }
                          // echo "<pre>";print_r($result['data']); 
                                                  
                        }
                           }
                   }
                          //    }  
                           }
                        
                        
                       }
                       
                       
                        
                    //die;
                        
                       
                      // echo "<pre>";print_r($result['data']);die;
                       $this->load->view('admin/ajax_numbering_chart',$result);
	}	
	
	
    
}

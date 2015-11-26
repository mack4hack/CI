<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	require APPPATH . '/libraries/REST_Controller.php';

	class Bets extends REST_Controller
	{
		function __construct()
		{
		    // Construct the parent class
		    parent::__construct();

		    // Configure limits on our controller methods
		    // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
		    $this->load->database(); // load database
		    $this->load->model('Bets_model'); // load model
		}	

		public function index_get()
		{
			echo "you are in Bets controller";	
		}

		public function PlaceBetFirst_post()
		{
			foreach($this->post('data') as $jodi_data){
			
			$payout = ($jodi_data['bet_amount']*8.5);

			$data = array(
				'game_type'=>1,
				'player_id'=>$this->post('player_id'),
				'digit'=>$jodi_data['digit'],
				'bet_amount'=>$jodi_data['bet_amount'],
				'payout'=>$payout,
				'timeslot' => date('Y-m-d H:i:s')
				); 

			$history = array(
				'game_type'=>1,
				'player_id'=>$this->post('player_id'),
				'bet_amount'=>$jodi_data['bet_amount'],
				'first_digit'=>$jodi_data['digit'],
				'second_digit'=>null,
				'jodi_digit'=>null,
				'payout'=>$payout,
				'timeslot' => date('Y-m-d H:i:s')
				);

			$debit = array(
				'id'=>$this->post('player_id'),
				'bet_amount'=>$jodi_data['bet_amount'],
				);

			$credit = array(
				'id'=>1,
				'bet_amount'=>$jodi_data['bet_amount'],
				);

			$admin_history = array(
				'game_type'=>1,
				'player_id'=>$this->post('player_id'),
				'bet_amount'=>$jodi_data['bet_amount'],
				'timeslot' => date('Y-m-d H:i:s')
				);

			if($this->Bets_model->placebet($data))
			{	                
				$this->Bets_model->addplayerhistory($history);

				$this->Bets_model->addAdminHistory($admin_history);

				$this->Bets_model->debit($debit);
				
				$this->Bets_model->credit($credit);
				
				$success = true; 
				            
			}else{   
				$success = false; 
			}
          }
          if($success)
			{
				$this->response([
				'status' => TRUE,
				'message' => 'Bets Placed Successfully'
				], REST_Controller::HTTP_OK); // NOT_FOUND (404) being the HTTP response code

			}else{
				$this->response([
				   'status' => FALSE,
				   'message' => 'Bets Cannot Be Placed!'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
          
          
		}
		public function PlaceBetSecond_post()
		{
			foreach($this->post('data') as $jodi_data){
			
			$payout = ($jodi_data['bet_amount']*8.5);
			
			$data = array(
				'game_type'=>2,
				'player_id'=>$this->post('player_id'),
				'digit'=>$jodi_data['digit'],
				'bet_amount'=>$jodi_data['bet_amount'],
				'payout'=>$payout,
				'timeslot' => date('Y-m-d H:i:s')
				); 

			$history = array(
				'game_type'=>2,
				'player_id'=>$this->post('player_id'),
				'bet_amount'=>$jodi_data['bet_amount'],
				'first_digit'=>null,
				'second_digit'=>$jodi_data['digit'],
				'jodi_digit'=>null,
				'payout'=>$payout,
				'timeslot' => date('Y-m-d H:i:s')
				);
			
			$debit = array(
				'id'=>$this->post('player_id'),
				'bet_amount'=>$jodi_data['bet_amount'],
				);

			$credit = array(
				'id'=>1,
				'bet_amount'=>$jodi_data['bet_amount'],
				);

			$admin_history = array(
				'game_type'=>2,
				'player_id'=>$this->post('player_id'),
				'bet_amount'=>$jodi_data['bet_amount'],
				'timeslot' => date('Y-m-d H:i:s')
				);

			if($this->Bets_model->placebet($data))
			{	                
				$this->Bets_model->addplayerhistory($history);
				
				$this->Bets_model->addAdminHistory($admin_history);

				$this->Bets_model->debit($debit);
				
				$this->Bets_model->credit($credit);

				 $success = true; 
				            
			}else{   
				 $success = false; 
			 }
		   }
		   if($success)
			{
				$this->response([
				'status' => TRUE,
				'message' => 'Bets Placed Successfully'
				], REST_Controller::HTTP_OK); // NOT_FOUND (404) being the HTTP response code

			}else{
				$this->response([
				   'status' => FALSE,
				   'message' => 'Bets Cannot Be Placed!'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
		
		}
		public function PlaceBetJodi_post()
		{
			
			//print_r($this->post('player_id'));die;
			foreach($this->post('data') as $jodi_data){
			
			
			$payout = ( $jodi_data['bet_amount']*85);

			$data = array(
				'game_type'=>3,
				'player_id'=>$this->post('player_id'),
				'digit'=> $jodi_data['digit'],
				'bet_amount'=>$jodi_data['bet_amount'],
				'payout'=>$payout,
				'timeslot' => date('Y-m-d H:i:s')
				); 

			$history = array(
				'game_type'=>3,
				'player_id'=>$this->post('player_id'),
				'bet_amount'=>$jodi_data['bet_amount'],
				'first_digit'=>null,
				'second_digit'=>null,
				'jodi_digit'=>$jodi_data['digit'],
				'payout'=>$payout,
				'timeslot' => date('Y-m-d H:i:s')
				);

			$debit = array(
				'id'=>$this->post('player_id'),
				'bet_amount'=>$jodi_data['bet_amount'],
				);

			$credit = array(
				'id'=>1,
				'bet_amount'=>$jodi_data['bet_amount'],
				);

			$admin_history = array(
				'game_type'=>3,
				'player_id'=>$this->post('player_id'),
				'bet_amount'=>$jodi_data['bet_amount'],
				'timeslot' => date('Y-m-d H:i:s')
				);

			 if($this->Bets_model->placebet($data))
			 {	                
				$this->Bets_model->addplayerhistory($history);

				$this->Bets_model->addAdminHistory($admin_history);

				$this->Bets_model->debit($debit);
				
				$this->Bets_model->credit($credit);
                 $success = true; 
				          
			 }else{   
				$success = false;
			 }
		   }
			if($success)
			{
				$this->response([
				'status' => TRUE,
				'message' => 'Bets Placed Successfully'
				], REST_Controller::HTTP_OK); // NOT_FOUND (404) being the HTTP response code

			}else{
				$this->response([
				   'status' => FALSE,
				   'message' => 'Bets Cannot Be Placed!'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}

		}
		public function LuckyNumber_get(){
		
		    $result['lucky_number'] = $this->Bets_model->getLuckyNumber();
		    if(!empty($result))
			{	                
				
				$this->response([
					'status' => TRUE,
					'lucky_number'   => $result['lucky_number']
					
				], REST_Controller::HTTP_OK); // NOT_FOUND (404) being the HTTP response code
				            
			}else{   
				$this->response([
					'status' => FALSE,
					'message' => 'No lucky number found!'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
			
		}
		public function CancelBet_post()
		{
			$player_id = $this->post('player_id');
            
			
			if($this->Bets_model->cancelbet($player_id))
			{	                
				
				$this->response([
					'status' => TRUE,
					'message' => 'Bets Cancelled Successfully'
				], REST_Controller::HTTP_OK); // NOT_FOUND (404) being the HTTP response code
				            
			}else{   
				$this->response([
					'status' => FALSE,
					'message' => 'Bets Cannot Be Cancelled!'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}

		}
		
		
	}
		
?>	

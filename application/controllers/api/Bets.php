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
			$payout = ($this->post('bet_amount')*8.5);

			$data = array(
				'game_type'=>1,
				'player_id'=>$this->post('player_id'),
				'digit'=>$this->post('digit'),
				'bet'=>1,
				'bet_amount'=>$this->post('bet_amount'),
				'payout'=>$payout,
				'timeslot' => date('Y-m-d H:i:s')
				); 

			$history = array(
				'game_type'=>1,
				'player_id'=>$this->post('player_id'),
				'bet_amount'=>$this->post('bet_amount'),
				'first_digit'=>$this->post('digit'),
				'payout'=>$payout,
				'timeslot' => date('Y-m-d H:i:s')
				);

			if($this->Bets_model->placebet($data))
			{	                
				$this->Bets_model->addplayerhistory($history);

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
			$payout = ($this->post('bet_amount')*8.5);
			
			$data = array(
				'game_type'=>2,
				'player_id'=>$this->post('player_id'),
				'digit'=>$this->post('digit'),
				'bet'=>1,
				'bet_amount'=>$this->post('bet_amount'),
				'payout'=>$payout,
				'timeslot' => date('Y-m-d H:i:s')
				); 

			$history = array(
				'game_type'=>2,
				'player_id'=>$this->post('player_id'),
				'bet_amount'=>$this->post('bet_amount'),
				'second_digit'=>$this->post('digit'),
				'payout'=>$payout,
				'timeslot' => date('Y-m-d H:i:s')
				);

			if($this->Bets_model->placebet($data))
			{	                
				$this->Bets_model->addplayerhistory($history);

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
			$payout = ($this->post('bet_amount')*85);

			$data = array(
				'game_type'=>3,
				'player_id'=>$this->post('player_id'),
				'digit'=>$this->post('digit'),
				'bet'=>1,
				'bet_amount'=>$this->post('bet_amount'),
				'payout'=>$payout,
				'timeslot' => date('Y-m-d H:i:s')
				); 

			$history = array(
				'game_type'=>3,
				'player_id'=>$this->post('player_id'),
				'bet_amount'=>$this->post('bet_amount'),
				'jodi_digit'=>$this->post('digit'),
				'payout'=>$payout,
				'timeslot' => date('Y-m-d H:i:s')
				);

			if($this->Bets_model->placebet($data))
			{	                
				$this->Bets_model->addplayerhistory($history);

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
	}
		
?>	

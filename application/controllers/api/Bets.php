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
                                        $this->load->library('ion_auth');
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

                                                               //calclulate commison and dealer id
                                             $this->db->select('dealer_id');
	                           $this->db->from('dealer_player');
	                           $this->db->where('player_id',$this->post('player_id'));
                                             $query1 = $this->db->get()->row();
	                           $dealer_id = $query1->dealer_id;
                                             
                                             $bet_amount_dealer = $jodi_data['bet_amount'] * 0.05;
                        
                        
                                                  
			$debit = array(
				'id'=>$this->post('player_id'),
				'bet_amount'=>$jodi_data['bet_amount'],
				);

			$credit_dealer = array(
				'id'=>$dealer_id,
				'bet_amount'=>$bet_amount_dealer,
				);
			$credit = array(
				'id'=>1,
				'bet_amount'=>$jodi_data['bet_amount'] - $bet_amount_dealer,
				);
                        
                        

			$admin_history = array(
				'game_type'=>1,
				'player_id'=>$this->post('player_id'),
				'bet_amount'=>$jodi_data['bet_amount'] ,
                                                                        'commission'=>$bet_amount_dealer ,
				'timeslot' => date('Y-m-d H:i:s')
				);

			$dealer_history = array(
				'game_type'=>1,
				'player_id'=>$this->post('player_id'),
				'dealer_id'=>$this->getDealerId($this->post('player_id')),
				'bet_amount'=>$jodi_data['bet_amount'],
				'commission'=>$bet_amount_dealer,
				'timeslot' => date('Y-m-d H:i:s')
				);

			if($this->Bets_model->placebet($data))
			{	                
				$this->Bets_model->addplayerhistory($history);

				$this->Bets_model->debit($debit);
                                
                                                                           if(   !$this->ion_auth->in_group('demo' ,  $this->post('player_id') ))
                                                                            {
                                                                                        $this->Bets_model->addAdminHistory($admin_history);
				
                                                                                        $this->Bets_model->addDealerHistory($dealer_history);

                                                                                        $this->Bets_model->credit($credit);

                                                                                        $this->Bets_model->credit_dealer($credit_dealer);
                                                                            }else{
                                                                                
                                                                                          $dealer_history = array(
                                                                                                        'game_type'=>1,
                                                                                                        'player_id'=>$this->post('player_id'),
                                                                                                        'dealer_id'=>$this->getDealerId($this->post('player_id')),
                                                                                                        'bet_amount'=>$jodi_data['bet_amount'],
                                                                                                        'commission'=>'',
                                                                                                        'timeslot' => date('Y-m-d H:i:s')
                                                                                                        );
                                                                                
                                                                                       $this->Bets_model->addDealerHistory($dealer_history);

                                                                                       $credit = array(
                                                                                                'id'=>$dealer_id,
                                                                                                'bet_amount'=>$jodi_data['bet_amount'] ,
                                                                                                );
                                                                                        $this->Bets_model->credit($credit);
                                                                               }
                                                                        
				
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
			
			                                       //calclulate commison and dealer id
                                             $this->db->select('dealer_id');
	                           $this->db->from('dealer_player');
	                           $this->db->where('player_id',$this->post('player_id'));
                                             $query1 = $this->db->get()->row();
	                           $dealer_id = $query1->dealer_id;
                                             
                                             $bet_amount_dealer = $jodi_data['bet_amount'] * 0.05;
                        
                        
                                                  
			$debit = array(
				'id'=>$this->post('player_id'),
				'bet_amount'=>$jodi_data['bet_amount'],
				);

			$credit_dealer = array(
				'id'=>$dealer_id,
				'bet_amount'=>$bet_amount_dealer,
				);
			$credit = array(
				'id'=>1,
				'bet_amount'=>$jodi_data['bet_amount'] - $bet_amount_dealer,
				);
                        
                        

			$admin_history = array(
				'game_type'=>2,
				'player_id'=>$this->post('player_id'),
				'bet_amount'=>$jodi_data['bet_amount'],
                                                                        'commission'=> $bet_amount_dealer ,
				'timeslot' => date('Y-m-d H:i:s')
				);

			$dealer_history = array(
				'game_type'=>2,
				'player_id'=>$this->post('player_id'),
				'dealer_id'=>$this->getDealerId($this->post('player_id')),
				'bet_amount'=>$jodi_data['bet_amount'],
				'commission'=>$bet_amount_dealer,
				'timeslot' => date('Y-m-d H:i:s')
				);

			if($this->Bets_model->placebet($data))
			{	               
                                                                        $this->Bets_model->addplayerhistory($history);
				 $this->Bets_model->debit($debit);
                                                                        if(   !$this->ion_auth->in_group('demo' ,  $this->post('player_id') ))
                                                                            {
                                                                                       $this->Bets_model->addAdminHistory($admin_history);

                                                                                        $this->Bets_model->addDealerHistory($dealer_history);

                                                                                        $this->Bets_model->credit($credit);

                                                                                        $this->Bets_model->credit_dealer($credit_dealer);
                                                                            }else{
                                                                                
                                                                                $dealer_history = array(
                                                                                                        'game_type'=>2,
                                                                                                        'player_id'=>$this->post('player_id'),
                                                                                                        'dealer_id'=>$this->getDealerId($this->post('player_id')),
                                                                                                        'bet_amount'=>$jodi_data['bet_amount'],
                                                                                                        'commission'=>'',
                                                                                                        'timeslot' => date('Y-m-d H:i:s')
                                                                                                        );
                                                                                
                                                                                       $this->Bets_model->addDealerHistory($dealer_history);

                                                                                       $credit = array(
                                                                                                'id'=>$dealer_id,
                                                                                                'bet_amount'=>$jodi_data['bet_amount'] ,
                                                                                                );
                                                                                        $this->Bets_model->credit($credit);
                                                                                
                                                                            }

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
                                                       //calclulate commison and dealer id
                                             $this->db->select('dealer_id');
	                           $this->db->from('dealer_player');
	                           $this->db->where('player_id',$this->post('player_id'));
                                             $query1 = $this->db->get()->row();
	                           $dealer_id = $query1->dealer_id;
                                             
                                             $bet_amount_dealer = $jodi_data['bet_amount'] * 0.05;
                        
                        
                                                  
			$debit = array(
				'id'=>$this->post('player_id'),
				'bet_amount'=>$jodi_data['bet_amount'],
				);

			$credit_dealer = array(
				'id'=>$dealer_id,
				'bet_amount'=>$bet_amount_dealer,
				);
			$credit = array(
				'id'=>1,
				'bet_amount'=>$jodi_data['bet_amount'] - $bet_amount_dealer,
				);

			$admin_history = array(
				'game_type'=>3,
				'player_id'=>$this->post('player_id'),
				'commission'=> $bet_amount_dealer ,
				'bet_amount'=>$jodi_data['bet_amount'],
				'timeslot' => date('Y-m-d H:i:s')
				);

			$dealer_history = array(
				'game_type'=>3,
				'player_id'=>$this->post('player_id'),
				'dealer_id'=>$this->getDealerId($this->post('player_id')),
				'bet_amount'=>$jodi_data['bet_amount'],
				'commission'=>$bet_amount_dealer,
				'timeslot' => date('Y-m-d H:i:s')
				);

			 if($this->Bets_model->placebet($data))
			 {	                
				$this->Bets_model->addplayerhistory($history);
                                                                        $this->Bets_model->debit($debit);
                                                                         if(   !$this->ion_auth->in_group('demo' ,  $this->post('player_id') ))
                                                                            {
                                                                                        $this->Bets_model->addAdminHistory($admin_history);

                                                                                        $this->Bets_model->addDealerHistory($dealer_history);

                                                                                        $this->Bets_model->credit($credit);

                                                                                         $this->Bets_model->credit_dealer($credit_dealer);
                                                                            }else{
                                                                                
                                                                                $dealer_history = array(
                                                                                                        'game_type'=>3,
                                                                                                        'player_id'=>$this->post('player_id'),
                                                                                                        'dealer_id'=>$this->getDealerId($this->post('player_id')),
                                                                                                        'bet_amount'=>$jodi_data['bet_amount'],
                                                                                                        'commission'=>'',
                                                                                                        'timeslot' => date('Y-m-d H:i:s')
                                                                                                        );
                                                                                
                                                                                       $this->Bets_model->addDealerHistory($dealer_history);

                                                                                       $credit = array(
                                                                                                'id'=>$dealer_id,
                                                                                                'bet_amount'=>$jodi_data['bet_amount'] ,
                                                                                                );
                                                                                        $this->Bets_model->credit($credit);
                                                                                
                                                                            }
                                                                         
                                                                         
                                                                         
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
			$digit = $this->post('digit');
			$game_type = $this->post('game_type');
            
			
			if($this->Bets_model->cancelbet($player_id,$digit,$game_type))
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

		public function getDealerId($player_id)
		{
			return $this->Bets_model->getDealerId($player_id);
		}
		
                
                                  public function LuckyNumberChart_get(){
		
                                           $result =array();
                                           if(isset($_GET['month'])){
		       $result['lucky_numbers']=$this->Bets_model->getLuckyNumberAccToMonth($_GET['month']);
                                           }else{
                                               
                                               $this->response([
					'status' => FALSE,
					'message' => 'please send a proper month in 0000-00 (year-month) format!'
				], REST_Controller::HTTP_NOT_FOUND);
                                           }
		       if(!empty($result))
			{	                
				
				$this->response([
					'status' => TRUE,
					'data'   => $result['lucky_numbers']
					
				], REST_Controller::HTTP_OK); // NOT_FOUND (404) being the HTTP response code
				            
			}else{   
				$this->response([
					'status' => FALSE,
					'message' => 'No lucky numbers found!'
				], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
			}
			
		}
		
	}
		
?>	

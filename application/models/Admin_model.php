<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



//location: application/models/auth_model.php



class Admin_model extends CI_Model {
function get_dealers()
{
	$this->db->where('role_id','2');
   $query=$this->db->get('user_master');//employee is a table in the database
    

       return $query->result();
}
function getAreaWiseDealers($country_id,$state_id,$city_id)
{
	$this->db->where('role_id','2');
	if($country_id !=0){
	$this->db->where('country_id',$country_id);
	}
	if($state_id !=0){
	$this->db->where('state_id',$state_id);
	}
	if($city_id !=0){
	$this->db->where('city_id',$city_id);
	}
	
	$query=$this->db->get('user_master');//employee is a table in the database
    return $query->result();
}
function get_players()
{
	$this->db->where('role_id','3');
                  $query=$this->db->get('user_master');//employee is a table in the database
    

       return $query->result();
}


function getPlayersAccToDealer($dealer_id)
{
	//SELECT * FROM `dealer_player` as dp inner join user_master as um on dp.player_id = um.id where um.role_id  = 3 and dp.dealer_id = 32
                    $this->db->select('user_master.*');    
                    $this->db->from('user_master');
                    $this->db->join('dealer_player', 'user_master.id = dealer_player.player_id');
                    $this->db->where('user_master.role_id',3);
                    $this->db->where('is_blocked',0);
                    //$this->db->where('is_active',1);
                    $this->db->where('dealer_player.dealer_id',$dealer_id);
                    $query = $this->db->get();
    
                    return $query->result();
}

function delete_player($id)
{
	  $this->db->delete('user_master', array('id' => $id ,'role_id' => 3));  
	  return true;
}

function delete_dealer($id)
{
	  $this->db->delete('user_master', array('id' => $id ,'role_id' => 2));  
	  return true;
}

	function saveLuckyNumbers($data)
	{
            
                               foreach($data as $insert_data){
                         	 $this->db->insert('lucky_numbers',$insert_data);
                               }
                               return  true;
	}

	function getLuckyPlayers($jodi)
	{
		$first = floor($jodi/10);
    	$second = $jodi%10;

    	date_default_timezone_set("Asia/Calcutta");
		$now = getdate();
		$now['minutes'] = $now['minutes'] - 1;
		$minutes = $now['minutes'] - $now['minutes']%15;

		 //Can add this to go to the nearest 15min interval (up or down)
		 // $rmin  = $now['minutes']%15;
		  //if ($rmin > 7){
		  //  $minutes = $now['minutes'] + (15-$rmin);
		 //  }else{
		 //     $minutes = $now['minutes'] - $rmin;
		 // }

		$rounded = $now['year']."-".$now['mon']."-".$now['mday']." ".$now['hours'].":".$minutes.":00";
		//echo $rounded;
    	$max_time = date('Y-m-d H:i:s');
    	/*select TRUNC_15_MINUTES(timeslot) AS period_starting, digit from game_lottery 
    	where timeslot >= $rounded and timeslot < date('Y-m-d H:i:s') 
    	group by TRUNC_15_MINUTES(timeslot), digit order by TRUNC_15_MINUTES(timeslot)*/
    	$query = $this->db->query("select player_id,payout from game_lottery 
    	where (timeslot >= '".$rounded."' and timeslot < '".$max_time."')  
    	and ( digit=".$first." or digit=".$second." or digit=".$jodi." )");

    	//echo $this->db->last_query();

		//$where = '(digit='.$first.' or digit='.$second.' or digit='.$jodi.')';
   		//$this->db->where($where);
   		//$query=$this->db->get('game_lottery');//employee is a table in the database
	    
	    return $query->result();
	}

	function updatePlayerHistory($jodi)
	{

		$first = floor($jodi/10);
    	                  $second = $jodi%10;

		date_default_timezone_set("Asia/Calcutta");
		$now = getdate();
		$now['minutes'] = $now['minutes'] - 1;
		$minutes = $now['minutes'] - $now['minutes']%15;

		$rounded = $now['year']."-".$now['mon']."-".$now['mday']." ".$now['hours'].":".$minutes.":00";
                         	$max_time = date('Y-m-d H:i:s');
    	

		$this->db->set('result',1,FALSE);
		$where = "((timeslot >= '".$rounded."' and timeslot < '".$max_time."') and  (  first_digit='".$first."' or second_digit='".$second."' or jodi_digit='".$jodi."'))";
   		$this->db->where($where);
		$this->db->update('player_history');		
	}

	function getAdminHistory($from = null , $to = null)
	{
		$this->db->select('timeslot,timeslot_id');
		$this->db->from('admin_history');
		$this->db->where('timeslot <',$from);
		$this->db->where('timeslot >=',$to);
		$this->db->group_by('timeslot_id');
		$query=$this->db->get();
		
		$timeslots = $query->result();
		$data = array();

		$this->db->select('total');
		$this->db->from('admin_history');
		$this->db->order_by("id", "desc"); 
		$this->db->limit(1);
	   	$query=$this->db->get()->row();
	   	$final_total = $query->total;


		if(!empty($timeslots))
		{	
			foreach ($timeslots as $timeslot)
			{
				$this->db->select('sum(bet_amount) as credited');
				$this->db->from('admin_history');
				$this->db->where('bet_amount >= 0');
				$this->db->where('timeslot_id',$timeslot->timeslot_id);
				$this->db->like('timeslot',$timeslot->timeslot);
				$query=$this->db->get()->row();
				$credited = $query->credited;

				$this->db->select('sum(bet_amount) as debited');
				$this->db->from('admin_history');
				$this->db->where('bet_amount < 0');
				$this->db->like('timeslot',$timeslot->timeslot);
				$this->db->where('timeslot_id',$timeslot->timeslot_id);
				$query=$this->db->get()->row();
				$debited = $query->debited;

				$this->db->select('total');
				$this->db->from('admin_history');
				$this->db->like('timeslot',$timeslot->timeslot);
				$this->db->where('timeslot_id',$timeslot->timeslot_id);
				$this->db->order_by("id", "desc"); 
				$this->db->limit(1);
				//$this->db->group_by('timeslot');
			   	$query=$this->db->get()->row();
			   	$day_total = $query->total;

			    $this->db->select('sum(commission) as commission');
				$this->db->from('admin_history');
				$this->db->like('timeslot',$timeslot->timeslot);
				$this->db->where('timeslot_id',$timeslot->timeslot_id);
			   	$query=$this->db->get()->row();
			   	$commission = $query->commission;

			   	$timespan = $this->getTimeslotById($timeslot->timeslot_id);
			   	$draw_time = explode(' To ', $timespan);
			   	$data[]= array(
			   			'timeslot'=>$timeslot->timeslot,
			   			'credited'=>$credited,
			   			'debited'=>$debited,
			   			'commission'=>$commission,
			   			'day_total'=>$day_total,
			   			'final_total'=>$final_total,
			   			'draw_time'=>date('d-m-y',strtotime($timeslot->timeslot)).'  '.date('h:i a',strtotime($draw_time['1'])),
			   			'profit'=>$credited -($debited + $commission)
			   		);
			}
		}	

	  	return $data;
	}

	function getDealerHistory()
	{
		$this->db->select('timeslot');
		$this->db->from('dealer_history');
		$this->db->group_by('timeslot');
		$query=$this->db->get();	

		$timeslots = $query->result();
		$data = array();
		foreach ($timeslots as $timeslot)
		{
			$this->db->select('sum(bet_amount) as credited');
			$this->db->from('dealer_history');
			$this->db->where('bet_amount >= 0');
			$this->db->where('timeslot',$timeslot->timeslot);
			$query=$this->db->get()->row();
			$credited = $query->credited;

			$this->db->select('sum(bet_amount) as debited');
			$this->db->from('dealer_history');
			$this->db->where('bet_amount < 0');
			$this->db->where('timeslot',$timeslot->timeslot);
			$query=$this->db->get()->row();
			$debited = $query->debited;

			$this->db->select('total');
			$this->db->from('dealer_history');
			$this->db->where('timeslot',$timeslot->timeslot);
			$this->db->order_by("id", "desc"); 
			$this->db->limit(1);
			//$this->db->group_by('timeslot');
		   	$query=$this->db->get()->row();
		   	$day_total = $query->total;

		   	$this->db->select('sum(commission) as commission');
			$this->db->from('dealer_history');
			$this->db->group_by('timeslot');
		   	$query=$this->db->get()->row();
		   	$commission = $query->commission;

		   	$data[]= array(
		   			'timeslot'=>$timeslot->timeslot,
		   			'credited'=>$credited,
		   			'debited'=>$debited,
		   			'day_total'=>$day_total,
		   			'final_total'=>$day_total,
		   			'commission'=>$commission
		   		);
		}

	  	return $data;
	}
	function getDealerHistoryById($dealer_id,$from = null , $to = null)
	{
		$this->db->select('timeslot,timeslot_id');
		$this->db->from('dealer_history');
		$where = "dealer_id = $dealer_id and (timeslot BETWEEN '$to' AND '$from')";
		$this->db->where($where);
		//$this->db->and_like('timeslot',$to);
		//$this->db->or_like('timeslot',$from);
		$this->db->group_by('timeslot_id');
		$query=$this->db->get();	
		$timeslots = $query->result();
		$data = array();

		$this->db->select('total');
		$this->db->from('dealer_history');
		$this->db->order_by("id", "desc"); 
		$this->db->limit(1);
	   	$query=$this->db->get()->row();
	   	$final_total = $query->total;

	   	if(!empty($timeslots))
		{
			foreach ($timeslots as $timeslot)
			{
				$this->db->select('sum(bet_amount) as credited');
				$this->db->from('dealer_history');
				$this->db->where('bet_amount >= 0');
				$this->db->where('timeslot',$timeslot->timeslot);
				$this->db->where('timeslot_id',$timeslot->timeslot_id);
				$this->db->where('dealer_id',$dealer_id);
				$query=$this->db->get()->row();
				$credited = $query->credited;

				$this->db->select('sum(bet_amount) as debited');
				$this->db->from('dealer_history');
				$this->db->where('bet_amount < 0');
				$this->db->where('timeslot',$timeslot->timeslot);
				$this->db->where('timeslot_id',$timeslot->timeslot_id);
				$this->db->where('dealer_id',$dealer_id);
				$query=$this->db->get()->row();
				$debited = $query->debited;

				/*$this->db->select('total');
				$this->db->from('dealer_history');
				$this->db->where('timeslot',$timeslot->timeslot);
				$this->db->where('timeslot_id',$timeslot->timeslot_id);
				$this->db->where('dealer_id',$dealer_id);
				$this->db->order_by("id", "desc"); 
				$this->db->limit(1);
				// $this->db->group_by('timeslot');
			   	$query=$this->db->get()->row();
			   	echo($this->db->last_query());
			   	$day_total = 0;
			   	if($query)
			   		$day_total = $query->total;*/

			   	$this->db->select('sum(commission) as commission');
				$this->db->from('dealer_history');
				$this->db->where('timeslot',$timeslot->timeslot);
				$this->db->where('timeslot_id',$timeslot->timeslot_id);
			   	$query=$this->db->get()->row();
			   	$commission = $query->commission;

			   	$timespan = $this->getTimeslotById($timeslot->timeslot_id);
			   	$draw_time = explode(' To ', $timespan);	

			   	$data[]= array(
			   			'timeslot'=>$timeslot->timeslot,
			   			'credited'=>$credited,
			   			'debited'=>$debited,
			   			//'day_total'=>$day_total,
			   			'final_total'=>$final_total,
			   			'commission'=>$commission,
			   			'draw_time'=>date('d-m-y',strtotime($timeslot->timeslot)).'  '.date('h:i a',strtotime($draw_time['1'])),
			   			'profit'=>$credited -($debited + $commission),
			   			'week' => date('d-m-y',strtotime($to)).' To '.date('d-m-y',strtotime($from))
			   		);
			}
		}	

	  	return $data;
	}
        
         function getMonthlyProfit()
         {
             
                  date_default_timezone_set("Asia/Calcutta");
	$now = getdate();
	$rounded = $now['year']."-".$now['mon'];
                  $this->db->select(' max(total) - min(total ) as profit');
			$this->db->from('admin_history');
                                                      $this->db->like('timeslot',$rounded);
			$this->db->order_by('timeslot','desc');
			$query=$this->db->get()->row();
                                                      //echo $this->db->last_query();die;
                        
			$profit  = $query->profit;                                    
			
                                                      return $profit;
         }
         function getTotalUsers($role_id)
         {
             
                  
                  $this->db->select(' count( id ) as number');
			$this->db->from('user_master');
			$this->db->where('role_id',$role_id);
                                                      $query=$this->db->get()->row();
                                                      //echo $this->db->last_query();die;
                        
			$number  = $query->number;                                    
			
                                                      return $number;
         }


     	function getTimeslotId()
     	{
     		date_default_timezone_set("Asia/Calcutta");
		   	$now = getdate();
		    $minutes = $now['minutes'] - $now['minutes']%15;

		    $rounded = $now['hours'].":".$minutes;
		    $start = date('H:i', strtotime($rounded));
		      
		      
		    $endTime = date('H:i',strtotime("+15 minutes", strtotime($start)));
	        $time_slots = $start." To ".$endTime;

         	$this->db->select('timeslot_id');
	     	$this->db->from('timeslots');
	      	$this->db->where('timeslot',$time_slots);
	      	$query=$this->db->get()->row();
	      	return $timeslot_id = $query->timeslot_id;
     	}

     	function getTimeslotById($id)
     	{
         	$this->db->select('timeslot');
	     	$this->db->from('timeslots');
	      	$this->db->where('timeslot_id',$id);
	      	$query=$this->db->get()->row();
	      	return $query->timeslot;
     	}
        
             public function restore_amount($users){
                      
                     $result['failed_users'] = array();
                        foreach($users as $user){
                                     $this->db->select("present_amount,deposited_amount,sunday_amount");
                                     $this->db->from("user_master"); 
                                     $this->db->where("id ",$user);
                                     $query = $this->db->get()->row();
                                    $present_amount = $query->present_amount;                 
                                    $deposited_amount = $query->deposited_amount;                 
                                    $sunday_amount = $query->sunday_amount;        
                                    
                                    if(!empty($sunday_amount)){
                                        
//                                             if($sunday_amount > $deposited_amount){
//                                                 
//                                                     $amount = $sunday_amount - $deposited_amount;
//                                                     $present_amount = $present_amount - $amount ;
//                                                     
//                                                      $data = array(
//					
//				"present_amount" => $present_amount,
//				"is_restored" => 1,
//				"restored_time" => date("Y-m-d H:i:s"),
//				"sunday_amount" => 0,
//					
//                                                        );
//                                                        $this->db->where('id', $user);
//                                                        $this->db->update('user_master', $data);
//                                                     
//                                             }else{
//                                                  $result['failed_users'][] = $user;
//                                             }
                                                 
                                        $amount = $present_amount - $sunday_amount;
                                        $amount = $amount + $deposited_amount;
                                         $data = array(
					
				"present_amount" => $amount,
				"is_restored" => 1,
				"restored_time" => date("Y-m-d H:i:s"),
				"sunday_amount" => 0,
					
                                                        );
                                                        $this->db->where('id', $user);
                                                        $this->db->update('user_master', $data);
                                        
                                        
                                        
                                    }else{
                                        
                                                   $result['failed_users'][] = $user;
                                    }
                         }
                         return $result;
             }
		
 	function getPlayerHistory($player_id,$from,$to)
    {
      	$this->db->select('*');
     	$this->db->from('player_history');
	    $this->db->where('player_id',$player_id);
	    $this->db->where("timeslot >= '".$from."' and timeslot < '".$to."' ");
	    $query=$this->db->get();
	    return $query->result();
    }
    function getGamePlayedLottery($player_id)
    {
      	$this->db->select('*');
     	$this->db->from('player_history');
	    $this->db->where('player_id',$player_id);
	    $query=$this->db->get();
	    return $query->num_rows();
    }
    function getPlayerHistoryById($player_id,$from = null , $to = null)
	{
		$this->db->select('timeslot,timeslot_id');
		$this->db->from('player_history');
		$this->db->where('player_id',$player_id);
		$this->db->like('timeslot',$to);
		$this->db->or_like('timeslot',$from);
		$this->db->group_by('timeslot_id');
		$query=$this->db->get();	
		$timeslots = $query->result();

		//echo $this->db->last_query();

		$data = array();

		$this->db->select('present_amount');
		$this->db->from('user_master');
		$this->db->where('id',$player_id);
		$this->db->order_by("id", "desc"); 
		$this->db->limit(1);
	   	$query=$this->db->get()->row();
	   	$final_total = $query->present_amount;

	   	if(!empty($timeslots))
		{
			foreach ($timeslots as $timeslot)
			{
				$this->db->select('sum(bet_amount) as credited');
				$this->db->from('player_history');
				$this->db->where('bet_amount >= 0');
				$this->db->where('timeslot',$timeslot->timeslot);
				$this->db->where('timeslot_id',$timeslot->timeslot_id);
				$this->db->where('player_id',$player_id);
				$query=$this->db->get()->row();
				$credited = $query->credited;

				$this->db->select('sum(bet_amount) as debited');
				$this->db->from('player_history');
				$this->db->where('bet_amount < 0');
				$this->db->where('timeslot',$timeslot->timeslot);
				$this->db->where('timeslot_id',$timeslot->timeslot_id);
				$this->db->where('player_id',$player_id);
				$query=$this->db->get()->row();
				$debited = $query->debited;

				/*$this->db->select('total');
				$this->db->from('player_history');
				$this->db->where('timeslot',$timeslot->timeslot);
				$this->db->where('timeslot_id',$timeslot->timeslot_id);
				$this->db->where('player_id',$player_id);
				$this->db->order_by("id", "desc"); 
				$this->db->limit(1);
				//$this->db->group_by('timeslot');
			   	$query=$this->db->get()->row();
			   	$day_total = $query->total;*/
			   	$day_total =0 ;

			   	

			   	$timespan = $this->getTimeslotById($timeslot->timeslot_id);
			   	$draw_time = explode(' To ', $timespan);	

			   	$data[]= array(
			   			'timeslot'=>$timeslot->timeslot,
			   			'credited'=>$credited,
			   			'debited'=>$debited,
			   			'day_total'=>$day_total,
			   			'final_total'=>$final_total,
			   			'draw_time'=>date('d-m-y',strtotime($timeslot->timeslot)).'  '.date('h:i a',strtotime($draw_time['1'])),
			   			'profit'=>$credited -$debited
			   		);
			}
		}	

	  	return $data;
	}
	function getPlayerHistoryByDealer($dealer_id, $from, $to)
	{
		if(isset($dealer_id)){
			$this->db->select('player_id');
			$this->db->from('dealer_player');
			$this->db->where('dealer_id',$dealer_id);
			$query=$this->db->get();

			//echo($this->db->last_query());

			$players = $query->result(); 

			foreach ($players as $player) {
				$this->db->select('user_code');
				$this->db->from('user_master');
				$this->db->where('id',$player->player_id);
				$query=$this->db->get()->row();
				$user_code = $query->user_code; 

				$this->db->select('sum(bet_amount) as bet_amount');
				$this->db->from('player_history');
				$where = "player_id = $player->player_id and (timeslot BETWEEN '$to' AND '$from')";
				$this->db->where($where);
				$query=$this->db->get()->row();
				$bet_amount = $query->bet_amount;

			}
			//die;
		}	
	}

        
        
        public function restore_account(){
            
             $this->db->set('sunday_amount','present_amount',FALSE);
             $this->db->where('role_id',3);
             $this->db->update('user_master');
    // echo    $this->db->last_query();die;
             
        }

	function getDailyHistory($from = null , $to = null)
	{
		if(!isset($_GET['date'])){
			$day = $_GET['date'];
		}
		else{
			$day = date('Y-m-d');
		}

		$timeslot_id = 1; 
		for ($i = 0 * 60; $i < 24 * 60; $i+= 15) {
            $hr = floor($i / 60);
            if ($hr <= 9) $hr = '0' . $hr;
            
            $min = ($i / 60 - floor($i / 60)) * 60;
            if ($min <= 9) $min = '0' . $min;
            
            $start = date('Y-m-d') . " " . $hr . ":" . $min;
            $val_start = $hr . ":" . $min;
            $newTime = date("Y-m-d H:i", strtotime($start . " +15 minutes"));
            $val_end = date("H:i", strtotime($start . " +15 minutes"));
            $display = date("h:i a", strtotime($val_end));
            
            $timeslots[] = array('date'=>$day,'timeslot'=>$display,'timeslot_id'=>$timeslot_id,);  #array('value' => $val_start . " To " . $val_end, 'display' => $display,);
            $timeslot_id++;
        }

		/*$this->db->select('timeslot,timeslot_id');
		$this->db->from('admin_history');
		$this->db->where('timeslot <',$from);
		$this->db->where('timeslot >=',$to);
		$this->db->group_by('timeslot_id');
		$query=$this->db->get();
		
		$timeslots = $query->result();*/
		$data = array();

		//echo "<pre>";
		//print_r($timeslots);

		$this->db->select('total');
		$this->db->from('admin_history');
		$this->db->order_by("id", "desc"); 
		$this->db->limit(1);
	   	$query=$this->db->get()->row();
		$final_total = 0;
	   	if($query){
		   	$final_total = $query->total;
	   	}



		if(!empty($timeslots))
		{	
			foreach ($timeslots as $timeslot)
			{
				$this->db->select('sum(bet_amount) as credited');
				$this->db->from('admin_history');
				$this->db->where('bet_amount >= 0');
				$this->db->where('timeslot_id',$timeslot['timeslot_id']);
				$this->db->like('timeslot',$timeslot['date']);
				$query=$this->db->get()->row();
				$credited = 0;

				//echo($this->db->last_query());

				if($query){
					$credited = $query->credited;
				}	

				$this->db->select('sum(bet_amount) as debited');
				$this->db->from('admin_history');
				$this->db->where('bet_amount < 0');
				$this->db->like('timeslot',$timeslot['date']);
				$this->db->where('timeslot_id',$timeslot['timeslot_id']);
				$query=$this->db->get()->row();
				$debited = $query->debited;

				$this->db->select('total');
				$this->db->from('admin_history');
				$this->db->like('timeslot',$timeslot['timeslot']);
				//$this->db->where('timeslot_id',$timeslot->timeslot_id);
				$this->db->order_by("id", "desc"); 
				$this->db->limit(1);
				//$this->db->group_by('timeslot');
			   	$query=$this->db->get()->row();
			   	$day_total = 0;
			   	if($query)
			   	{
				   	$day_total = $query->total;
			   	}

			    $this->db->select('sum(commission) as commission');
				$this->db->from('admin_history');
				$this->db->like('timeslot',$timeslot['date']);
				$this->db->where('timeslot_id',$timeslot['timeslot_id']);
			   	$query=$this->db->get()->row();
			   	$commission = $query->commission;

			   	//echo($this->db->last_query());

			   	//$timespan = $this->getTimeslotById($timeslot->timeslot_id);
			   	//$draw_time = explode(' To ', $timespan);
			   	$draw_time = '';
			   	$data[]= array(
			   			'timeslot'=>$timeslot['timeslot'],
			   			'credited'=>$credited,
			   			'debited'=>$debited,
			   			'commission'=>$commission,
			   			'day_total'=>$day_total,
			   			'final_total'=>$final_total,
			   			'draw_time'=>  $timeslot['timeslot'], // date('d-m-y',strtotime($timeslot['timeslot'])).'  '.date('h:i a',strtotime($draw_time['1'])),
			   			'profit'=>$credited -($debited + $commission)
			   		);
			}
		}	

	  	return $data;
	}

	function getAccounts($from,$to)
	{
		$this->db->select('user_code,id');
     	$this->db->from('user_master');
	    $this->db->where('role_id','2');
	    $query=$this->db->get();
	    $dealers =  $query->result();

	    $i=1;
	    foreach ($dealers as $dealer) {
	    	
	    	$this->db->select('sum(bet_amount) as credited');
			$this->db->from('dealer_history');
			$this->db->where('bet_amount >= 0');
			$where = 'dealer_id = "'.$dealer->id.'" AND (timeslot BETWEEN "'.$to.'" AND  "'.$from.'")';
			$this->db->where($where);
			$query=$this->db->get()->row();
			$credited = 0;
			  //echo($this->db->last_query());  die;
			if($query){
				$credited = $query->credited;
			}

			$this->db->select('sum(commission) as commission');
			$this->db->from('dealer_history');
			$this->db->where('bet_amount >= 0');
			$where = 'dealer_id = "'.$dealer->id.'" AND (timeslot BETWEEN "'.$to.'" AND  "'.$from.'")';
			$this->db->where($where);
			$query=$this->db->get()->row();
			$commission = 0;
			//echo($this->db->last_query()); 
			if($query){
				$commission = $query->commission;
			}

			$this->db->select('sum(total) as total');
			$this->db->from('dealer_history');
			$this->db->where('bet_amount >= 0');
			$where = '(timeslot BETWEEN "'.$to.'" AND  "'.$from.'")';
			$this->db->where($where);
			$query=$this->db->get()->row();
			$total = 0;
			// echo($this->db->last_query()); die;
			if($query){
				$total = $query->total;
			}	

			$data[]= array(
			   			'sr_no' => $i,
			   			'user_code'=>$dealer->user_code,
			   			'credited'=>$credited,
			   			//'debited'=>$debited,
			   			'commission'=>$commission,
			   			'total'=>$total,
			   			'week' => date('d-m-Y',strtotime($to)) .' To '.date('d-m-Y',strtotime($from)),
			   			'month' => date('M-Y'),
			   			//'final_total'=>$final_total,
			   			//'draw_time'=>  $timeslot['timeslot'], // date('d-m-y',strtotime($timeslot['timeslot'])).'  '.date('h:i a',strtotime($draw_time['1'])),
			   			//'balance'=>$credited -($debited + $commission)
			   		);
			$i++;
	    }

	    //print_r($data);
	    //die;

	    return $data;
	}

}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



//location: application/models/auth_model.php



class Bets_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	function placebet($data)
	{
		return $this->db->insert('game_lottery', $data);
	}

	function getfirstdigitchart()
	{
		date_default_timezone_set("Asia/Calcutta");
		$now = getdate();
		$now['minutes'] = $now['minutes'] - 1;
		$minutes = $now['minutes'] - $now['minutes']%15;
		$rounded = $now['year']."-".$now['mon']."-".$now['mday']." ".$now['hours'].":".$minutes.":00";
		$max_time = date('Y-m-d H:i:s');
		
	   $this->db->select('sum(bet_amount ) as bet_amount ,digit,sum(payout ) as payout');
	   $this->db->from('game_lottery');
	   $this->db->where('game_type',1);
	   $this->db->where("timeslot >= '".$rounded."' and timeslot < '".$max_time."' ");
	   $this->db->group_by('digit');
	   $query=$this->db->get();
	   return $query;
	}
	function getfirstdigitchartAccToTime($start,$end)
	{
	   $this->db->select('sum(bet_amount ) as bet_amount ,digit,sum(payout ) as payout');
	   $this->db->from('game_lottery');
	   $this->db->where('game_type',1);
	   $this->db->where("timeslot >= '".$start."' and timeslot < '".$end."' ");
	   $this->db->group_by('digit');
	   $query=$this->db->get();
	   return $query;
	}
	function getseconddigitchart()
	{
		date_default_timezone_set("Asia/Calcutta");
		$now = getdate();
		$now['minutes'] = $now['minutes'] - 1;
		$minutes = $now['minutes'] - $now['minutes']%15;
		$rounded = $now['year']."-".$now['mon']."-".$now['mday']." ".$now['hours'].":".$minutes.":00";
		$max_time = date('Y-m-d H:i:s');
		
	   $this->db->select('sum(bet_amount ) as bet_amount ,digit,sum(payout ) as payout');
	   $this->db->from('game_lottery');
	   $this->db->where('game_type',2);
	   $this->db->where("timeslot >= '".$rounded."' and timeslot < '".$max_time."' ");
	   $this->db->group_by('digit');
	   $query=$this->db->get();
	   return $query;
	}
	function getSeconddigitchartAccToTime($start,$end)
	{
	   $this->db->select('sum(bet_amount ) as bet_amount ,digit,sum(payout ) as payout');
	   $this->db->from('game_lottery');
	   $this->db->where('game_type',2);
	   $this->db->where("timeslot >= '".$start."' and timeslot < '".$end."' ");
	   $this->db->group_by('digit');
	   $query=$this->db->get();
	   return $query;
	}
	function getjodichart()
	{
		
		date_default_timezone_set("Asia/Calcutta");
		$now = getdate();
		$now['minutes'] = $now['minutes'] - 1;
		$minutes = $now['minutes'] - $now['minutes']%15;
		$rounded = $now['year']."-".$now['mon']."-".$now['mday']." ".$now['hours'].":".$minutes.":00";
		$max_time = date('Y-m-d H:i:s');
       
        $this->db->select('sum(bet_amount ) as bet_amount ,digit,sum(payout ) as payout');
	    $this->db->from('game_lottery');
	    $this->db->where('game_type',3);
	    $this->db->where("timeslot >= '".$rounded."' and timeslot < '".$max_time."' ");
	    $this->db->group_by('digit');
	    $query=$this->db->get();
	    
	    return $query;
	}
	function getjodichartAccToTime($start,$end)
	{
	   $this->db->select('sum(bet_amount ) as bet_amount ,digit,sum(payout ) as payout');
	   $this->db->from('game_lottery');
	   $this->db->where('game_type',3);
	   $this->db->where("timeslot >= '".$start."' and timeslot < '".$end."' ");
	   $this->db->group_by('digit');
	   $query=$this->db->get();
	   return $query;
	}
	function getTotalPayoutAndBets()
	{
	    date_default_timezone_set("Asia/Calcutta");
		$now = getdate();
		$now['minutes'] = $now['minutes'] - 1;
		$minutes = $now['minutes'] - $now['minutes']%15;
		$rounded = $now['year']."-".$now['mon']."-".$now['mday']." ".$now['hours'].":".$minutes.":00";
		$max_time = date('Y-m-d H:i:s');
		
	   $this->db->select('sum(bet_amount ) as bet_amount,sum(payout ) as payout');
	   $this->db->from('game_lottery');
	   $this->db->where("timeslot >= '".$rounded."' and timeslot < '".$max_time."' ");
	   //$this->db->where('game_type',3);
	   //$this->db->group_by('digit');
	   $query=$this->db->get()->row();
	   return $query;
	}
	function getTotalPayoutAndBetsAccToTime($start,$end)
	{
		
	   $this->db->select('sum(bet_amount ) as bet_amount,sum(payout ) as payout');
	   $this->db->from('game_lottery');
	   $this->db->where("timeslot >= '".$start."' and timeslot < '".$end."' ");
	   //$this->db->where('game_type',3);
	   //$this->db->group_by('digit');
	   $query=$this->db->get()->row();
	   return $query;
	}

	function addplayerhistory($data)
	{
		$this->db->insert('player_history', $data);
	}

	function debit($data)
	{
		$this->db->set('present_amount','present_amount-'.$data['bet_amount'],FALSE);
		$this->db->where('id',$data['id']);
		$this->db->update('user_master');
	}

	function credit($data)
	{
		$this->db->set('present_amount','present_amount+'.$data['bet_amount'],FALSE);
		$this->db->where('id',$data['id']);
		$this->db->update('user_master');
	}
	
	function getLuckyNumber()
	{
		
		date_default_timezone_set("Asia/Calcutta");
		$now = getdate();
		$now['minutes'] = $now['minutes'] - 1;
		$minutes = $now['minutes'] - $now['minutes']%15;
		$rounded = $now['year']."-".$now['mon']."-".$now['mday']." ".$now['hours'].":".$minutes.":00";
		$time = strtotime($rounded);
        $time = $time - (15 * 60);
        $date = date("Y-m-d H:i:s", $time);
		
		
	    $this->db->select('lucky_number');
	    $this->db->from('lucky_numbers');
	    $this->db->where("timeslot >= '".$date."' and timeslot < '".$rounded."' ");
	    $query=$this->db->get()->row();
	    
	    if(!empty($query)){
	    if($query->lucky_number <=9 ){
		   $query->lucky_number = "0".$query->lucky_number;
		}
		return $query->lucky_number;
		}else{
		  return "";	
		}
	}
	function getLuckyNumberAccToTime($start,$end)
	{
		
	    $this->db->select('lucky_number');
	    $this->db->from('lucky_numbers');
	    $this->db->where("timeslot >= '".$start."' and timeslot < '".$end."' ");
	    $query=$this->db->get()->row();

	    //echo $this->db->last_query(); die;
	    
	    if(!empty($query)){
	    if($query->lucky_number <=9 ){
		   $query->lucky_number = "0".$query->lucky_number;
		}
		return $query->lucky_number;
		}else{
		  return "";	
		}
	}
	
	function cancelbet($player_id,$digit,$game_type){
	    date_default_timezone_set("Asia/Calcutta");
		$now = getdate();
		$now['minutes'] = $now['minutes'] - 1;
		$minutes = $now['minutes'] - $now['minutes']%15;
		$rounded = $now['year']."-".$now['mon']."-".$now['mday']." ".$now['hours'].":".$minutes.":00";
		
		$time = strtotime($rounded);
        $time = $time + (15 * 60);
        $date = date("Y-m-d H:i:s", $time);	
	    $this->db->select('bet_amount,id,jodi_digit');
	    $this->db->from('player_history');
	    $this->db->where('player_id',$player_id);
	    if($game_type == 1){
		   $this->db->where('first_digit',$digit);
		   $this->db->where('game_type',1);
		}else if($game_type ==2 ){
		      $this->db->where('second_digit',$digit);
		      $this->db->where('game_type',2);
		}else{
		    $this->db->where('jodi_digit',$digit);
		    $this->db->where('game_type',3);
		}
        $this->db->where("timeslot >= '".$rounded."' and timeslot <= '".$date."' ");
        $this->db->order_by('id','desc');
        $this->db->limit(1);
        $query = $this->db->get()->row();
        
        if(!empty($query)){
		        $bet_amount = $query->bet_amount;   //debit from admin and credit back to player
		        $id = $query->id;  //delete the bet from history
		        $debit = array(
				'id'=>1,
				'bet_amount'=>$bet_amount,
				);

			    $credit = array(
				'id'=>$player_id,
				'bet_amount'=>$bet_amount,
				);
		        $this->debit($debit);
				$this->credit($credit);
		        $this->db->delete('player_history', array('id' => $id));  
		        return true;
		        	
			}else{
				return false;
				}
        
	}

	function addAdminHistory($data)
	{
		$this->db->select('total');
		$this->db->from('admin_history');
		$this->db->order_by("id", "desc"); 
		$this->db->limit(1);
		$query=$this->db->get()->row();
		$old_total = $query->total;
		$new_total = ($old_total + $data['bet_amount']);
		$data['total'] = $new_total;

		$this->db->insert('admin_history', $data);
	}

	function getDealerId($player_id)
	{
		$this->db->select('dealer_id');
		$this->db->where('player_id',$player_id);
		$query = $this->db->get('dealer_player')->row();
		return $query->dealer_id;
	}

	function addDealerHistory($data)
	{
		$this->db->select('total');
		$this->db->from('dealer_history');
		$this->db->order_by("id", "desc"); 
		$this->db->limit(1);
		$query=$this->db->get()->row();
		$old_total = $query->total;
		$new_total = ($old_total + $data['bet_amount']);
		$data['total'] = $new_total;

		$this->db->insert('dealer_history', $data);
	}
	
	function getLuckyNumberAccToMonth($start,$end)
	{
		
	    $this->db->select('lucky_number,timeslot');
	    $this->db->from('lucky_numbers');
	    $this->db->where("timeslot >= '".$start."' and timeslot < '".$end."' ");
	    $query=$this->db->get();

	    echo $this->db->last_query(); die;
	    	
	    $data = $query->result();

	    if(!empty($query)){
			return $query->result();
		}else{
		  return "";	
		}
	}

	function getLuckyNumberByTimeSlot($time)
	{
		
	    $this->db->select('lucky_number,timeslot');
	    $this->db->from('lucky_numbers');
	    $this->db->where("timeslot like '%".$time."%'");
	    $query=$this->db->get();

	    /*echo $this->db->last_query();
	    echo '<br/>';*/
	    	
	   // $data = $query->result();

	    if(!empty($query)){
			return $query->result();
		}else{
		  return "";	
		}
	}
	

}

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
	    
	    if($query->lucky_number <=9 ){
		   $query->lucky_number = "0".$query->lucky_number;
		}
		return $query->lucky_number;
	}

}

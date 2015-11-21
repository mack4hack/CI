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
		return $this->db->insert('lucky_numbers',$data);
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
		$where = '((timeslot >='.$rounded.' and timeslot < '.$max_time.') and  (digit='.$first.' or digit='.$second.' or digit='.$jodi.'))';
   		$this->db->where($where);
		$this->db->update('player_history');		
	}

}

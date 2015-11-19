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

		$where = '(digit='.$first.' or digit='.$second.' or digit='.$jodi.')';
   		$this->db->where($where);
   		$query=$this->db->get('game_lottery');//employee is a table in the database
	    
	    return $query->result();
	}

}

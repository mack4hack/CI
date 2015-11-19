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
	   $this->db->select('sum(bet_amount ) as bet_amount ,digit,sum(payout ) as payout');
	   $this->db->from('game_lottery');
	   $this->db->where('game_type',1);
	   $this->db->group_by('digit');
	   $query=$this->db->get();
	   return $query;
	}
	function getseconddigitchart()
	{
	   $this->db->select('sum(bet_amount ) as bet_amount ,digit,sum(payout ) as payout');
	   $this->db->from('game_lottery');
	   $this->db->where('game_type',2);
	   $this->db->group_by('digit');
	   $query=$this->db->get();
	   return $query;
	}
	function getjodichart()
	{
	   $this->db->select('sum(bet_amount ) as bet_amount ,digit,sum(payout ) as payout');
	   $this->db->from('game_lottery');
	   $this->db->where('game_type',3);
	   $this->db->group_by('digit');
	   $query=$this->db->get();
	   return $query;
	}

	function addplayerhistory($data)
	{
		$this->db->insert('player_history', $data);
	}
}

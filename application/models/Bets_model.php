<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



//location: application/models/auth_model.php



class Bets_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	function placebet($data)
	{
		$this->db->insert('game_lottery', $data);
	}

	function getfirstdigitchart()
	{
	   $this->db->select('*');
	   $this->db->from('game_lottery');
	   $this->db->where('game_type',1);
	   $query=$this->db->get();
	   return $query->result();
	}
	function getseconddigitchart()
	{
	   $this->db->select('*');
	   $this->db->from('game_lottery');
	   $this->db->where('game_type',3);
	   $query=$this->db->get();
	   return $query->result();
	}
	function getjodichart()
	{
	   $this->db->select('*');
	   $this->db->from('game_lottery');
	   $this->db->where('game_type',3);
	   $query=$this->db->get();
	   return $query->result();
	}
}
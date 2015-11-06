<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



//location: application/models/auth_model.php



class Admin_model extends CI_Model {
function get_dealers()
{
	$this->db->where('role_id','2');
   $query=$this->db->get('user_master');//employee is a table in the database
    

       return $query->result();
}
function get_players()
{
	$this->db->where('role_id','3');
   $query=$this->db->get('user_master');//employee is a table in the database
    

       return $query->result();
}
}
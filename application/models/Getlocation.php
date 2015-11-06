<?php 
class GetLocation extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

function getCountry()
{
   $this->db->select('*');
   $this->db->from('countries');
   $this->db->order_by('name', 'asc');
   $query=$this->db->get();
   return $query;
}

function getData($loadType,$loadId)
{
//echo "<script>alert('in model');</script>";
   if($loadType=="state"){
    $fieldList='id,name';
    $table='states';
	$fieldName='country_id';
    $orderByField='name';
	
	$this->db->select($fieldList);
    $this->db->from($table);
    $this->db->where($fieldName, $loadId);
     }
   else if($loadType=="dealer")
   {
	 $array = array('city_id' => $loadId, 'role_id' => '1', 'is_active' => '1');  
	$fieldList='first_name as name,last_name as lname,id';
    $table='user_master';
	
    $orderByField='first_name';
	
	$this->db->select($fieldList);
    $this->db->from($table);
    $this->db->where($array);
    
   }
   else{
    $fieldList='id,name';
    $table='cities';
	$fieldName='state_id';
    $orderByField='name';
	
	$this->db->select($fieldList);
    $this->db->from($table);
    $this->db->where($fieldName, $loadId);
    
   }
   
   $this->db->order_by($orderByField, 'asc');
   $query=$this->db->get();
   //echo $this->db->last_query();
   return $query;
 }
}
?>
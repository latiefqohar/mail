<?php
  
class M_register extends CI_Model {
  
  function __construct()
  {
   parent::__construct();
  }
  
  function add_account($data)
  {
     $this->load->database();
     $this->db->insert('login',$data);
   
     return $this->db->insert_id();
  }
  
 }
?>
<?php
  class Model_Login extends CI_Model
  {
    function __construct()
   {
       // Call the Model constructor
       parent::__construct();
   }

   public function tryToLogin($Login,$Password)
   {
     $query = $this->db->get_where('worker', array('Login' => $Login , 'Password' =>md5($Password)));
     return $query->row_array();
   }
 }

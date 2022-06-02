<?php
  class Model_Main extends CI_Model
  {
    function __construct()
   {
       // Call the Model constructor
       parent::__construct();
       if(!$this->session->userdata('Login'))
       return redirect('login');
   }


 }
?>

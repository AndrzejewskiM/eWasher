<?php
  class Model_Product extends CI_Model
  {
    function __construct()
   {
       // Call the Model constructor
       parent::__construct();
       if(!$this->session->userdata('Login'))
       return redirect('login');
   }

   public function getDywany()
   {
     $query = $this->db->get('product');
      return $query->result_array();
   }

   public function getDywanyForSelect()
   {
     $dywany = $this->getDywany();
     $newDywany = array();
     foreach($dywany as $dywan) {
       $newDywany[$dywan['id_product']] = $dywan['name_product'];
     }
     return $newDywany;
   }
 }

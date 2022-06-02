<?php
  class Model_Ordering_Product extends CI_Model
  {
    function __construct()
   {
       // Call the Model constructor
       parent::__construct();
   }

   public function hasPermission($id, $controller) {
    //$data = $this->db->call_function("perm_for_user($id)");
    $data =  $this->db->query("call perm_for_user($id)");
    mysqli_next_result( $this->db->conn_id );
    $data = $data->result_array();
      foreach ($data as $key => $value) {
       if ($value["perm"] == $controller) {
         return true;
       }
     }
     return false;
   }

    public function saveOrdering_Product($data)
    {
      return $this->db->insert('ordering_product',$data);
    }


    public function getAllOrdering_Product($id_ordering)
    {
      $query = $this->db->get_where('ordering_product', array('id_ordering' => $id_ordering));
      return $query->row_array();
    }

    public function updateOrdering_Product($id_ordering, $data)
    {
      return $this->db->where('id_ordering_product',$id_ordering)->update('ordering_product',$data);
    }


    public function deleteOrdering_Product ($id_ordering)
    {
      return $this->db->delete('ordering_product', array('id_ordering' => $id_ordering));
    }
  }

?>

<?php
  class Model_Permision extends CI_Model
  {
    function __construct()
   {
       // Call the Model constructor
       parent::__construct();
       if(!$this->session->userdata('Login'))
       return redirect('Login');
   }

    public function getPermisions()
    {
      $query = $this->db->get('permisions');
      return $query->result_array();
    }

    public function getAllPermisions($permision_id)
    {
      $query = $this->db->get_where('permisions', array('id_permisions' => $permision_id));
      return $query->row_array();
    }

    public function savePermision($data)
    {
      return $this->db->insert('permisions',$data);
    }

    public function updatePermision($permision_id, $data)
    {
      return $this->db->where('id_permisions',$permision_id)->update('permisions',$data);
    }


    public function deletePermision ($permision_id)
    {
      return $this->db->delete('permisions', array('id_permisions' => $permision_id));   }
  }
  ?>

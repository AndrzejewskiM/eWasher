<?php
  class Model_RolePermision extends CI_Model
  {
    function __construct()
   {
       // Call the Model constructor
       parent::__construct();
       if(!$this->session->userdata('Login'))
       return redirect('Login');
   }

   public function getRolePermissions($id_role)
   {
  		$this->db->select('id_permision');
  		$query = $this->db->get_where('roles_permisions', array('id_role' => $id_role));
  		return $this->prepareData($query->result_array());
   }

    public function saveRolePermision($data)
    {
      return $this->db->insert('roles_permisions',$data);
    }

    private function prepareData($data)
  	{
  		$permissions = array();
  		foreach($data as $dat) {
  			array_push($permissions, $dat['id_permision']);
  		}
  		return $permissions;
  	}
  }
  ?>

<?php
  class Model_Role extends \CI_Model
  {
    function __construct()
   {
       // Call the Model constructor
       parent::__construct();
       if(!$this->session->userdata('Login'))
       return redirect('Login');
   }

    public function getRoles()
    {
      $query = $this->db->get('roles');
      return $query->result_array();
    }

    public function getAllRoles($role_id)
    {
      $query = $this->db->get_where('roles', array('id_roles' => $role_id));
      return $query->row_array();
    }

    public function saveRole($data)
    {
      return $this->db->insert('roles',$data);
    }

    public function updateRole($role_id, $data)
    {
      return $this->db->where('id_roles',$role_id)->update('roles',$data);
    }

    public function getAllForSelect()
    {
      $data = $this->getRoles();
      $roles = array();
      foreach($data as $role) {
        $roles[$role['id_roles']] = $role['name_roles'];
      }
      return $roles;
    }


    public function deleteRole ($role_id)
    {
      return $this->db->delete('roles', array('id_roles' => $role_id));   }
  }
  ?>

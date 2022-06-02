<?php defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'core/BaseController.php');

  class Role extends BaseController
  {
    public function __construct() {
      parent::__construct('Role');
    }
    public function index()
    {
      $this->load->model('Model_Role');
      $roles["roles"] = $this->Model_Role->getRoles();
      $this->smarty->assign("roles",$roles["roles"]);
      $this->smarty->assign("customScripts", array('role'));
      $this->smarty->assign("customCSS", array('datatables'));
      $this->smarty->view('./role/role.tpl',$roles);
    }

    public function create()
    {
      $this->load->model('Model_Permision');
      $permissions = $this->Model_Permision->getPermisions();
      $this->smarty->assign("permissions", $this->convertToSelect($permissions));
      $this->smarty->assign("customScripts", array('roles'));
      $this->smarty->assign("customCSS", array('form'));
      $this->smarty->view('./role/add_role.tpl');
    }

    public function save()
    {
      $this->form_validation->set_rules('name_roles', 'Rola', 'required',array('required'=>'Wypełnij pole "Rola"'));
      $this->form_validation->set_rules('permissions[]', 'Rola', 'required',array('required'=>'Wypełnij pole "Uprawnienia"'));
      $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
      if ($this->form_validation->run() == FALSE)
      {
        $this->load->model('Model_Permision');
        $permissions = $this->Model_Permision->getPermisions();
        $this->smarty->assign("permissions", $this->convertToSelect($permissions));
        $this->smarty->assign("customScripts", array('roles'));
        $this->smarty->assign("customCSS", array('form'));
        $this->smarty->view('./role/add_role.tpl');
        }
        else
        {
          $data=$this->input->post();
          $this->load->model('Model_Role');
          $name_roles = array('name_roles' => $data['name_roles']);
          if ($this->Model_Role->saveRole($name_roles))
          {
            $this->load->model('Model_RolePermision');
            $lastId = $this->db->insert_id();
            foreach ($data['permissions'] as $value) {
              $rolesPermision = array('id_role' => $lastId,
                                      'id_permision' => $value);


              $this->Model_RolePermision->saveRolePermision($rolesPermision);
              redirect('role');
            }
          }
        }
      }
    public function update($role_id)
    {
      $this->form_validation->set_rules('name_roles', 'Rola', 'required');
      $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
      if ($this->form_validation->run())
      {
        $data=$this->input->post();
        $this->load->model('Model_Role');
        if ($this->Model_Role->updateRole($role_id,$data))
        {
          $this->session->set_flashdata('success','Klient został zaktualizowany.');
        }
        else
        {
          $this->session->set_flashdata('false','Nie udało się zaktualizować klienta.');
        }
        redirect('./rbac/role');
      }

      else
      {
        $this->session->set_flashdata('false','Wprowadzono nie poprawne dane klienta.');
      redirect('./rbac/role');
      }
    }

    public function edit($role_id)
    {
      $this->load->model('Model_Role');
      $role = $this->Model_Role->getAllRoles($role_id);
      $this->smarty->assign("role",$role);
      $this->load->model('Model_Permision');
      $this->load->model('Model_RolePermision');
      $permissions = $this->Model_Permision->getPermisions();
      $rolePermissions = $this->Model_RolePermision->getRolePermissions($role_id);
      $this->smarty->assign("permissions", $this->convertToSelect($permissions));
      $this->smarty->assign("rolePermissions", $rolePermissions);
      $this->smarty->assign("customScripts", array('roles'));
      $this->smarty->assign("customCSS", array('form'));
      $this->smarty->view('./role/update_role.tpl');
    }


    public function delete($role_id)
    {
      $this->load->model('Model_Role');
      if ( $this->Model_Role->deleteRole($role_id) )
      {
        $this->session->set_flashdata('response','Dane zostały usunięte.');
      }
      else
      {
        $this->session->set_flashdata('response','Błąd usuwania danych.');

      }
      return redirect('./rbac/role');
    }

    private function convertToSelect($data)
    {
      $permissions = array();
      foreach($data as $permission)
          $permissions[$permission['id_permisions']] = $permission['name_permisions'];
      return $permissions;
    }
  }
?>

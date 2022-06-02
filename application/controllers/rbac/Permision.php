<?php defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'core/BaseController.php');

  class Permision extends BaseController
  {
    public function __construct() {
    Parent::__construct('Permission');
  }

    public function index()
    {
      $this->load->model('Model_Permision');
      $permisions["permisions"] = $this->Model_Permision->getPermisions();
      $this->smarty->assign("permisions",$permisions["permisions"]);
      $this->smarty->assign("customScripts", array('permission'));
      $this->smarty->assign("customCSS", array('datatables'));
      $this->smarty->view('./permision/permision.tpl',$permisions);
    }

    public function create()
    {
      $this->smarty->assign("customCSS", array('form'));
      $this->smarty->view('./permision/add_permision.tpl');
    }

    public function save()
    {
      $this->form_validation->set_rules('name_permisions', 'Uprawnienie', 'required',array('required'=>'Wypełnij pole "Uprawnienie"'));
      $this->form_validation->set_rules('action_permissions', 'Akcja z kontrolera', 'required',array('required'=>'Wypełnij pole "Akcja z kontrolera"'));
      $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
      if ($this->form_validation->run() == FALSE)
      {
        $this->smarty->assign("customCSS", array('form'));
        $this->smarty->view('./permision/add_permision.tpl');
        }
        else
        {
          $this->load->model('Model_Permision');
          $data = array(
                   'name_permisions'    =>$this->input->post('name_permisions'));
          $result=$this->Model_Permision->savePermision($data);
                   redirect('uprawnienia');
        }
      }
    public function update($permision_id)
    {
      $this->form_validation->set_rules('name_permisions', 'Imie', 'required');
      $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
      if ($this->form_validation->run())
      {
        $data=$this->input->post();
        $this->load->model('Model_Permision');
        if ($this->Model_Permision->updatePermision($permision_id,$data))
        {
          $this->session->set_flashdata('success','Klient został zaktualizowany.');
        }
        else
        {
          $this->session->set_flashdata('false','Nie udało się zaktualizować klienta.');
        }
        redirect('./rbac/permision');
      }

      else
      {
        $this->session->set_flashdata('false','Wprowadzono nie poprawne dane klienta.');
      redirect();
      }
    }

    public function edit($permision_id)
    {
      $this->load->model('Model_Permision');
      $permision = $this->Model_Permision->getAllPermisions($permision_id);
      $this->smarty->assign("permision",$permision);
      $this->smarty->assign("customCSS", array('form'));
      $this->smarty->view('./permision/update_permision.tpl');
    }


    public function delete($permision_id)
    {
      $this->load->model('Model_Permision');
      if ( $this->Model_Permision->deletePermision($permision_id) )
      {
        $this->session->set_flashdata('response','Dane zostały usunięte.');
      }
      else
      {
        $this->session->set_flashdata('response','Błąd usuwania danych.');

      }
      return redirect('./rbac/permision');
    }
  }
?>

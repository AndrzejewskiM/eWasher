<?php defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'core/BaseController.php');

  class Worker extends BaseController
  {
    public function __construct() {
      Parent::__construct('Worker');
    }


    public function index()
    {
      $this->load->model('Model_Worker');
      $id=$this->session->userdata('id');
      $controller = $this->router->fetch_class();
      $permission = $this->Model_Worker->hasPermission($id,$controller);
      if($permission == true)
      {
        $workers["workers"]=$this->Model_Worker->getWorkers();
        $this->smarty->assign("workers",$workers["workers"]);
        $this->smarty->assign("customScripts", array('worker'));
        $this->smarty->assign("customCSS", array('datatables'));
        $this->smarty->view('./worker/worker.tpl',$workers);
      }
      else {
        echo "dupa";
      }
    }


    public function create()
    {
      $this->smarty->assign("customCSS", array('form'));
      $this->load->model('Model_Role');
      $roles = $this->Model_Role->getAllForSelect();
      $this->smarty->assign("roles",$roles);
      $this->smarty->view('./worker/add_worker.tpl');
    }

    public function save()
    {
      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
      $this->load->helper('security');
      $this->form_validation->set_rules('login','Login','trim|required|min_length[8]|max_length[50]',
      array('required'=>'Wypełnij pole "Login"'));
      $this->form_validation->set_rules('password','Hasło','required|min_length[8]|max_length[50]|md5');
      $this->form_validation->set_rules('password_confirm','Potwierdź Hasło','required|min_length[8]|max_length[50]|matches[password]|md5');
      $this->form_validation->set_rules('name_worker','Imię','required|min_length[3]|max_length[50]');
      $this->form_validation->set_rules('surname_worker','Nazwisko','required|min_length[2]|max_length[50]');
      $this->form_validation->set_rules('phone_worker','Telefon','required|min_length[8]|max_length[15]');
      if ($this->form_validation->run() == FALSE)
        {
          $this->smarty->assign("customCSS", array('form'));
          $this->load->model('Model_Role');
          $roles = $this->Model_Role->getAllForSelect();
          $this->smarty->assign("roles",$roles);
          $this->smarty->view('./worker/add_worker.tpl');
        }
      else
        {
          $this->load->model('Model_Worker');
          $data = array(
                   'login'    =>$this->input->post('login'),
                   'password'    =>$this->input->post('password'),
                   'name_worker'   =>$this->input->post('name_worker'),
                   'surname_worker'  =>$this->input->post('surname_worker'),
                   'phone_worker'    =>$this->input->post('phone_worker'),
                   'id_role' => $this->input->post('role_id')
                 );
          $result=$this->Model_Worker->saveWorker($data);
          redirect('worker');
        }
      }
      public function status($worker_id)
      {
        $this->load->model('Model_Worker');
        $this->Model_Worker->changeStatus($worker_id);
        redirect('worker');
      }


    public function update($worker_id)
    {
      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
      $this->load->helper('security');
      $this->form_validation->set_rules('name_worker','Imię','required|min_length[3]|max_length[50]trim|xss_clean');
      $this->form_validation->set_rules('surname_worker','Nazwisko','required|min_length[2]|max_length[50]|trim|xss_clean');
      $this->form_validation->set_rules('phone_worker','Telefon','required|min_length[8]|max_length[15]|trim|xss_clean');
      if ($this->form_validation->run() == TRUE)
      {
        $data=$this->input->post();
        $this->load->model('Model_Worker');
        if ($this->Model_Worker->updateWorker($worker_id,$data))
        {
          $this->session->set_flashdata('success','Klient został zaktualizowany.');
        }
        else
        {
          $this->session->set_flashdata('false','Nie udało się zaktualizować klienta.');
        }
        redirect('worker');
      }

      else
      {
        $this->load->model('Model_Worker');
        $worker = $this->Model_Worker->getAllWorkers($worker_id);
        $this->smarty->assign("worker",$worker);
        $this->smarty->assign("customCSS", array('form'));
        $this->smarty->view('./worker/update_worker.tpl');
      }
    }

    public function edit($worker_id)
    {
      $this->load->model('Model_Worker');
      $worker = $this->Model_Worker->getAllWorkers($worker_id);
      $this->smarty->assign("worker",$worker);
      $this->smarty->assign("customCSS", array('form'));
      $this->smarty->view('./worker/update_worker.tpl');
    }

    public function updatePassword($worker_id)
    {
      $this->load->helper('security');
      $this->form_validation->set_rules('password','Hasło','required|min_length[8]|max_length[50]|md5');
      $this->form_validation->set_rules('password_confirm','Potwierdź Hasło','required|min_length[8]|max_length[50]|matches[password]|md5');

      if ($this->form_validation->run() == TRUE)
      {
        $data=$this->input->post();
        $this->load->model('Model_Worker');
        if ($this->Model_Worker->updateWorker($worker_id,$data))
        {
          $this->session->set_flashdata('success','Hasło został zaktualizowane.');
        }
        else
        {
          $this->session->set_flashdata('false','Nie udało się zaktualizować hasła.');
        }
        redirect('worker');
      }

      else
      {
        $this->session->set_flashdata('false','Wprowadzono nie poprawne dane.');
      redirect('worker');
      }
    }

    public function editPassword($worker_id)
    {
      $this->load->model('Model_Worker');
      $worker = $this->Model_Worker->getAllWorkers($worker_id);
      $this->smarty->assign("worker",$worker);
      $this->smarty->assign("customCSS", array('form'));
      $this->smarty->view('./worker/change_password.tpl');
    }


    public function delete($worker_id)
    {
      $this->load->model('Model_Worker');
      if ( $this->Model_Worker->deleteWorker($worker_id) )
      {
        $this->session->set_flashdata('response','Dane zostały usunięte.');
      }
      else
      {
        $this->session->set_flashdata('response','Błąd usuwania danych.');

      }
      return redirect('pracownicy');
    }
  }


  ?>

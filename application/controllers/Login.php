<?php defined('BASEPATH') OR exit('No direct script access allowed');

  class Login extends CI_Controller
  {
    public function index()
    {
      $this->smarty->assign("customCSS", array('loginPanel'));
      $this->smarty->view('loginPanel.tpl');
    }
    public function tryToLogin()
    {
      $this->load->model('Model_Login');
        $data=$this->input->post();
        $result=$this->Model_Login->tryToLogin($data['Login'],$data['Password']);
        if(!empty($result))
        {
          if($result['is_Active'])
          {
            $this->session->set_userdata('Login',$result['login']);
            $this->session->set_userdata('id',$result['id_worker']);

            redirect('Start');
          }
          else
          {
            $this->session->set_flashdata('false','Twoje konto nie jest aktywowane skontaktuj się z administratorem');
            redirect('login');
          }
        }
        else
        {
          $this->session->set_flashdata('false','Błędne dane logowania');
          redirect('login');
        }

    }

  public function logout()
{
    $user_data = $this->session->all_userdata();
    $this->session->unset_userdata('Login');
    $this->session->sess_destroy();
    redirect('login');
}
  }

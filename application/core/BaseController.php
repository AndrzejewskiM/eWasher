<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BaseController extends CI_Controller
{
  /**
   * Konstruktor klasy nadrzędnej
   * @param string $controller Nazwa kontrolera do ktrego chcemy uzyskac dostęp
   */
  public function __construct(string $controller)
  {
      parent::__construct();

      $this->load->model('Model_Worker', false);
      $userID = $this->session->userdata('id');
      if (!$userID) {
        $this->session->set_flashdata('false','Musisz zalogować się do aplikacji.');
        redirect('Login');
      }
      if (! $this->Model_Worker->hasPermission($userID, $controller)) {
        $this->session->set_flashdata('false','Nie posiadasz wystarczających uprawnień do wykonania tej czynności.');
         redirect('Start');
      }

      $this->load->model('Model_Order');
      $notifications = $this->Model_Order->getNotifications();
      $this->smarty->assign("notifications",$notifications);
      $this->smarty->assign("count",count($notifications));
      $this->load->model('Model_Customer');
      $clients = $this->Model_Customer->getAllIndexedById();
      $this->smarty->assign("client_details", $clients);
  }
}

?>

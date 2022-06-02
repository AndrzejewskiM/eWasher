<?php defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'core/BaseController.php');

class Main extends BaseController
{
  function __construct() {
    parent::__construct('Main');
  }
  
    public function index()
    {
      $this->load->model('Model_Product');
      $dywany = $this->Model_Product->getDywanyForSelect();
      $this->load->model('Model_Main');
      $this->smarty->assign("dywany",$dywany);
      $this->smarty->assign("url",site_url());
      $this->smarty->assign("customScripts", array('carpetCalculator'));
      $this->smarty->assign("customCSS", array('mainPage'));
      $this->smarty->view('carpetCalculator.tpl');
    }

    public function getDywany() {
      $this->load->model('Model_Product');
      echo json_encode($this->Model_Product->getDywany());
    }
  }

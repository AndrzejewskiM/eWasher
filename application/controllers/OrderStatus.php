<?php defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'core/BaseController.php');

  class OrderStatus extends BaseController
  {
    public function __construct() {
    Parent::__construct('OrderStatus');
  }

    public function index()
    {
      $this->load->model('Model_OrderStatus');
      $orderstatus["orderstatus"] = $this->Model_OrderStatus->getOrderStatuses();
      $this->smarty->assign("orderstatus",$orderstatus["orderstatus"]);
      $this->smarty->assign("customScripts", array('orderStatus'));
      $this->smarty->assign("customCSS", array('datatables'));
      $this->smarty->view('./orderStatus/order_statuses.tpl',$orderstatus);

    }

    public function create()
    {
      $this->smarty->assign("customCSS", array('form'));
      $this->smarty->view('./orderStatus/add_order_status.tpl');
    }

    public function save()
    {
      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
      $this->form_validation->set_rules('name_order_status', 'Status zlecenia', 'required|min_length[5]|max_length[30]', array('required'=>'Pole status zlecenia nie może być puste'));
      if ($this->form_validation->run() == FALSE)
      {
        $this->smarty->assign("customCSS", array('form'));
        $this->smarty->view('./orderStatus/add_order_status.tpl');
      }
        else
        {
          $this->load->model('Model_OrderStatus');
          $data = array(
                   'name_order_status'    =>$this->input->post('name_order_status'));
          $result=$this->Model_OrderStatus->saveOrderStatus($data);
                   redirect('statusy');
        }
      }

    public function update($order_status_id)
    {
      $this->form_validation->set_rules('name_order_status', 'Status zlecenia', 'required');
      $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
      if ($this->form_validation->run())
      {
        $data=$this->input->post();
        $this->load->model('Model_OrderStatus');
        if ($this->Model_OrderStatus->updateOrderStatus($order_status_id,$data))
        {
          $this->session->set_flashdata('success','Klient został zaktualizowany.');
        }
        else
        {
          $this->session->set_flashdata('false','Nie udało się zaktualizować klienta.');
        }
        redirect();
      }

      else
      {
        $this->session->set_flashdata('false','Wprowadzono nie poprawne dane klienta.');
      redirect();
      }
    }

    public function edit($order_status_id)
    {
      $this->load->model('Model_OrderStatus');
      $orderStatuses = $this->Model_OrderStatus->getAllOrderStatuses($order_status_id);
      $this->smarty->assign("orderStatus",$orderStatuses);
      $this->smarty->assign("customCSS", array('form'));
      $this->smarty->view('./orderStatus/update_order_status.tpl');
    }


    public function delete($order_status_id)
    {
      $this->load->model('Model_OrderStatus');
      if ( $this->Model_OrderStatus->deleteOrderStatus($order_status_id) )
      {
        $this->session->set_flashdata('success','Dane zostały usunięte.');
      }
      else
      {
        $this->session->set_flashdata('false','Błąd usuwania danych.');

      }
      return redirect('orderStatus');
    }
  }
?>

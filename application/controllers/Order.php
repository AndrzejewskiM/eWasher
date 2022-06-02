<?php defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'core/BaseController.php');

  class Order extends BaseController
  {
    public function __construct() {
       Parent::__construct('Order');
   }

    public function index()
    {
      $this->load->model('Model_Order');
      $orders["orders"] = $this->Model_Order->getOrders();
      $this->smarty->assign("orders",$orders["orders"]);
      $this->smarty->assign("customScripts", array('order'));
      $this->smarty->assign("customCSS", array('datatables'));
      $this->smarty->view('./order/order.tpl',$orders);
    }

    public function create()
    {
      $this->load->model('Model_Customer');
      $data["customers"] = $this->Model_Customer->getCustomerData();
      $this->load->model('Model_OrderStatus');
      $data["orderStatuses"] = $this->Model_OrderStatus->getStatusData();
      $this->smarty->assign("data",$data);
      $this->smarty->assign("customCSS", array('form'));
      $this->smarty->assign("customScripts", array('add_order'));
      $this->smarty->view('./order/add_order.tpl');
    }

    public function save()
    {
      $this->form_validation->set_rules('client_id', 'Dane Klienta', 'required');
      $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
      if ($this->form_validation->run())
      {
        $data=$this->input->post();
        $this->load->model('Model_Order');
        if ($this->Model_Order->saveOrder($data))
        {
          $this->session->set_flashdata('success','Zlecenie zostało utworzone.');
        }
        else
        {
          $this->session->set_flashdata('false','Nie udało się dodać klienta do bazy danych.');
        }
        redirect('order');
      }

      else
      {
        $this->session->set_flashdata('false','Wprowadzono nie poprawne dane klienta.');
      }
    }
    public function update($ordering_id)
    {
      $this->form_validation->set_rules('client_id', 'Dane Klienta', 'required');
      $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
      if ($this->form_validation->run())
      {
        $data=$this->input->post();
        $this->load->model('Model_Order');
        if ($this->Model_Order->updateOrder($ordering_id,$data))
        {
          $this->session->set_flashdata('success','Klient został zaktualizowany.');
        }
        else
        {
          $this->session->set_flashdata('false','Nie udało się zaktualizować klienta.');
        }
        redirect('order');
      }

      else
      {
        $this->session->set_flashdata('false','Wprowadzono nie poprawne dane klienta.');
      redirect('order');
      }
    }

    public function edit($ordering_id)
    {
      $this->load->model('Model_Customer');
      $data["customers"] = $this->Model_Customer->getCustomerData();
      $this->load->model('Model_OrderStatus');
      $data["orderStatuses"] = $this->Model_OrderStatus->getStatusData();
      $this->smarty->assign("data",$data);
      $this->load->model('Model_Order');
      $order = $this->Model_Order->getAllOrders($ordering_id);
      $this->smarty->assign("order",$order);
      $this->smarty->assign("customCSS", array('form'));
      $this->smarty->view('./order/update_order.tpl');
    }


    public function delete($ordering_id)
    {
      $this->load->model('Model_order');
      if ( $this->Model_order->deleteOrder($ordering_id) )
      {
        $this->session->set_flashdata('response','Dane zostały usunięte.');
      }
      else
      {
        $this->session->set_flashdata('response','Błąd usuwania danych.');

      }
      return redirect('order');
    }

    public function details($ordering_id)
    {
      $this->load->model('Model_Order');
      $details = $this->Model_Order->getDetail($ordering_id);
      $customer = $this->Model_Order->getCustomerByOrder($ordering_id);
      $totalOrderingPrice = $this->calculateTotalOrderingPrice($details);
      $this->smarty->assign("details",$details);
      $this->smarty->assign("customer",$customer);
      $this->smarty->assign("ordering_id",$ordering_id);
      $this->smarty->assign("totalOrderingPrice",$totalOrderingPrice);
      $this->smarty->assign("customCSS", array('ordering_product'));
      $this->smarty->assign("customScripts", array ('ordering_product'));
      $this->smarty->view('./ordering_product/ordering_product.tpl');
    }

    private function calculateTotalOrderingPrice($details)
    {
      $amount = 0;
      foreach($details as $detail)
      {
        $amount += $detail['price_ordering_product'];
      }
      return $amount;
    }
  }
?>

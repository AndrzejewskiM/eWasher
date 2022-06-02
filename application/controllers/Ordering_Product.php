<?php defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'core/BaseController.php');

  class Ordering_Product extends BaseController
  {
    public function __construct() {
       Parent::__construct('Ordering_Product');
   }
    public function getOrders()
    {
      // Pobranie Wszystkich Danych, pod koniec pracy zaktualizować tylko na te potrzebne!!
      $this->db->select("*");
      //$this->db->select("ordering.id_ordering,ordering.date_of_receipt,ordering.delivery_date,ordering.description,ordering.client_id,ordering.status_id");
      $this->db->from('ordering');
      $this->db->join('customer', 'ordering.client_id = customer.id_customer');
      $this->db->join('order_status', 'ordering.status_id = order_status.id_order_status');
      $this->db->from('product');
      $this->db->join('product', 'ordering_product.id_product = product.id_product');
      $query = $this->db->get();
      return $query->result_array();
    }

    public function create($id_ordering)
    {
      $this->load->model('Model_priceList');
      $data["priceLists"] = $this->Model_priceList->getPriceListData();
      $this->smarty->assign("data",$data);
      $this->smarty->assign("url",site_url());
      $this->smarty->assign("id_ordering",$id_ordering);
      $this->smarty->assign("customScripts", array('add_ordering_product'));
      $this->smarty->assign("customCSS", array('add_ordering_product'));
      $this->smarty->view('./ordering_product/add_ordering_product.tpl');
    }

    public function update($id_ordering)
    {
      $this->form_validation->set_rules('id_product', 'Dane Klienta', 'required');

      if ($this->form_validation->run())
      {
        $data=$this->input->post();
        $this->load->model('Model_Ordering_Product');
        if ($this->Model_Ordering_Product->updateOrdering_Product($id_ordering,$data))
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

    public function edit($id_ordering)
    {
      $this->load->model('Model_Ordering_Product');
      $customer = $this->Model_Ordering_Product->getAllOrdering_Product($id_ordering);
      $this->smarty->assign("customer",$customer);
      $this->smarty->assign("customScripts", array('add_ordering_product'));
      $this->smarty->assign("customCSS", array('add_ordering_product'));
      $this->smarty->view('./ordering_product/update_ordering_product.tpl');
    }

    public function save()
    {
      unset($_POST['frendzle']);
      $this->form_validation->set_rules('size_ordering_product', 'Wymiar Dywanu', 'required');
      $this->form_validation->set_rules('price_ordering_product', 'Dane Klienta', 'required');
      $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
      if ($this->form_validation->run())
      {
        $data=$this->input->post();
        $this->load->model('Model_Ordering_Product');
        if ($this->Model_Ordering_Product->saveOrdering_Product($data))
        {
          $this->session->set_flashdata('success','Dodano rekord do zlecenia.');
        }
        else
        {
          $this->session->set_flashdata('false','Nie udało się dodać rekordu.');
        }
        redirect('zamowienia/szczegoly/'.$data["id_ordering"]);
      }
    }

    public function delete($id_ordering)
    {
      $this->load->model('Model_Ordering_Product');
      if ( $this->Model_Ordering_Product->deleteOrdering_Product($id_ordering) )
      {
        $this->session->set_flashdata('response','Dane zostały usunięte.');
      }
      else
      {
        $this->session->set_flashdata('response','Błąd usuwania danych.');

      }
      return redirect('zamowienia/szczegoly/'.$id_ordering);
    }
  }
?>

<?php defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'core/BaseController.php');

  class priceList extends BaseController
  {
    public function __construct() {
    Parent::__construct('priceList');
  }

    public function index()
    {
      $this->load->model('Model_PriceList');
      $priceLists["priceLists"] = $this->Model_PriceList->getPriceList();
      $this->smarty->assign("priceLists",$priceLists["priceLists"]);
      $this->smarty->assign("customScripts", array('priceList'));
      $this->smarty->assign("customCSS", array('datatables'));
      $this->smarty->view('./priceList/priceList.tpl',$priceLists);
    }

    public function create()
    {
      $this->smarty->assign("customCSS", array('form'));
      $this->smarty->view('./priceList/add_priceList.tpl');
    }

    public function save()
    {
      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
      $this->load->helper('security');
      $this->form_validation->set_rules('name_product', 'Nazwa', 'required');
      $this->form_validation->set_rules('type_product', 'Typ', 'required');
      $this->form_validation->set_rules('price_for_meter', 'Cena za metr kwadratowy', 'required');
      if ($this->form_validation->run() == FALSE)
      {
        $this->smarty->assign("customCSS", array('form'));
        $this->smarty->view('./priceList/add_priceList.tpl');
        }
        else
        {
          $this->load->model('Model_PriceList');
          $data = array(
                   'name_product'    =>$this->input->post('name_product'),
                   'type_product'    =>$this->input->post('type_product'),
                   'price_for_meter'   =>$this->input->post('price_for_meter'),
                 );
          $result=$this->Model_PriceList->savePriceList($data);
        redirect('Cennik');
      }
    }
    public function update($product_id)
    {
      $this->form_validation->set_rules('name', 'Nazwa', 'required');
      $this->form_validation->set_rules('type', 'Typ', 'required');
      $this->form_validation->set_rules('price_for_meter', 'Cena za metr kwadratowy', 'required');
      $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
      if ($this->form_validation->run())
      {
        $data=$this->input->post();
        $this->load->model('Model_PriceList');
        if ($this->Model_PriceList->updatePriceList($product_id,$data))
        {
          $this->session->set_flashdata('success','Produkt został zaktualizowany.');
        }
        else
        {
          $this->session->set_flashdata('false','Nie udało się zaktualizować produktu.');
        }
        redirect('cennik');
      }

      else
      {
        $this->session->set_flashdata('false','Wprowadzono nie poprawne dane produktu.');
      redirect('Cennik');
      }
    }

    public function edit($product_id)
    {
      $this->load->model('Model_PriceList');
      $pricelist = $this->Model_PriceList->getAllPriceList($product_id);
      $this->smarty->assign("pricelist",$pricelist);
      $this->smarty->assign("customCSS", array('form'));
      $this->smarty->view('./priceList/update_priceList.tpl');
    }


    public function delete($product_id)
    {
      $this->load->model('Model_PriceList');
      if ( $this->Model_PriceList->deletePriceList($product_id) )
      {
        $this->session->set_flashdata('success','Dane zostały usunięte.');
      }
      else
      {
        $this->session->set_flashdata('false','Błąd usuwania danych.');

      }
      return redirect('Cennik');
    }

    public function getDywany() {
      $this->load->model('Model_Product');
      echo json_encode($this->Model_Product->getDywany());
    }
  }
?>

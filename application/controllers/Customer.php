<?php defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'core/BaseController.php');

  class Customer extends BaseController
  {
    function __construct() {
      parent::__construct('Customer');
    }

    public function index()
    {
      $this->load->model('Model_Customer');
      $records["records"] = $this->Model_Customer->getCustomers();
      $this->smarty->assign("records",$records["records"]);
      $this->smarty->assign("customScripts", array('customer'));
      $this->smarty->assign("customCSS", array('datatables'));
      $this->smarty->view('./customer/customer.tpl',$records);
    }

    public function create()
    {
      $this->smarty->assign("customCSS", array('add_customer'));
      $this->smarty->view('./customer/add_customer.tpl');
    }

    public function save()
    {
      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
      $this->form_validation->set_rules('name_customer', 'Imie', 'required',
      array('required'=>'Wypełnij pole "Imie"'));
      $this->form_validation->set_rules('surname_customer', 'Nazwisko', 'required',
      array('required'=>'Wypełnij pole "Nazwisko"'));
      $this->form_validation->set_rules('phone_customer', 'Telefon', 'required',
      array('required'=>'Wypełnij pole "Telefon"'));
      $this->form_validation->set_rules('street_customer', 'Ulica', 'required',
      array('required'=>'Wypełnij pole "Ulica"'));
      $this->form_validation->set_rules('city_customer', 'Miasto', 'required',
      array('required'=>'Wypełnij pole "Miasto"'));
      $this->form_validation->set_rules('post_code_customer', 'Kod Pocztowy', 'required',
      array('required'=>'Wypełnij pole "Kod-Pocztowy"'));
      $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
      if ($this->form_validation->run() == FALSE)
      {
        $this->smarty->assign("customCSS", array('add_customer'));
        $this->smarty->view('./customer/add_customer.tpl');
      }
        else
        {
          $this->load->model('Model_Customer');
          $data = array(
                   'name_customer'    =>$this->input->post('name_customer'),
                   'surname_customer'    =>$this->input->post('surname_customer'),
                   'phone_customer'   =>$this->input->post('phone_customer'),
                   'street_customer'  =>$this->input->post('street_customer'),
                   'city_customer'    =>$this->input->post('city_customer'),
                   'post_code_customer' => $this->input->post('post_code_customer')
                 );
          $result=$this->Model_Customer->saveCustomer($data);
          redirect('klienci');
        }

    }
    public function update($customer_id)
    {
      $this->form_validation->set_rules('name_customer', 'Imie', 'required');
      $this->form_validation->set_rules('surname_customer', 'Nazwisko', 'required');
      $this->form_validation->set_rules('phone_customer', 'Telefon', 'required');
      $this->form_validation->set_rules('street_customer', 'Ulica', 'required');
      $this->form_validation->set_rules('city_customer', 'Miasto', 'required');
      $this->form_validation->set_rules('post_code_customer', 'Kod Pocztowy', 'required');
      $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
      if ($this->form_validation->run())
      {
        $data=$this->input->post();
        $this->load->model('Model_Customer');
        if ($this->Model_Customer->updateCustomer($customer_id,$data))
        {
          $this->session->set_flashdata('success','Klient został zaktualizowany.');
        }
        else
        {
          $this->session->set_flashdata('false','Nie udało się zaktualizować klienta.');
        }
        redirect('customer');
      }

      else
      {
        $this->session->set_flashdata('false','Wprowadzono nie poprawne dane klienta.');
      redirect();
      }
    }

    public function edit($customer_id)
    {
      $this->load->model('Model_Customer');
      $customer = $this->Model_Customer->getAllCustomers($customer_id);
      $this->smarty->assign("customer",$customer);
      $this->smarty->assign("customCSS", array('form'));
      $this->smarty->view('./customer/update_customer.tpl');
    }


    public function delete($customer_id)
    {
      $this->load->model('Model_Customer');
      if ( $this->Model_Customer->deleteCustomer($customer_id) )
      {
        $this->session->set_flashdata('response','Dane zostały usunięte.');
      }
      else
      {
        $this->session->set_flashdata('response','Błąd usuwania danych.');

      }
      return redirect('klienci');
    }
  }
?>

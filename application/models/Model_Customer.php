<?php
  class Model_Customer extends CI_Model
  {
    function __construct()
   {
       // Call the Model constructor
       parent::__construct();
       if(!$this->session->userdata('Login'))
       return redirect('Login');
   }

    public function getCustomers()
    {
      /*
      $query = $this->db->get('customer');
      return $query->result_array();
      */
      $query = $this->db->query("select *, COUNT(ordering.id_ordering)as ilosc from customer
       left join ordering on ordering.client_id=customer.id_customer
       group by customer.id_customer");
      return $query->result_array();

    }

    public function getAllCustomers($customer_id)
    {
      $query = $this->db->get_where('customer', array('id_customer' => $customer_id));
      return $query->row_array();
    }

    public function getAllIndexedById()
    {
      $query = $this->db->get('customer');
      $data = [];
      foreach ($query->result_array() as $row) {
        $data[$row['id_customer']] = $row;
      }
      return $data;
    }

    public function getCustomerData()
    {
      $data = $this->getCustomers();
      $customers = array();
      foreach($data as $customer) {
        $customers[$customer['id_customer']] = $customer['name_customer'].' '.$customer['surname_customer']. '   tel.(' .$customer['phone_customer']. ')';
      }
      return $customers;
    }

    public function saveCustomer($data)
    {
      return $this->db->insert('customer',$data);
    }

    public function updateCustomer($customer_id, $data)
    {
      return $this->db->where('id_customer',$customer_id)->update('customer',$data);
    }


    public function deleteCustomer ($customer_id)
    {
      return $this->db->delete('customer', array('id_customer' => $customer_id));   }
  }

  /*public function disableButton ()
  {
    $customer = $this->getCustomers();
    $query = $this->db->get('ordering')->result_array();
    $data= array();

    foreach ($customer as $data)
    {
      if($data['id_customer'])
    }



  }*/


  ?>

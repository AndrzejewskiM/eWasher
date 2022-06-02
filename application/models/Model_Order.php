<?php
  class Model_Order extends CI_Model
  {
    function __construct()
   {
       // Call the Model constructor
       parent::__construct();
       if(!$this->session->userdata('Login'))
       return redirect('login');
   }

    public function getOrders()
    {
      // Pobranie Wszystkich Danych, pod koniec pracy zaktualizować tylko na te potrzebne!!
      /*$this->db->select("*");
      //$this->db->select("ordering.id_ordering,ordering.date_of_receipt,ordering.delivery_date,ordering.description,ordering.client_id,ordering.status_id");
      $this->db->from('ordering');
      $this->db->join('customer', 'ordering.client_id = customer.id_customer');
      $this->db->join('order_status', 'ordering.status_id = order_status.id_order_status');
      $query = $this->db->get();*/

      $query = $this->db->query("select ordering.*, customer.*, order_status.*, COUNT(ordering_product.id_ordering_product) as ilosc from ordering
      left join ordering_product on ordering_product.id_ordering=ordering.id_ordering
      left join customer on ordering.client_id = customer.id_customer
      left join order_status on ordering.status_id = order_status.id_order_status
      group by ordering.id_ordering");
      return $query->result_array();
    }

    public function getAllOrders($ordering_id)
    {
      $query = $this->db->get_where('ordering', array('id_ordering' => $ordering_id));
      return $query->row_array();
    }



    public function saveOrder($data)
    {
      $data['number_ordering'] = $this->createNumber($data['creation_date']);
      return $this->db->insert('ordering',$data);
    }

    public function updateOrder($ordering_id, $data)
    {
      return $this->db->where('id_ordering',$ordering_id)->update('ordering',$data);
    }


    public function deleteOrder ($ordering_id)
    {
      return $this->db->delete('ordering', array('id_ordering' => $ordering_id));
    }

    public function getDetail($ordering_id)
    {

      $this->db->select("*");
      $this->db->from('ordering_product');
      $this->db->join('ordering', 'ordering_product.id_ordering = ordering.id_ordering');
      $this->db->join('product', 'ordering_product.id_product = product.id_product');
      $this->db->where('ordering_product.id_ordering', $ordering_id);

      return $this->db->get()->result_array();
    }

    public function getNotifications()
    {
      $query = $this->db->query("select * from ordering where date_of_receipt = date(now())");
      return $query->result_array();
    }

    public function getCustomerByOrder($ordering_id)
    {
      $this->db->select("*");
      $this->db->from('ordering');
      $this->db->join('customer', 'ordering.client_id = customer.id_customer');
      $this->db->where('ordering.id_ordering', $ordering_id);

      return $this->db->get()->row_array();
    }

    public function createNumber($date)
    {
      //Pobranie ostatniego zamowienia
      $this->db->select("number_ordering");
      $this->db->from('ordering');
      $this->db->order_by("id_ordering","desc");
      $this->db->limit(1);
      $query = $this->db->get();
      //Pobranie ostatniego numeru zamowienia
      $last=($query->result_array())[0]['number_ordering'];
      //pobranie daty z serwera
      $new = date('Y/m', strtotime($date));
      //jeśli miesiąc daty jest taki sam jak zamowienia
      if(substr($last,0,7)==$new)
      {

        $new.='/'.( (substr($last,8)) + 1 );
      }
      //jeśli miesiąc jest inny
      else
        {
          $new.='/1';
        }
        return $new;


    }


  }
  ?>

<?php
  class Model_OrderStatus extends CI_Model
  {
    function __construct()
   {
       // Call the Model constructor
       parent::__construct();
       if(!$this->session->userdata('Login'))
       return redirect('login');
   }

    public function getOrderStatuses()
    {
      $query = $this->db->get('order_status');
      return $query->result_array();
    }

    public function getAllOrderStatuses($order_status_id)
    {
      $query = $this->db->get_where('order_status', array('id_order_status' => $order_status_id));
      return $query->row_array();
    }

    public function getStatusData()
    {
      $data = $this->getOrderStatuses();
      $orderstatuses = array();
      foreach($data as $status) {
        $orderstatuses[$status['id_order_status']] = $status['name_order_status'];
      }
      return $orderstatuses;
    }


    public function saveOrderStatus($data)
    {
      return $this->db->insert('order_status',$data);
    }

    public function updateOrderStatus($order_status_id, $data)
    {
      return $this->db->where('id_order_status',$order_status_id)->update('order_status',$data);
    }


    public function deleteOrderStatus ($order_status_id)
    {
      return $this->db->delete('order_status', array('id_order_status' => $order_status_id));   }
  }
  ?>

<?php
  class Model_PriceList extends CI_Model
  {
    function __construct()
   {
       // Call the Model constructor
       parent::__construct();
       if(!$this->session->userdata('Login'))
       return redirect('login');
   }

    public function getPriceList()
    {
      $query = $this->db->get('product');
      return $query->result_array();
    }

    public function getAllPriceList($product_id)
    {
      $query = $this->db->get_where('product', array('id_product' => $product_id));
      return $query->row_array();
    }



    public function savePriceList($data)
    {
      return $this->db->insert('product',$data);
    }

    public function updatePriceList($product_id, $data)
    {
      return $this->db->where('id_product',$product_id)->update('product',$data);
    }

    public function deletePriceList ($product_id)
    {
      return $this->db->delete('product', array('id_product' => $product_id));
    }

    public function getPriceListData()
    {
      $data = $this->getPriceList();
      $priceLists = array();
      foreach($data as $priceList) {
        $priceLists[$priceList['id_product']] = $priceList;
        // $priceLists[$priceList['id_product']] = $priceList['name_product'];
      }
      return $priceLists;
    }
  }
  ?>

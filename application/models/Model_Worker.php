<?php
  class Model_Worker extends CI_Model
  {
    function __construct()
   {
       // Call the Model constructor
       parent::__construct();
   }

   public function hasPermission($id, $controller, $action=null) {
    $data =  $this->db->query("call perm_for_user($id)");
    mysqli_next_result( $this->db->conn_id );
    $data = $data->result_array();
      foreach ($data as $key => $value) {
       if (
         isset($value['action'])
         && strtolower($value["perm"]) == strtolower($controller)
         && strtolower($value["action"]) == strtolower($action)
       ) {
          return true;
       } elseif (
         !isset($action)
         && strtolower($value["perm"]) == strtolower($controller)
       ) {
         return true;
       }
     }
     return false;
   }

   public function getWorkers()
   {
     $this->db->select("*");
     //$this->db->select("ordering.id_ordering,ordering.date_of_receipt,ordering.delivery_date,ordering.description,ordering.client_id,ordering.status_id");
     $this->db->from('worker');
     $this->db->join('roles', 'worker.id_role = roles.id_roles');
     $query = $this->db->get();
     return $query->result_array();
   }

   public function getAllWorkers($worker_id)
   {
     $query = $this->db->get_where('worker', array('id_worker' => $worker_id));
     return $query->row_array();
   }

   public function saveWorker($data)
   {
     return $this->db->insert('worker',$data);
   }

   public function get_personal_details($id_worker)
   {
     // $query=$this->db->get_where('worker', array('id_worker'=>$id_worker), $name_worker, $surname_worker);
     $query=$this->db->query('Select name_worker,surname_worker FROM worker  where id_worker='.$id_worker);
     return $query->row_array();
   }

   public function updateWorker($worker_id, $data)
   {
     return $this->db->where('id_worker',$worker_id)->update('worker',$data);
   }

   public function updateWorkerPassword($worker_id, $data)
   {
     return $this->db->where('id_worker',$worker_id)->update('worker',$data);
   }

   public function changeStatus($id_worker)
   {
     $query = $this->db->get_where('worker', array('id_worker' => $id_worker));
     $worker = $query->row_array();
      $status;
      if($worker['is_Active'] == true) {
        $status = false;
      }
      else {
        $status = true;
      }
      $this->db->set('is_Active', $status);
      $this->db->where('id_worker', $id_worker);
      $this->db->update('worker');
   }


   public function deleteWorker ($worker_id)
   {
     return $this->db->delete('worker', array('id_worker' => $worker_id));   }
 }


?>

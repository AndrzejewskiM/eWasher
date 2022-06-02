<?php

class Model_Calendar extends CI_Model
{

  public function get_events($start_calendar, $end_calendar)
  {
      return $this->db->where("start_calendar >=", $start_calendar)->where("end_calendar <=", $end_calendar)->get("calendar_events");
  }

  public function add_event($data)
  {
      $this->db->insert("calendar_events", $data);
  }

  public function get_event($id_calendar)
  {
      return $this->db->where("id_calendar", $id_calendar)->get("calendar_events");
  }

  public function update_event($id_calendar, $data)
  {
      $this->db->where("id_calendar", $id_calendar)->update("calendar_events", $data);
  }

  public function delete_event($id)
  {
      $this->db->where("id_calendar", $id)->delete("calendar_events");
  }

}

?>

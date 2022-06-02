<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once(APPPATH.'core/BaseController.php');

class Calendar extends BaseController
{

     public function __construct() {
        Parent::__construct('Calendar');
        $this->load->model('Model_Calendar');
    }

     public function index()
     {
          $this->load->model('Model_Calendar');
          $this->smarty->assign("base_url",site_url());
          $this->smarty->view('./calendar/calendar.tpl');
     }

     public function get_events()
{

    $this->load->model('Model_Worker');

    // Our Start and End Dates
    $start = $this->input->get("start");
    $end = $this->input->get("end");

    $startdt = new DateTime('now'); // setup a local datetime
    $startdt->setTimestamp($start); // Set the date based on timestamp
    $start_format = $startdt->format('Y-m-d H:i:s');

    $enddt = new DateTime('now'); // setup a local datetime
    $enddt->setTimestamp($end); // Set the date based on timestamp
    $end_format = $enddt->format('Y-m-d H:i:s');

    $events = $this->Model_Calendar->get_events($start_format, $end_format);

    $data_events = array();

    foreach($events->result() as $r) {

        $data_events[] = array(
            "id" => $r->id_calendar,
            "title" => $r->title_calendar,
            "description" => $r->description_calendar,
            "end" => $r->end_calendar,
            "start" => $r->start_calendar,
            "color" => $r->color_calendar,
            "worker" => $this->Model_Worker->get_personal_details($r->id_worker_calendar)
        );
    }

    echo json_encode(array("events" => $data_events));
    exit();
}

public function add_event()
{
    /* Our calendar data */
    $name = $this->input->post("name", TRUE);
    $desc = $this->input->post("description", TRUE);
    $start_date = $this->input->post("start_date", TRUE);
    $end_date = $this->input->post("end_date", TRUE);
    $color = $this->input->post("color");
    $id = $this->session->userdata('id');

    if(!empty($start_date)) {
       $sd = DateTime::createFromFormat("Y-m-d H:i", $start_date);
       $start_date = $sd->format('Y-m-d H:i:s');
       $start_date_timestamp = $sd->getTimestamp();
    } else {
       $start_date = date("Y-m-d H:i:s", time());
       $start_date_timestamp = time();
    }

    if(!empty($end_date)) {
       $ed = DateTime::createFromFormat("Y-m-d H:i", $end_date);
       $end_date = $ed->format('Y-m-d H:i:s');
       $end_date_timestamp = $ed->getTimestamp();
    } else {
       $end_date = date("Y-m-d H:i:s", time());
       $end_date_timestamp = time();
    }

    $this->Model_Calendar->add_event(array(
       "title_calendar" => $name,
       "description_calendar" => $desc,
       "start_calendar" => $start_date,
       "end_calendar" => $end_date,
       "color_calendar" => $color,
       "id_worker_calendar" => $id
       )
    );

    redirect(site_url("calendar"));
}

public function edit_event()
   {
       $eventid = intval($this->input->post("eventid"));
       $event = $this->Model_Calendar->get_event($eventid);
       if($event->num_rows() == 0) {
           echo"Invalid Event";
           exit();
       }

       $event->row();

       /* Our calendar data */
       $name = $this->input->post("name");
       $desc = $this->input->post("description");
       $start_date = $this->input->post("start_date");
       $end_date = $this->input->post("end_date");
       $delete = $this->input->post("delete");

       if(!$delete) {

           if(!empty($start_date)) {
               $sd = DateTime::createFromFormat("Y-m-d H:i", $start_date);
               $start_date = $sd->format('Y-m-d H:i:s');
               $start_date_timestamp = $sd->getTimestamp();
           } else {
               $start_date = date("Y-m-d H:i:s", time());
               $start_date_timestamp = time();
           }

           if(!empty($end_date)) {
               $ed = DateTime::createFromFormat("Y-m-d H:i", $end_date);
               $end_date = $ed->format('Y-m-d H:i:s');
               $end_date_timestamp = $ed->getTimestamp();
           } else {
               $end_date = date("Y-m-d H:i:s", time());
               $end_date_timestamp = time();
           }

           $this->Model_Calendar->update_event($eventid, array(
               "title_calendar" => $name,
               "description_calendar" => $desc,
               "start_calendar" => $start_date,
               "end_calendar" => $end_date,
               )
           );

       } else {
           $this->Model_Calendar->delete_event($eventid);
       }

       redirect(site_url("calendar"));
   }

}

?>

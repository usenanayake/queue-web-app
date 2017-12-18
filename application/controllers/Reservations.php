<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservations extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Queue_model');
    }

    public function index()
    {
        $this->load->view('reservations');
    }

    // Get doctors who has queues in the day
    public function get_day_doctors()
    {
        $list = $this->Queue_model->get_day_doctors($_POST['date']);

        // Output to json format
        echo json_encode($list);
    }

    // Get queues of days and doctors
    public function get_day_doctor_queues()
    {
        $list = $this->Queue_model->get_day_doctor_queues($_POST['date'], $_POST['doctor_id']);

        // Output to json format
        echo json_encode($list);
    }
}
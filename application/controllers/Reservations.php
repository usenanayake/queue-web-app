<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservations extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Queue_model');
        $this->load->helper(array('form'));
        $this->load->library(array('form_validation'));
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

    // Get queue details
    public function get_queue()
    {
        $list = $this->Queue_model->get_queue($_POST['queue_id']);

        // Output to json format
        echo json_encode($list);
    }

    // Update queue current no.
    public function update_queue_current_no()
    {
        $this->Queue_model->update_queue_current_no($_POST['queueSelect'], $_POST['currentNo']);
        redirect('Reservations');
    }
}
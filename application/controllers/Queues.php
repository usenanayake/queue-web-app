<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Queues extends CI_Controller
{
    var $emp_id = null;

    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->model('Queue_model');
    }

    public function index()
    {
        $this->load->view('queues');
    }

    public function get_queue_list_ajax()
    {
        $list = $this->Queue_model->get_datatables();
        $data = array();
        foreach ($list as $queue) {
            $row = array();
            $row[] = $queue->first_name . ' ' . $queue->last_name;
            $row[] = $queue->current_no;
            $row[] = $queue->start_time;
            $row[] = $queue->end_time;
            $row[] = $queue->average_time;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Queue_model->count_all(),
            "recordsFiltered" => $this->Queue_model->count_filtered(),
            "data" => $data,
        );

        // Output to json format
        echo json_encode($output);
    }

    public function add_queue()
    {
        // Set validation rules
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('doctor', 'Doctor', 'trim|required|numeric');
        $this->form_validation->set_rules('startTime', 'Start time', 'required');
        $this->form_validation->set_rules('endTime', 'End time', 'required');
        $this->form_validation->set_rules('averageTime', 'Average time', 'trim|required|numeric');

        // Validate form input
        if ($this->form_validation->run() == FALSE) // if(FALSE)
        {
            $this->load->view('queues');
        } else {
            // Insert the user registration details into database
            $data = array(
                'date' => $this->input->post('date'),
                'employee_id' => $this->input->post('doctor'),
                'start_time' => $this->input->post('startTime'),
                'end_time' => $this->input->post('endTime'),
                'average_time' => $this->input->post('averageTime'),
                'active' => $this->input->post('gender')
            );

            // Insert form data into database
            if ($this->Queue_model->add_queue($data)) {
                $this->session->set_flashdata('queue_add_msg', '<div class="alert alert-success text-center">Queue successfully added!</div>');
                redirect('Queues/index');
            } else {
                // Error
                $this->session->set_flashdata('queue_add_msg', '<div class="alert alert-danger text-center">Ops! Something bad happened when adding the queue. Please try again!</div>');
                redirect('Queues/index');
            }
        }
    }
}
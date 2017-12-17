<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Queues extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

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
            $row[] = $queue->current_no;
            $row[] = $queue->start;
            $row[] = $queue->end;
            $row[] = $queue->average_time;
            $row[] = $queue->active;

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
}
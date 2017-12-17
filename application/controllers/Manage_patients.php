<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_patients extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Patient_model');
    }

    public function index()
    {
        $this->load->view('manage_patients');
    }

    public function get_patient_list_ajax()
    {
        $list = $this->Patient_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $patient) {
            $no++;
            $row = array();
            // $row[] = $no;
            $row[] = $patient->first_name;
            $row[] = $patient->last_name;
            $row[] = $patient->email;
            $row[] = $patient->nic;
            $row[] = $patient->telephone;

            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Patient_model->count_all(),
                        "recordsFiltered" => $this->Patient_model->count_filtered(),
                        "data" => $data,
                );

        // Output to json format
        echo json_encode($output);
    }
}
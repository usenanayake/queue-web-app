<?php

class Queue_model extends CI_Model
{
    var $column_search = array('date', 'employee_id'); // Set column field database for datatable searchable

    // Insert into user table
    function add_queue($data)
    {
        $queue_array = array(
            'date' => $data['date'],
            'employee_id' => $data['employee_id'],
            'start_time' => $data['start_time'],
            'end_time' => $data['end_time'],
            'average_time' => $data['average_time']
        );
        return $this->db->insert('queue', $queue_array);
    }

    private function _get_datatables_query()
    {
        $this->db->select('*');
        $this->db->from('queue');
        $this->db->join('employee', 'queue.employee_id = employee.id');

        $i = 0;

        foreach ($this->column_search as $item) // Loop column 
        {
            if (isset($_POST['search']['value'])) // If datatable send POST for search
            {
                if ($i === 0) // First loop
                {
                    $this->db->group_start(); // Open bracket
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) // Last loop
                {
                    $this->db->group_end(); // Close bracket                    
                }
            }
            $i++;
        }

        if (isset($_POST['order'])) // Order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $order = array('queue.id' => 'asc'); // Default order
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from('queue');
        return $this->db->count_all_results();
    }

    // Get doctors who has queues in the day
    public function get_day_doctors($date)
    {
        $this->db->select('employee.id, first_name, last_name');
        $this->db->from('employee');
        $this->db->join('queue', "employee.id = queue.employee_id");
        $this->db->where('queue.date', $date);
        $this->db->group_by("employee.id");

        // Retrieve rows
        $query = $this->db->get();
        return $query->result();
    }

    // Get queues of days and doctors
    public function get_day_doctor_queues($date, $doctor_id)
    {
        $this->db->select('*');
        $this->db->from('queue');
        $this->db->where('queue.date', $date);
        $this->db->where('queue.employee_id', $doctor_id);

        // Retrieve rows
        $query = $this->db->get();
        return $query->result();
    }

    // Get queue details
    public function get_queue($queue_id)
    {
        $this->db->select('*');
        $this->db->from('queue');
        $this->db->where('queue.id', $queue_id);

        // Retrieve rows
        $query = $this->db->get();
        return $query->result();
    }

    // Update queue current no.
    public function update_queue_current_no($queue_id, $current_no)
    {
        $data = array(
            'current_no' => $current_no
        );

        $this->db->where('id', $queue_id);
        $this->db->update('queue', $data);
    }
}
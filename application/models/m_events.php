<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Mohammad Khalid Hussain <mohammad.khalid.hussain@gmail.com>
 * @since 12/08/2015
 */
class M_events extends CI_Model {

    public $name;
    public $date;
    public $time;
    public $location;

    public function __contruct()
    {
        parent::__construct();
    }

    public function get_event($id = FALSE)
    {
        // we get the id from method params, no need to use ->post()
        // $id = $this->input->post('id');
        $query = $this->db->get_where('events', array('id' => $id));
        return $query->row();
    }

    public function get_events()
    {
        $query = $this->db->get('events');
        return $query->result();
    }

    public function insert()
    {
        $this->name = $this->input->post('name'); // similar to $_POST['name'];
        $this->date = $this->input->post('date');
        $this->time = $this->input->post('time');
        $this->location = $this->input->post('location');

        $this->db->insert('events', $this);
    }

    public function update()
    {
        $this->name = $this->input->post('name'); // similar to $_POST['name'];
        $this->date = $this->input->post('date');
        $this->time = $this->input->post('time');
        $this->location = $this->input->post('location');

        $this->db->update('events', $this, array('id' => $this->input->post('id')));
    }

    public function delete($id = FALSE)
    {
        $this->db->delete('events', array('id' => $id));
    }

}

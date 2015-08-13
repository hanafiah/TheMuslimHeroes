<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Mohammad Khalid Hussain <mohammad.khalid.hussain@gmail.com>
 * @since 12/08/2015
 */

class Events extends CI_Controller {
	public $view_data;
	
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_events');
    }
	
    public function index()
    {
        $this->view_data['events'] = $this->m_events->get_events();
        $this->load->view('v_index', $this->view_data);
    }
	
    public function new_event()
    {
        if (isset($_POST['btnAdd'])) {
            $this->m_events->insert();
            redirect('events');
        }
        $this->load->view('v_new_event', $this->view_data);
    }
	
    public function edit($id=FALSE)
    {
        if (isset($_POST['btnEdit'])) {
            $this->m_events->update();
            redirect('events');
        }
        
        $this->view_data['event'] = $this->m_events->get_event($id);
        $this->load->view('v_edit_event', $this->view_data);
    }
    
    public function delete($id = FALSE)
    {
        $this->m_events->delete($id);
        redirect('events');
    }
}
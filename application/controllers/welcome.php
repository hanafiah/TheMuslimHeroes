<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Mohammad Khalid Hussain <mohammad.khalid.hussain@gmail.com>
 * @since 12/08/2015
 */

class Welcome extends CI_Controller {
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
	
	public function home(){		
		$data['title'] = 'The Muslim Heroes'; // $title
		$data['page_header'] = 'The Muslim Heroes';
	}
}

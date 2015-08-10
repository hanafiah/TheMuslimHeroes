<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Mohammad Khalid Hussain <mohammad.khalid.hussain@gmail.com>
 * @since 10/08/2015
 */

class C_Login extends CI_Controller {
	public function index() {
		$this->load->view('v_login');
	}
}
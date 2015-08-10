<?php

class M_users extends CI_Model {
	function __construct() {
		parent::__construct(); // Call the model constructor
	}
	
	function getFirstName() {
		$query = $this->db->query('SELECT firstname FROM users'); // returns an object when read type queries are run
		
		if ($query->num_rows() > 0) { // returns true if more than one row found
			return $query->result(); // returns an array of objects
		}
		else {
			return NULL;
		}
	}
	
	function getUsers() {
		$query = $this->db->query('SELECT * FROM users');
		
		if($query->num_rows() > 0) { // returns true if more than one row found
			return $query->result(); // returns an array of objects
		}
		else {
			return NULL;
		}
	}
}
<?php

class Mdl_contacts extends CI_Model{

	//code for adding records
	function addnewcontact($data) {
		$this->db->insert('tblcontacts', $data);
	}

	//populate data from the tables

	function getallContacts(){
		$q = $this->db->get('tblcontacts');
		return $q->result();
	}
} 
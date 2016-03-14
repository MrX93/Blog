<?php

class Uloga_model extends CI_Model {

	public $id;
	public $naziv;

	function __construct() {
		parent::__construct();
		$this->load->database(); //inicijalizuje konekciju sa bazom
	}

	function unesi() {
		$podaci = array(
				'naziv' => $this->naziv
		);
		$this->db->insert('uloga', $podaci);
	}

	function izmeni() {
		$podaci = array('naziv' => $this->naziv);
		$this->db->where('iduloga', $this->id);
		$this->db->update('uloga', $podaci);
	}

	function obrisi() {
		$this->db->where('iduloga', $this->id);
		$this->db->delete('uloga');
	}

	function lista() {
		return $this->db->get('uloga');
	}

	function podaci() {
		$this->db->where('iduloga', $this->id);
		return $this->db->get('uloga')->result();
	}

}

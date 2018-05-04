<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class RegistratieGids_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
		public function nieuwe_gids() {

	    $salt = '5&JDDlwz%Rwh!t2Yg-Igae@QxPzFTSId';

		$data=array(
			'naam'=>$this->input->post('naam'),
			'voornaam'=>$this->input->post('voornaam'),
			'email'=>$this->input->post('email'),
			'gebruikersnaam'=>$this->input->post('gebruikersnaam'),
			'wachtwoord'=>md5($salt.$this->input->post('wachtwoord')),
			'opleiding'=>$this->input->post('opleiding'),
			'school'=>$this->input->post('school')
		);

		$this->db->insert('tbl_student',$data);
		return true;

		}
}
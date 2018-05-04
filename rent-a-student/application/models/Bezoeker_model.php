<?php 

class Bezoeker_model extends CI_Model {

public $gek_datum;
	  
	public function get_all_dates($gek_datum){

	$dates = $this->db->query("SELECT * FROM
	tbl_student e
	JOIN
	tbl_student_beschikbare_data r ON e.student_id = r.student_id
	JOIN
	tbl_beschikbare_data d ON r.bd_id = d.bd_id
	WHERE datum_tijd = '".$gek_datum."'");
	
	return $dates->result_array();

	}

	public function createBezoekerInDatabase($id, $firstname, $lastname, $email){

		//is id al in DB?
		//if ($val->num_rows()>0) {
		$sql = "SELECT * FROM tbl_bezoeker WHERE `fb_id` = '" . $id . "'";
		$val = $this->db->query($sql);

		//ja: user niet opnieuw aanmaken
		if ($val->num_rows()>0) {
			//print_r("geen user aanmaken");
		} else {
		//nee: user aanmaken: id = bezoeker_id, voornaam, achternaam, email
		$this->db->query("INSERT INTO tbl_bezoeker (fb_id,voornaam,naam,email)
						  VALUES ('".$id."','".$firstname."','".$lastname."','".$email."');");
		}
	}
	
}


?>
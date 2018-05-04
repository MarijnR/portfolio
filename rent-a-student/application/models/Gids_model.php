<?php 

class Gids_model extends CI_Model {

public $datum_tijd;
    
    public function save($datum_tijd) {
        $this->db->query("SET @student_id = ".$_SESSION["id"].";");
        $this->db->query("INSERT IGNORE INTO tbl_beschikbare_data (datum_tijd) VALUES ('".$datum_tijd."');");
        $this->db->query("SET @bd_id = LAST_INSERT_ID();");
        $this->db->query("INSERT INTO tbl_student_beschikbare_data (student_id,bd_id) VALUES(@student_id, @bd_id);");
    }

    public function get_all() {

    	$tweets = $this->db->query("SELECT * FROM tbl_student e JOIN tbl_student_beschikbare_data r ON e.student_id = r.student_id JOIN tbl_beschikbare_data d ON r.bd_id = d.bd_id WHERE e.student_id = ".$_SESSION["id"].";");

    	return $tweets->result_array();

    }

    public function deleteDate($bd_id){
        
        $this->db->query("DELETE FROM `tbl_student_beschikbare_data` WHERE bd_id ='".$bd_id."';");

        $this->db->query("DELETE FROM `tbl_beschikbare_data` WHERE bd_id ='".$bd_id."'; ");


    }

    public function get_profile(){
        $profile = $this->db->get_where('tbl_student', array('student_id' => $_SESSION["id"]));
        return $profile->result_array();
    }

    public function update_profile($id, $voornaam, $naam, $email, $wachtwoord, $opleiding, $school, $over, $image, $gebruikersnaam){

        $student_data = array(
            'student_id' => $id,
            'voornaam' => $voornaam,
            'naam' => $naam,
            'email' => $email,
            'wachtwoord' => $wachtwoord,
            'opleiding' => $opleiding,
            'school' => $school,
            'over' => $over,
            'image' => $image,
            'gebruikersnaam' => $gebruikersnaam
        );


        $this->db->where('student_id',  $id);
        $this->db->update('tbl_student', $student_data);
    }

 
	
}

?>
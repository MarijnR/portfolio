<?php 

class Dashboard_model extends CI_Model {

    public $password;
    public $username;
    public $admin_id;

    public function getAdminList(){
    	/*$admin = $this->db->query("SELECT naam from tbl_admin");
    	return $admin->result_array();*/

        $admin = $this->db->get("tbl_admin");
        return $admin->result_array();
    }

    /*public function getAdminIDList(){
        $admin = $this->db->query("SELECT naam from tbl_admin");
        return $admin->result_array();
    }*/

    public function createAdmin($us,$pw){
    	$this->db->query("INSERT INTO tbl_admin (naam,wachtwoord)
						  VALUES ('".$us."','".$pw."');");
    	//$this->db->insert('tbl_admin_users',$us,$pw);
    }

    public function deleteAdmin($id){
        $this->db->query("DELETE from tbl_admin where admin_id='".$id."';");
    }

    public function getAantalBezoekers()
    {
        $bezoeker = $this->db->get("tbl_bezoeker");

        $result = count($bezoeker->result_array());
        return $result;
    }

    public function getAantalBoekingen()
    {
        $boeking = $this->db->get("tbl_boekingen");
        $result = count($boeking->result_array());
        return $result;
    }
	
}

?>
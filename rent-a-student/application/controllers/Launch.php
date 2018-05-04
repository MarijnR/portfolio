<?php
class Launch extends CI_Controller {

		public function __construct() {
	        parent::__construct();
	        $this->load->library('form_validation');
	        //https://github.com/bcit-ci/CodeIgniter/issues/3073
	        //https://ellislab.com/codeigniter/user-guide/libraries/sessions.html
    	}

        public function index()
        {
        		$this->load->helper('url');
                //$this->load->view('Homepage/launch');

             if ($this->session->userdata('is_gids_login')) {
                 	redirect('Gids/datum'); 
	             } else {
	             //nee: log in op view admin

	             	include('Facebook.include.php');

	                $this->load->view('Homepage/launch',$data);
	             }  
        }

        public function do_login() {
	        //log een admin in
	        if ($this->session->userdata('is_gids_login')) {
	            redirect('Gids/datum'); 
	        } else {
	            $user = $_POST['gebruikersnaam'];
	            $password = $_POST['wachtwoord'];

	            //validatie velden
	            $this->form_validation->set_rules('gebruikersnaam', 'Username', 'required');
	            $this->form_validation->set_rules('wachtwoord', 'Password', 'required');

	            //als faalt, reload
	            //ff op oude salt + m5 manier inloggen
	            //pdo doet moeilijk
	            if ($this->form_validation->run() == FALSE) {
	                //dit is dan voor bezoekers
					include('Facebook.include.php');

			        //err
			        $err['error'] = '<strong>Access Denied</strong> Enter Username and Password.';

	                $load = $data + $err;
	                $this->load->view('Homepage/launch', $load);

	                //$this->load->view('Homepage/launch',$data);
	                
	            } else {
	                $salt = '5&JDDlwz%Rwh!t2Yg-Igae@QxPzFTSId';
                	$enc_pass  = md5($salt.$password);
	                $sql = "SELECT * FROM tbl_student WHERE `gebruikersnaam` = '" . $user . "' AND `wachtwoord` = '". $enc_pass ."'";
	                //query
	                //,array($user ,$enc_pass )
	                //print_r($sql);

	                $val = $this->db->query($sql);
	                //redirect admin naar adminpanel

	                if ($val->num_rows()>0) {
	                    foreach ($val->result_array() as $recs => $res) {
	                        $this->session->set_userdata(array(
	                            'id' => $res['student_id'],
	                            'gebruikersnaam' => $res['gebruikersnaam'],                           
	                            'is_gids_login' => true
	                            )
	                        );
	                    redirect('Gids/datum'); 
	                    }
	                } else {
	                    //'trycatch'

	                include('Facebook.include.php');

	                //$this->load->view('Homepage/launch',$data);

	                    $err['error'] = '<strong>Access Denied</strong> Invalid Username/Password';

	                    $load = $data + $err;
	                    $this->load->view('Homepage/launch', $load);
	                    //$this->load->view('Homepage/launch', $err);
	                    //redirect('launch'); 
	                }
	            }
	        }
    	}

        
    public function logout() {
        //log out
        //destroy session / userdata
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('gebruikersnaam');
        $this->session->unset_userdata('user_type');
            //boolean
        $this->session->unset_userdata('is_gids_login');   
        $this->session->sess_destroy();
        /*$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");*/
        redirect('launch', 'refresh');

        $facebook->destroySession();
    }
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginGids extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        //https://github.com/bcit-ci/CodeIgniter/issues/3073
        //https://ellislab.com/codeigniter/user-guide/libraries/sessions.html
    }

    public function index() {
        $this->load->helper('url');
            if ($this->session->gidsdata('is_gids_login')) {
                redirect('bezoeker');
            } else {
                $this->load->view('launch');
            }  
    }

    public function do_login() {
        echo "joske!";
        if ($this->session->gidsdata('is_gids_login')) {
            redirect('bezoeker');
        } else {
            $user = $_POST['gebruikersnaam'];
            $password = $_POST['wachtwoord'];

            echo $user;

            //validatie velden
            $this->form_validation->set_rules('gebruikersnaam', 'Username', 'required');
            $this->form_validation->set_rules('wachtwoord', 'Password', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('launch');
            } else {
                $salt = '5&JDDlwz%Rwh!t2Yg-Igae@QxPzFTSId';
                $enc_pass  = md5($salt.$password);
                $sql = "SELECT * FROM tbl_student WHERE `gebruikersnaam` = '" . $user . "' AND `wachtwoord` = '". $enc_pass ."'";

                $val = $this->db->query($sql);
                

                if ($val->num_rows()>0) {
                    foreach ($val->result_array() as $recs => $res) {
                        $this->session->set_userdata(array(
                            'id' => $res['student_id'],
                            'username' => $res['gebruikersnaam'],                           
                            'is_admin_login' => true
                            )
                        );
                    }
                    redirect('bezoeker');
                } else {
                    //'trycatch'
                    $err['error'] = '<strong>Access Denied</strong> Invalid Username/Password';
                    $this->load->view('launch', $err);
                }
            }
        }
    }

        
    public function logout() {
        //log out
        //destroy session / userdata
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('gebruikersnaam');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('user_type');
            //boolean
         $this->session->unset_userdata('is_gids_login');   
        $this->session->sess_destroy();
        /*$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");*/
        redirect('launch', 'refresh');
    }
}
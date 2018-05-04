<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        //https://github.com/bcit-ci/CodeIgniter/issues/3073
        //https://ellislab.com/codeigniter/user-guide/libraries/sessions.html
    }

    public function index() {
        $this->load->helper('url');
        //$this->load->view('admin');

        //TODO: kijken of admin ingelogt is
            //ja: ga naar view adminpanel
            if ($this->session->userdata('is_admin_login')) {
                redirect('dashboard');
            } else {
            //nee: log in op view admin
                $this->load->view('admin');
            }  
    }

    public function do_login() {
        //log een admin in
        if ($this->session->userdata('is_admin_login')) {
            redirect('dashboard');
        } else {
            $user = $_POST['username'];
            $password = $_POST['password'];

            //validatie velden
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            //als faalt, reload
            //ff op oude salt + m5 manier inloggen
            //pdo doet moeilijk
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin');
            } else {
                $salt = '5&JDDlwz%Rwh!t2Yg-Igae@QxPzFTSId';
                $enc_pass  = md5($salt.$password);
                $sql = "SELECT * FROM tbl_admin WHERE `naam` = '" . $user . "' AND `wachtwoord` = '". $enc_pass ."'";
                //query
                //,array($user ,$enc_pass )
                $val = $this->db->query($sql);
                //redirect admin naar adminpanel
                

                if ($val->num_rows()>0) {
                    foreach ($val->result_array() as $recs => $res) {
                        $this->session->set_userdata(array(
                            'id' => $res['admin_id'],
                            'username' => $res['naam'],                           
                            'is_admin_login' => true
                            )
                        );
                    }
                    redirect('dashboard');
                } else {
                    //'trycatch'
                    $err['error'] = '<strong>Access Denied</strong> Invalid Username/Password';
                    $this->load->view('admin', $err);
                }
            }
        }
    }

        
    public function logout() {
        //log out
        //destroy session / userdata
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('user_type');
            //boolean
         $this->session->unset_userdata('is_admin_login');   
        $this->session->sess_destroy();
        /*$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");*/
        redirect('admin', 'refresh');
    }



}
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin');
        }
    }

    public function index() {
        //$arr['page']='dash';
        //$this->load->view('dashboard',$arr);

        $this->load->model("Dashboard_model",'',true); //conectie maken

        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            if(isset($_POST["id"]))
            {
                $this->Dashboard_model->deleteAdmin($_POST["id"]);
            }else{

                $salt = '5&JDDlwz%Rwh!t2Yg-Igae@QxPzFTSId';
                
                $username = $this->input->post('username');
                $password = md5($salt.$this->input->post('password'));

                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                if ($this->form_validation->run() == FALSE) {
                    //erreur
                    echo form_error('username', '<div class="alert alert-danger">', '</div>');
                    echo form_error('password', '<div class="alert alert-danger">', '</div>');
                    //echo "admin mag niet leeg zijn";
                } else {
                    $this->Dashboard_model->createAdmin($username,$password);
                }
            }

        }

        $data = [  
                    "page" => "dash",
                    "usernames" => $this->Dashboard_model->getAdminList(),
                    //"adminids" => $this->Dashboard_model->getAdminIDList()
                    "bezoekers" => $this->Dashboard_model->getAantalBezoekers(),
                    "boekingen" => $this->Dashboard_model->getAantalBoekingen()
                ];

        $this->load->view('dashboard',$data);
    }

}
<?php
class Bezoeker extends CI_Controller {

public function __construct() {

    parent::__construct();

    // $this->load->library('form_validation');

    // if (!$this->session->userdata('is_gids_login')) {

    //     redirect('launch');
    // }
}

    public function index() {

        $this->load->model("Bezoeker_model",'',true);
        $this->load->helper('url');

       
        if(isset($_POST["gek_datum"])) {
            
            $gek_datum = $this->input->post('gek_datum');

            $data =   [

            "hello" => "world",
            "dates" => $this->Bezoeker_model->get_all_dates($gek_datum)
         
            ];

            include('Facebook.include.php');

            //$this->Dashboard_model->createAdmin($username,$password);

            $this->load->view('Bezoekers/bezoeker', $data);

        }

        else {

            include('Facebook.include.php');

            //print_r($data['user_profile']);
            $b_id = $data['user_profile']['id'];
            $b_email = $data['user_profile']['email'];
            $b_first_name = $data['user_profile']['first_name'];
            $b_last_name = $data['user_profile']['last_name'];

            $this->Bezoeker_model->createBezoekerInDatabase($b_id,$b_email,$b_first_name,$b_last_name);
                
            $this->load->view('Bezoekers/bezoeker', $data);

        }

    }
}

?>
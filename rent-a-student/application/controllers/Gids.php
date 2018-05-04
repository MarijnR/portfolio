<?php

class Gids extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index()
    {
        $this->load->view('Gids/datum', array('error' => ' ' ));
    }

    function do_upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '1000';
        $config['file_name'] = 'profile_picture'.$_SESSION['id'].'.jpg';
        $config['overwrite'] = 'TRUE';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
            $error_upload = array('error' => $this->upload->display_errors());

            redirect('Gids/datum', $error_upload);
        }
        else
        {
            $data_upload = array('upload_data' => $this->upload->data());

            redirect('Gids/datum', $data_upload);
        }
    }

    public function Datum(){
        
    $this->load->model("Gids_model",'',true);

    if ($this->input->server('REQUEST_METHOD') == 'POST') {

      if(isset($_POST["id"])) {
      $this->Gids_model->deleteDate($_POST["id"]);

      } else if($datum_tijd = $this->input->post('tweet')){
      
        $datum_tijd = $this->input->post('tweet');
          $this->Gids_model->save($datum_tijd);
      }



      }
        if(isset($_POST["student_id"])){
            $this->Gids_model->update_profile($this->input->post('student_id'), $this->input->post('voornaam'), $this->input->post('naam'), $this->input->post('email'), $this->input->post('wachtwoord'), $this->input->post('opleiding'), $this->input->post('school'), $this->input->post('over'), $this->input->post('image'), $this->input->post('gebruikersnaam'));

        }

        $data =   [
          
              "hello" => "world",
              "tweets" => $this->Gids_model->get_all(),
              "profile" => $this->Gids_model->get_profile(/*$_SESSION['id']*/)

            ];

           $this->load->view('Gids/datum', $data);

    
    }
}




?>
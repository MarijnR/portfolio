<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RegistratieGids extends CI_Controller {

	public function index() {
		$this->load->view('gids/RegistratieGids_view');
		// echo "WERKT HET??";
	}

	public function registeer() {
		$this->load->view('gids/RegistratieGids_view');//loads the register_view.php file in views folder
	}

	public function registratie() {
		if($this->input->post('registeer'))//$_POST["register"];
		{
			$this->load->model('RegistratieGids_model');//loads the user_model.php file in models folder

			if($this->RegistratieGids_model->nieuwe_gids()) {
				echo "Hey ".$this->input->post('voornaam'). " ! <br>" ." Je bent succesvol geregistreerd! Top!" ;
			} else {
				echo "Registratie is niet gelukt, probeer nog een keer!";
			}
		}
	}
}
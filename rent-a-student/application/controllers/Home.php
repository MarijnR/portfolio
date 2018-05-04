<?php

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        /*if(isset($_GET['action']) && $_GET['action'] === 'logout'){
            $facebook->destroySession();
        }  */

        $fb_config = array(
            'appId'  => '1610885899145101',
            'secret' => '4c1a40feb5c428bf81e079049dc9458d'
        );

        $this->load->library('facebook', $fb_config);

        $user = $this->facebook->getUser();

        if ($user) {
            try {
                $data['user_profile'] = $this->facebook
                    ->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }

        //redirect to
        //$next = array('next' => 'http://localhost:8888/rent-a-student-vs-aye-captain/index.php/home');

        if ($user) {
            $data['logout_url'] = $this->facebook
                ->getLogoutUrl();
        } else {
            $data['login_url'] = $this->facebook
                ->getLoginUrl();
        }

        $this->load->view('home',$data);
    }
}
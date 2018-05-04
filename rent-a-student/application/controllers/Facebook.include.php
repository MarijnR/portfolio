<?php 
 	$fb_config = array(
        'appId'  => '1610885899145101',
        'secret' => '4c1a40feb5c428bf81e079049dc9458d'
    );

    //print_r($fb_config);

    $this->load->library('facebook', $fb_config);

    $user = $this->facebook->getUser();

    //print_r($user);

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
            ->getLoginUrl(array('scope' => 'email'));
        //$data['email'] = $this->$facebook->getLoginUrl(array('req_perms' => 'email'));
    }


?>
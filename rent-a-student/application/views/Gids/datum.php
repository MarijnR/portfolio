<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Launch</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/reset.css">
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/mq_smalldevices.css">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

</head>
<body>

<div class="header_gids">

	<img id="logo" src="<?php echo base_url();?>assets/img/Logo.png" alt="Logo" class="img-responsive">
	
</div>


<div id="polygonBreak">

	<div id="topTriangle"></div>
	


	<div class="container_datum col-xs-12 col-sm-12 col-sm-6 col-md-6">
		

		<form action="" method="post">
			
			<p>Date: <input type="text" name="tweet" id="datepicker"></p>

			<button class="btn btn-default" type="submit">Save Date</button>

		</form>

		<br/>

        <?php if(isset($tweets)): ?>
        <?php foreach ($tweets as $t): ?>
                
        <?php echo "<form action='' method='post'>

		<li class='datum_lijst'>
            <span>" .$t['datum_tijd']. "</span>
            <input type='text' style='display:none' name='id' value=" . $t['bd_id'] .">
            <button class='remove_fields pull-right' type='submit'>x</button>
		</li>
		</form>";		 ?>

		 <?php endforeach; ?>
        <?php endif; ?>

	</div>


            <?php print_r($_SESSION); ?>

    <div class="container_Profile col-xs-12 col-sm-12 col-sm-6 col-md-6">

    <!--**************  LOG UIT  ******************-->
        
    <div><a href="<?php echo base_url(); ?>index.php/Launch/logout"><i class="fa fa-power-off"></i> Log Out</a></div>


        <h1>Profile</h1>
        <a id="btn_edit_profile" href="#edit">Edit Profile</a>
        <div class="profile_on">

            <img src="<?php echo base_url()."uploads/".$profile[0]['image'].$_SESSION['id'].".jpg"; ?>" alt=""/>
            <ul>
                <li><span>Naam:</span><?php echo " ".$profile[0]['naam'];?></li>
                <li><span>Voornaam:</span><?php echo " ".$profile[0]['voornaam'];?></li>
                <li><span>Gebruikersnaam:</span><?php echo " ".$profile[0]['gebruikersnaam'];?></li>
                <li><span>Email</span><?php echo " ".$profile[0]['email'];?></li>
                <li><span>Opleiding:</span><?php echo " ".$profile[0]['opleiding'];?></li>
                <li><span>School:</span><?php echo " ".$profile[0]['school'];?></li>
                <li><span>Over mij:</span><?php echo " ".$profile[0]['over'];?></li>

            </ul>

            <?php print_r($profile); ?>


        </div>
        <div class="profile_edit">

            <?php
            if(isset($error_upload)){
                echo $error_upload;
            }?>

            <?php echo form_open_multipart('Gids/do_upload');?>

                    <img src="<?php echo base_url()."uploads/".$profile[0]['image'].$_SESSION['id'].".jpg"; ?>" alt=""/>

                <label for="">Uploade new picture:</label><input type="file" name="userfile" size="20" value="128.jpg" />
                <label for="image"></label><input id="image" name="image" type="text" value="<?php echo base_url()."uploads/".$profile[0]['image'].$_SESSION['id'].".jpg";  ?>"/>
                <label for="naam">Naam:</label><input id="naam" name="naam" type="text" value="<?php echo $profile[0]['naam'];  ?>"/>
                <label for="voornaam">Voornaam:</label><input id="voornaam" name="voornaam" type="text" value="<?php echo $profile[0]['voornaam'];  ?>"/>
                <label for="email">Gebruikersnaam:</label><input id="gebruikersnaam" name="gebruikersnaam" type="text" value="<?php echo $profile[0]['gebruikersnaam'];  ?>"/>
                <label for="email">Email:</label><input id="email" name="email" type="text" value="<?php echo $profile[0]['email'];  ?>"/>
                <label for="opleiding">Opleiding:</label><input id="opleiding" name="opleiding" type="text" value="<?php echo $profile[0]['opleiding'];  ?>"/>
                <label for="school">School:</label><input id="school" name="school" type="text" value="<?php echo $profile[0]['school'];  ?>"/>
                <label for="wachtwoord">Wachtwoord:</label><input id="wachtwoord" name="wachtwoord" type="text" value="<?php echo $profile[0]['wachtwoord'];  ?>"/>
                <label for="over">Over mezelf:</label><textarea name="over" id="over" cols="30" rows="10"><?php echo $profile[0]['over']?></textarea>
                <input type='text' style="display: none" name='student_id' value="<?php echo $profile[0]['student_id']?>"/>

                <button class="btn btn-default" type="submit">Save changes</button>
                <?php print_r($_POST) ?>
            </form>
        </div>


    </div>

		
</div>



</body>
</html>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">	
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/js/gidsdatum.js"></script>
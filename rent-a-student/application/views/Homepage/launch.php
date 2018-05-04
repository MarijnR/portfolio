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

	    <?php
            if(isset($error) && $error !='')
            {
        ?>
	    <div class="alert alert-danger">
	        <?php echo $error; ?>
      	</div>
        <?php
        }
        ?>

<div class="tabs">
    
   <div class="tab">
       <input type="radio" id="tab-1" name="tab-group-1" checked>
       <label for="tab-1">BEZOEKER</label>
       
       <div class="content">
			<div id="login">
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="NAME">
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="PASSWORD">
					<button style="background-color:blue;" type="submit" id="login" class="btn btn-default">LOG-IN</button>
			</div>

			<div id="register">		
					<span>Nog geen account? <br/> Geen zorgen, sign up met FACEBOOK!</span>
					<br/>

					<?php if (@$user_profile): ?>

						<?php 
						//je kan inloggen met facebook alleen nog redirect en loggout daar zetten
						header("Location: ". base_url() ."index.php/bezoeker"); ?>

		    			<!--<button id="register" style="background-color:blue;" class="btn btn-default"><a style="color:white" href="<?php //echo base_url(); ?>index.php/Launch/logout" >SIGN OUT FACEBOOK</a></button>-->
		    			
		    		<?php else: ?>
						<button id="register" style="background-color:blue;" class="btn btn-default"><a style="color:white" href="<?= $login_url ?>" >SIGN UP WITH FACEBOOK</a></button>

		    		<?php endif; ?> 



			</div>
       </div> 
   </div>
    
<div class="tab">
	<input type="radio" id="tab-2" name="tab-group-1">
	<label for="tab-2">STUDENTEN</label>
	      
	<div class="content">
		<form method="post" action="<?php echo base_url(); ?>index.php/launch/do_login">
			<div id="login">
				<input type="username" name="gebruikersnaam" class="form-control" id="exampleInputEmail1" placeholder="NAAM">
				<input type="password" name="wachtwoord" class="form-control" id="exampleInputPassword1" placeholder="WACHTWOORD">
				<button type="submit" id="login" class="btn btn-default">LOG-IN</button>
			</div>
		</form>

		<div id="register">		
			<span>Nog geen account? <br/> Geen zorgen, sign up!</span>
			<br/>
			<button onclick="window.location.href='<?php echo base_url();?>/index.php/RegistratieGids'" type="submit" id="register" class="btn btn-default">SIGN-UP!</button>
		</div>
	</div> 
</div>
   
    
</div>

<div class="header">

	<img id="logo" src="<?php echo base_url();?>assets/img/Logo.png" alt="Logo" class="img-responsive">
	
</div>

<!-- POLYGON BREAK -->

<div id="polygonBreak">

	<div id="topTriangle"></div>
	
	<div id="block">
			
	<div class="row">

		<h1>	

			“ Met RentAStudent kreeg ik eindelijk een echt beeld
			van hoe het er in een hogeschool aan toe gaat als student!
			Je leeft echt met de hogeschoolstudent mee!”
			<br/>

			<small>
			- Ella (18) studeert Handel aan St.Jozef te Kontich
			</small>

		</h1>
		
	</div>

	</div>
		
	<div id="bottomTriangle"></div>


</div>

<img id="textBaloons" src="<?php echo base_url();?>assets/img/balloons.png" alt="img"> 


<!-- RATING PAGE -->
<div id="ratingPage">
	
<div class="people">
	
	<div class="row">
		  
		  		
				
		  <ul class="col-sm-6 col-md-6 " id="ratingBlock">
		  		<li>
		  			<img  class="img-responsive" src="<?php echo base_url();?>assets/img/profilepic.png" alt="img">
		  		</li>

		  		<li class="ratingTekst">
		  				<h3>Sara</h3>
		  				<h4>Student 2IMDA</h4>
		  				<span class="stars"></span>	
		  				
		  		</li>

		  	</ul>
		  	  <ul class="col-sm-6 col-md-6 " id="ratingBlock">
		  		<li >
		  			<img  class="img-responsive" src="<?php echo base_url();?>assets/img/profilepic.png" alt="img">
		  		</li>

		  		<li class="ratingTekst">
		  			<h3>Sara</h3>
		  			<h4>Student 2IMDA</h4>
		  			<span class="stars"></span>
		  		</li>

		  	</ul>
		  	  <ul class="col-sm-6 col-md-6 " id="ratingBlock">
		  		<li>
		  			<img  class="img-responsive" src="<?php echo base_url();?>assets/img/profilepic.png" alt="img">
		  		</li>

		  		<li class="ratingTekst">
		  				<h3>Sara</h3>
		  				<h4>Student 2IMDA</h4>
		  				<span class="stars"></span>
		  		</li>

		  	</ul>

		  	 <ul class="col-sm-6 col-md-6 " id="ratingBlock">
		  		<li>
		  			<img  class="img-responsive" src="<?php echo base_url();?>assets/img/profilepic.png" alt="img">
		  		</li>

		  		<li class="ratingTekst">
		  				<h3>Sara</h3>
		  				<h4>Student 2IMDA</h4>
		  				<span class="stars"></span>
		  		</li>

		  	</ul>
		  		
		  	</div>
		  	
		  	

</div>

<footer>
	
<div id="whiteFooter hidden-xs ">

	<div id="topTriangle"></div>
	
	<div id="block2"><div class="gallery">


	  <div class="hidden-xs col-sm-12 col-md-12">
		<p class="title">Hoe ziet Rent A Student eruit? Zo.</p>	  
		</div>
	  <div class="hidden-xs col-sm-4 col-md-3">
	  	<img src="<?php echo base_url();?>assets/img/attribute.png">
	  </div>
	 <div class="hidden-xs col-sm-4 col-md-3">
	  	<img src="<?php echo base_url();?>assets/img/attribute.png">
	  </div>
	  <div class="hidden-xs col-sm-4 col-md-3">
	  	<img src="<?php echo base_url();?>assets/img/attribute.png">
	  </div>
	  <div class="hidden-xs col-sm-4 col-md-3">
	  	<img src="<?php echo base_url();?>assets/img/attribute.png">
	  </div>
	  <div class="hidden-xs col-sm-4 col-md-3">
	  	<img src="<?php echo base_url();?>assets/img/attribute.png">
	  </div>
	  <div class="hidden-xs col-sm-4 col-md-3">
	  	<img src="<?php echo base_url();?>assets/img/attribute.png">
	  </div>
	    <div class="hidden-xs hidden-sm col-md-3">
	  	<img src="<?php echo base_url();?>assets/img/attribute.png">
	  </div>
	  <div class="hidden-xs hidden-sm col-md-3">
	  	<img src="<?php echo base_url();?>assets/img/attribute.png">
	  </div>
	  

	</div>
</div>
		
	<div id="bottomTriangle"></div>


</div>


<div id="blackFooter">
	

	<div id="topTriangle"></div>
	
	<div id="block">
		
		<div id="social">
			
		  <div class="hidden-xs col-xs-4 col-sm-2 col-sm-4 col-md-2">
			<img src="<?php echo base_url();?>assets/img/bla.png">
		  </div>
		   <div class="hidden-xs col-xs-4 col-sm-2 col-sm-4 col-md-2">
			<img src="<?php echo base_url();?>assets/img/tw.png">
		  </div>
		   <div class="hidden-xs col-xs-4 col-sm-2 col-sm-4 col-md-2">
			<img src="<?php echo base_url();?>assets/img/tw.png">
		  </div>
		   <div class="col-xs-4 col-xs-4 col-sm-2 col-sm-4 col-md-2">
			<img src="<?php echo base_url();?>assets/img/bla.png">
		  </div>
		   <div class="col-xs-4 col-xs-4 col-sm-2 col-sm-4 col-md-2">
			<img src="<?php echo base_url();?>assets/img/tw.png">
		  </div>
		   <div class="col-xs-4 col-xs-4 col-sm-2 col-sm-4 col-md-2">
			<img src="<?php echo base_url();?>assets/img/li.png">
		  </div>

		  <div class="visible col-xs-12 col-xs-12 col-sm-12 col-sm-12 col-md-12">
			<p class="copyright">Copyright © 2015 Rent A Student. All Rights Reserved.</p>

		  </div>
		

		</div>
					
	</div>






	


</footer>



</div>

</div>



</body>
</html>

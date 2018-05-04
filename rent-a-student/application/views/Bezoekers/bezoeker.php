<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<title>Launch</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- STYLE -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/reset.css">
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
  	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
	
	<!-- JS BOOTSTRAP -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>

<body>


<div class="home dropdown">

  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    
    Menu
    
    <span class="caret"></span>

  </button>

  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">

    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Boeken</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-envelope"></i> Inbox</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-user"></i>Edit profile</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>index.php/Launch/logout"><i class="fa fa-power-off"></i>Log Out</a></li>
  
  </ul>

</div>

<div class="header__bezoeker">

	<img id="logo" src="<?php echo base_url();?>assets/img/Logo.png" alt="Logo" class="img-responsive">
	
</div>



<div class="chooseDate">

	<form action="" method="post">
		
		<a class="col-xs-12 col-sm-3 col-md-3 chooseDate__item--date ">Date: <input type="text" id="datepicker" name="gek_datum"></a>
		<a class="col-xs-12 col-sm-3 col-md-3 chooseDate__item--calenderimg">sad</a>
		<button class="btn col-xs-12 col-sm-3 col-md-3 chooseDate__item--button" type="submit">VIND STUDENT</button>

	</form>
	
</div>


<div class="polygonBreakB1">

	<div class="polygonBreakB1__topTriangle"></div>
	
	<div class="polygonBreakB1__block">

		<div class="bGids">


<?php if (isset($dates)): ?>	

		<?php foreach ($dates as $d): ?>	
		
		 <ul class="col-sm-4 col-md-4 bGids_block">
			  	
			<li class="bGids_block--img " >
			
				<img  class="bGids__img img-responsive img-rounded" src="<?php echo base_url();?>assets/img/profilepic.png" alt="img">
			
			</li>

			<li class="bGids_block--info">
			  	
			  	<h3><?php echo " ".$d['voornaam'];?></h3>
			  	<h4><?php echo " ".$d['datum_tijd'];?></h4>
			  	<p><?php echo " ".$d['over'];?></p>
			  	<span class="stars"></span>
			 
			</li>
			  	
			<button class="bGids__block--btn">BOEK STUDENT</button>
			
		</ul>


		<?php endforeach; ?>
<?php endif; ?>


		</div>

	</div>

	<div class="polygonBreakB1__bottomTriangle"></div>
	
	<br>
	<span>Name: </span><?php echo $user_profile['first_name'] . " " . $user_profile['last_name']; ?> <br><br>
	<span>ID: </span><?php echo $user_profile['id']; ?><br><br>
	<span>Email: </span><?php echo $user_profile['email']; ?>
	<br><br>	
	<img src="http://graph.facebook.com/<?php echo $user_profile['id']; ?>/picture?width=200&height=200" alt="">

</div>



<!-- <div class="polygonBreakB2">

	<div class="polygonBreakB2__topTriangle"></div>
	
	<div class="polygonBreakB2__block">

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

		  <div class="col-xs-12 col-xs-12 col-sm-12 col-sm-12 col-md-12">


			<p class="copyright">Copyright © 2015 Rent A Student. All Rights Reserved.</p>

		  </div>

		</div>
				
	</div>
		

</div>
 -->

</body>
</html>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">	
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/js/gidsdatum.js"></script>
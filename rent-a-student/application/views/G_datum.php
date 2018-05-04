<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Launch</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/reset.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/reset.css">
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/mq_smalldevices.css">
	

	
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>	<script>document.write('<script src="http://' + (location.host || 'localhost')
.split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</head>
<body>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>


<body>

<div class="header">

	<img id="logo" src="<?php echo base_url();?>assets/img/Logo.png" alt="Logo" class="img-responsive">
	
</div>

<!-- POLYGON BREAK -->

<div id="polygonBreak">

	<div id="topTriangle"></div>
	
	<div id="block">

	
	<div class="datum">
		
		<form action="" method="post">
			
		  <p>Date: <input type="text" name="tweet" id="datepicker"></p>
		  <button type="submit">Save Tweet</button>

		</form>

		<?php foreach ($tweets as $t): ?>
			
			<?php echo "<p>" .$t['text']. "</p>"; ?>

	 	<?php endforeach; ?>


	</div>

	</div>
		
	</div>



</body>
</html>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">	
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/js/gidsdatum.js"></script>
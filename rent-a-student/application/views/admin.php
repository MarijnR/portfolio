<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rent A Student</title>
	<link rel="stylesheet" type="text/css" href="<?php echo HTTP_CSS_PATH; ?>bootstrap.css">
</head>
<body>
	
    <div class="container">
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
        <form class="form-signin panel" method="post" action="<?php echo base_url(); ?>index.php/admin/do_login">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="form-control" placeholder="Username" name="username" id="username" autofocus>
        <input type="password" id="pass" class="form-control" placeholder="Password" name="password">
        <label class="checkbox">
            <input type="checkbox" value="remember-me" id="remember_me">Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div>

</body>
</html>
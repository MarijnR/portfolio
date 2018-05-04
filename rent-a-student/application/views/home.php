<?php 

    if(isset($_GET['action']) && $_GET['action'] === 'logout'){
        $facebook->destroySession();
    }
    
 ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
</head>
<body>

<div id="page-wrapper">
	<h1>Login</h1>

    <?php if (@$user_profile): ?>  
    <pre>
        <?php echo print_r($user_profile, TRUE) ?>
    </pre>
    <a href="<?= $logout_url ?>">Logout</a>

     <div class="row">
          <div class="col-lg-12">
            <h1>Dashboard <small>Statistics Overview</small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Welcome to ARK Admin Panel by <a class="alert-link" href="http://devzone.co.in">DevZone.co.in</a>! 
            </div>
          </div>
        </div><!-- /.row -->


    <?php else: ?>
    
    <a class="btn btn-lg btn-primary btn-block" href="<?= $login_url ?>">Login with facebook</a>
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
        <form class="form-signin panel" method="post" action="">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="form-control" placeholder="Username" name="username" id="username" autofocus>
        <input type="password" id="pass" class="form-control" placeholder="Password" name="password">
        <label class="checkbox">
            <input type="checkbox" value="remember-me" id="remember_me">Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div>
    <?php endif; ?>
</div><!-- /#page-wrapper -->
</body>
</html>
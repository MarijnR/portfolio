<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin dashboard</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
</head>
<body>

<div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-default" role="navigation">
        <!-- Mobile display button -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <ul class="nav navbar-nav navbar-right navbar-user">
                  <li><a class="navbar-brand" href="<?php echo base_url(); ?>admin">Dashboard Rent A Student</a></li>
                    <li class="dropdown user-dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username') ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                          <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                          <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                          <li class="divider"></li>
                          <li><a href="<?php echo base_url(); ?>index.php/admin/logout"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
        </div>
    </div>
    </nav>
</div>

<div id="page-wrapper">

  <div class="row-fluid">
    <div class="col-md-4">
      <h2>Add Admins</h2>
      <form class="form-signin panel" method="post" action="">
        <input type="text" class="form-control" placeholder="New Username *" name="username" id="username" autofocus>
        <input type="password" id="pass" class="form-control" placeholder="New Password *" name="password"><br>
        <button class="btn btn-lg btn-default btn-block" type="submit">Create New Admin</button>
      </form>

      <h2>List Of Admins</h2>
      <ul class="list-group">
        <?php foreach ($usernames as $u): ?>

        <?php echo '<form method="post" action=""><li class="list-group-item"><span class="fa fa-user"> ' . $u["naam"] .'</span><input type="text" style="visibility:hidden" name="id" value="' . $u["admin_id"] .'"><button class="btn btn-danger remove_fields pull-right" type="submit">x</button></li></form>';?>

        <?php endforeach; ?>
      </ul>
    </div>
    <div class="col-md-8">
      <h2>Manage Messages</h2>
      <div class="panel panel-info">
          <div class="panel-heading">
              <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-users fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $bezoekers ?></p>
                    <p class="announcement-text">Bezoekers</p>
                  </div>
              </div>
          </div>
          <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-calendar-o fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php echo $boekingen ?></p>
                    <p class="announcement-text">Boekingen</p>
                  </div>
                </div>
          </div>
    </div>
  </div>
  
</div><!-- /.row -->



</body>
</html>
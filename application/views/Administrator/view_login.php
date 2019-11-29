<!DOCTYPE html>
<!-- saved from url=(0042)https://egraduation.amikom.ac.id/dash/auth -->
<html class="bg-black">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Administrator &rsaquo; Log In</title>
	<meta name="author" content="BPC Amikom Yogyakarta">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="icon" href="<?php echo base_url(); ?>assets/images/kc.png" type="image/png">
	<link href="<?php echo base_url(); ?>assets/login/plugin/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/login/plugin/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/login/app/css/app-login-v1.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/login/plugin/sweetalert/css/sweetalert.css" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url(); ?>assets/login/plugin/sweetalert/js/sweetalert.min.js"></script>
</head>
<body>

<div class="container animated fadeIn">
	<div class="card card-container">
		<img id="profile-img" class="profile-img-card" src="<?= base_url('assets/images/').$identitas->favicon; ?>">
		<p id="profile-name" class="judul">Login Administrator</p>
		<hr>
		<?php 
          if (isset($error)){
            echo "<div class='alert alert-warning'><center>$error</center></div>";
          }
        ?>
		<form action="<?php echo site_url('administrator/index'); ?>" class="form-signin" role="form" method="post" accept-charset="utf-8">
			<div class="username">
				<input type="text" name="username" class="form-control" placeholder="Username" required="" autofocus="">
			</div>
			<br>
			<div class="password">
				<input type="password" name="password" class="form-control" placeholder="Password" required="">
			</div>
			<!-- <div style="width: 304px; height: 78px;">
				<div class="g-recaptcha" data-sitekey="6LdDw0kUAAAAAIk32pmXVJZ2eXTKIaZlD_SzoLoe"  required></div>
			</div> -->
			<button type="submit" name ="submit" class="btn btn-primary btn-signin">Login</button>
		</form>
	</div>
</div>

</body>
</html>
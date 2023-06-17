<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Register</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/feather/feather.css">

<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
</head>
<body>

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-left">
<img class="img-fluid" src="<?php echo base_url()?>assets/img/login.png" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap">
<h1>Sign Up</h1>
<p class="account-subtitle">Enter details to create your account</p>

<form action="<?php echo base_url()?>user_insert" method="post">
<div class="form-group">
<label>Username <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="name">
<span class="profile-views"><i class="fas fa-user-circle"></i></span>
</div>
<div class="form-group">
<label>Email <span class="login-danger">*</span></label>
<input class="form-control" type="text" name="email">
<span class="profile-views"><i class="fas fa-envelope"></i></span>
</div>
<div class="form-group">
<label>Password <span class="login-danger">*</span></label>
<input class="form-control pass-input" type="text" name="password">
<span class="profile-views feather-eye toggle-password"></span>
</div>
<div class="form-group">
<label>Confirm password <span class="login-danger">*</span></label>
<input class="form-control pass-confirm" type="text" name="cpassword">
<span class="profile-views feather-eye reg-toggle-password"></span>
</div>
<div class=" dont-have">Already Registered? <a href="<?php echo base_url()?>login">Login</a></div>
<div class="form-group mb-0">
<button class="btn btn-primary btn-block" type="submit">Register</button>
</div>
</form>


</div>
</div>
</div>
</div>
</div>
</div>


<script src="<?php echo base_url()?>assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url()?>assets/js/feather.min.js"></script>

<script src="<?php echo base_url()?>assets/js/script.js"></script>
</body>
</html>
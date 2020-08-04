<?php
session_start();
include 'user/base.php';
require_once 'user/connect.php';

if (isset($_POST) & !empty($_POST)) {
  $email = mysqli_real_escape_string($connect,$_POST['email']);
  $_SESSION['email'] = $email;
  $password = ($_POST['password']);
  $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
  $count = mysqli_num_rows($result);
  if ($count ==1) {
    header("Location: user/index.php");
  }else {
    echo "failed to open";
  }
}
include("homenavbar.php");
 ?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="UTF-8">



	<link rel="stylesheet" href="css/main.css">
</head>

<body onload=' location.href="#myanchor" '>


	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="userlogin.php">Login/Register</a>
						<a id='myanchor' href='#'>.</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
		<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>Create your own fashion account,and keep slaying with Babu Fashion</p>
							<a class="primary-btn" href="userregister.php">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form"  method="post" id="contactForm" >
							<div class="col-md-12 form-group">
								<input class="form-control"  type="email"  name="email" required="" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" name="password"  required="" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
						
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Log In</button>
								<a onclick="forgot()">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

	<script> function forgot(){
	window.alert("Your fault :)");}</script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>

	<script src=".js/main.js"></script>
<?php include("homefooter.php"); ?>	
</body>

</html>
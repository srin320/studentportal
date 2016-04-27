<?php
session_start();

if(!$_SESSION['username']){

	header('location: admin.php');

}
?>
<!DOCTYPE html>
<html lang="en">

<html>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scal=1">
	<meta name="description" content="A basic Hello world example for bootstrap">
	<meta name="author" content="Your name">
	<title>Home</title>

	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="adminpanel.css">
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigaion">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-container">
						<span class="sr-only">Show and hide the Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<img src="1.jpg" class="brand" />
					</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-container">
					<ul class="nav navbar-nav">
						<li><a href="logoutadmin.php" style="color: oldlace;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</br></br></br>
		<h3 align="center" style="font-family:serif; font-size:35px"><b>Choose your option:</b></h3>

		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
					<div class="jumbotron col-md-6">
						<div class="row">
							<div class="media col-md-6">
								<a href="newuser.php" class="thumbnail pull left">
									<img src="AddUser.png" alt="Description">
								</a>
								<div clas="media-body">
									<h4 class="glyphicon glyphicon-plus">Add-User</h4>	
								</div>
							</div>
							<div class="media col-md-6" style="bottom:16px;">
								<a href="registereduser.php" class="thumbnail pull left">
									<img src="user.png" alt="Description">
								</a>
								<div clas="media-body">
									<h4 class="glyphicon glyphicon-saved">Registered-User</h4>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
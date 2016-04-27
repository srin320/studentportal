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
	<link rel="stylesheet" type="text/css" href="basic-templatecopy.css">

	<script type="text/javascript">
			var image1=new Image()
	        image1.src="2.jpg"
	        var image2=new Image()
	        image2.src="3.jpg"
	        var image3=new Image()
	        image3.src="11.jpg"
		</script>

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
						<li><a href="home.php" style="color: oldlace;"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="#" style="color: oldlace;"><span class="glyphicon glyphicon-book"></span> About Us</a></li>
						<li class="dropdown">
							<a href="#" style="color: oldlace;" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-question-sign"></span> Contact Us <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#"><span class="glyphicon glyphicon-phone"></span> Phone</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-comment"></span> Email</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Mail</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><span class="glyphicon glyphicon-map-marker"></span> Driving Directions</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container">

			<div class="row">
			<div class="col-md-12">
				<div class="media">
					<a href="#" class="thumbnail">
						<img src="11.jpg" name="slide" alt="Description">
					</a>
					<script type="text/javascript">
						var step=1
				        function slideit()
				        {
				            document.images.slide.src=eval("image"+step+".src")
				            if(step<3)
				                step++
				            else
				                step=1
				            setTimeout("slideit()",2500)
				        }
				        slideit()
					</script>
				</div>
			</div>
		</div>

			<div class="row">
				<div class="col-md-3">
					<div class="jumbotron noticeboard">
							<h4>NOTICE BOARD:</h4>
							<a href="#">=>General noticeboard</a></br>
							<a href="#">=>Student's noticeboard</a></br>
							<a href="#">=>Office notice</a></br>
							<a href="#">=>Placement updates</a></br>
							<a href="#">=>Vocational Training</a></br>
							<a href="#">=>Academic calendar</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="jumbotron dummytext">
						<p>The National Institute of Technology, Durgapur (formerly Regional Engineering College, Durgapur), was established by an Act of Parliament in 1960 as one of the eight such colleges aimed to function as a pace setter for engineering education in the country and to foster national integration.It is a fully-funded premier Technological Institution of the Government of India and is administered by an autonomous Board of Governors.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="jumbotron buttons">
						<div class="btn-group btn-group-vertical btn-block">
							<button type="button" class="btn btn-success btn-block padding-top-10">
								<span class="glyphicon glyphicon-user"></span><a href="member.php"> Member</a>
							</button>
							<button type="button" class="btn btn-danger btn-block padding-top-10">
								<span class="glyphicon glyphicon-lock"></span><a href="admin.php"> Admin</a>
							</button>
							<button type="button" class="btn btn-primary btn-block padding-top-10">
								<span class="glyphicon glyphicon-registration-mark"></span><a href="form.php"> Register</a>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<footer>
	<div class="footer-center row">
		<a href="home.php">Home</a>&nbsp;&nbsp;<span>|</span>&nbsp;&nbsp;&nbsp;
		<a href="member.php">Student Login</a>&nbsp;&nbsp;<span>|</span>&nbsp;&nbsp;&nbsp;
		<a href="admin.php">Admin Login</a>
	</div>
	<div class="row">
		<div class="col-md-5">
		<p class="text">For any help contact:</p>
		<p class="text">Name: Srinath Sheet<br>
		Contact No: +919046962544<br>
		Address: Hall3, NIT Durgapur</p>
	</div>
	<div class="media col-md-7">
		<a href="#" class="thumbnail">
			<img src="social_network_icons.png" name="slide" alt="Description" style="height:100px;">
		</a>
	</div>
	
	</div>
	</footer>
		<!--
			Bootstrap javascript and jQuery should be loaded 
			Placed at the end of the document for faster load times
		-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
	</body>
</html>
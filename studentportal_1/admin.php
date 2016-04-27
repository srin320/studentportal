
<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<html>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scal=1">
	<meta name="description" content="A basic Hello world example for bootstrap">
	<meta name="author" content="Your name">
	<title>Admin Login</title>

	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="basic-templatecopy.css">
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
						<li><a href="member.php" style="color: oldlace;"><span class="glyphicon glyphicon-lock"></span> Member</a></li>
						<li><a href="form.php" style="color: oldlace;"><span class="glyphicon glyphicon-user"></span> Register</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container">
			<div class="row">
					<div class="media" align="center">
						<img src="yonetici-ekrani.jpg" class="memberimage" alt="Description">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
			<div class="container col-md-6 padding-top-10">
            	<div class="panel panel-default">
                	<div class="panel-heading" align="center">Admin Login Here :</div>
                	<div class="panel-body">
                		<form method="post">
                			<div class="row">
                				<div class="col-md-3">
                				</div>
                				<div class="col-md-6">
                					<label for="username" class="control-label">Username :</label>
                					<input type="text" name="username" id="username" class="form-control" placeholder="Enter admin username" />
                				</div>
                			</div>
                			<div class="row">
                				<div class="col-md-3">
                				</div>
                				<div class="col-md-6">
                					<label for="password" class="control-label">Password :</label>
                					<input type="password" name="password" id="password" class="form-control" placeholder="Enter admin password" />
                				</div>
                			</div>
                			<div class="row">
                				<div class="col-md-4">
                				</div>
                				<div class="col-md-8 padding-top-10">
                        			<div style="float:right; padding-right:15px;">
                                		<button type="submit" name="submit" class="btn btn-success">Submit</button>    
                       				</div>
                    			</div>
                			</div>
                		</form>
               	 	</div>
            	</div>
            </div>
        </div>
        </div>
		

		<!--
			Bootstrap javascript and jQuery should be loaded 
			Placed at the end of the document for faster load times
		-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>


		<?php
		mysql_connect('localhost','root','root');
		mysql_select_db('group15');
		if(isset($_POST['submit']))
		{

			$username = $_POST['username'];
			$password = $_POST['password'];
			if($username!=''&&$password!='')
			{	
   				$query=mysql_query("select * from admin where admin_username='$username' and admin_password='$password'");

   				

   				if(mysql_num_rows($query)>0)
   				{
   					$_SESSION['username'] = $username;

   					echo "<script>window.open('adminhome.php','_self');</script>";
  				}
  				else{
  					echo "<script>alert('Incorrect username or password!!!!!!')</script>";
  				} 
  			}
  			else{
  				echo "<script>alert('Please fill all fields!!!!!!!!!!')</script>";
  			}
  		}		
		?>
		
	</body>
</html>
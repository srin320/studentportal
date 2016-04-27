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
	<title>Registered User</title>

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
						<li><a href="adminhome.php" style="color: oldlace;"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="newuser.php" style="color: oldlace;"><span class="glyphicon glyphicon-plus-sign"></span> User Requests</a></li>
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
						
						<div class="md-col-6">
							<table width="500" align="center" border="10" class="table">
							<tr>
								<th>Name</th>
								<th>Details</th>
								<th>Action</th>
								<th>Delete Accounts</th>
							</tr>

							<?php
							mysql_connect("localhost","root","root");
							mysql_select_db("group15");

							$query = "select * from student where valid=1";

							$run = mysql_query($query);

							while($row=mysql_fetch_array($run))
							{
								$user_id = $row['id'];
								$user_name = $row['fname'];
								$user_type = $row['type'];
								$user_valid = $row['valid'];
							?>

							<tr align='center'>
							<td bgcolor="lightgray"><?php echo $user_name; ?></td>
							<td bgcolor="darkgray"><?php echo "<a href='viewdetails.php?user_id=$user_id'>View details</a>" ?></td>
							<td bgcolor="darkgray">
								<?php
									if($user_type=='a')
									{
										echo "<a href='option.php?user_id=$user_id&type=$user_type'>Deactivate</a>";
									}
									else
									{
										echo "<a href='option.php?user_id=$user_id&type=$user_type'>Activate</a>";
									}
								?>
							</td>
							<td bgcolor="lightgray">
								<?php
								if($user_valid==1)
								{
								?>
									<a href='delete.php?del=<?php echo $user_id ?>'>Delete</a>
								<?php
								}
								?>
							</td>
							</tr>
							<?php
							}
							?> 
						</table>
						</div>
					</div>
				</div>
			</div>
		</div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
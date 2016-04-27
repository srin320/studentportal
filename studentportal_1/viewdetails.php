<?php
session_start();

if(!$_SESSION['username']){

	header('location: admin.php');

}
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scal=1">
		<meta name="description" content="A basic Hello world example for bootstrap">
		<meta name="author" content="Your name">
		<title>User Details</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="basic-template.css">
		<link rel="stylesheet" type="text/css" href="adminpanel.css">
	</head>
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
						<li><a href="newuser.php" style="color: oldlace;"><span class="glyphicon glyphicon-plus-sign"></span> New requests</a></li>
						<li><a href="newuser.php" style="color: oldlace;"><span class="glyphicon glyphicon-ok-circle"></span> Registered Users</a></li>
						<li><a href="logoutadmin.php" style="color: oldlace;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>



<?php
mysql_connect('localhost','root','root');
mysql_select_db('group15');

$user_id = $_GET['user_id'];

$query = "select * from student where id='$user_id'";

		$run = mysql_query($query);

		while($row=mysql_fetch_array($run))
		{
			$user_id = $row['id'];
			$user_fname = $row['fname'];
			$user_lname = $row['lname'];
			$user_gender = $row['gender'];
			$user_dob = $row['dob'];
			$user_age = $row['age'];
			$user_mobile = $row['mobile'];
			$user_username = $row['username'];
			$user_email = $row['email'];
			$user_addr = $row['addr'];
			$user_tenth_per = $row['tenth_per'];
			$user_twelve_per = $row['twelve_per'];
			$user_program = $row['program'];
			$user_registration_no = $row['registration_no'];
			$user_dept = $row['dept'];
			$user_roll = $row['roll'];
			$user_sem = $row['sem'];
			$user_image = $row['image'];
			$user_hobbies = $row['hobbies'];
			

?>

			<div class="container">
					<!--<ul class="nav nav-tabs nav-justified">-->
					<fieldset>

						<div class="row">
						<div class="col-md-2"></div>
						<div class="jumbotron col-md-8">
							
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4"></div>
								<div class="col-md-4"><img src="uploads/<?php echo  $user_image;?>" style="width:150px;"></div>
							</div>
							<legend>Personal Details :</legend>
							<div class="row">
								<div class="col-md-4">
									<label>Name : <?php echo $user_fname; ?> <?php echo $user_lname; ?></label>
								</div>
								<div class="col-md-4">
									<label>Gender : <?php echo $user_gender; ?></label>
								</div>
								<div class="col-md-4">
									<label>Date of Birth : <?php echo $user_dob; ?></label>
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-4">
									<label>Mobile No. : <?php echo $user_mobile; ?></label>
								</div>
										<div class="col-md-4">
									<label>Username : <?php echo $user_username; ?></label>
								</div>
								<div class="col-md-4">
									<label>Age : <?php echo $user_age; ?></label>
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-6">
									<label>Email : <?php echo $user_email; ?></label>
								</div>
								<div class="col-md-2"></div>
								<div class="col-md-4">
									<label>Address : <?php echo $user_addr; ?></label>
								</div>
							
						</div><br>
						<div class="row">
							<div class="col-md-6">
								<label>Hobbies : <?php echo $user_hobbies; ?></label>
							</div>
						</div><br>
						<br>
						<legend>Academic Details :</legend>

						<div class="row">
							<div class="col-md-4">
								<label>10th board percentage : <?php echo $user_tenth_per; ?></label>
							</div>
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<label>12th board percentage : <?php echo $user_twelve_per; ?></label>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-4">
								<label>Programme : <?php echo $user_program; ?></label>
							</div>
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<label>Registration No : <?php echo $user_registration_no; ?></label>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-4">
								<label>Department : <?php echo $user_dept; ?></label>
							</div>
							<div class="col-md-4">
								<label>Roll No : <?php echo $user_roll; ?></label>
							</div>
							<div class="col-md-4">
								<label>Semester : <?php echo $user_sem; ?></label>
							</div>
						</div><br>
						
					</div></fieldset>
				</div>

<?php
}
?>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>
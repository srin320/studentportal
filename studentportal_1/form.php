<!DOCTYPE html>
<html lang="en">

<html>
    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scal=1">
	<meta name="description" content="A basic Hello world example for bootstrap">
	<meta name="author" content="Your name">
	<title>Registration</title>

	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="basic-templatecopy.css">
        
    
        
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
                        <li><a href="admin.php" style="color: oldlace;"><span class="glyphicon glyphicon-lock"></span> Admin</a></li>
                        <li><a href="member.php" style="color: oldlace;"><span class="glyphicon glyphicon-user"></span> Member</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<center><h3>REGISTRATION FORM</h3></center>
        <marquee class="padding-top-10" style="color:darkred; font-family:serif; font-weight:bold;">Please fill up all the fields properly in the below form</marquee>
		<div class="container">
		<div class="container col-md-12 padding-top-10">
            <div class="panel panel-default">
                <div class="panel-heading">Personal Details :</div>
                <div class="panel-body">
                	<form name="form1" id="contactform" method="post" action="process.php" enctype="multipart/form-data">
                    <div class="row">
                		<div class="padding-top-10 col-md-4">
                			<label for="firstName" class="control-label">First Name :</label>
                			<input type="text" name="txtFname" class="form-control" id="firstName" placeholder="Enter your first name" onBlur="allLetter(document.form1.txtFname)" />
                		</div>
                        <div class="padding-top-10 col-md-4">
                            <label for="middleName" class="control-label">Middle Name :</label>
                            <input type="text" class="form-control" name="txtMname" id="middleName" placeholder="Enter your middle name" />
                        </div>
                		<div class="col-md-4 padding-top-10">
                			<label for="lastName" name="txtLname" class="control-label">Last Name :</label>
                			<input type="text" class="form-control" name="txtLname" id="lastName" placeholder="Enter your last name" onBlur="allLetter(document.form1.txtLname)" />
                		</div>
                    </div>
                    <div class="row">
                        <div class="padding-top-10 col-md-6">
                            <label class="control-label">Gender :</label>
                            <input type="radio" id="gender" name="txtGender" value="Male">Male
                            <input type="radio" id="gender" name="txtGender" value="Female">Female
                        </div>
                    </div>
                    <div class="row">
                        <div class="padding-top-10 col-md-4">
                            <label for="dp" class="control-label">Profile Photo :</label>
                            <input type="file" name="image" id="dp" class="form-control" accept="image/*" onchange="loadFile(event)" />
                        </div>
                        <div class="md-col-4"><img id="output" style="width:150px;"/></div>
                    </div>

                        <script type="text/javascript">
                            var loadFile = function(event)
                            {
                                var output = document.getElementById('output');
                                output.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
                        <div class="row">
                        <div class="padding-top-10 col-md-6">
                            <label for="dob" class="control-label">Date of Birth :</label>
                            <input type="date"   name="txtDob" class="form-control" id="dob" onBlur="ageCount()" />
                        </div>
                        <div class="padding-top-10 col-md-6">
                            <label for="age" class="control-label">Age :</label>
                            <input type="text" name="txtAge"  id="age" class="form-control" placeholder="Age will auto generate here" readonly="readonly" />
                        </div>
                    </div>    
                    <div class="row">
                		<div class="col-md-12 padding-top-10">
                			<label for="address" class="control-label">Address :</label>
                			<input type="textarea" name="txtAdd" class="form-control" id="address" placeholder="Enter your address" />
                		</div>
                    </div>
                    <div class="row">
                		<div class="col-md-5 padding-top-10">
                			<label for="mobile" class="control-label">Mobile No :</label>
                			<input type="text" name="txtMobile" maxlength="10" class="form-control" id="mobile" placeholder="Enter your mobile number" onBlur="allNumber(document.form1.txtMobile)" />
                		</div>
                		<div class="col-md-7 padding-top-10">
                			<label for="email" class="control-label">Email Address :</label>
                			<input type="text" name="txtEmail" class="form-control" id="email" placeholder="Enter your email address" onBlur="emailValidation()" />
                		</div>
                    </div>
                    <div class="row">
                		<div class="col-md-4 padding-top-10">
                			<label for="username" class="control-label">Username :</label>
                			<input type="text" name="txtUname" class="form-control" id="username" placeholder="Enter your username" />
                		</div>
                		<div class="col-md-4 padding-top-10">
                			<label for="password" class="control-label">Password :</label>
                			<input type="password" name="txtPass" class="form-control" id="password" placeholder="Enter a new password" />
                		</div>
                		<div class="col-md-4 padding-top-10">
                			<label for="confirmpassword" class="control-label">Confirm Password :</label>
                			<input type="password" name="txtCpass" class="form-control" id="confirmpassword" placeholder="Please confirm your password" onBlur="checkPassword()" />
                		</div>
                    </div>
                    <div class="row">
                        <div class="padding-top-10 col-md-6">
                            <label class="control-label">Hobbies :</label>
                            <input type="checkbox" name="txtHobbi[]" class="checkbox-custom" value="Music" />Music
                            <input type="checkbox" name="txtHobbi[]" class="checkbox-custom" value="Reading" />Reading
                            <input type="checkbox" name="txtHobbi[]" class="checkbox-custom" value="Art" />Art
                            <input type="checkbox" name="txtHobbi[]" class="checkbox-custom" value="Sports" />Sports
                            <input type="checkbox"  id="other" class="checkbox-custom" />Others
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <input type="textArea" class="form-control" name="txtHobbi[]" id="others" style="display:none;" />
                        </div>    
                    </div>
                        <hr>
                    <div class="row padding-top-10"><span style="padding-left:10px;">Academic Details :</span></div>
                    <div class="row">
                        <div class="padding-top-10 col-md-6">
                            <label for="tenth" class="control-label">10th Percentage :</label>
                            <input type="text" name="txtTen" class="form-control" id="tenth" placeholder="Enter your 10th board %" />
                        </div>
                        <div class="padding-top-10 col-md-6">
                            <label for="twelve" class="control-label">12th Percentage :</label>
                            <input type="text" name="txtTwelve" class="form-control" id="twelve" placeholder="Enter your 12th board %" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 padding-top-10">
                            <label for="program" class="control-label">Programme :</label>
                            <select id="program" name="txtProg" class="form-control">
                                <option selected="" value="">Select Programme</option>
                                
                                <option value="B.Tech">B.Tech</option>
                                <option value="M.Tech">M.Tech</option>
                                <option value="PhD">PhD</option>
                            </select>
                        </div>
                        <div class="padding-top-10 col-md-6">
                            <label for="registrationno" class="control-label">Resitration No :</label>
                            <input type="text" minlength="8" name="txtRegNo" class="form-control" id="registrationno" placeholder="Enter your registration number" onBlur="allNumber(document.form1.txtRegNo)" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 padding-top-10">
                            <label for="dept" class="control-label">Department :</label>
                            <select id="dept" name="txtDept" class="form-control">
                                <option selected="" value="">Select Department</option>
                                
                                <option value="Biotechnology">Biotechnology</option>
                                <option value="Civil Engineering">Civil Engineering</option>
                                <option value="Chemical Engineering">Chemical Engineering</option>
                                <option value="Computer Science Engineering">Computer Science Engineering</option>
                                <option value="Electronics And Communication Engi">Electronics And Communication Engi</option>
                                <option value="Electrical Engineering">Electrical Engineering</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Mechanical Engineering">Mechanical Engineering</option>
                                <option value="Metallurgical And Materials Engineering">Metallurgical And Materials Engineering</option>
                            </select>
                        </div>
                        <div class="padding-top-10 col-md-4">
                            <label for="roll" class="control-label">Roll No :</label>
                            <input type="text" name="txtRoll" class="form-control" id="roll" placeholder="Enter your roll number" onClick="generateRoll()" />
                        </div>
                        <div class="col-md-4 padding-top-10">
                            <label for="sem" class="control-label">Semester :</label>
                            <select id="sem" name="txtSem" class="form-control">
                                <option selected="" value="">Select Semester</option>

                                <option value="First Semester">First Semester</option>
                                <option value="Second Semester">Second Semester</option>
                                <option value="Third Semester">Third Semester</option>
                                <option value="Fourth Semester">Fourth Semester</option>
                                <option value="Fifth Semester">Fifth Semester</option>
                                <option value="Sixth Semester">Sixth Semester</option>
                                <option value="Seventh Semester">Seventh Semester</option>
                                <option value="Eighth Semester">Eighth Semester</option>
                            </select>
                        </div>
                    </div>
                    <div class="padding-top-10">
                        <div class="btn-group" style="float:right;">
                                <button type="submit" id="contactbtn" class="btn btn-success">Register</button>
                                <button type="reset" class="btn btn-danger">Clear</button>
                            
                        </div>
                    </div>
                    </form>
                </div>
            
       	</div>
       

		<!--
			Bootstrap javascript and jQuery should be loaded 
			Placed at the end of the document for faster load times
		-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="validate.js"></script>
       
        
	</body>
</html>
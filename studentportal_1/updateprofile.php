<?php
session_start();
?>
<html>
	<?php

	if(!$_SESSION['username']){

	header('location: member.php');

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
    <title>Update Profile</title>

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="welcome.css">
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
                        <li><a href="welcome.php" style="color: oldlace;"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="logout.php" style="color: oldlace;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
            mysql_connect("localhost","root","root");
                            mysql_select_db("group15");

                            $username=$_SESSION['username'];

                            $query = "select id from student where username='$username'";

                            $run = mysql_query($query);

                            while($row=mysql_fetch_array($run))
                            {
                                $user_id = $row['id'];    
                            }
        ?>


        <div class="container">
        <div class="container col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Personal Details :</div>
                <div class="panel-body">
                    <form name="form1" id="contactform" method="post" action="update.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="padding-top-10 col-md-4">
                            <label for="firstName" class="control-label">First Name :</label>
                            <input type="text" name="txtFname" class="form-control" id="firstName" placeholder="<?php echo $_SESSION['fname'] ?>" onBlur="allLetter(document.form1.txtFname)" />
                        </div>
                        <div class="padding-top-10 col-md-4">
                            <label for="middleName" class="control-label">Middle Name :</label>
                            <input type="text" class="form-control" name="txtMname" id="middleName" placeholder="<?php echo $_SESSION['mname'] ?>" onBlur="allLetter(document.form1.txtMname)" />
                        </div>
                        <div class="col-md-4 padding-top-10">
                            <label for="lastName" name="txtLname" class="control-label">Last Name :</label>
                            <input type="text" class="form-control" name="txtLname" id="lastName" placeholder="<?php echo $_SESSION['lname'] ?>" onBlur="allLetter(document.form1.txtLname)" />
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
                        <div class="col-md-2">
                            <label>Your Current Profile Photo : </label>
                        </div>
                        <div class="col-md-2"><img src="uploads/<?php echo  $_SESSION['image'];?>" style="width:150px;"></div>
                        <div class="padding-top-10 col-md-4">
                            <label for="dp" class="control-label">Choose New Photo :</label>
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
                            <input type="text" name="txtAge"  id="age" class="form-control" placeholder="<?php echo $_SESSION['age'] ?>" readonly="readonly" />
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-12 padding-top-10">
                            <label for="address" class="control-label">Address :</label>
                            <input type="textarea" name="txtAdd" class="form-control" id="address" placeholder="<?php echo $_SESSION['addr'] ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 padding-top-10">
                            <label for="mobile" class="control-label">Mobile No :</label>
                            <input type="text" name="txtMobile" maxlength="10" class="form-control" id="mobile" placeholder="<?php echo $_SESSION['mobile'] ?>" onBlur="allNumber(document.form1.txtMobile)" />
                        </div>
                        <div class="col-md-7 padding-top-10">
                            <label for="email" class="control-label">Email Address :</label>
                            <input type="text" name="txtEmail" class="form-control" id="email" placeholder="<?php echo $_SESSION['email'] ?>" onBlur="emailValidation()" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 padding-top-10">
                            <label for="username" class="control-label">Username :</label>
                            <input type="text" name="txtUname" class="form-control" id="username" placeholder="<?php echo $_SESSION['username'] ?>" />
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
                            <input type="checkbox" name="txtHobbi" class="checkbox-custom" />Music
                            <input type="checkbox" name="txtHobbi" class="checkbox-custom" />Reading
                            <input type="checkbox" name="txtHobbi" class="checkbox-custom" />Art
                            <input type="checkbox" name="txtHobbi" class="checkbox-custom" />Sports
                            <input type="checkbox" name="txtHobbi" id="other" class="checkbox-custom" />Others
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <input type="textArea" class="form-control" name="txtHobbi" id="others" style="display:none;" />
                        </div>    
                    </div>
                        <hr>
                    <div class="row padding-top-10"><span style="padding-left:10px;">Academic Details :</span></div>
                    <div class="row">
                        <div class="padding-top-10 col-md-6">
                            <label for="tenth" class="control-label">10th Percentage :</label>
                            <input type="text" name="txtTen" class="form-control" id="tenth" placeholder="<?php echo $_SESSION['tenth_per'] ?>" />
                        </div>
                        <div class="padding-top-10 col-md-6">
                            <label for="twelve" class="control-label">12th Percentage :</label>
                            <input type="text" name="txtTwelve" class="form-control" id="twelve" placeholder="<?php echo $_SESSION['twelve_per'] ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 padding-top-10">
                            <label for="program" class="control-label">Programme :</label>
                            <select id="program" name="txtProg" class="form-control">
                                <option selected="" value=""><?php echo $_SESSION['program'] ?></option>
                                
                                <option value="B.Tech">B.Tech</option>
                                <option value="M.Tech">M.Tech</option>
                                <option value="PhD">PhD</option>
                            </select>
                        </div>
                        <div class="padding-top-10 col-md-6">
                            <label for="registrationno" class="control-label">Resitration No :</label>
                            <input type="text" minlength="8" name="txtRegNo" class="form-control" id="registrationno" placeholder="<?php echo $_SESSION['registration_no'] ?>" onBlur="allNumber(document.form1.txtRegNo)" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 padding-top-10">
                            <label for="dept" class="control-label">Department :</label>
                            <select id="dept" name="txtDept" class="form-control">
                                <option selected="" value=""><?php echo $_SESSION['dept'] ?></option>
                                
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
                            <input type="text" name="txtRoll" class="form-control" id="roll" placeholder="<?php echo $_SESSION['roll'] ?>" onClick="generateRoll()" />
                        </div>
                        <div class="col-md-4 padding-top-10">
                            <label for="sem" class="control-label">Semester :</label>
                            <select id="sem" name="txtSem" class="form-control">
                                <option selected="" value=""><?php echo $_SESSION['sem'] ?></option>

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
                                <button type="submit" name="update" class="btn btn-success">Update</button>
                                <button type="reset" class="btn btn-danger">Clear</button>
                            
                        </div>
                    </div>
                    </form>
                </div>
            
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="update.js"></script>

</body>
</html>
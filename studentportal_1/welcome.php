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
    <title>Welcome</title>

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="welcome.css">
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
                        <li><a href="logout.php" style="color: oldlace;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>


                        <?php
                        mysql_connect("localhost","root","root");
                                        mysql_select_db("group15");

                                        $username = $_SESSION['username'];

                                        $query = "select id from student where username='$username'";

                                        $run = mysql_query($query);

                                        while($row=mysql_fetch_array($run))
                                        {
                                            $user_id = $row['id'];    
                                        
                        ?>

                        <li><?php echo"<a href='updateprofile.php?user_id=$user_id' style='text-decoration:none; color:oldlace;'><span class='glyphicon glyphicon-share-alt'></span>Update</a>" ?></li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
        </nav>
        

		
        <div class="container  padding-top-10">
                    <!--<ul class="nav nav-tabs nav-justified">-->
                    <fieldset>

                        <div class="row">
                        <div class="col-md-2"></div>
                        <div class="jumbotron col-md-8">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4"><label>WELCOME : <?php echo $_SESSION['fname'] ?></label></div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4"><img src="uploads/<?php echo  $_SESSION['image'];?>" style="width:150px;"></div>
                            </div>
                            <legend>Personal Details :</legend>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>First Name : <?php echo $_SESSION['fname'] ?></label>
                                </div>
                                <div class="col-md-4">
                                    <label>Middle Name : <?php echo $_SESSION['mname'] ?></label>
                                </div>
                                <div class="col-md-4">
                                    <label>Last Name : <?php echo $_SESSION['lname'] ?></label>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Date of Birth : <?php echo $_SESSION['dob'] ?></label>
                                </div>
                                <div class="col-md-4">
                                    <label>Age : <?php echo $_SESSION['age'] ?></label>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Mobile No. : <?php echo $_SESSION['mobile'] ?></label>
                                </div>
                                        <div class="col-md-4">
                                    <label>Username : <?php echo $_SESSION['username'] ?></label>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email : <?php echo $_SESSION['email'] ?></label>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <label>Address : <?php echo $_SESSION['addr'] ?></label>
                                </div>
                            
                        </div><br>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Hobbies : <?php echo $_SESSION['hobbies'] ?></label>
                            </div>
                        </div><br>
                        <br>
                        <legend>Academic Details :</legend>

                        <div class="row">
                            <div class="col-md-4">
                                <label>10th board percentage : <?php echo $_SESSION['tenth_per'] ?></label>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <label>12th board percentage : <?php echo $_SESSION['twelve_per'] ?></label>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Programme : <?php echo $_SESSION['program'] ?></label>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <label>Registration No : <?php echo $_SESSION['registration_no'] ?></label>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Department : <?php echo $_SESSION['dept'] ?></label>
                            </div>
                            <div class="col-md-4">
                                <label>Roll No : <?php echo $_SESSION['roll'] ?></label>
                            </div>
                            <div class="col-md-4">
                                <label>Semester : <?php echo $_SESSION['sem'] ?></label>
                            </div>
                        </div><br>
                        
                    </div></fieldset>
                </div>

		
	<iframe id="dz-frame" style="border: none; border-top-left-radius: 10px; overflow: hidden; position: fixed; bottom: 0px; right: 0px; z-index: 999; display: none;" seamless="seamless"> 
    </iframe>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    </body></html>
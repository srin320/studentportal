<?php
session_start();
?>

	<?php

	if(!$_SESSION['username']){

	header('location: member.php');

}
?>
<html>
    <head><title>Thank you!</title>
    	<link rel="stylesheet" href="css/bootstrap.min.css"/>
    </head>
   <body style="background-image:url('orange-wallpaper-20.jpg');"></body>



	<?php
		mysql_connect('localhost','root','root');
		mysql_select_db('group15');

		$username = $_SESSION['username'];
		$query = "select id from student where username='$username'";

        $run = mysql_query($query);

        while($row=mysql_fetch_array($run))
        {
            $user_id = $row['id'];    
        }

		if(isset($_POST['update']))
		{

			$registration_no=$_POST['txtRegNo'];
			$fname=$_POST['txtFname'];
			$mname=$_POST['txtMname'];
			$lname=$_POST['txtLname'];
			$mobile=$_POST['txtMobile'];
			$email=$_POST['txtEmail'];
			$username=$_POST['txtUname'];
			$password=$_POST['txtPass'];
			$roll=$_POST['txtRoll'];
			$dob=$_POST['txtDob'];
			$age=$_POST['txtAge'];
			$addr=$_POST['txtAdd'];
			$tenth_per=$_POST['txtTen'];
			$twelve_per=$_POST['txtTwelve'];
			$program=$_POST['txtProg'];
			$dept=$_POST['txtDept'];
			$sem=$_POST['txtSem'];
			//$gender=$_POST['txtGender'];
			$hobbies=$_POST['txtHobbi'];
			$image=$_FILES["image"]["name"];

			if($registration_no==''&&$fname==''&&$mname==''&&$lname==''&&$mobile==''&&$email==''&&$username==''&&$password==''&&$roll==''&&$dob==''&&$age==''&&$addr==''&&$tenth_per==''&&$twelve_per==''&&$program==''&&$dept==''&&$sem==''&&$hobbies==''&&$image=='')
			{
				echo "You haven't updated anything!";
				echo "<a href='updateprofile.php'><span class='glyphicon glyphicon-log-in'>Back</span></a>";
			}
			else
			{
				if($registration_no!=''){
					mysql_query("UPDATE student SET registration_no='$registration_no' WHERE id='$user_id'");
				}
				if($fname!=''){
					mysql_query("UPDATE student SET fname='$fname' WHERE id='$user_id'");
				}
				if($mname!=''){
					mysql_query("UPDATE student SET mname='$mname' WHERE id='$user_id'");
				}
				if($lname!=''){
					mysql_query("UPDATE student SET lname='$lname' WHERE id='$user_id'");
				}
				if($mobile!=''){
					mysql_query("UPDATE student SET mobile='$mobile' WHERE id='$user_id'");
				}
				if($email!=''){
					mysql_query("UPDATE student SET email='$email' WHERE id='$user_id'");
				}
				if($username!=''){
					mysql_query("UPDATE student SET username='$username' WHERE id='$user_id'");
				}
				if($password!=''){
					mysql_query("UPDATE student SET password='$password' WHERE id='$user_id'");
				}
				if($roll!=''){
					mysql_query("UPDATE student SET roll='$roll' WHERE id='$user_id'");
				}
				if($dob!=''){
					mysql_query("UPDATE student SET dob='$dob' WHERE id='$user_id'");
				}
				if($age!=''){
					mysql_query("UPDATE student SET ='$age' WHERE id='$user_id'");
				}
				if($addr!=''){
					mysql_query("UPDATE student SET addr='$addr' WHERE id='$user_id'");
				}
				if($tenth_per!=''){
					mysql_query("UPDATE student SET tenth_per='$tenth_per' WHERE id='$user_id'");
				}
				if($twelve_per!=''){
					mysql_query("UPDATE student SET twelve_per='$twelve_per' WHERE id='$user_id'");
				}
				if($program!=''){
					mysql_query("UPDATE student SET program='$program' WHERE id='$user_id'");
				}
				if($dept!=''){
					mysql_query("UPDATE student SET dept='$dept' WHERE id='$user_id'");
				}
				if($sem!=''){
					mysql_query("UPDATE student SET sem='$sem' WHERE id='$user_id'");
				}
				if($hobbies!=''){
					mysql_query("UPDATE student SET hobbies='$hobbies' WHERE id='$user_id'");
				}
				if( $image!=''){
					mysql_query("UPDATE student SET image='$image' WHERE id='$user_id'");

					$target_dir = "uploads/";
					$target_file = $target_dir . basename($_FILES["image"]["name"]);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					// Check if image file is a actual image or fake image
					if(isset($_POST["submit"])) {
					    $check = getimagesize($_FILES["image"]["tmp_name"]);
					    if($check !== false) {
					        echo "File is an image - " . $check["mime"] . ".";
					        $uploadOk = 1;
					    } else {
					        echo "File is not an image.";
					        $uploadOk = 0;
					    }
					}
					// Check if file already exists
					if (file_exists($target_file)) {
					    echo "Sorry, file already exists.";
					    $uploadOk = 0;
					}
					// Check file size
					if ($_FILES["image"]["size"] > 500000) {
					    echo "Sorry, your file is too large.";
					    $uploadOk = 0;
					}
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
					    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					    $uploadOk = 0;
					}
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
					    echo "Sorry, your file was not uploaded.";
					// if everything is ok, try to upload file
					} else {
					    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
					        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
					    } else {
					        echo "Sorry, there was an error uploading your file.";
					    }
					}
					
				}
				
				
					echo "Successfully updated! Please re-login!";
					echo "<p><a href='logout.php'><span class='glyphicon glyphicon-log-out'>Logout</span></a></p>";
				
			}

		}
			mysql_close();

			?>
	</html>


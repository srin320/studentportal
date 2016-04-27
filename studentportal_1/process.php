<html>
    <head><title>Thank you!</title></head>
    <body style="background-image:url('orange-wallpaper-20.jpg');"></body>
</html>

<?php

mysql_connect('localhost','root','root');
mysql_select_db('group15');

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
$gender=$_POST['txtGender'];
//$otherhobby=$_POST['otherHobbi'];
$image=$_FILES["image"]["name"];


$query = mysql_query("select * from student where username='$username'");



if(mysql_num_rows($query)>0)
{
    echo "Duplicate username!!!";
}    


else
{
    
    $checkbox1=$_POST['txtHobbi'];
    $chk="";  
    foreach($checkbox1 as $chk1)  
       {  
          $chk .= $chk1.",";  
       }  
      


    $sql = mysql_query("INSERT INTO student (id,registration_no,fname,mname,lname,mobile,email,username,password,roll,dob,age,addr,tenth_per,twelve_per,program,dept,sem,gender,type,valid,image,hobbies)
VALUES ('','$registration_no','$fname','$mname','$lname','$mobile','$email','$username','$password','$roll','$dob','$age','$addr','$tenth_per','$twelve_per','$program','$dept','$sem','$gender','a',0,'$image','$chk')");

    echo "Thank you!!!";
 
 /*for ($i=0; $i < sizeof('txtHobbi'); $i++) { 
     mysql_query("INSERT INTO student(hobbies) VALUES('$hobbies[i]'')");
 }*/


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

echo "<html><p><h1><a href='member.php'  style='text-decoration:none; color:black'>Login</a></h1></p></html>";
 
mysql_close();

?>
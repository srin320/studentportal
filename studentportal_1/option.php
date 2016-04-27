<?php
mysql_connect('localhost','root','root');
mysql_select_db('group15');

$user_id = $_GET['user_id'];
$type = $_GET['type'];

if($type=='a'){
	mysql_query("UPDATE student SET type='d' WHERE id='$user_id'");
	header('location: registereduser.php?type=user');	
}else if ($type=='d') {
	mysql_query("UPDATE student SET type='a' WHERE id='$user_id'");
	header('location: registereduser.php?type=user');
}

?>
<?php
mysql_connect('localhost','root','root');
mysql_select_db('group15');

$user_id = $_GET['user_id'];
$valid = $_GET['valid'];

if($type==0){
	mysql_query("UPDATE student SET valid=1 WHERE id='$user_id'");
	header('location: newuser.php?valid=user');	
}

?>
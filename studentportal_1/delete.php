<?php
mysql_connect('localhost','root','root');
mysql_select_db('group15');

$delete_id = $_GET['del'];

$query = "delete from student where id='$delete_id'";

if(mysql_query($query))
{
	echo "<script>window.open('registereduser.php','_self')</script>";	
}

?>
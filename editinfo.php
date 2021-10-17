<?php
session_start();
include 'dbcon.php';
$uname = $_SESSION['uname'];
$change = $_GET['change'];
$val = $_GET['val'];
	$res = pg_query($con,"update student set $change = '$val' where uname = '$uname'");
	if($res)
	{
		echo "success";
		if($change == 'uname')
			$_SESSION['uname'] = $val;
	}
	else 	
		echo "failed";
?>							

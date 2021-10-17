<?php

include "dbcon.php";

$s = $_POST['ch'];
$uname = $_POST['uname'];
$name = $_POST['name'];
$email = $_POST['email'];
$phn = $_POST['phn'];
$pwd = $_POST['pwd1'];

$row = array($uname,$name,$email,$phn,$pwd);

$result = pg_query($con,"insert into student values('$uname','$name','$email','$phn','$pwd')");

if(pg_affected_rows($result))
	header('Location:index.html');
else
	header('Location:signup.html');
?>



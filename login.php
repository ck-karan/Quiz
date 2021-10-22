<?php
	session_start();

	include "dbcon.php";

	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];
	$ch = $_POST['ch'];


	if($ch=="student")
	{
		$res=pg_query($con,"select password from student where uname = '$uname'");
	}
	else
	{
		$res=pg_query($con,"select password from admin where uname = '$uname'");
	}
                
	if($row = pg_fetch_row($res))
	{   
            if($pwd == $row[0])        
            {
                $_SESSION['uname']=$uname;
		
		if($ch=="student")
			header("Location: home.php");
		else
			header("Location: homeAdmin.php");
            }
            else header("Location: relogin.html");
        }
        else{
            	header("Location: relogin.html");
            }	
?>

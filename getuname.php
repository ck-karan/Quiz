<?php

include "dbcon.php";

$s = $_GET['s'];


$res=pg_query($con,"select uname from student");
$f=0;
if(!($s=="" || $s==null))
{
	while ($n=pg_fetch_row($res))
	{
		if($s==$n[0])
		{
			$f=1;
		}
	}
}
else
	die();


if($f==1)
	echo "<font color='red'> $s User Name not Available.</font>";
else	
	echo "<font color='green'> $s User Name is Available.</font>";


?>

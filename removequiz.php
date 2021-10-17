<?php
include "dbcon.php";

$qname = $_POST['qname'];

$res = pg_query($con,"drop table $qname") or die("failed");

$result = "res_".$qname;
$res = pg_query($con,"drop table $result") or die("failed");

$res = pg_query($con,"delete from totquiz where qname='$qname'") or die("Failed 2");
echo "<center>done <br><br>";
//header('Location:admin.php');
?>
Click <a href="admin.php">here</a> for Admin page.
</center>

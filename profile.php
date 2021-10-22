<?php
session_start();
if(!(isset($_SESSION['uname'])))
    header("Location:index.html");
	include "dbcon.php";
?>

<script>

//checking uname available or not by using ajax.

function show(s)
{
val = prompt("Enter new value")
x = new XMLHttpRequest()
x.open("GET","editinfo.php?change="+s+"&val="+val,true)
x.send()
x.onreadystatechange = function()
        {
                if(x.readyState==4 && x.status==200)
                alert(x.responseText)
        }
}
</script>

<head>
        <title>Profile</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
include "header.php";
?>

<div class="col-xs-12" style="position: relative; padding-right: 0px; background-color: orange;margin: 0px 0px 50px;">
                                <h1 style="line-height: 40px; font-size: 30px; font-family: Verdana; font-weight: normal; padding: 10px; margin: 10px">
                                <center>Profile</center>

<?php
$uname = $_SESSION['uname'];
?>

 </h1>
<?php

echo "<center>";
$res = pg_query($con,"select * from student where uname='$uname'");
echo "<table border=1><tr><th>User Name</th><th>Name</th><th>Email ID</th><th>Phone No</th></tr>";
while($s  = pg_fetch_array($res))
	echo "<tr><td>$s[0]</td><td>$s[1]</td><td>$s[2]</td><td>$s[3]</td></tr>";

?>
<tr><td><button class="btn btn-info" onclick="show('uname')">change</button></td><td><button class="btn btn-info" onclick="show('name')">change</button></td><td><center><button class="btn btn-info" onclick="show('email')">change</button></td><td><button class="btn btn-info" onclick="show('phno')">change</button></td></tr>
</table><br><br>
<b>Change Password :</b>  <a href='editinfo.php?change=pwd'><button class="btn btn-info">change</button></a>
</center>

<div id='id1'></div>
    <?php include "footer.php"; ?>
</body>


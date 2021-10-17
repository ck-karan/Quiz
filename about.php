<?php
session_start();
if(!(isset($_SESSION['uname'])))
    header("Location:index.html");
        include "dbcon.php";
?>

<head>
        <title>About Us</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
include "header.php";
?>

<div class="col-xs-12" style="position: relative; padding-right: 0px; background-color: orange;margin: 0px 0px 50px;">
                                <h1 style="line-height: 40px; font-size: 30px; font-family: Verdana; font-weight: normal; padding: 10px; margin: 10px">
                                <center>About Us</center>
                                </h1>
</div>

<article style='padding:20px;'>
<table align='center' style='background:orange;padding:20px;'>
<tr>
	<td><img src='images/1.jpg' width='200px' height='200px'/>
	<td>
	<b>Name:</b>Karan Chavan<br>
	<b>Roll No:</b>20122<br>
	<b>Class:</b>MCA I year<br>
	<b>Mob no:</b>8605489677<br>
	</td>
</tr>
</table><hr style='width:50%;'>
<table align='center' style='background:orange;padding:20px;'>
<tr style='border:1px solid red;'>
	<td><img src='images/2.jpg' width='200px' height='200px'/>
	<td>
	<b>Name:</b>Anamika Dawar<br>
	<b>Roll No:</b><br>
	<b>Class:</b>MCA I year<br>
	<b>Mob no:</b>--<br>
	</td>
</tr>
</table>
</article>

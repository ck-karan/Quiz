<?php
session_start();
include "dbcon.php";
?>

<head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
<?php
include "header.php";
?>
</center>

<div class="col-xs-12" style="position: relative; padding-right: 0px; background-color: orange;margin: 0px 0px 50px;">
                                <h1 style="line-height: 40px; font-size: 30px; font-family: Verdana; font-weight: normal; padding: 10px; margin: 10px">
                                <center>Results</center>
                                </h1>
</div>
<h2 style="color:darkred;" align="right">
<a href="profile.php">
<?php
echo $_SESSION['uname']."</a>&emsp;&emsp;&emsp;&emsp;    ";
?>
</h2>


<center>
<form action="result.php?who=student" method='post'>
<select name='qname'><option value='none'>Select Quiz</option>

<?php
$res = pg_query($con,"select * from totquiz");

while($s = pg_fetch_array($res))
 echo "<option value=$s[1]>$s[1]</option>";
?>

</select>
&emsp;:&emsp; <input type='submit' value='View Scores'>
</form>
</center>

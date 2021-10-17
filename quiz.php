<?php
session_start();
if(!(isset($_SESSION['uname'])))
    header("Location:index.html");
include "dbcon.php";
?>

<head>
        <title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<center>
<?php
include "header.php";
?>

 <div class="col-xs-12" style="position: relative; padding-right: 0px; background-color: orange;margin: 0px 0px 50px;">
                                <h1 style="line-height: 40px; font-size: 20px; font-family: Verdana; font-weight: normal; padding: 10px; margin: 10px">
                                    <b> Online Test | Apptitude Test</b>
                                </h1>
 </div>

<h2 style="color:darkred;" align="right">
<a href="profile.php">
<?php
echo $_SESSION['uname']."</a>&emsp;&emsp;&emsp;&emsp;    ";
?>
</h2>

<?php

$res = pg_query($con,"select qname,info from totquiz");

while($s=pg_fetch_row($res))
{

?>
<div class="quiz">
<h2><u><?php echo $s[0];  ?></u></h2>
<h4><?php echo $s[1]; ?></h4>
<a href='test.php?s=<?php echo $s[0]; ?>'><button>Take Test</button></a>
</div>
<?php
}
include "footer.php";
?>
</center>

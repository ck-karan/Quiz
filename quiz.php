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

<?php

$res = pg_query($con,"select qname,info from totquiz");

while($s=pg_fetch_row($res))
{

?>

<div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $s[0];  ?></h5>
        <p class="card-text"><?php echo $s[1]; ?></p>
        <a href='test.php?s=<?php echo $s[0]; ?>' class="btn btn-primary">Take Test</a>
      </div>
    </div>
</div>
<br><br>
<?php
}
include "footer.php";
?>
</center>

<?php
session_start();
echo "<br><h3 align='right'>Admin : ".$_SESSION['uname']."&emsp;&emsp;&emsp;&emsp;<h3>";
?>

<a href='logout.php'><h3 style='color:red'; align='right'>Log Out<h3></a>

<center>
<form action = 'createquiz.php' method = 'post'>
New Quiz Name : <input type = 'text' name='qname' required><br><br>
About Quiz : <textarea name='info'></textarea> <br><br>
<input type = 'submit' value='Add'>
</form>


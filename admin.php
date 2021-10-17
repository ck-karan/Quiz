<?php
session_start();
?>
<a href='logout.php'><h3 style='color:red'; align='right'>Log Out<h3></a>
<br>


<div class="col-xs-12" style="position: relative; padding-right: 0px; background-color: grey;margin: 0px 0px 50px;">
                                <h1 style="line-height: 40px; font-size: 30px; font-family: Verdana; font-weight: normal; padding: 10px; margin: 10px">
                                <center>Admin Panel</center>
                                </h1>
</div>
<?php
include "dbcon.php";
$uname = $_SESSION['uname'];

echo "<h2 align='right'>Admin : ".$uname."&emsp;&emsp;&emsp;&emsp;</h2>";
?>
<center>
<h1> Total Quizes</h1>
<br>
<br>

<?php
$res = pg_query($con,"select * from totquiz");
echo "<table border=1><tr><th>Sr.No.</th><th>Quiz Name</th><th>Hits</th></tr>";
$i=1;
while($s = pg_fetch_array($res))
{
	echo "<tr><td>".$i++.")</td><td>$s[1]</td><td>$s[2]</td></tr>";
}
echo "</table>";
?>
<br>
<br>
<br>


<!--Add New QUIZ -->
Add Quiz: &emsp;<a href='addquiz1.php'><button>Add</button></a>
<br><br><br>






<!--For DELETE Quiz -->
<?php
$res = pg_query($con,"select * from totquiz");
?>

<form action="removequiz.php" method='post'>
<select name='qname'><option value='none'>Select Quiz</option>

<?php 
while($s = pg_fetch_array($res))
 echo "<option value=$s[1]>$s[1]</option>";
?>

</select>
&emsp;:&emsp; <input type='submit' value='Remove Quiz'>
</form>




<!-- For Result Set of Quizes -->
<?php
$res = pg_query($con,"select * from totquiz");
?>

<form action="result.php" method='post'>
<select name='qname'><option value='none'>Select Quiz</option>

<?php
while($s = pg_fetch_array($res))
 echo "<option value=$s[1]>$s[1]</option>";
?>

</select>
&emsp;:&emsp; <input type='submit' value='View Scores'>
</form>


</center>

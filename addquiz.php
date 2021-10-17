<?php 
session_start();
?>

<a href='logout.php'><h3 style='color:red'; align='right'>Log Out<h3></a>

<?php
$quiz = $_GET['qname'];
echo "<br><h3 align='right'>Admin : ".$_SESSION['uname']."&emsp;&emsp;&emsp;&emsp;<h3>";
?>

<center>
<form action = 'addquiz.php?qname=<?php echo $quiz; ?>' method = 'post'>

Que 1 : <input type='text' name='que' required><br><br>
        option a : <input type='text' name='a' required>&emsp;&emsp;&emsp;&emsp;
        option b : <input type='text' name='b' required><br><br>
        option c : <input type='text' name='c' required>&emsp;&emsp;&emsp;&emsp;
        option d : <input type='text' name='d' required><br><br>
							<br>
	answer : <input type='text' name='ans' required><br>
<!--	<input type = 'hidden' name = 'qname' value = '<?php $_GET['qname']; ?>'>-->
<br><br>

<br><br>
<input type='submit' value= 'Add que'>
</form>
<br><br>
<a href = "admin.php"><button >Submit Quiz</button></a>



<?php
include "dbcon.php";
$qname = $_GET['qname'];
echo $qname;

$que = $_POST['que'];
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$ans = $_POST['ans'];

if(!($que == "" || $que == null))
{
$res = pg_query($con,"insert into $qname(que,a,b,c,d,ans) values('$que','$a','$b','$c','$d','$ans')") or die("failed");
}
$res = pg_query($con,"select * from $qname");

echo "<br><br><table border=1><tr><th>Sr.No.</th><th>Question</th><th>Option A</th><th>Option B</th><th>Option C</th><th>Option D</th><th>Answer</th></tr>";

while($s = pg_fetch_array($res))
{
        echo "<tr><td>$s[0])</td><td>$s[1]</td><td>$s[2]</td><td>$s[3]</td><td>$s[4]</td><td>$s[5]</td><td>$s[6]</td></tr>";
}
echo "</table>";


?>
</center>




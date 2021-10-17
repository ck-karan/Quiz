<?php

session_start();
if(!(isset($_SESSION['uname'])))
    header("Location:index.html");

include "dbcon.php";
?>
<head>
        <title>Score</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php

$qname = $_GET['qname'];

$g = array();//given answers


for($i=1;$i<=10;$i++)
{
	array_push($g,$_POST["$i"]);
}


$c = array();//correct answers

$res = pg_query($con,"select ans from $qname");

while($s = pg_fetch_row($res))
{
	array_push($c,$s[0]);
}

$score=0;

for($i=0;$i<10;$i++)
{
	if($c[$i]==$g[$i])
		$score+=2;
}
echo "<center><br><br><br>Total Score : 20<br><br><br><b><u>Your score is ".$score."</u></b>";

$uname = $_SESSION['uname'];

$result = "res_".$qname;

$date = date("Y/m/d");

$res = pg_query($con,"insert into $result(name,score,date) values('$uname','$score','$date')") or die("failed result");

/*$res = pg_query($con,"select highscore from $qname");
$s = pg_fetch_row($res);
if($score >= $s)
{
	echo "You are a high scorer.";
	pg_query($con,"update totquiz set top_student=$uname highscore=$score where qname=$qname");
}
else if($score == $s )
{
	$res = pg_query($con,"select top_student from totquiz where qname='$qname'");
	$stud = pg_fetch_row($res);
	if($stud == $uname)
	{
		echo "You again got a High score.";

	}
	
}*/
?>
<br><br>

<h3>Click  <a href='home.php'>here</a> for Home Page.</h3>
</center>
<?php include "footer.php"; ?>	

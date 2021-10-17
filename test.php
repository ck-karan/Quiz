<?php
session_start();
if(!(isset($_SESSION['uname'])))
    header("Location:index.html");
$sub = $_GET['s'];
echo "<br>";
include "dbcon.php";

$res = pg_query($con,"select hits from totquiz where qname='$sub'"); //fetch hit count of quiz
$s=pg_fetch_row($res);

$hits=$s[0];
$hits++;

$res = pg_query($con,"update totquiz set hits='$hits' where qname='$sub'") or die("failed"); //update hit count of quiz

?>
<h2 style="color:darkred;" align="right">
<a href="profile.php">
<?php
echo $_SESSION['uname']."</a>&emsp;&emsp;&emsp;&emsp;    "; //profile
?></a>
</h2>

<?php
echo "<div class='container-quiz' style='padding-top: 55px;'>
                <div class='col-xs-12 no-padding '>
                        <div class='col-xs-12' style='position: relative; padding-right: 0px; background-color: orange;margin: 0px 0px 50px;'>
                                <h1 style='line-height: 20px; font-size: 20px; font-family: Verdana; font-weight: normal; padding: 10px; margin: 10px'>
                                        Online Test |".$sub ." </h1>
                        </div>
                </div>
        </div>";
?>
<!-- Time Counter -->
<h3 align = 'right'><span id='timeleft'></span> Remaining.
</h3>

<?php
$res = pg_query($con,"select * from $sub");
echo "<form action=\"score.php?qname=$sub\" id='form1' method='post' onsubmit='return sure()'>";

while($s=pg_fetch_row($res))
{
	echo "<h4>".$s[0].". ".$s[1].
		"</h4><ol>	<li>	<input type='radio' name='".$s[0]."' value='a'>".$s[2].
			"<li>	<input type='radio' name='".$s[0]."' value='b'>".$s[3].
			"<li>	<input type='radio' name='".$s[0]."' value='c'>".$s[4].
			"<li>	<input type='radio' name='".$s[0]."' value='d'>".$s[5]."<br><br> </ol>";
}
echo "<input type='submit' value='submit'></form>";
?>

<!--js for submit test-->
<script>
function sure() 
{
	return confirm('Are you sure to submit test ?')
}
</script>


<!-- js for counter -->

<script>

min=1;
sec=60;

function countDown()
{
if(min>=1)
	document.getElementById("timeleft").innerHTML= "<h3 style='color:green';>"+min+" minutes "+sec+" seconds ";
else
	document.getElementById("timeleft").innerHTML= "<h3 style='color:red';>"+min+" minutes "+sec+" seconds ";

if(min==0 && sec==0)
{
	document.getElementById("form1").submit();
}
else
{
	sec--;
	if(sec ==0 && min > 0)
	{
		min--;
		sec=60;
	}
}
}
setInterval("countDown()",1000);

</script>


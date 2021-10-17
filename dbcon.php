<?php



$con=pg_connect("host=localhost port=5432 dbname=quiz user=postgres password=1234") or die("failed to connect dbserver.");
/*$res=pg_query($con,"select * from student");

while ($s=pg_fetch_row($res))
	echo "$s[0] <br> $s[1] <br> $s[2] <br> $s[3] <br> $s[4]<br>";
*/
?>

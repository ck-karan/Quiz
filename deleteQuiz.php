<?php
session_start();
include "dbcon.php";
include "adminHeader.php";
?>
<?php
$res = pg_query($con,"select * from totquiz");
?>
<br>
<center>
<form action="removequiz.php" method='post'>
<select name='qname'><option value='none'>Select Quiz</option>

<?php 
while($s = pg_fetch_array($res))
 echo "<option value=$s[1]>$s[1]</option>";
?>

</select>
&emsp;:&emsp; <input type='submit' class="btn btn-info" value='Remove Quiz'>
</form>
</center>
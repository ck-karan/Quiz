<?php
session_start();
include "dbcon.php";
include "adminHeader.php"
?>

<br>
<br>
<center>
<?php
$res = pg_query($con,"select * from totquiz");
?>

<form action="result.php?who=admin" method='post'>
    Select Quiz :
<select name='qname'><option value='none'>Select Quiz</option>

<?php
while($s = pg_fetch_array($res))
    echo "<option value=$s[1]>$s[1]</option>";
?>
</select>
<br><br>
<input type="submit" class="btn btn-info" value='submit'>
</form>
</center>

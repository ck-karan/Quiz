<?php
session_start();
include "dbcon.php";
?>

<a href='logout.php'><h3 style='color:red'; align='right'>Log Out<h3></a>
<br>


<div class="col-xs-12" style="position: relative; padding-right: 0px; background-color: grey;margin: 0px 0px 50px;">
                                <h1 style="line-height: 40px; font-size: 30px; font-family: Verdana; font-weight: normal; padding: 10px; margin: 10px">
                                <center>Admin Panel</center>
                                </h1>
</div>
<?php
$uname = $_SESSION['uname'];

echo "<h2 align='right'>Admin : ".$uname."&emsp;&emsp;&emsp;&emsp;</h2>";
?>
<center>
<h1> Total Quizes</h1>
<br>
<br>

<?php
$res = pg_query($con,"select * from totquiz");
$i=1;
?>
<br>
<br>

<div class="container">		
	<div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">					
				<button type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-info">Export To Excel</button>
			</form>
		</div>
	</div>				  
	<table id="">
		<tr>
			<th>Sr.No.</th>
			<th>Quiz Name</th>
			<th>Hits</th>
			<th>Difficulty</th>			
		</tr>
			<?php while($s = pg_fetch_array($res)) { ?>
              <?php  echo "<tr><td>".$i++.")</td><td>$s[1]</td><td>$s[2]</td><td>$s[4]</td></tr>" ?>
			<?php } ?>
    </table>		
</div>



<br>
<br>


<!--Add New QUIZ -->
Add Quiz: &emsp;<a href='addQuizSelect.php'><button>Add</button></a>
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


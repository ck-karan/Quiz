<?php
session_start();
include "dbcon.php";
include "adminHeader.php";

?>

<?php
$res = pg_query($con,"select * from totquiz");
$developersData = array();
while( $developer = pg_fetch_assoc($res) ) {
	$developersData[] = $developer;
}
$i=1;
?>
<br>
<br>
<center>
<div class="container">		
	<div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action="exportToExcel.php?option=1" method="post">					
				<button type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-info">Export To Excel</button>
			</form>
		</div>
	</div>				  
	<table id="quizTable">
		<tr>
			<th>Sr.No.</th>
			<th>Quiz Name</th>
			<th>Hits</th>
			<th>Difficulty</th>			
		</tr>
			<?php foreach($developersData as $developer) { ?>
              <tr>
                  <td> <?php echo $i++; ?></td>
                  <td> <?php echo $developer['qname']; ?> </td>
                  <td> <?php echo $developer['hits']; ?> </td>
                  <td> <?php echo $developer['difficulty']; ?></td>
                </tr>
			<?php } ?>
    </table>		
</div>
<br>
<br>
<br>
<form action="viewQuiz.php" method="post">
	View Quiz : <select name='qname'><option value='none'>Select Quiz</option>
	<?php
	$res = pg_query($con,"select * from totquiz");
	while($s = pg_fetch_array($res))
    	echo "<option value=$s[1]>$s[1]</option>";
	?>
	</select>
	<br><br>
	<input type="submit" class="btn btn-info" value='View Quiz'>
</form>

<center>
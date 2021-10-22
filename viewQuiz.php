<?php
session_start();
include "dbcon.php";
include "adminHeader.php";

$sub = $_POST['qname'];
$res = pg_query($con,"select * from $sub");

echo "<br><center><h3><b>$sub </b></h3>";
?>
<div class="container">		
	<div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action='<?php echo "exportToExcel.php?option=3&qname=".$sub;?>' method="post">					
				<button type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-info">Export To Excel</button>
			</form>
		</div>
	</div>				  
	<table id="quizTable">
		<tr>
			<th>Sr.No.</th>
			<th>Question</th>
			<th>Option A</th>
			<th>Option B</th>
            <th>Option C</th>
            <th>Option D</th>
            <th>Answer</th>			
		</tr>
		<?php while($s = pg_fetch_array($res)) { ?>
              <tr>
                  <td> <?php echo $s[0]; ?></td>
                  <td> <?php echo $s[1]; ?> </td>
                  <td> <?php echo $s[2]; ?> </td>
                  <td> <?php echo $s[3]; ?></td>
                  <td> <?php echo $s[4]; ?></td>
                  <td> <?php echo $s[5]; ?></td>
                  <td> <?php echo $s[6]; ?></td>
                </tr>
			<?php } ?>
    </table>		
</div>
<?php
include "dbcon.php";
$option = $_GET['option'];

//for quizes
if($option == '1'){

    $res = pg_query($con,"select * from totquiz");
    $developersData = array();
    while($developer = pg_fetch_assoc($res) ) {
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
    <center>

<?php
}

//for results
else if($option == '2'){

    $sub = $_GET['qname'];
    $who = $_GET['who'];
    $res = null;
    if($who=="student"){
            $res = pg_query($con,"select * from res_$sub where name ='".($_SESSION['uname'])."'");
    }
    else{
            $res = pg_query($con,"select * from res_$sub");
    }
    echo "<h3><b> $sub </b></h3>";
    ?>
    <div class="container">		
        <div class="well-sm col-sm-12">
            <div class="btn-group pull-right">	
                <form action='<?php echo "exportToExcel.php?option=2&qname=".$qname."&who=".$who;?>' method="post">					
                    <button type="submit" id="dataExport" name="dataExport" value="Export to excel" class="btn btn-info">Export To Excel</button>
                </form>
            </div>
        </div>				  
        <table id="quizTable">
            <tr>
                <th>Sr.No.</th>
                <th>Name</th>
                <th>Score</th>
                <th>Date</th>			
            </tr>
            <?php while($s = pg_fetch_array($res)) { ?>
                <tr>
                    <td> <?php echo $s[0]; ?></td>
                    <td> <?php echo $s[1]; ?> </td>
                    <td> <?php echo $s[2]; ?> </td>
                    <td> <?php echo $s[3]; ?></td>
                    </tr>
                <?php } ?>
        </table>		
    </div>
    <?php
}

//Quiz questions
else if($option == '3'){

    $sub = $_GET['qname'];
    $res = pg_query($con,"select * from $sub");

    echo "<h3><b>$sub </b></h3>";
    ?>
    <div class="container">		
        <div class="well-sm col-sm-12">
            <div class="btn-group pull-right">	
                <form action='' method="post">					
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

<?php
}

//Exporting to excel
if(isset($_POST["dataExport"])) {	
	$fileName = "Report_".date('Ymd') . ".xls";			
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$fileName\"");	
	$showColoumn = false;
	if(!empty($developersData)) {
	  foreach($developersData as $developerInfo) {
		if(!$showColoumn) {		 
		  echo implode("\t", array_keys($developerInfo)) . "\n";
		  $showColoumn = true;
		}
		echo implode("\t", array_values($developerInfo)) . "\n";
	  }
	}
	exit;  
}
?>
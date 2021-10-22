<?php
session_start();
if(!(isset($_SESSION['uname'])))
    header("Location:index.html");
include "dbcon.php";

$who = $_GET['who'];
?>
<body>
    <link rel="stylesheet" type="text/css" href="style.css">
    
<head>
        <title>Results</title>
</head>

<center>
<?php
if($who=="student")
{
        include "header.php";
}
else{
        include "adminHeader.php";
}

echo "<div class='col-xs-12' style='position: relative; padding-right: 0px; background-color:";if($who=="student") echo "orange"; else echo"grey"; echo";margin: 0px 0px 50px;'>
                                <h1 style='line-height: 40px; font-size: 20px; font-family: Verdana; font-weight: normal; padding: 10px; margin: 10px'>
				<b>Results</b>
                                </h1>
</div>";

$qname = $_POST['qname'];
$result = "res_".$qname;

$res = null;
if($who=="student"){
        $res = pg_query($con,"select * from $result where name ='".($_SESSION['uname'])."'");
}
else{
        $res = pg_query($con,"select * from $result");
}
echo "<h3><b>$qname </b></h3>";
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




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

echo "<div class='col-xs-12' style='position: relative; padding-right: 0px; background-color:";if($who=="student") echo "orange"; else echo"grey"; echo";margin: 0px 0px 50px;'>
                                <h1 style='line-height: 40px; font-size: 20px; font-family: Verdana; font-weight: normal; padding: 10px; margin: 10px'>
				<b>Results</b>
                                </h1>
</div>";
?>
    <a href='logout.php'><h3 style='color:red'; align='right'>Log Out<h3></a>
                
<?php
$qname = $_POST['qname'];
$result = "res_".$qname;
echo "<h3><b>$qname </b></h3>";
$res = pg_query($con,"select * from $result");
echo "<table border=1 style='background-color: orange;'><tr><th>Sr.No.</th><th>Name</th><th>Score</th><th>Date</th></tr>";

while($s = pg_fetch_array($res))
{
        echo "<tr><td>$s[0])</td><td>$s[1]</td><td>$s[2]</td><td>$s[3]</td></tr>";
}
echo "</table>";

?> 


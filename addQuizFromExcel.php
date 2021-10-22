<?php
require_once 'vendor/autoload.php';
require_once "dbcon.php";
  
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
  
if (isset($_POST['submit'])) {
  
    $qname = $_POST['qname'];
    $info = $_POST['info'];
    $diff = $_POST['diff'];

    //creating quiz table
    $res = pg_query($con,"create table $qname(sno serial primary key,que text,a text,b text,c text,d text,ans text)") or die("Failed");

    $resultTable = "res_".$qname;

    //creating quiz_result table
    $res = pg_query($con,"create table $resultTable(sno serial primary key,name text,score text,date date)") or die("Failed");
    
    //adding quiz name to total quiz table
    $res = pg_query($con,"insert into totquiz(qname, info, difficulty) values('$qname','$info','$diff')") or die("failed 2");

    //fetching from excel and adding questions to db
    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      
    if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {
      
        $arr_file = explode('.', $_FILES['file']['name']);
        $extension = end($arr_file);
      
        if('csv' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }
  
        $spreadsheet = $reader->load($_FILES['file']['tmp_name']);
  
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
  
        if (!empty($sheetData)) {
            for ($i=1; $i<count($sheetData); $i++) { //skipping first row
                $que 	= $sheetData[$i][0];
                $a = $sheetData[$i][1];
                $b = $sheetData[$i][2];
				$c = $sheetData[$i][3];
				$d = $sheetData[$i][4];
				$ans 	= $sheetData[$i][5];
 
                //$db->query("INSERT INTO USERS(name, email, company) VALUES('$name', '$email', '$company')");
				//echo "Que : " .$que . "\nA : " . $optionA . "\nB : " . $optionB ."\nC : " . $optionC ."\nD : " . $optionD . "\n Ans : " . $ans;
                $res = pg_query($con,"insert into $qname(que,a,b,c,d,ans) values('$que','$a','$b','$c','$d','$ans')") or die("failed");
            }
        }
        echo "\n\nRecords inserted successfully.";
    } else {
        echo "Upload only CSV or Excel file.";
    }
}
?>
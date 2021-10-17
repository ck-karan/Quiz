<?php
include "dbcon.php";
$qname = $_POST['qname'];
$info = $_POST['info'];

$res = pg_query($con,"create table $qname(sno serial primary key,que text,a text,b text,c text,d text,ans text)") or die("Failed");

$result = "res_".$qname;

$res = pg_query($con,"create table $result(sno serial primary key,name text,score text,date date)") or die("Failed");
 
$res = pg_query($con,"insert into totquiz(qname,info) values('$qname','$info')") or die("failed 2");

header("Location:addquiz.php?qname=$qname");
?>


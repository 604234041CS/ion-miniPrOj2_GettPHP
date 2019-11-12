<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
include('config.ini.php');
$contendata = file_get_contents("php://input");
$getdata = json_decode($contendata);

$name = $getdata->name;
$sname = $getdata->sname;
$em = $getdata->em;
$use = $getdata->use;
$pass = $getdata->pass;

$sql = "INSERT INTO member(mem_name,mem_sname,mem_em,mem_use,mem_pass)
VALUES ('$name','$sname','$em','$use','$pass')";
$result = mysqli_query($con,$sql);

?>
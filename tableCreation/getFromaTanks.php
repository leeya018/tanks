<?php 
require 'configDB.php';
session_start();

$name="tank1";///for check


$sql= "SELECT * FROM tanks WHERE name='".$name."'";

$result = $conn->query($sql);
$row_num = $result->num_rows;
if($row_num > 0){
	$row = $result->fetch_assoc();
	print_r($row);
}else{
	echo "no data";
}
?>



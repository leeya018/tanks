<?php 
require 'configDB.php';
session_start();

$name="tank3";
$fireRate=200;
$lifePoints=300;
$image='img/tank3.png';
$sql= "SELECT * FROM tanks WHERE name = "; 



$sql= "INSERT INTO tanks (name,fireRate,lifePoints,image) VALUES ('".$name."','".$fireRate."','".$lifePoints."','".$image."')";
if($conn->query($sql)){
	echo "new row added to tanks table" . "<br>";

}else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>




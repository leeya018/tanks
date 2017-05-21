<?php 
require 'configDB.php';
session_start();

$name="bullet3";
$damage=15;
$image='img/bullet3.png';
$sql= "SELECT * FROM bullets WHERE name = "; 



$sql= "INSERT INTO bullets (name,damage,image) VALUES ('".$name."','".$damage."','".$image."')";
if($conn->query($sql)){
	echo "new row added to bullets table" . "<br>";

}else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>




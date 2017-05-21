<?php 
require 'configDB.php';
session_start();

$sql = "CREATE TABLE purchases (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
userName VARCHAR(30) NOT NULL,
levelGame VARCHAR(30) NOT NULL,
tankName VARCHAR(30) NOT NULL,
weaponName VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

if (!$conn) {
	die("Connection failed: " .  $conn->connect_error);
}
    // use exec() because no results are returned
if($conn->query($sql)){
	echo "Table purchases created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
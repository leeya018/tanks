<?php 
require 'configDB.php';
session_start();

$sql = "CREATE TABLE tanks (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
fireRate INT(10) NOT NULL,
lifePoints INT(50) NOT NULL,
image VARCHAR(50) NOT NULL,
reg_date TIMESTAMP
)";

if (!$conn) {
	die("Connection failed: " .  $conn->connect_error);
}
    // use exec() because no results are returned
if($conn->query($sql)){
	echo "Table tanks created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
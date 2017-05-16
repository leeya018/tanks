<?php 
require 'config.php';
session_start();

$sql = "CREATE TABLE store (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
level INT(11) NOT NULL,
cost INT(11) NOT NULL,
reg_date TIMESTAMP
)";

if (!$conn) {
	die("Connection failed: " .  $conn->connect_error);
}
    // use exec() because no results are returned
if($conn->query($sql)){
	echo "Table store created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
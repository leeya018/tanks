

<?php 
require 'config.php';
session_start();

$sql = "CREATE TABLE skills (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
userName VARCHAR(30) NOT NULL,
skillName VARCHAR(30) NOT NULL,
skillLevel INT(11) NOT NULL,
reg_date TIMESTAMP
)";

if (!$conn) {
	die("Connection failed: " .  $conn->connect_error);
}
    // use exec() because no results are returned
if($conn->query($sql)){
	echo "Table skills created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
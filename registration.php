<?php 
require 'config.php';
session_start();

function enterUserToDB($firstName,$lastName,$userName,$email,$password,$picture){
	$sql= "INSERT INTO users (firstName,lastName,userName,email,password,picture) VALUES ($firstName,$lastName,$userName,$email,$password,$picture)";
	if($conn->query($sql)){
		echo "new row added to users table";
	}else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset($_POST["submit"])){
		if(!empty($_POST["firstName"]) && !empty($_POST["lastName"]) && !empty($_POST["userName"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["picture"]) ){
			$sql = "SELECT * FROM users WHERE userName = '".$_POST["userName"]."'";
			$result = $conn->query($sql);
			$row_num = $result->num_rows;
			if($row_num > 0){
				echo "this userName is allready exist";

			}else{
				$_SESSION["userName"] = $_POST["userName"];
				$_SESSION["firstName"] = $_POST["firstName"];
				enterUserToDB($_POST["firstName"],$_POST["lastName"],$_POST["userName"],$_POST["email"],$_POST["password"],$_POST["picture"]);
			}
		}else{
			echo "you have to fill all the fields";
		}
	}
}
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>registration</h1>
		<form method="post" action="">
			<input type="text" name="firstName" placeholder="enter first name"><br>
			<input type="text" name="lastName" placeholder="enter last name"><br>
			<input type="text" name="userName" placeholder="enter user name"><br>
			<input type="email" name="email" placeholder="enter email"><br>
			<input type="password" name="password" placeholder="enter password"><br>
			<input type="password" name="rePassword" placeholder="reenter password"><br>
			<input type="file" name="picture" placeholder="enter picture"><br>
			<input type="submit" name="submit" value="register">
		</form>
		<a href="login.php">login</a>
	</body>
	</html>
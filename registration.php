<?php 
require 'configDB.php';
session_start();

function addPurchaceFirstTime($conn){
	$sql= "INSERT INTO purchases (userName,levelGame,tankName,weaponName
) VALUES ('". $_SESSION["userName"]."',1,'tank1','bullet1')";
if($conn->query($sql)){
	echo "new row added to purchaces table". "<br>";
}else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

function enterUserToDB($firstName,$lastName,$email,$userName,$picture ,$password,$conn){
	$sql= "INSERT INTO users (firstName,lastName,email,userName,picture,password) VALUES ('".$firstName."','".$lastName."','".$email."','".$userName."','".$picture."','".md5($password)."')";
	if($conn->query($sql)){
		echo "new row added to users table" . "<br>";
		addPurchaceFirstTime($conn);
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
				$_SESSION["lastName"] = $_POST["lastName"];
				enterUserToDB($_POST["firstName"],$_POST["lastName"],$_POST["email"],$_POST["userName"],$_POST["picture"],$_POST["password"], $conn);

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
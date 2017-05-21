<?php 
require 'configDB.php';
session_start();

if(isset($_SESSION["userName"]) ){//if the session is exist
	echo $_SESSION["userName"];
	header('Location: index.php');
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset($_POST["submit"])){
		// if(!empty($_POST["firstName"]){

		if(!empty($_POST["userName"]) || !empty($_POST["password"]) ){
			$sql = "SELECT * FROM users WHERE userName = '".$_POST["userName"]."'" and "password = '".md5($_POST["password"])."'";

			$result = $conn->query($sql);
			$row_num = $result->num_rows;
			if($row_num > 0){
				echo "fsafdsafdsa";
				$row = $result->fetch_assoc();
				print_r($row) ;
				$_SESSION["userName"] = $row["userName"];
				$_SESSION["firstName"] = $row["firstName"];
				$_SESSION["lastName"] = $row["lastName"];
				// header('Location: index.php');
			}else{
				echo "user or password are not correct";
			}

		}else{
			echo "all fields need to init";
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
	<h2>login</h2>
	<form method="post" enctype="multipart/form-data">
		<input type="text" name="userName" placeholder="enter user name">
		<input type="text" name="password" placeholder="enter password">
		<input type="submit" name="submit" value="login">
	</form>
</body>
</html>
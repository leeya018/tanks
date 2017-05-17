<?php 
require 'configDB.php';
session_start();
// echo "wellcome back " . $_SESSION["firstName"] . " " .$_SESSION["lastName"];

?>
<?php echo "wellcome back "; ?>
<a href="profile.php?PID=<?php echo $_SESSION["userName"] ?>"><?php echo  $_SESSION["firstName"] . " " .$_SESSION["lastName"] ?></a>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>you reach to home</h1>
</body>
</html>
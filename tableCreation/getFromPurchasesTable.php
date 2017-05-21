<?php 
function getPurchace(){

	require 'configDB.php';

	session_start();
	$row =null;
// $userName="leeya";///for check
	$userName = $_SESSION["userName"]; 

// $sql= "SELECT * FROM purchases WHERE userName='".$userName."'";

	$sql= "SELECT * FROM tanks WHERE name in (
	SELECT tankName FROM purchases WHERE userName = '".$userName."'
	)";

	$result = $conn->query($sql);
	$row_num = $result->num_rows;
	if($row_num > 0){
		$row = $result->fetch_assoc();
		$_SESSION["tank"] = $row; 
		// print_r($row);
	// }else{
	// 	echo "no data";
	// }

	}
	$sql_bullet= "SELECT * FROM bullets WHERE name in (
	SELECT weaponName FROM purchases WHERE userName = '".$userName."'
	)";
	$row_bullet = null;
	$result_bullet = $conn->query($sql_bullet);
	$row_num_bullet = $result_bullet->num_rows;
	if($row_num_bullet > 0){
		$row_bullet = $result_bullet->fetch_assoc();
		$_SESSION["bullet"] = $row_bullet; 

		
	}
	return $row_bullet;
}
	?>



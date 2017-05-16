<h1>index1</h1>

<?php
//this is a  class
class Man
{
	private $posHor=0;
	private $posVer=0;
	// function __construct() {
	// 	$this->pos = 0;
	// }
	function speak($conversation)
	{
		echo $conversation;
	}
	function eat()
	{
		echo "I want food" . "<br>";
	}
	function draw()
	{
		echo  '<div id="square"></div>'; 	
	}
	function changeColor()
	{
		echo  '<script type="text/javascript">

		document.getElementById("square").style.background = "blue";
	</script>'; 	
}
function right($meter){
	$this->posHor+=$meter;
	echo '<script type="text/javascript">
	document.getElementById("square").style.left ="'.$this->posHor.'px";
</script>';
}
function left($meter){
	$this->posHor+=$meter;
	echo '<script type="text/javascript">
	document.getElementById("square").style.right ="'.$this->posHor.'px";
</script>';
}

function up($meter){
	$this->posVer+=$meter;
	echo '<script type="text/javascript">
	document.getElementById("square").style.bottom ="'.$this->posVer.'px";
</script>';
}
function down($meter){
	$this->posVer+=$meter;
	echo '<script type="text/javascript">
	document.getElementById("square").style.top ="'.$this->posVer.'px";
</script>';
}
}
$conversation = "hey man";
$man = new Man;

$man->eat();
$man->speak($conversation);
$man->draw();
// $man->changeColor();
$man->right(40);
?>




<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#square {
			width: 100px;
			height: 100px;
			background: red;
			position: relative;
			/*right: 30px;*/
		}

	</style>

	<title></title>
</head>
<body>
	<!-- <div id="square"></div> -->


</body>
</html>
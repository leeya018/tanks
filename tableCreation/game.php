


<!DOCTYPE html>
<html>
<head>
	<style type="text/css">

		#tank {
			position: relative;
			width: 220px;
			height: 120px;
		}
		.bullet{
			position: relative;
			width: 82px;
			height: 23px;
			display: inline-block;
		}



	</style>

	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script src="config.js"></script>
	<script src="bullet.js"></script>
	<script src="tank.js"></script>

</head>
<body>
	<div id="tank"></div>
	<!-- <div class="bullet"></div> -->
	<script type="text/javascript">
	// var t = new Tank(321,-200,tankRow); // first is positive, second is negative
	// var b = new Bullet(100,-100,weaponRow); 

	<?php require 'getFromPurchasesTable.php';  getPurchace(); ?>

	var name = '<?php echo strval($_SESSION["tank"]["name"]); ?>';
	var fireRate = <?php echo $_SESSION["tank"]["fireRate"]; ?>;
	var lifePoints = <?php echo $_SESSION["tank"]["lifePoints"]; ?>;
	var image = '<?php echo strval($_SESSION["tank"]["image"]); ?>';
	var tankRow1 = {"name":name,"fireRate":fireRate,"lifePoints":lifePoints,"image":image};
// tankRow1.push(name);tankRow1.push(fireRate);tankRow1.push(lifePoints);tankRow1.push(image);
 	// alert(name+" "+ fireRate+" "+ lifePoints+" "+ image);

 	var name1 = '<?php echo strval($_SESSION["bullet"]["name"]); ?>';
 	var damage = <?php echo $_SESSION["bullet"]["damage"]; ?>;
 	var image1 = '<?php echo $_SESSION["bullet"]["image"]; ?>';
 	var bulletRow1 = {"name":name1,"damage":damage,"image":image1};


 	var t1 = new Tank(100,0,tankRow1,bulletRow1);
 	t1.start();
	// t1.fire();
		// b.start();

	</script>

</body>
</html>
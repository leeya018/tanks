


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

	var t1 = new Tank(100,0,tankRow);
	t1.start();
	// t1.fire();
		// b.start();

	</script>

</body>
</html>
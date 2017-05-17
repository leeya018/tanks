<?php 
require 'config.php';
session_start();


 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <form method="post" enctype="multipart/form-data">
 	<input type="text" name="userName" placeholder="enter user name">
 	<input type="text" name="password" placeholder="enter password">
 	<input type="submit" name="submit" value="login">
 </form>
 </body>
 </html>
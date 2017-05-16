<?php 

define('DBSERVERNAME', "localhost");
define('DBUSERNAME', "root");
define('DBPASSWORD', "");
define('DBNAME', "tanks");

$conn = new mysqli(DBSERVERNAME, DBUSERNAME, DBPASSWORD,DBNAME);
 ?>
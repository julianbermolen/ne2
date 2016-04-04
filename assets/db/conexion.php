<?php
	 
	 $host_db = "mysql.hostinger.com.ar";
	 $user_db = "u139874784_ne2";
	 $pass_db = "jul123";
	 $db_name = "u139874784_ne2";
	 $tbl_name = "usuario";
	 
	 
$mysqli = mysqli_connect($host_db,$user_db, $pass_db, $db_name);
if ($mysqli === false){
	die("ERROR: No se estableció la conexión. ". mysqli_connect_error());
}







	
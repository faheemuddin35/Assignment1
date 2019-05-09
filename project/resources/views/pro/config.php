<?php

define('DB_SERVER', 'localhost:3306');
//define('DB_CONNECTION'='mysql');
define('DB_USERNAME', 'mohammed');
define('DB_PASSWORD', 'password');
define('DB_DATABASE', 'db_data');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
?>
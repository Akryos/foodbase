<?php
include_once '../config/config.php';

$dbConn = mysqli_connect(DB_CONN['host'], DB_CONN['user'], DB_CONN['pass'],  DB_CONN['name']);

if(!$dbConn) {
  //could not connect to database
}
?>
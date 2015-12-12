<?php
function connect(){
  $mysqli = new mysqli('192.168.99.100',
    'root',
    'MY_PASSWORD',
    'YOUR_DATABASE_NAME',
    '3306');
  $mysqli->set_charset("utf8");

  return $mysqli;
}

$mysqli = connect();
?>
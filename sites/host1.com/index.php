<?php
function connect(){
    //$db = \Rhonda\Config::get('DB')->connections->local;
    //$db = DB::$db;
    $mysqli = new mysqli('192.168.99.100',
      'root',
      'MY_PASSWORD',
      'YOUR_DATABASE_NAME',
      '3306');
    $mysqli->set_charset("utf8");

    //DB::$mysqli = $mysqli;
    return $mysqli;
  }

$mysqli = connect();


  ?>
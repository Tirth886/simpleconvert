<?php

# THIS FILE CONTAIN THE USAGE FOR THE LIBRARY

require_once './src/SimpleConvert.php';

$con = new mysqli("localhost", "root", "", "test");

$query = "SELECT * FROM user";

$response = $con->query($query);
if ($response != "") {
  $convert = new \SimpleConvert\SimpleConvert((object)["result" => $response]);
  $convert->xls();
}else{
  echo "something went wrong";
}
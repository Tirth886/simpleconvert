<?php

# THIS FILE CONTAIN THE USAGE FOR THE LIBRARY

require_once './src/SimpleConvert.php';

$con = new mysqli("localhost", "root", "", "test");

$query = "SELECT * FROM user";

$response = $con->query($query);

$query = "SHOW COLUMNS FROM user;";

$header = $con->query($query);
$header = $header->fetch_all();
foreach ($header as $head){
  $data[] = $head[0];
}

$header = $data;
if ($response != "") {
  $convert = new \SimpleConvert\SimpleConvert((object)[
    "header" => $header,
    "result" => $response,
  ]);
  print_r($convert->xls('fd.xls',false));
}else{
  echo "something went wrong";
}



echo "\n";

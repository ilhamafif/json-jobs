<?php 
$json = file_get_contents("coba.json");
header("Content-Type: application/json; charset:utf-8");


print_r($json);

?>
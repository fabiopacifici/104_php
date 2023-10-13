<?php

// read the file disks.json
$json_disks = file_get_contents('disks.json');
//var_dump($json_disks);

// add header 
header('Content-Type: application/json');
/* Consenti ad altri siti web di accedere alle tue api */
header("Access-Control-Allow-Origin: http://127.0.0.1:5175");
header("Access-Control-Allow-Headers: X-Requested-With");


// retur the json
echo $json_disks;

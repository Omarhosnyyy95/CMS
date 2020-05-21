<?php

// assoc array for db
$db["db_host"] = "localhost";
$db["db_user"] = "root";
$db["db_pass"] = "";
$db["db_name"] = "cms";

// loop through db assoc array
foreach($db as $key => $value){
    // make each value a constant
    // 1st loop
    // $DB_HOST = "localhost";
    define(strtoupper($key), $value);   
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//if($connection){
//    echo "we are connected";
//}
?>
<?php
define('host_name', 'localhost');
define('user_name', 'root');
define('password', '');
define('db_name', 'architect');

 
$mysqli = new mysqli();
$sql = $mysqli->connect(host_name, user_name, password, db_name);

// if($sql){
//     echo 'it works';
// }else{
//     echo 'not run';
// }



?>
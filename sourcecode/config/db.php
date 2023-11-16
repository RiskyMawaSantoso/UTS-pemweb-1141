<?php

$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASSWORD = '';
$DBNAME = 'pemweb-db';


$db_connect = mysqli_connect($DBHOST,$DBUSER,$DBPASSWORD,$DBNAME);
// $db_connect= mysqli_connect('localhost', 'root', '', 'pemweb-db');
if(mysqli_connect_error()){
    echo "failed connect to mysql ".mysqli_connect_error(); 
}


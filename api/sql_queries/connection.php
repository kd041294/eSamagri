<?php 
//connect to the mysql
$mysqliUser = new mysqli('127.0.0.1', 'root', '', 'db_esamagri');
//check for the connection
if( $mysqliUser->connect_error){
    echo "Database Connection error ..!!!";
    die( 'Connect Error' .$mysqliUser->connect_errno .' : '.$mysqliUser->connect_error );
}
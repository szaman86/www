<?php
$con_error = 'Nie mozna polaczyc';
$db_hostname = '54.194.69.173';
$db_database = 'test';
$db_username = 'szaman86';
$db_password = 'iopewqmz01';

if(!mysql_connect($db_hostname, $db_username, $db_password)||!mysql_select_db($db_database)) {
    die($con_error);
} else {
 //echo "nie dzia³a";
}

?>
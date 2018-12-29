<?php
// Server in the this format: <computer>\<instance name> or 
// <server>,<port> when using a non default port number
$server = 'P6C3DL5\SQLEXPRESS';

// Connect to MSSQL
$link = mssql_connect($server, 'saikrishna', 'phpfi');

if (!$link) {
    die('Something went wrong while connecting to MSSQL');
}
?>
<?php
$serverName = "DESKTOP-P6C3DL5\SQLEXPRESS"; //serverName\instanceName
//$database = "erd2";
// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( "Database" => "ERD","UID" =>"sps", "PWD" =>"sps");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT id, data
        FROM Table_1
        WHERE id=1";
$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

// Make the first (and in this case, only) row of the result set available for reading.
if( sqlsrv_fetch( $stmt ) === false) {
     die( print_r( sqlsrv_errors(), true));
}

// Get the row fields. Field indeces start at 0 and must be retrieved in order.
// Retrieving row fields by name is not supported by sqlsrv_get_field.
$name = sqlsrv_get_field( $stmt, 0);
echo "$name: ";

$comment = sqlsrv_get_field( $stmt, 1);
echo $comment;
?>
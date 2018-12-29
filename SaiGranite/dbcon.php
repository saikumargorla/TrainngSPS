<?php
$serverName = "DESKTOP-P6C3DL5\SQLEXPRESS"; 

$connectionInfo = array( "Database" => "ERD","UID" =>"sps", "PWD" =>"sps");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( !$conn ) {
	  echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
    
}
    echo "Connection established.<br />";
$sql1="CREATE TABLE Table_1(id int,data varchar(30))";
$stmt1=sqlsrv_query($conn,$sql1);
$sql = "INSERT INTO Table_1 (id, data) VALUES (?, ?)";
$params = array(1, "some data");

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

$stmt=sqlsrv_query($conn,"SELECT * FROM Table_1");
   $row = sqlsrv_get_field($stmt,0);

echo $row;
?>


 
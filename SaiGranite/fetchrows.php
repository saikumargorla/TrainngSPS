<html>
<head>
    <title>Title</title>
    <style type="text/css">
    table {
        border: 0px solid red;
		border-collapse:collapse;
    }
	td{
	border:1px solid black;
	}
    </style>
</head>
<body style="font-family:arial">
<?php
$serverName = "DESKTOP-P6C3DL5\SQLEXPRESS";

$connectionInfo = array( "Database" => "ERD","UID" =>"sps", "PWD" =>"sps");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT id,data FROM Table_1";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}
echo "<table border=1 >";
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo "<tr><td>".$row['id']."</td><td> ".$row['data']."</td></tr>";
}
echo "</table>";

sqlsrv_free_stmt( $stmt);
?>
</body>
</html>

<?php
$name=$_GET['id'];
//echo $name;
?>


<html>
<head>
    <title>Title</title>
    <style type="text/css">
    table {
        border: 0px solid red;
		border-collapse:collapse;
		color:;

    }
	td,th{
	border:1px solid black;
	}
    </style>
</head>
<body style="font-family:arial">
<?php
$serverName = "DESKTOP-P6C3DL5\SQLEXPRESS";

$connectionInfo = array( "Database" => "purchasedb","UID" =>"sps", "PWD" =>"sps");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT id,name,address1,address2,city,state,country,zip FROM party where id=$name";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}
echo "<table border=1 width='70%' ><th>id</th><th>name</th><th>Address</th>";
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo "<tr><td>".$row['id']."</td><td> ".$row['name']."</td><td>".$row['address1'].",".$row['address2']."<br>".$row['city'].",".$row['state']."<br>".$row['country'].",".$row['zip']."</td></tr>";
}
echo "</table>";

sqlsrv_free_stmt( $stmt);
?>
</body>
</html>
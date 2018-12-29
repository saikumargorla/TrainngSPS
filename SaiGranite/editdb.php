<?php 
 $serverName = "DESKTOP-P6C3DL5\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database" => "purchasedb","UID" =>"sps", "PWD"=>"sps");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$id=$_POST['id'];
$name = $_POST['name'];
$type = $_POST['type'];
$PrimaryPhone=$_POST['PrimaryPhone'];
$SecPhone=$_POST['SecPhone'];
$language=$_POST['language'];
$name = $_POST['name'];
$type = $_POST['type'];
$PrimaryPhone=$_POST['PrimaryPhone'];
$SecPhone=$_POST['SecPhone'];
$PrimaryEmail=$_POST['PrimaryEmail'];
$SecEmail=$_POST['SecEmail'];
$Website=$_POST['Website'];
$date=$_POST['date'];
$Addr1=$_POST['Addr1'];
$Addr2=$_POST['Addr2'];
$City=$_POST['City'];
$State=$_POST['State'];
$Zip=$_POST['Zip'];
$country=$_POST['country1'];
$Addr2_1=$_POST['Addr2_1'];
$Addr2_2=$_POST['Addr2_2'];
$City2=$_POST['City2'];
$State2=$_POST['State2'];
$Zip2=$_POST['Zip2'];
$country2=$_POST['country2'];
$notes=$_POST['notes'];

//echo $Zip;
//if( $Website === false ) {
 //   die( print_r( sqlsrv_errors(), true));
//}

if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}
// echo "You have registered successfully".$id; 

 $sql = "update party set name=?, type=?, Phone2=?, Phone1=?, Language=?, Country=?, ShippingCountry=?, Address1=?, Address2=?, City=?, State=?, Zip=?, Email=?, Url=?, Notes=?, ShippingAddress=?, ShippingAddress2=?, ShippingCity=?, ShippingState=?, ShippingZip=?
 where id=$id";
$params = array($name,$type,$SecPhone,$PrimaryPhone,$language,$country,$country2,$Addr1,$Addr2,$City,$State,$Zip,$PrimaryEmail,$Website,$notes,$Addr2_1,$Addr2_2,$City2,$State2,$Zip2);
$stmt = sqlsrv_query( $conn, $sql,$params);

header("Location: vsupplier.php?id=".$id);


 //$sql1="select IDENT_CURRENT('dbo.Party')";
 //$stmt1=sqlsrv_query($conn,$sql);
 

// sqlsrv_next_result($stmt); 
//sqlsrv_fetch($stmt); 
//$id=sqlsrv_get_field($stmt, 0);

//header("Location: vsupplier.php?id=".$id);
?>
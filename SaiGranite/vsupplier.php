<?php
$name=$_GET['id'];
//echo $name;
?>

<html>
<head>
    <title>Title</title>
    <style type="text/css">
    .supformpage{
        border: 1px solid black;
		border-collapse:no-collapse;
		color:;

    }
	 .supformpage td,th{
	border:0px solid black;
	}
	.supformpage tr:nth-child(even){
  background:;
  }
  .supformpage td{
   padding-left:5px;
  }
  b{
  font-size:14px;
  font-weight:bold;
  }

 

    </style>
</head>

<body style="background-color:#e8ebef;">
<?php include 'top.php'; ?>

<div style="margin-left:2;border:0px solid black;font-family:arial;">
<?php
$serverName = "DESKTOP-P6C3DL5\SQLEXPRESS";

$connectionInfo = array( "Database" => "purchasedb","UID" =>"sps", "PWD" =>"sps");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

//$sql = "SELECT id,name,address1,address2,city,state,country,zip FROM party";
$sql= "select party.id as id,party.name as name,Address1,Address2,City,State,Zip,ShippingAddress,shippingaddress2,shippingcity,date,Country.value1 as country,language.Value1 as language  from party
	left outer join SystemOptions country on party.Country=country.id 
	left outer join SystemOptions language on party.language=language.ID where party.id=$name order by party.id ";

$sql1="select party.id as id,type,party.name as name,Address1,Address2,City,State,Zip,Phone1,Phone2,Url,Email,Notes,ShippingAddress,ShippingAddress2,shippingcity,ShippingState,ShippingZip,country2.Value1 as country2,
	country.value1 as country,language.Value1 as language  from party
	left outer join SystemOptions country on party.Country=country.id 
	left outer join SystemOptions country2 on party.ShippingCountry=country2.id
	left outer join SystemOptions language on party.language=language.ID where party.id=$name and PartyType='supplier' order by party.id";

$stmt = sqlsrv_query( $conn, $sql1 );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}
/*
echo "<table border=1 width='70%' class='supformpage' ><th>id</th><th>name</th><th>Address</th>";
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo "<tr><td>".$row['id']."</td><td><a href='viewsupplier.php?id=".$row['id']."' target='#frame5'> ".$row['name']."</a></td><td>".$row['address1'].",".$row['address2']."<br>".$row['city'].",".$row['state']."<br>".$row['country'].",".$row['zip']."</td></tr>";
}
echo "</table>";
*/
echo "<table border=0 width='30%' height='60%' class='supformpage' style='line-height:1.5;background-color:white;padding-bottom:30px' >";
//<tr style='background-color:#00802b;color:white'><td><b>name</b></td><td><b>language</b></td><td><b>Address</b></td><td></td></tr>";
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	if( $row === false) {
    die( print_r( sqlsrv_errors(), true) );
}
   //   echo "<tr><td> //".$row['name']."</td><td>".$row['language']."</td><td>".$row['address1'].",".$row['address2']."<br>".$row['city'].",".$row['state']."<br>".$row['country'].",".$row['//zip']."</td><td><a href='editsupplier.php?id=".$row[id]."'><img src='editimage.jpg' width='20px' height='20px'></td></tr>";
   echo "<tr height='10%' style='margin-bottom:50px;font-size:30px' >
   <td colspan=2 align='middle'>Supplier</td><td rowspan='11' valign='top' style='margin-right:-0' colspan=2><a href='editsupplier.php?id=".$row[id]."'><img src='editimage.jpg' width='20px' height='20px' style='margin-left:-40px;margin-top:10px'></td></tr>
  
   <tr><td colspan=2>.........................................................................................................................</td></tr>";
   echo "<tr height=''><td  style='valign:top;padding-top:0px;text-transform:;letter-spacing:0.6px;font-size:25px' colspan=2 >".$row['name']."</td></tr><tr height='1%'>";
  echo "<tr><td><b>Supplier Type</b><br>".$row['type']."</td><td><b>Language</b><br>".$row['language']."</tr><tr height='1%'><td						colspan=2>..........................................................................................................................</td></tr>";

echo "<tr height='10%'><td colspan=2 valign='top'><b>Contact information</b><br>".(empty($row['Phone1'])?"":"P: ".$row['Phone1']."<br>").(empty($row['Phone2'])?"":"P: ".$row['Phone2']. "<br>").(empty($row['Email'])?"":"E: ".$row['Email']."<br>").(empty($row['Url'])?"":"w: ".$row['Url'])."</td></tr><tr height='1%'><td colspan=2>..........................................................................................................................</td></tr>";

   echo "<tr height='20%'><td valign='top'><b>Address</b><br>".(empty($row['Address1'])?"":$row['Address1'])." ".(empty($row['Address2'])?"":$row['Address2']."<br>").(empty($row['City'])?"":$row['City']).(empty($row['State'])?"":$row['State']."<br>").$row[country]." " .$row[Zip] ."</td><td valign='top'><b>Ship To Address</b><br>".$row[shippingaddress]." ".$row[ShippingAddress2]."<br>".$row[shippingcity]." ".$row[ShippingState]."<br>".$row[country2]." " .$row[ShippingZip]."</td></tr><tr height='1%'><td colspan=2>.........................................................................................................................</td></tr>";
   
   echo "<tr><td colspan=2>".(empty($row[Notes])?"":"<b>Internal notes</b><br>".$row[Notes])."</td></tr>";
}
echo "</table>";

sqlsrv_free_stmt( $stmt);
?>
</div>
</body>
</html>




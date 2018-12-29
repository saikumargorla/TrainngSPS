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
//$sql= "select party.id as id,party.name as name,Address1,Address2,City,State,Zip,ShippingAddress,shippingaddress2,shippingcity,date,Country.value1 as country,language.Value1 as language  from party
//	left outer join SystemOptions country on party.Country=country.id 
//	left outer join SystemOptions language on party.language=language.ID where party.id=$name order by party.id ";

$sql1= "select party.id as id,Party.name as name,Address1,Email,Notes,convert(char(10),Date,101) as dateofjoin,Address2,Phone1,City,State,Zip,convert(char(10),DOB,101) as dob  from party where Party.id=$name and PartyType='employee' ";

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

echo "<table border=0 width='30%' height='' class='supformpage' style='line-height:1.5;background-color:white;padding-bottom:30px' >";
//<tr style='background-color:#00802b;color:white'><td><b>name</b></td><td><b>language</b></td><td><b>Address</b></td><td></td></tr>";
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	if( $row === false) {
    die( print_r( sqlsrv_errors(), true) );
}




   //   echo "<tr><td> //".$row['name']."</td><td>".$row['language']."</td><td>".$row['address1'].",".$row['address2']."<br>".$row['city'].",".$row['state']."<br>".$row['country'].",".$row['//zip']."</td><td><a href='editsupplier.php?id=".$row[id]."'><img src='editimage.jpg' width='20px' height='20px'></td></tr>";
   echo "<tr  style='margin-bottom:50px;font-size:30px' >
   <td colspan=2 align='middle'>Employee</td><td rowspan='8' valign='top' style='margin-right:-0' colspan=2><a href='editsupplier.php?id=".$row[id]."'><img src='editimage.jpg' width='20px' height='20px' style='margin-left:-40px;margin-top:10px'></td></tr>
  
   <tr><td colspan=2>.........................................................................................................................</td></tr>";
   echo "<tr height=''><td  style='valign:top;padding-top:0px;text-transform:;letter-spacing:0.6px;font-size:25px' valign='top'>".$row['name']."</td><td><label>Date Of Birth:<br></label>".$row['dob']."</td></tr>";
  
echo "<tr ><td  valign='top'><b>Contact information</b><br>".(empty($row['Phone1'])?"":"P: ".$row['Phone1']."<br>").(empty($row['Email'])?"":"E: ".$row['Email']."<br>")."</td><td><label>Date Of Join:<br></label>".$row['dateofjoin']."</td></tr><tr height='1%'><td colspan=2>..........................................................................................................................</td></tr>";

   echo "<tr ><td valign='top'><b>Address</b><br>".(empty($row['Address1'])?"":$row['Address1'])." ".(empty($row['Address2'])?"":$row['Address2']."<br>").(empty($row['City'])?"":$row['City'])." ".(empty($row['State'])?"":$row['State']."<br>").$row[country]." " .$row[Zip] ."</td></tr>
   <tr height='1%'><td colspan=2>.........................................................................................................................</td></tr>";
   
   echo "<tr><td colspan=2>".(empty($row[Notes])?"":"<b>Internal notes</b><br>".$row[Notes])."</td></tr>";

 
}



echo "</table>";

sqlsrv_free_stmt( $stmt);
?>
</div>
</body>
</html>




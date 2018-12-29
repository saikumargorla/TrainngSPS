<html>
<head>
    <title>Title</title>
    <style type="text/css">
    .supformpage{
        border: 0px solid red;
		border-collapse:collapse;
		color:;

    }
	 .supformpage td,th{
	border:0px solid black;
	}
	.supformpage tr:nth-child(even){
  background:#f2f2f2;
  }
  .supformpage tr td:nth-child(1):hover{
  border-bottom:0px solid red;
  }
  .supformpage td{
   padding-left:5px;
  }
  a{
  text-decoration:none;color:black;
  }
  a:hover{
  color:blue;
  }
  .supformpage img{
  cursor:pointer;
  }

    </style>
</head>
<?php include 'top.php'; ?>

<div style="margin-left:2;border:0px solid black;font-family:arial">
<?php
$serverName = "DESKTOP-P6C3DL5\SQLEXPRESS";

$connectionInfo = array( "Database" => "purchasedb","UID" =>"sps", "PWD" =>"sps");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

//$sql = "SELECT id,name,address1,address2,city,state,country,zip FROM party";
$sql= "select party.id as id,party.name as name,address1,email,address2,phone1,city,state,zip  from party where PartyType='employee' ";

$stmt = sqlsrv_query( $conn, $sql );
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
echo "<table border=0 width='50%' class='supformpage' style='font-size:14px;line-height:1.5'>
<tr><td colspan=4><label style='font-weight:bold;font-size:20'>Employee List</label></td></tr>
<tr  style='background-color:#495a67f7;color:white;height:50px;'><td><b>Name</b></td><td><b>Contact</b></td><td><b>Address</b></td><td></td></tr>";
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo "<tr ><td valign='top'><a href='vemployee.php?id=".$row['id']."'> ".$row['name']."</a></td><td valign='top'>".(empty($row['phone1'])?"":"P: ".$row['phone1']."<br>").(empty($row['email'])?"":"E: ".$row['email']."<br>")."</td><td valign='top'>".(empty($row['address1'])?"":$row['address1']." ").(empty($row['address2'])?"":$row['address2']."<br>").(empty($row['city'])?"":$row['city']." ").(empty($row['state'])?"":$row['state']."<br>").$row['country']." ".$row['zip']."</td><td valign='top'><label><img src='editimage.jpg' onclick='editemployee(".$row['id'].");' width='15px' height='15px' style='margin-top:10px'></label>".str_repeat("&nbsp;", 5)."<label><img src='delete.png' onclick='deleteemployee(".$row['id'].");'  width='15px' height='15px' style='margin-top:10px'></label></td></tr>";
	
}
echo "</table>";
  echo "<script>
function test(id1){

var id2=id1;
alert(id2)

window.location='vemployee.php?id='+id2
}

function deleteemployee(id1){

var id2=id1;

    var retVal = confirm('Are you sure you want to delete?');
               if( retVal == true ){
                 window.location='deletemployee.php?id='+id2
                  return true;
               }
               else{
                  
                  return false;
               }
window.location='vemployee.php?id='+id2
}

function editemployee(id){

window.location='editemployee.php?id='+id
}
</script>";


sqlsrv_free_stmt( $stmt);
?>
</div>
</html>
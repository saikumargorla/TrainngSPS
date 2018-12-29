<?php 
 $serverName = "DESKTOP-P6C3DL5\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database" => "purchasedb","UID" =>"sps", "PWD"=>"sps");
$conn = sqlsrv_connect( $serverName, $connectionInfo);


$PartyType=$_POST['partytype'];
if($PartyType=== "employee"){
$EmployeeName=$_POST['name'];
$EmployeeDOJ=$_POST['edoj'];
$Employeecode=$_POST['empcode'];
$EmployeeDOB=$_POST['edob'];
$Employeegender=$_POST['gender'];
$EmployeeAddress1=$_POST['Addr1'];
$EmployeeAddress2=$_POST['Addr2'];
$EmployeeCity=$_POST['City'];
$EmployeeState=$_POST['State'];
$EmployeeZip=$_POST['Zip'];
$Employeecountry=$_POST['country1'];
$EmployeeEmail=$_POST['email'];
$EmployeePhone=$_POST['phone'];
$PartyType=$_POST['partytype'];
$Employeedob=$_POST['edob'];
$Employeedoj=$_POST['edoj'];
$EmployeeNotes=$_POST['notes'];
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}
 echo "You have registered successfully:$PartyType"; 
 $sql1="select max(id)+1 as ID from party";
 $stmt1 = sqlsrv_query( $conn, $sql1);
while( $row = sqlsrv_fetch_array( $stmt1, SQLSRV_FETCH_ASSOC) ) {
   $Employeeid =$row['ID'] ;
}
 $id=$Employeeid;
 $sql="Insert into Party 
       (id,Name,PartyType,Address1,Address2,city,state,Zip,Email,Phone1,date,DOB,Notes)
	   values(?,?,?,?,?,?,?,?,?,?,?,?,?)";
 $params=array($id,$EmployeeName,$PartyType,$EmployeeAddress1,$EmployeeAddress2,$EmployeeCity,$EmployeeState,$EmployeeZip,$EmployeeEmail,$EmployeePhone,$EmployeeDOJ,$EmployeeDOB,$EmployeeNotes);
$stmt = sqlsrv_query( $conn, $sql,$params);

header("Location: vemployee.php?id=".$id);


if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
}


}

else{
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
$language=$_POST['language'];
$PartyType='supplier';

if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}
 echo "You have registered successfully"; 
 $sql1="select max(id)+1 as ID from party";
 $stmt1 = sqlsrv_query( $conn, $sql1);
while( $row = sqlsrv_fetch_array( $stmt1, SQLSRV_FETCH_ASSOC) ) {
   $id1 =$row['ID'] ;
}
 $id=$id1;
 $sql = "INSERT INTO Party (id,Name,PartyType,Type,Phone1,Phone2,Email,date,Address1,Address2,city,state,url,language,zip,country,ShippingAddress,ShippingAddress2,ShippingCity,ShippingState,ShippingZip,ShippingCountry,Notes) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";//;SELECT SCOPE_IDENTITY()
 $params = array($id,$name,$PartyType,$type,$PrimaryPhone,$SecPhone,$PrimaryEmail,$date,$Addr1,$Addr2,$City,$State,$Website,$language,$Zip,$country,$Addr2_1,$Addr2_2,$City2,$State2,$Zip2,$country2,$notes);
 $stmt = sqlsrv_query( $conn, $sql,$params);
 header("Location: vsupplier.php?id=".$id);

 //$sql1="select IDENT_CURRENT('dbo.Party')";
 //$stmt1=sqlsrv_query($conn,$sql);
 

// sqlsrv_next_result($stmt); 
//sqlsrv_fetch($stmt); 
//$id=sqlsrv_get_field($stmt, 0);
if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
}
}

//header("Location: vsupplier.php?id=".$id);
?>
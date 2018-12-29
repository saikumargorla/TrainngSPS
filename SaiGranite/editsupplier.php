<?php
$id=$_GET['id'];
//$name=$_GET['name']
//echo $name;
$serverName = "DESKTOP-P6C3DL5\SQLEXPRESS";

$connectionInfo = array( "Database" => "purchasedb","UID" =>"sps", "PWD" =>"sps");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}
/*
$sql= "	select party.id as id,type,party.name as name,address1,address2,city,state,zip,phone1,phone2,url,notes,shippingaddress,ShippingAddress2,shippingcity,ShippingState,ShippingZip,country2.Value1 as country2,
	country.value1 as country,language.Value1 as language  from party
	left outer join SystemOptions country on party.Country=country.id 
	left outer join SystemOptions country2 on party.ShippingCountry=country2.id
	left outer join SystemOptions language on party.language=language.ID where party.id=$id order by party.id";
*/
$sql = "SELECT id,type,name,Address1,Address2,Email,Url,City,Phone1,Phone2,ShippingAddress,ShippingAddress2,State,ShippingCity,ShippingZip,ShippingState,ShippingCountry,Notes,Country,Zip,Language FROM party where id=$id";
//$sql="select * from party where id=$id";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
$id=$row['id'];
$name = $row['name'];
$type = $row['type'];
$PrimaryPhone=$row['Phone1'];
$SecPhone=$row['Phone2'];
$PrimaryEmail=$row['Email'];
$SecEmail=$row['SecEmail'];

$date=$row['date'];
$Addr1=$row['Address1'];
$Addr2=$row['Address2'];
$City=$row['City'];
$State=$row['State'];
$Zip=$row['Zip'];
$country=$row['Country'];
$Addr2_1=$row['ShippingAddress'];
$Addr2_2=$row['ShippingAddress2'];
$City2=$row['ShippingCity'];
$State2=$row['ShippingState'];
$Zip2=$row['ShippingZip'];
$country2=$row['ShippingCountry'];
$notes=$row['Notes'];
$language=$row['Language'];
$url=$row['Url'];	  
}


?>


<html>

<head>
<style>
div div{
margin-top:10px;
}
.main div table tr:nth-child(1) td:nth-child(1){
font-weight:bold;
font-size:14;
}
input,select{
 border-radius:2px;
 border:1px solid black;
}
select{
margin-top:5px;
padding:5px;
margin-bottom:5px;
border:1px solid #b3b5b7;
}

input{
padding:5px;
margin-bottom:5px;
font-size:14;
border:1px solid #b3b5b7;
}
input[type=button],input[type=submit] {
cursor:pointer;
}


</style>
</head>

<?php include 'top.php'; ?>

<body style="background-color:#e8ebef;">
<form  Action="editdb.php" method="post">
<div style="border:0px solid black;width:100%;font-family:arial;width:40%;height:80%;padding-left:5px;padding-top:10px;background-color:" class="main">
<table style="border:0px solid green;background-color:whitesmoke;padding-right:20px;padding-left:20px;">
<tr>
<td>
<div style="margin-top:-20px;"><h2>Edit Supplier</h2> <input type="hidden" name="id" value='<?=$id;?>'></div>
<div>
<table>
	<tr>
		<td style="padding-right:15px">Supplier Name<br><input type="text" name="name" value='<?php echo $name ?>' style="margin-top:5px" required></td>
		<td>
		<td style="padding-right:20px;font-weight:bold;font-size:14">Supplier Type<br>
		<select name="type" >
		<option<?php if ("Distributors"==$type) echo ' selected="selected"'?>>Distributors</option>
<option<?php if ("Manufactures"==$type) echo ' selected="selected"'?>>Manufactures</option>
<option<?php if ("Fabricators"==$type) echo ' selected="selected"'?>>Fabricators</option>
		</select>
		</td>
		
		<td style="padding-right:15px;font-weight:bold;font-size:14">Contact Name<br><input type="text" name="cname" style="margin-top:5px" required></td>

		<td style="font-weight:bold;font-size:14">Language<br>
		<select name="language">
		<option<?php if ($language==1) echo ' selected="selected"'?> value=1>English</option>
<option<?php if ($language==2) echo ' selected="selected"'?> value=2>Hindi</option>
<option<?php if ($language==3) echo ' selected="selected"'?> value=3>Telugu</option>
		</select>
		</td>

		
	</tr>
 </table>
</div>

<div>
<table >
	  <tr><td>Contact Information</td></tr>
	  <tr><td>Primary Ph.No.</td>
	      <td style="padding-right:20px"><input type="text" name="PrimaryPhone" value='<?php echo $PrimaryPhone ?>' style="margin-left:-25px;"></td>
	 <td>Alternate Ph.No.</td>
	      <td ><input type="text" name="SecPhone" value="<?php echo $SecPhone ?>"></td>
	  </tr>
	  <tr><td>Primary Email</td>
	      <td style="padding-right:20px"><input type="text" name="PrimaryEmail" value='<?php echo $PrimaryEmail ?>' style="margin-left:-25px"></td>
	  <td>Alternate Email</td>
	      <td><input type="text" name="SecEmail"></td>
	  </tr>
	  <tr><td>Website</td>
	      <td><input type="text" name="Website" value='<?php echo $url ?>' style="margin-left:-25px"></td>
	  </tr>
	 </table>
</div>

<div>
<table border=0 >
<tr>
<td> <table border=0 >
		<tr><td>Supplier Address</td></tr>
		<tr><td style="font-weight:normal" >Address1</td>
			 <td style="padding-right:20px"><input type="text" name="Addr1" style="margin-left:-45px;width:260px" value='<?php echo $Addr1 ?>' ></td>
		<td style="padding-right:7px">Address2</td>
			<td><input type="text" name="Addr2" value='<?php echo $Addr2 ?>' ></td>
			
		</tr>
		</table>
	</td>
	</tr>

<tr>
<td> <table border=0 >
		<tr><td style="padding-right:5px;font-weight:normal">City</td>
			 <td style="padding-right:25px"><input type="text" name="City" style="width:90px" value='<?php echo $City ?>' ></td>
		<td style="padding-right:5px">State</td>
			 <td style="padding-right:25px"><input type="text" name="State" style="width:100px" value='<?php echo $State ?>'  ></td>
		<td style="padding-right:5px">Zip</td>
			 <td style="padding-right:25px"><input type="text" name="Zip" style="width:70px" value='<?php echo $Zip ?>'></td>
		<td style="width:12%">Country</td>
			 	<td ><select name="country1" style="width:100px">
			


  <option<?php if ($country==4) echo ' selected="selected"'?> value=4>India</option>
<option<?php if ($country==5) echo ' selected="selected"'?> value=5>US</option>
			 </select></td>
			 
			 
			 </tr>
	    </table>
		</td>
		</tr>
	</table>
</div>

<div>
<table border=0 >
<tr>
<td> <table border=0 >
		<tr><td>Ship to address</td></tr>
		<tr><td style="font-weight:normal">Address1</td>
			 <td style="padding-right:25px"><input type="text" name="Addr2_1" style="margin-left:-40px;width:260px" value='<?php echo $Addr2_1 ?>' ></td>
		<td style="padding-right:7px">Address2</td>
			<td><input type="text" name="Addr2_2" value='<?php echo $Addr2_2 ?>' ></td>
			
		</tr>
		</table>
	</td>
	</tr>

<tr>
<td> <table border=0 >
		<tr><td style="padding-right:3px;font-weight:normal">City</td>
			 <td style="padding-right:26px"><input type="text" name="City2" style="width:90px" value='<?php echo $City2 ?>'></td>
		<td style="padding-right:3px">State</td>
			 <td style="padding-right:30px"><input type="text" name="State2" style="width:100px" value='<?php echo $State2 ?>'></td>
		<td style="padding-right:3px">Zip</td>
			 <td style="padding-right:26px"><input type="text" name="Zip2" style="width:70px" value='<?php echo $Zip2 ?>'></td>
		<td style="">Country</td>
			 	<td ><select name="country2" style="width:100px">
			 
  <option<?php if ($country==4) echo ' selected="selected"'?> value=4>India</option>
<option<?php if ($country==5) echo ' selected="selected"'?> value=5>US</option>
			 </select></td>
			 
			 
			 </tr>
	    </table>
		</td>
		</tr>
	</table>
</div>
    <div>
	<table border=0>
	 <tr><td valign="top">Notes</td></tr>
	 <tr><td><textarea rows="5" cols="50" name="notes"  ><?php echo $notes ?></textarea></td></tr>
	 </table>
	</div>

   <div>
   <table border=0>
	<tr>
	  
	    <td><input type="button" value="cancel" style="height:30;width:100;background-color:#525863;color:white;font-size:16px;letter-spacing:0.5px;"
		onclick='history.go(-1);'></td>
	    <td ><input type="Submit" value="save"  style="height:30;width:200;background-color:#525863;color:white;margin-left:315;font-size:18px;letter-spacing:0.5px"></td>
		
	</tr>
	</table>
   </div>
</div>
</form>
</td>
</tr>
</table>
</div>
</html>



<?php
/*

<!--
<html>
<head>
<style>
table table{
border:0px solid #b3b5b7;

}
input,select{
 border-radius:2px;
 border:1px solid black;
}
table.bold tr:nth-child(1) td:nth-child(1){
font-weight:bold;
font-size:14;
}
input{
padding:5px;
margin-bottom:5px;
font-size:14;
border:1px solid #b3b5b7;
}
select{
margin-top:5px;
padding:5px;
margin-bottom:5px;
border:1px solid #b3b5b7;
}
input[type=reset],input[type=submit] {
cursor:pointer;
}
label{
font-weight:bold;font-size:14;

}


</style>
</head>

<?php include 'top.php'; ?>
<div style="border:0px solid red;margin-left:50;height:90%;font-family:arial">



<form  Action="editdb.php" method="post">
<input type="hidden" name="id" value='<?=$id;?>'>
<h2 >Edit Supplier</h2>
<table border=0 class="bold">
	<tr>
		<td>SupplierName:<br><input type="text" name="name" value='<?php echo $name ?>' style="margin-top:5px" required></td>
		<td >
		<label style="font-weight:bold;font-size:14">SupplierType:</label><br>
		<select name="type"  >
		
        <option<?php if ("Distributors"==$type) echo ' selected="selected"'?>>Distributors</option>
<option<?php if ("Manufactures"==$type) echo ' selected="selected"'?>>Manufactures</option>
<option<?php if ("Fabricators"==$type) echo ' selected="selected"'?>>Fabricators</option>
		
		</select>
		</td>
		<td>
		<label style="font-weight:bold;font-size:14">Language:</label><br>
		<select name="language" >
		

<option<?php if ('1'==$language) echo ' selected="selected"'?>>English</option>
<option<?php if ('2'==$language) echo ' selected="selected"'?>>Hindi</option>
<option<?php if ('3'==$language) echo ' selected="selected"'?>>Telugu</option>
		</select>
		</td>
		
	</tr>
	
	<tr>
	<td>
	 <table border=0 class="bold">
	  <tr><td>Contact Information</td></tr>
	  <tr><td>Primary Ph.No.</td>
	      <td><input type="text" name="PrimaryPhone" value="<?php echo $PrimaryPhone ?>"></td>
	  </tr>
	  <tr><td>Alternate Ph.No.</td>
	      <td><input type="text" name="SecPhone" value="<?php echo $SecPhone ?>"></td>
	  </tr>
	  <tr><td>Primary Email</td>
	      <td><input type="text" name="PrimaryEmail" value=" "></td>
	  </tr>
	  <tr><td>Alternate Email</td>
	      <td><input type="text" name="SecEmail" value=" "></td>
	  </tr>
	  <tr><td>Website</td>
	      <td><input type="text" name="Website"></td>
	  </tr>
	 </table>
	</td>
	<td colspan="5" valign=top>
	<table border=0 class="bold">
	<tr><td >Date</td></tr>
	<tr><td><input type="date" name="date"></td></tr>
	</table>
	</td>
	</tr>
	<tr>
	<td>
	<table border=0 class="bold">
		<tr><td>SupplierAddress:</td></tr>
		<tr><td>Address1:</td>
			 <td><input type="text" name="Addr1"></td>
		</tr>
		<tr><td>Address2:</td>
			<td><input type="text" name="Addr2"></td>
		</tr>
		<tr><td>City  :</td>
			 <td><input type="text" name="City"></td></tr>
		<tr><td>State  :</td>
			 <td><input type="text" name="State"></td></tr>
		
		<tr><td>Zip:</td>
			 <td><input type="text" name="Zip"></td></tr>
        <tr><td>Country  :</td>
			 <td><select name="country1">
			

			
  <option value='<?php if($country == '4') { ?> selected="selected"<?php } ?>'>India</option>
  <option value='<?php if($country == '5') { ?> selected="selected"<?php } ?>'>US</option>
			 </select></td></tr>
	</table>
	</td>
	<td>
	<table border=0 class="bold">
		<tr><td>ShipToAddress:</td></tr>
		<tr><td>Address1:</td>
			 <td><input type="text" name="Addr2_1"></td>
		</tr>
		<tr><td>Address2:</td>
			<td><input type="text" name="Addr2_2"></td>
		</tr>
		<tr><td>City  :</td>
			 <td><input type="text" name="City2"></td></tr>
		<tr><td>State  :</td>
			 <td><input type="text" name="State2"></td></tr>
		
		<tr><td>Zip:</td>
			 <td><input type="text" name="Zip2"></td></tr>
        <tr><td>Country  :</td>
			 <td><select name="country2">
			 <option value="4">India</option>
			 <option value="5">US</option>
			 </select></td></tr>
	</table>
	</td>
	</tr>
	<tr>
	<td>
	<table border=0 class="bold">
	 <tr><td valign="top">Notes</td></tr>
	 <tr><td><textarea rows="5" cols="50" name="notes" ></textarea></td></tr>
	 </table>
	</td>
	</tr>
    <tr>
	<td>
	<table border=0 class="bold">
	<tr>
	    <td><input type="Submit" style="height:30;width:150;"></td>
		<td><input type="Reset" style="height:30;width:100;"></td>
	</tr>
	</table>
	</td>
	</tr>
</table>
</form>
</div>

</html>
-->


*/

?>















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
$sql = "SELECT id,'SG'+cast(($id) as varchar(10)) as code,type,name,Address1,Address2,Email,City,Phone1,State,Notes,Country,Zip,convert(char(10),DOB,101) as dob,convert(char(10),date,101) as doj  FROM party where id=$id";
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
$dateofjoin=$row['doj'];
$Addr1=$row['Address1'];
$Addr2=$row['Address2'];
$City=$row['City'];
$State=$row['State'];
$Zip=$row['Zip'];
$country=$row['Country'];
$dob= date('Y-m-d', strtotime($row['dob']));
$dateofjoin=date('Y-m-d', strtotime($row['doj']));
$notes=$row['Notes'];
$code=$row['code'];  
}


?>


<style>
.empmain input[type=text],select{
margin-top:1px;
padding:5px;

border:1px solid #cccccc;

}
input,select{
 border-radius:3px;
 border:1px solid #cccccc;
}

select{

}

 input{
padding:5px;
margin-bottom:px;
font-size:14;
border:1px solid #cccccc;
}
input[type=button],input[type=submit] {
cursor:pointer;
}

</style>

<?php include 'top.php'; ?>
<form  Action="supregdb.php" method="post" style="">

<div style="border:0px solid black;width:100%;font-family:arial;width:40%;padding-left:5px;padding-top:10px;background-color:" class="main">
<table style="border:0px solid green;background-color:whitesmoke;padding-right:20px;padding-left:20px;"  class="empmain">
<tr>
<td>
<table border=0 style="font-family:arial;" height="" class="Empmain">
<tr height=""><td colspan=2><label style="font-weight:bold;font-size:22">Edit Employee</label></td></tr>
<tr height=""><td colspan=2><table><tr><td>Name:</td><td >
 <input type="text" style="" name="name" value='<?php echo $name ?>'></td>

                                      
                                       <td style="padding-left:15px">Code:</td><td>
									   
									   
 


<input type="text" name="empcode" value="<?php echo $code ?>" style="width:60px;background:#fff7f7;" disabled>

 
</td>
									   
									   
									  






                                     <td><label style="margin-left:40px">Gender:<input type="radio" name="gender" value="Male">Male</label></td>
		   <td><label><input type="radio" name="gender" value="Female">Female</label></td>
 
                                   </tr></table>
 </td></tr>
     
  <tr>
     <td colspan=2>
	  <table style=""><tr><td>
           
		   <td><label style="margin-left:-4px" >DOB:</label></td><td><input type="date" name="edob" style="margin-left:8px" value='<?php echo $dob ?>'></td>
		    <td ><label style="margin-left:38px">Date Of Joining:</label></td><td><input type="date" name="edoj" value='<?php echo $dateofjoin ?>'></td>
		  
		   <input type="hidden" name="partytype" value="employee" >
</tr>
</table></td></tr>
<tr height=""><td colspan=2>
	<table>
	<tr><td colspan=4 style="padding-bottom:8px;padding-top:10px"><label style="font-weight:bold;font-size:14">Contact Information</label></td></tr>
	<tr><td>Email id:</td><td><input type="text" name="email" style="width:230;margin-left:12px"  value='<?php echo $PrimaryEmail ?>'></td>
	<td style="padding-left:25px">Phone No.:</td><td><input type="text" name="phone" value='<?php echo $PrimaryPhone ?>'></td></tr>


	</table></td>
</tr>
<tr height="">
<td colspan=2> <table border=0 >
		
		<tr><td style="font-weight:normal">Address1:</td>
			 <td style="padding-right:28px"><input type="text" name="Addr1" id="Addr1" style="margin-left:0px;width:230px" value='<?php echo $Addr1 ?>'></td>
		<td style="padding-right:7px">Address2:</td>
			<td><input type="text" name="Addr2" id="Addr2" value='<?php echo $Addr2 ?>'></td>
			
		</tr>
		</table>
	</td>
	</tr>





<tr height="">
<td colspan=2> 
  <table border=0 >
		<tr><td style="padding-right:5px;font-weight:normal">City:</td>
			 <td style="padding-right:25px"><input type="text" name="City" id="city" style="width:90px" value='<?php echo $City ?>'></td>
		<td style="padding-right:5px">State:</td>
			 <td style="padding-right:28px"><input type="text" name="State" id="state" style="width:100px" value='<?php echo $State ?>' ></td>
		<td style="padding-right:5px">Zip:</td>
			 <td style="padding-right:20px"><input type="text" name="Zip" id="zip" style="width:70px" value='<?php echo $Zip ?>'></td>
		<td style="width:12%">Country:</td>
			 	<td ><select name="country1" id="country1" style="width:69px">
			 
			 <option<?php if ($country==4) echo ' selected="selected"'?> value=4>India</option>
<option<?php if ($country==5) echo ' selected="selected"'?> value=5>US</option>
			 </select></td>
			 
			 
			 </tr>
			 			 		
	    </table>





 
		</td>
		</tr>

		<tr><td colspan=2 style="padding-top:10px">
	<table border=0>
	 <tr><td valign="top">Notes:</td></tr>
	 <tr><td><textarea rows="5" cols="50" name="notes" ></textarea></td></tr>
	 </table>
 </td></tr>

	<tr><td colspan=2 style="padding-top:10px">
    <table><tr><td><input type="button" value="cancel" style="height:30;width:100;background-color:#525863;color:white;font-size:16px;letter-spacing:0.5px;"></td>
    <td  style="padding-left:320"> <input type="submit"  style="height:30;width:180;background-color:#525863;color:white;font-size:18px;letter-spacing:0.5px;"></td></tr></table></td></tr>


</table>
</td>
</tr>
</table>
</form>




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
















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
<tr height=""><td colspan=2><label style="font-weight:bold;font-size:22">Add Employee</label></td></tr>
<tr height=""><td colspan=2><table><tr><td>Name:</td><td >
 <input type="text" style="" name="name"></td>

                                      
                                       <td style="padding-left:15px">Code:</td><td>
									   
									   
 <?php
 $serverName = "DESKTOP-P6C3DL5\SQLEXPRESS";

$connectionInfo = array( "Database" => "purchasedb","UID" =>"sps", "PWD" =>"sps");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}
$sql= "select 'SG'+cast(max(id+1) as varchar(10)) as code from party ";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	?>


<input type="text" name="empcode" value="<?php echo $row['code'];?>" style="width:60px;background:#fff7f7;" disabled>
<?php
}
 ?>
</td>
									   
									   
									  






                                     <td><label style="margin-left:40px">Gender:<input type="radio" name="gender" value="Male">Male</label></td>
		   <td><label><input type="radio" name="gender" value="Female">Female</label></td>
 
                                   </tr></table>
 </td></tr>
     
  <tr>
     <td colspan=2>
	  <table style=""><tr><td>
           
		   <td><label style="margin-left:-4px" >DOB:</label></td><td><input type="date" name="edob" style="margin-left:8px"></td>
		    <td ><label style="margin-left:38px">Date Of Joining:</label></td><td><input type="date" name="edoj" ></td>
		  
		   <input type="hidden" name="partytype" value="employee" >
</tr>
</table></td></tr>
<tr height=""><td colspan=2>
	<table>
	<tr><td colspan=4 style="padding-bottom:8px;padding-top:10px"><label style="font-weight:bold;font-size:14">Contact Information</label></td></tr>
	<tr><td>Email id:</td><td><input type="text" name="email" style="width:230;margin-left:12px"></td>
	<td style="padding-left:25px">Phone No.:</td><td><input type="text" name="phone" ></td></tr>


	</table></td>
</tr>
<tr height="">
<td colspan=2> <table border=0 >
		
		<tr><td style="font-weight:normal">Address1:</td>
			 <td style="padding-right:28px"><input type="text" name="Addr1" id="Addr1" style="margin-left:0px;width:230px" ></td>
		<td style="padding-right:7px">Address2:</td>
			<td><input type="text" name="Addr2" id="Addr2"></td>
			
		</tr>
		</table>
	</td>
	</tr>





<tr height="">
<td colspan=2> 
  <table border=0 >
		<tr><td style="padding-right:5px;font-weight:normal">City:</td>
			 <td style="padding-right:25px"><input type="text" name="City" id="city" style="width:90px" ></td>
		<td style="padding-right:5px">State:</td>
			 <td style="padding-right:28px"><input type="text" name="State" id="state" style="width:100px" ></td>
		<td style="padding-right:5px">Zip:</td>
			 <td style="padding-right:20px"><input type="text" name="Zip" id="zip" style="width:70px"></td>
		<td style="width:12%">Country:</td>
			 	<td ><select name="country1" id="country1" style="width:69px">
			 
			 <option value=4>India</option>
			 <option value=5>US</option>
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

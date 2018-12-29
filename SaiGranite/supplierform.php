<html>
<style>
table table{
border:0px solid #b3b5b7;

}
input,select{
 border-radius:2px;
 border:1px solid black;
}
table tr:nth-child(1) td:nth-child(1){
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
<body style="font-family:arial;margin-left:200;margin-top:20">
<form  Action="supregdb.php" method="post">
<h2 >New Supplier Form</h2>
<div>
<table >
	<tr>

	
		<td>SupplierName:<br><input type="text" name="name" style="margin-top:5px" required></td>
		<td>
		<label style="font-weight:bold;font-size:14">SupplierType:</label><br>
		<select name="type">
		<option value="Distributors">Distributors</option>
		<option value="Manufactures">Manufactures</option>
		<option value="Fabricators">Fabricators</option>
		</select>
		</td>
		<td>
		<label style="font-weight:bold;font-size:14">Language:</label><br>
		<select name="language">
		<option value=1>English</option>
		<option value=2>Hindi</option>
		<option value=3>Telugu</option>
		</select>
		</td>
	
	
	</tr>
	 </table>
	</div>
	<div>
	
	 <table >
	  <tr><td>Contact Information</td></tr>
	  <tr><td>Primary Ph.No.</td>
	      <td><input type="text" name="PrimaryPhone"></td>
	 <td>Alternate Ph.No.</td>
	      <td><input type="text" name="SecPhone"></td>
	  </tr>
	  <tr><td>Primary Email</td>
	      <td><input type="text" name="PrimaryEmail"></td>
	  <td>Alternate Email</td>
	      <td><input type="text" name="SecEmail"></td>
	  </tr>
	  <tr><td>Website</td>
	      <td><input type="text" name="Website"></td>
	  </tr>
	 </table>
	</div>
	
	<div>

	<table border=0 >
		<tr><td >SupplierAddress:</td></tr>
		<tr><td >Address1:</td>
			 <td colspan=3><input type="text" name="Addr1" style="width:290px;margin-left:-20px"></td>
		<td style="padding-right:500px">Address2:</td>
			<td><input type="text" name="Addr2" style="margin-left:-350px"></td>
			
		</tr>
		<tr><td >City</td>
			 <td ><input type="text" name="City" style="width:100px;margin-left:-20px" ></td>
		<td style="	padding-right:20px">State  :</td>
			 <td ><input type="text" name="State" style="width:100px;margin-right:280px"></td>
		
		</tr><td style="width:12%">Country  :</td>
			 	<tr><td ><select name="country1">
			 
			 <option value=4>India</option>
			 <option value=5>US</option>
			 </select></td></tr>
	</table>
	</div>
	<div>
	<table border=0>
		<tr><td>ShipToAddress:</td></tr>
		<tr><td>Address1:</td>
			 <td><input type="text" name="Addr2_1"></td>
		<td >Address2:</td>
			<td><input type="text" name="Addr2_2"></td>
		</tr>
		<tr><td>City  :</td>
			 <td><input type="text" name="City2"></td><td>State  :</td>
			 <td><input type="text" name="State2"></td>
			 <td>Zip:</td>
			 <td><input type="text" name="Zip2"></td></tr>
        <tr><td>Country  :</td>
			 <td><select name="country2">
			 <option value="4">India</option>
			 <option value="5">US</option>
			 </select></td></tr>
	</table>
	
	</div>
	<div>
	<table border=0>
	 <tr><td valign="top">Notes</td></tr>
	 <tr><td><textarea rows="5" cols="50" name="notes" ></textarea></td></tr>
	 </table>
	</td>
	</tr>
    <tr>
	<td>
	<table border=0>
	<tr>
	   <td><input type="Reset" style="height:30;width:100;"></td>
	    
	    <td><input type="Submit" style="height:30;width:200;margin-left:400"></td>
		
	</tr>
	</table>
	</div>

</form>

</body>
</html>
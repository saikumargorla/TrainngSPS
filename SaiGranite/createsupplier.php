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
input[type=reset],input[type=submit] {
cursor:pointer;
}


</style>
</head>

<?php include 'top.php'; ?>

<body style="background-color:#e8ebef;">
<form  Action="supregdb.php" method="post">
<div style="border:0px solid black;width:100%;font-family:arial;width:40%;height:80%;padding-left:5px;padding-top:10px;background-color:" class="main">
<table style="border:0px solid green;background-color:whitesmoke;padding-right:20px;padding-left:20px;">
<tr>
<td>
<div style="margin-top:-20px;"><h2>Add New Supplier</h2></div>
<div>
<table>
	<tr>
		<td style="padding-right:15px">Supplier Name<br><input type="text" name="name" style="margin-top:5px" required></td>
		<td>
		<td style="padding-right:20px;font-weight:bold;font-size:14">Supplier Type<br>
		<select name="type" >
		<option value="Distributors">Distributors</option>
		<option value="Manufactures">Manufactures</option>
		<option value="Fabricators">Fabricators</option>
		</select>
		</td>
		
		<td style="padding-right:15px;font-weight:bold;font-size:14">Contact Name<br><input type="text" name="cname" style="margin-top:5px" required></td>

		<td style="font-weight:bold;font-size:14">Language<br>
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
	      <td style="padding-right:20px"><input type="text" name="PrimaryPhone" style="margin-left:-25px;"></td>
	 <td>Alternate Ph.No.</td>
	      <td ><input type="text" name="SecPhone"></td>
	  </tr>
	  <tr><td>Primary Email</td>
	      <td style="padding-right:20px"><input type="text" name="PrimaryEmail" style="margin-left:-25px"></td>
	  <td>Alternate Email</td>
	      <td><input type="text" name="SecEmail"></td>
	  </tr>
	  <tr><td>Website</td>
	      <td><input type="text" name="Website" style="margin-left:-25px"></td>
	  </tr>
	 </table>
</div>

<div>
<table border=0 >
<tr>
<td> <table border=0 >
		<tr><td>Supplier Address</td></tr>
		<tr><td style="font-weight:normal">Address1</td>
			 <td style="padding-right:20px"><input type="text" name="Addr1" id="Addr1" style="margin-left:-45px;width:260px" ></td>
		<td style="padding-right:7px">Address2</td>
			<td><input type="text" name="Addr2" id="Addr2"></td>
			
		</tr>
		</table>
	</td>
	</tr>

<tr>
<td> <table border=0 >
		<tr><td style="padding-right:5px;font-weight:normal">City</td>
			 <td style="padding-right:25px"><input type="text" name="City" id="city" style="width:90px" ></td>
		<td style="padding-right:5px">State</td>
			 <td style="padding-right:25px"><input type="text" name="State" id="state" style="width:100px" ></td>
		<td style="padding-right:5px">Zip</td>
			 <td style="padding-right:25px"><input type="text" name="Zip" id="zip" style="width:70px"></td>
		<td style="width:12%">Country</td>
			 	<td ><select name="country1" id="country1" style="width:100px">
			 
			 <option value=4>India</option>
			 <option value=5>US</option>
			 </select></td>
			 
			 
			 </tr>
			 			 		<tr><td colspan=8>
<input type="checkbox" name="shippingtoo" id="shippingtoo"  onclick="shipping();">
<em>Check this box if Billing Address and Shipping Address are the same.</em></td></tr>
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
			 <td style="padding-right:25px"><input type="text" name="Addr2_1" id="Addr2_1" style="margin-left:-40px;width:260px" ></td>
		<td style="padding-right:7px">Address2</td>
			<td><input type="text" name="Addr2_2" id="Addr2_2"></td>
			
		</tr>

			</table>
			</td>
			</tr>
		</table>
	</td>
	</tr>

<tr>
<td> <table border=0 >
		<tr><td style="padding-right:3px;font-weight:normal">City</td>
			 <td style="padding-right:26px"><input type="text" name="City2" id="city2" style="width:90px" ></td>
		<td style="padding-right:3px">State</td>
			 <td style="padding-right:30px"><input type="text" name="State2" id="state2" style="width:100px" ></td>
		<td style="padding-right:3px">Zip</td>
			 <td style="padding-right:26px"><input type="text" name="Zip2" id="zip2" style="width:70px"></td>
		<td style="">Country</td>
			 	<td ><select name="country2" id="country2" style="width:100px">
			 
			 <option value=4>India</option>
			 <option value=5>US</option>
			 </select></td>
			 
			 
			 </tr>

	    
		</td>
		</tr>
	</table>
</div>
<script>
function shipping(){


 
if(document.getElementById("shippingtoo").checked){




document.getElementById("Addr2_1").value=document.getElementById("Addr1").value;
document.getElementById("Addr2_2").value=document.getElementById("Addr2").value;
document.getElementById("city2").value=document.getElementById("city").value;
document.getElementById("state2").value=document.getElementById("state").value;
document.getElementById("zip2").value=document.getElementById("zip").value;
document.getElementById("country2").value=document.getElementById("country1").value;



}
}

</script>
    <div>
	<table border=0>
	 <tr><td valign="top">Notes</td></tr>
	 <tr><td><textarea rows="5" cols="50" name="notes" ></textarea></td></tr>
	 </table>
	</div>

   <div>
   <table border=0>
	<tr>
	  
	    <td><input type="button" value="cancel" style="height:30;width:100;background-color:#525863;color:white;font-size:16px;letter-spacing:0.5px;onclick='home1.php'"></td>
	    <td ><input type="Submit" value="save"  style="height:30;width:180;background-color:#525863;color:white;margin-left:335;font-size:18px;letter-spacing:0.5px"></td>
		
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



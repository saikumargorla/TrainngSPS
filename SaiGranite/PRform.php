<html>
<head>
<style>
div div{
margin-top:15px;
}

div div table tr:nth-child(1) td:nth-child(1){
font-weight:bold;
font-size:14;
}
</style>
</head>
<body>
<div style="font-family:arial">

<div><h3>Purchase Request</h3></div>



<div>
<table border=0>

<tr><td><table><tr><td style="font-weight:normal">Supplier Name</td><td><input type="text" name="supname"></td><td>Requested Date</td><td><input type="text"></td></tr></table></td></tr>

 
</table>
</div>

<div>
<table border=0 >
<tr>
<td> <table border=0 >
		<tr><td>Purchase Address</td></tr>
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
<em>Check this box if Purchase Address and Shipping Address are the same.</em></td></tr>
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


<div style="margin-top:25px">

<table border=1 width="620" height="">
<tr><th>Item Name</th><th>Quantity</th><th>UOM</th><th>Unit Cost </th><th>Line Total</th></tr>
<tr><td></td><td></td><td></td><td></td><td></td></tr>
</table>
</div>

</div>
</body>
</html>
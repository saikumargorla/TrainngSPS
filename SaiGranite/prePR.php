<html>
<head>
<style>
.firsttab table{
margin-top:10px;
}
.itemtable{
border-collapse:collapse;
border:1px solid black;
}
.itemtable td,th{
border:1px solid black;
}
input[type=text],input[type=date]{
margin-left:10px;
}
.itemtable input[type=text]{
margin-left:0px;
width:130px;
padding:5px;
font-size:14;
}
input{
padding:3px;
font-size:14px;
border:1px solid #b3b5b7;
}
select{
padding:3px;
border:1px solid #b3b5b7;
width:140px;
font-size:16px;
}

input[type=button],input[type=submit] {
cursor:pointer;
}
</style>
</head>

<table border=0 style="font-family:arial" width="" height="100%" class=".firsttab">
<tr height="5%"><td colspan="6">
<h2>Pre-Purchase Request</h2>
</td></tr>
<tr height="5%"><td colspan="6" align="right" ><table><tr><td >Request Number</td><td><input type="text" style="width:70"></td></tr></table></td>
</tr>
<tr height="5%"><td colspan="6" align="left">
<table border=0><tr><td>Requested By</td>
<td>
<select name="name">
 <?php
 $serverName = "DESKTOP-P6C3DL5\SQLEXPRESS";

$connectionInfo = array( "Database" => "purchasedb","UID" =>"sps", "PWD" =>"sps");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}
$sql= "select name from Party where PartyType='employee'";

$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
	?>
<option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
<?php
}
 ?>
 </select>

</td>
<td style="padding-left:150px">Request Date</td><td ><input type="date"></td>

</tr>
</table>
</td>
</tr>
<tr height="25%"><td colspan="6" >
<table border=0 width="" height="" class="itemtable" style="margin-top:20px;margin-bottom:20px;">
<tr height=""><th >Item Name</th><th>Quantity</th><th>UOM</th><th>Unit Cost </th><th>Line Total</th></tr>
<tr height=""><td width="" height=""><input type="text" style=""></td><td><input type="text" style=""></td><td><input type="text" style=""></td><td><input type="text" style=""></td><td><input type="text" style=""></td></tr>
<tr height=""><td><input type="text" style=""></td><td><input type="text" style=""></td><td><input type="text" style=""></td><td><input type="text" style=""></td><td><input type="text" style=""></td></tr>
<tr height=""><td><input type="text" style=""></td><td><input type="text" style=""></td><td><input type="text" style=""></td><td><input type="text" style=""></td><td><input type="text" style=""></td></tr>
<tr height=""><td><input type="text" style=""></td><td><input type="text" style=""></td><td><input type="text" style=""></td><td><input type="text" style=""></td><td><input type="text" style=""></td></tr>
<tr height=""><td><input type="text" style=""></td><td><input type="text" style=""></td><td><input type="text" style=""></td><td><input type="text" style=""></td><td><input type="text" style=""></td></tr>
<!--<tr height=""><td rowspan=3 colspan=3 style="border-color:whit;border-right:0px solid black"></td><td>Sub Total</td><td></td></tr>
<tr height=""></td><td>GST</td><td></td></tr>
<tr height=""></td><td>Total</td><td></td></tr>
-->
</table>
</td></tr>

<tr height="5%"><td colspan="6" align="left" ><table style="margin-bottom:20px;"><tr><td >Approved By</td><td><input type="text" ></td></tr></table></td>
</tr>

<tr height="7%">
<td align="left">
<input type="button" value="cancel" style="height:30;width:100;background-color:#525863;color:white;font-size:16px;letter-spacing:0.5px;">
</td>
<td colspan="5" align="right"><input type="submit"   style="height:30;width:180;background-color:#525863;color:white;font-size:18px;letter-spacing:0.5px"></td>

<tr><td></td></tr>



</table>
</html>
<body style="font-family:arial;">
<div style="border:0px solid black;width:100%;font-family:arial;" >
<table border=0 height="10%" width="100%">
<tr height="5%">
<td height="100%">
	<table border=0 height="100%">
		<tr>
			<td><img src="logo.png" width="30px" height="25px">
			</td>
			<td style="padding-left:10px"><b><a href="home1.php" style="text-decoration:none;color:black">Sai Granite Systems</b></td>
		</tr>
	</table>
</td>
</tr>

<tr height="3%" style="border:0px solid red;background-color:#666671">
<td style="padding-top:5px;padding-bottom:5px;width:100%" height="5%">

<table border=0 height="100%" >
<tr>
<td style="height:100%">
<nav>
 <ul class="nav">
   <li><a href="home1.php">Home</a></li>
   <li><a href="#">Supplier</a>
     <ul>
       <li><a href="createsupplier.php">Add Supplier</a></li>
       <li><a href="listsupplier.php">List suppliers</a></li>
      
     </ul>
   </li>

  <li><a href="#">Employee</a>
     <ul>
       <li><a href="employeeform.php">Add Employee</a></li>
       <li><a href="listemployee.php">List employees</a></li>
      
     </ul>
   </li>


   <li><a href="#">Purchase</a>
     <ul>
       <li><a href="prepurchaserequest.php">Request</a></li>
       <li><a href="#">Order</a>
       <!--  <ul>
           <li><a href="#">Ray</a></li>
           <li><a href="#">Veronica</a></li>
           <li><a href="#">Bushy</a></li>
           <li><a href="#">Havoc</a></li>
         </ul>
		
       </li>
       <li><a href="#">item</a></li>
       <li><a href="#">item</a></li>
	   -->
     </ul>
   </li>
 </nav>
</td>
</tr>
</table>

 <!--
 <table border=0 width="25%">
 <tr><td class="dropdown">
<a>Supplier</a>
<ul>
<li>link 1</li>
<li>link 2</li>
<li>link 3</li>
</ul>

</td>
<td class="dropdown">
<a>Products</a>
<ul>
<li>link 1</li>
<li>link 2</li>
<li>link 3</li>
</ul>

</td>
<td>Customers</td></tr>
 </table>
-->

</td>
</tr>


</table>
</div>


<style>
.dropdown ul {display:none}
.dropdown:hover ul {list-style:none;display:block;position:absolute;background-color:rgba(30,30,130,0.4);}

nav {    
 display: block;
 text-align: center;
}
nav ul {
 margin: 0;
 padding:0;
 list-style: none;
}
.nav a {
 display:block; 
 background: #666670; 
 color: #fff; 
 text-decoration: none;
 padding: 0.8em 1.8em;
 text-transform: uppercase;
 font-size: 80%;
 letter-spacing: 2px;
 text-shadow: 0 -1px 0 #000;
 position: relative;
}
.nav{  
 vertical-align: top; 
 display: inline-block;
 box-shadow: 
   1px -1px -1px 1px #fff, 
   -1px 1px -1px 1px #000, 
   0 0 6px 3px #fff;
 border-radius:6px;
}
.nav li {
 position: relative;
}
.nav > li { 
 float: left; 
 border-bottom: 0px #aaa solid; 
 margin-right: 1px; 
} 
.nav > li > a { 
 margin-bottom: -5px;

}
.nav > li:hover, 
.nav > li:hover > a { 
 border-bottom: orange;

}
.nav li:hover > a { 
 color:orange; 
}
.nav > li:first-child { 
 border-radius: 4px 0 0 4px;
} 
.nav > li:first-child > a { 
 border-radius: 4px 0 0 0;
 
}
.nav > li:last-child { 
 border-radius: 0 0 4px 0; 
 margin-right: 0;
} 
.nav > li:last-child > a { 
 border-radius: 0 4px 0 0;
}
.nav li li a { 
 margin-top: 0px;
}

.nav li a:first-child:nth-last-child(2):before { 
 content: ""; 
 position: absolute; 
 height: 0; 
 width: 0; 
 border: 5px solid transparent; 
 top: 50% ;
 right:5px;  
}

/* submenu positioning*/
.nav ul {
 position: absolute;
 white-space: nowrap;
 border-bottom: 5px solid  orange;
 border-left:2px solid orange;
 border-right:2px solid orange;
 border-top:0px solid orange;
 z-index: 1;
 left: -99999em;
}
.nav > li:hover > ul {
 left: auto;
 margin-top: 2px;
 min-width: 100%;
 text-align:left;
 
}
.nav > li li:hover > ul { 
 left: 100%;
 margin-left: 1px;
 top: -1px;
 
}
.top{
font-family:arial;
position:relative;
}
</style>
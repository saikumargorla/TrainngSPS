<!doctype html>
<html lang="en">
 <head>
  <meta name="Author" content="saikumar">
  <title>Regestration form</title>
  <style>
  
  input[id=username]{
  
  border:1px solid blue;
  text-align:right;
  background-color:#F9A5BD;
  color:;
  border-radius:5px;
  }
  input[type=submit],input[type=button],input[type=reset]{
  cursor:pointer;
  }

  table{
  border-collapse:collapse;
  }
  td{
  padding-left:5px;
  border:1px solid black;
  }
  .selectcss{
  border:1px solid brown;
  border-color:red;
  background-color:#bfbfbf;
  color:;

  }
  #textareacss{
  
  color:black;
  }

  .loginbtncss{
  background-color:#00802b;
  color:white;
  width:200px;
  height:30px;

  }
  input[type=text]:focus{
  background-color:#ffeb99;
  }
  
  </style>
 </head>
 <body style="font-family:arial;">
 <form style="margin-top:50px" action="reg.php" method="post">
  <table border="0" width="500" height="500" align="center">
      <tr>
		  <td align="center" colspan="2" >
		  <label><b>Regestration Form</b></label>
		  </td>
	  </tr>
	  <tr>
		  <td>
		  <label>Enter your name</label>
		  </td>
		  <td>
		  <input type="text" id="username" name="u_name" size="25" autofocus required>
		  </td>
	  </tr>
	  
	  <tr>
		  <td>
		  <label>Enter your email_id</label>
		  </td>
		  <td>
		  <input type="email" id="mail_id" name="email_id" placeholder="eg:abc@gmail.com" size="30">
		  </td>
	  </tr>
	  <tr>
		  <td>
		  <label>Enter password</label>
          </td>
		  <td>
		  <input type="password" id="pwd" name="password" maxlength="12">
		  </td>
	  </tr>
	  <tr>
		  <td>
		  <label>Select gender</label>
		  </td>
		  <td>
		  <input type="radio" id="male" name="gender" value="male" checked>Male
		  <input type="radio" id="female" name="gender" value="male" disabled>Female
		  </td>
	  </tr>
	  <tr>
		  <td>
		  <label>Select known languages</label>
		  </td>
		  <td>
		  <input type="checkbox" id="check1" name="known_lang" value="C" checked><span style="color:red">C</span>
		  <input type="checkbox" id="check2" name="known_lang" value="C++" ><span  style="color:purple;">C++</span>
		  <input type="checkbox" id="check3" name="known_lang" value="Java"><span style="color:green">Java</span>
		  </td>
	  </tr>
	  <tr>
		  <td valign="top">
		  <label>Enter your address</label>
		  </td>
		  <td>
		  <input type="text"  value="kondapur" style="height:50px" readonly>
		  </td>
	  </tr>
      <tr>
		  <td>
		  <label>Select your state</label>
		  </td>
		  <td>
		  <select style="height:25px;width:200px" size="1" name="districts" class="selectcss" required>
		  <option value="TG">Telangana</option>
		  <option value="AP">Andhrapradesh</option>
		  <option value="Kerala">Kerala</option>
		  <option value="TN" disabled>Tamilnadu</option>
		  <option value="" selected>--select district--</option>
		  </select>
		  </td>
	  </tr>
	  <tr >
		  <td valign="top" style="padding-top:10px">
		  <label>Enter the projects you have done</label>
		  </td>
		  <td valign="top" style="padding-top:10px">
		  <textarea rows="4" cols="30"  class="selectcss" id="textareacss" placeholder="About your projects" maxlength="100" ></textarea>
		  </td>
	  </tr>
	   <tr>
		  <td align="center" colspan="2">
		  <input type="reset" disabled>
		  <input type="submit" style="width:150px">		  
		  </td>
	  </tr>
	  <tr>
	  <td colspan="2" align="center">
	  <input type="button" value="Log In" class="loginbtncss" ></input>
	  </td>
	  </tr>
  </table>
  </form>
 </body>
</html>

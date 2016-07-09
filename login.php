<?php 
	@$msg=$_GET["msg"];

?>
<head>
<style>
.main
{
 height:300px;width:550px;
 background:url(loginbg3.jpg);
 margin:0px auto;


}

</style>

</head>
<body>

<div class="main">



<form action="action2.php" method="post">

<fieldset>
<legend align="left"><font  color="#8600B3" size="7"><b>LOGIN</b></font></legend>

<table>
<tr> </tr>
<tr> </tr>


<tr></tr>
<tr> </tr>
<tr> </tr>
<tr></tr>
<tr></tr>
<tr><td><h3 style="color:red;"><?php if(@$msg=='failure') echo "Enter Correct details!!"?><h3></td></tr>
<tr><td>Email:</td><td><input type="text" name="email" id="e" value=""></td></tr><br>
<tr><td>Password:</td><td><input type="password" name="password" id="pswd" value=""></td></tr><br>
<tr> &nbsp;</tr>
<tr> &nbsp;</tr>
<tr> &nbsp;</tr>
<tr> &nbsp;</tr>
<tr> &nbsp;</tr>

<tr><td>&nbsp;</td><td><input type="submit" id="sub" name="sub" value="Login"> </td></tr>

<tr>&nbsp;</tr>


</table>

</fieldset>
</form>
</div>


</body>

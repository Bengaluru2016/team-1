<?php
@$msg=$_GET["msg"];

?>
<html>

	<head>
		<style>
			.main
			{
				height:450px;width:1000px;
				background:url(formbg2.jpg);
				margin:0px auto;


			}

		</style>

	</head>
	<script>
			function validate()
			{
			//alert("test");
			var name=document.getElementById("name").value;
			var email=document.getElementById("email").value;
			var password=document.getElementById("password").value;
			var mobile=document.getElementById("mobile").value;
			var gender=document.getElementById("g").value;
			
			var emailpattern=/^[a-z]+[a-z0-9\_\.]+[@]+[a-z]+[.]+[a-z]+$/;
			var passwordpattern=/^[a-zA-Z0-9]+[@\$]+$/;
			var mobilepattern=/^[0-9]+$/;
			if(name.length==0)
			{
			alert("please enter name");
			document.getElementById("name").focus();
			return false;
			}
			if(!email.match(emailpattern))
			{
			alert("please enter email ex. abc@xyz.com");
			document.getElementById("email").focus();
			return false;
			}
			
			
			if(email.length==0)
			{
			alert("please enter email");
			document.getElementById("email").focus();
			return false;
			}
			/*if(!email.match(emailpattern))
			{
			alert("please enter email ex. abc@xyz.com");
			document.getElementById("email").focus();
			return false;
			}*/
			if(password.length==0)
			{
			alert("Please enter password");
			document.getElementById("password").focus();
			return false;
			}
			if(mobile.length!=10)
			{
			alert("please enter mobile and 10 numbers");
			document.getElementById("mobile").focus();
			return false;
			}
			if(!mobile.match(mobilepattern))
			{
			alert("please enter mobile and numeric numbers");
			document.getElementById("mobile").focus();
			return false;
			}
			if(gender.length==0)
			{
				alert("Choose Male or Female");
				return false;
			}
			
					
			}
		</script>
	
	<body>
		<div class="main">
			<form action="action.php" method="post">
				<fieldset>
					<legend align="center"><font  color="#A300D9" size="15"><i><b>REGISTRATION</b></i></font></legend>
					<table>
						<tr><td><h3 style="color:red;"><?php if(@$msg=='succesful') echo "Successfully registered!!";
						if(@$msg=='failure') echo "Enter Unique details!!"?><h3></td></tr>
						<tr><td>Name:</td><td><input type="text" name="name" id="name" value=""></td></tr><br>
						<tr><td>Email:</td><td><input type="text" name="email" id="email" value=""></td></tr><br>
						<tr><td>Password:</td><td><input type="password" name="password" id="password" value=""></td></tr><br>
						<tr><td>Mobile:</td><td><input type="text" name="mobile" id="mobile" value=""></td></tr><br>
						<tr><td>Gender:</td><td><input type="radio" name="g" id="g" value="Male" checked>Male
							<input type="radio" name="g" id="g" value="Female">Female</td></tr><br>
						<tr><td>Address:</td><td><textarea id="address" cols="25" rows="8" name="addrs"></textarea></td></tr>
						<tr><td>&nbsp;</td><td><input type="submit" id="sub" name="sub" value="Submit" onclick="return validate();">
						<div float:left>                <a href="login.php" >Already Registered?</a></div></td></tr>
						</table>
				</fieldset>
			</form>
		</div>
	</body>
</html>
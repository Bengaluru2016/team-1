<?php
@$msg=$_GET["msg"];
?>
<html>

	<head>
		<style>
		.box{
		width:180px;
		height:25px;
		}
			.main
			{
				height:450px;width:1000px;
				background:url(formbg2.jpg);
				margin:0px auto;
			}
		</style>

	
	<script>
			function validate()
			{
			//alert("test");
			var fname=document.getElementById("fname");
			var lname=document.getElementById("lname");
			var uname=document.getElementById("uname");
			var email=document.getElementById("email");
			var password=document.getElementById("password");
			var mobile=document.getElementById("mobile");
			var gender=document.getElementById("g");
			
			var namePattern=/^[a-z A-Z]{1,50}$/;
			var unamePattern=/^[a-z A-Z]{1}[a-z A-Z 0-9]{1,50}$/;
			var emailpattern=/^[a-z]{1}[a-z 0-9]{1,10}@[a-z]{3,5}\.[a-z]{3}$/;
			var passwordpattern=/^[a-z A-Z 0-9]{5}$/;
			var mobilepattern=/^[0-9]{10}$/;
			if(!namePattern.test(fname.value)){
				alert("invalid first name");
				return false;
			}

			if(!namePattern.test(lname.value)){
				alert("invalid last name");
				return false;
			}
			if(!unamePattern.test(uname.value)){
				alert("invalid Username");
				return false;
			}
			if((fname.value).length==0)
			{
			alert("please enter  firstname");
			document.getElementById("fname").focus();
			return false;
			}
			if(lname.value.length==0)
			{
			alert("please enter  lastname");
			document.getElementById("lname").focus();
			return false;
			}
			if(name.value.length==0)
			{
			alert("please enter  username");
			document.getElementById("name").focus();
			return false;
			}
			if(!emailpattern.test(email.value))
			{
			alert("please enter email ex. abc@xyz.com");
			document.getElementById("email").focus();
			return false;
			}
			if(!mobilepattern.test(mobile.value)){
				alert("invalid mobile no.");
				return false;
			}
			
			if(email.length==0)
			{
			alert("please enter email");
			document.getElementById("email").focus();
			return false;
			}
			if(!email.match(emailpattern))
			{
			alert("please enter email ex. abc@xyz.com");
			document.getElementById("email").focus();
			return false;
			}
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
			if(gender.length==0)
			{
				alert("Choose Male or Female");
				return false;
			}
			
				return true;	
			}
		</script>
	</head>
	<body>
		<div class="main">
			<form method="post" action="db.php" onSubmit="validate()">
				<fieldset>
					<legend align="center"><font  color="#A300D9" size="15"><i><b>REGISTRATION</b></i></font></legend>
					<table>
						<tr><td><h3 style="color:red;"><?php if(@$msg=='succesful') echo "Success22fully registered!!";
						if(@$msg=='failure') echo "Enter Unique details!!"?></h3></td></tr>
						<tr><td>First Name:</td><td><input class="box" type="text" name="fname" id="fname" value=""/></td></tr><tr></tr><tr></tr>
						<tr><td>Last Name:</td><td><input class="box" type="text" name="lname" id="lname" value=""/></td></tr><tr></tr><tr></tr>
						<tr><td>UserName:</td><td><input class="box" type="text" name="uname" id="uname" value=""/></td></tr><tr></tr><tr></tr>
						<tr><td>Email:</td><td><input class="box" type="text" name="email" id="email" value=""/></td></tr><tr></tr><tr></tr>
						<tr><td>Password:</td><td><input class="box" type="password" name="password" id="password" required="true" value=""/></td></tr><tr></tr><tr></tr>
						<tr><td>Mobile:</td><td><input class="box" type="text" name="mobile" id="mobile" value=""/></td></tr><tr></tr><tr></tr>
						<tr><td>Gender:</td><td><input type="radio" name="g" id="g" value="Male" />Male
							<input type="radio" name="g" id="g" value="Female" />Female</td></tr><tr></tr><tr></tr>
						<tr><td>Loan Purpose</td><td><select class="box" name="loanPurpose">
						<option>MicroCredit</option>
						<option>Education</option>
						<option>MicroVenture</option>
						<option>Field Partner Staff Loans</option>
						<option>Vocational Loans</option>
						<option>Community Project</option>
						<option>Sanitation</option></select></td></tr><tr></tr><tr></tr>
						<tr><td>&nbsp;</td><td><input style="width:50px,height:20px;" type="submit" id="sub" name="sub" value="Submit" onclick="return validate();">
						<div float:left> <a href="login.php" >Already Registered?</a></div></td></tr>
						</table>
				</fieldset>
			</form>
		</div>
	</body>
</html>
<?php
$host='localhost';
$user='root';
$pass='';
$db='test2';
$con=mysqli_connect($host,$user,$pass,$db);
if(mysqli_connect_errno())
	die("connection failed" . mysqli_connect_error());
?>
<html>
<head>
</head>
<body>
<?php

if(isset($_POST['sub']))
{
	$uname=$_POST['uname'];
	$password=$_POST['password'];
	$loanPurpose=$_POST['loanPurpose'];
	echo "trying to insert data";
	$sql="insert into investor (uname,password,loanPurpose) values ('$uname','$password','$loanPurpose')";
	 
$query=mysqli_query($con,$sql);
echo "data inserted";
if(!$query)
	die("query failed" . mysqli_error($con));
else
		echo "insertion success";
}
?>
</body>
</html>


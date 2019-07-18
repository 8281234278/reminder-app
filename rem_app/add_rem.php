<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>REMINDER</title>
	<style type="text/css">
		input{
			width: 90%;
			display: block;
			margin-left: auto;
			margin-right: auto;
			margin-top: 15px;
			margin-bottom: 15px;
			text-align: center;
		}
		#rem{
			height:45px; 
		}
	</style>
</head>
<body>
	<center>
	<form method="post">
	<table border="1">
		<tr>
			<th colspan="2">ADD REMINDER</th>
		</tr>
		<tr>
			<td colspan="2"><input type="text" name="uname" placeholder="FULL NAME" required=""></td>
		</tr>
		<tr>
			<td colspan="2"><input type="email" name="uemail" placeholder="EMAILID" required=""></td>
		</tr>
		<tr>
			<th>DATE</th>
			<td><input type="date" name="remdate" required=""></td>
		</tr>
		<tr>
			<td colspan="2"><input type="text" name="rem" placeholder="REMINDER" id="rem" required=""></td>
		</tr>
		<tr>
			<th colspan="2"><button type="submit" name="sub">ADD</button></th>
		</tr>
	</table>
</form>
</center>
</body>
</html>
<?php
	if(isset($_POST['sub'])){
		$user_name=$_POST['uname'];
		$user_email=$_POST['uemail'];
		$rem_date=$_POST['remdate'];
		$msg=$_POST['rem'];
		$sql="insert into rem(id,user_name,user_email,rem_date,reminder) values('','$user_name','$user_email','$rem_date','$msg')";
		if(mysqli_query($con,$sql)){
			echo "<script>alert('REMINDER ADDED SUCCESSFULLY');window.location='view_rem.php';</script>";
		}
	}
?>
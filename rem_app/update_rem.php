<?php
include 'connection.php';
$id=$_REQUEST['q'];
$sql="select * from rem where id='$id'";
$q=mysqli_query($con,$sql);
$arr=mysqli_fetch_array($q);
?>
<!DOCTYPE html>
<html>
<head>
	<title>REMINDER</title>
	<style type="text/css">
		input{
			width: 80%;
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
			<th>EDIT REMINDER</th>
		</tr>
		<tr>
			<td><input type="text" name="uname" value="<?php echo $arr['user_name'];?>"></td>
		</tr>
		<tr>
			<td><input type="email" name="uemail" value="<?php echo $arr['user_email'];?>"></td>
		</tr>
		<tr>
			<td><input type="date" name="remdate" value="<?php echo $arr['rem_date'];?>"></td>
		</tr>
		<tr>
			<td><input type="text" name="rem" value="<?php echo $arr['reminder'];?>" id="rem"></td>
		</tr>
		<tr>
			<th><button type="submit" name="sub">UPDATE</button></th>
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
		$sql_upd="update rem set user_name='$user_name',user_email='$user_email',rem_date='$rem_date',reminder='$msg' where id='$id'";
		if(mysqli_query($con,$sql_upd)){
			echo "<script>alert('REMINDER UPDATED SUCCESSFULLY');window.location='view_rem.php';</script>";
		}
	}
?>
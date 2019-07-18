<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>REMINDERS</title>
	<style type="text/css">
		button{
			margin-bottom: 35px;
		}
	</style>
</head>
<body>
	<center>
		<button><a href="add_rem.php">ADD NEW REMINDER</a></button>
	<table border="1">
		<tr>
			<th colspan="5">ALL REMINDERS</th>
		</tr>
		<tr>
			<th>NAME</th>
			<th>EMAIL ID</th>
			<th>DATE</th>
			<th>REMINDER</th>
			<th>OPERATIONS</th>
		</tr>
		<?php
		$sql="select * from rem";
		$q=mysqli_query($con,$sql);
		while($arr=mysqli_fetch_array($q)){


		?>
		<tr>
			<td><?php echo $arr['user_name'];?></td>
			<td><?php echo $arr['user_email'];?></td>
			<td><?php echo $arr['rem_date'];?></td>
			<td><?php echo $arr['reminder'];?></td>
			<th><a href="update_rem.php?q=<?php echo $arr['id'];?>">UPDATE</a></th>
		</tr>
		<?php
	}
	?>
	</table>
</center>
</body>
</html>
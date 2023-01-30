<?php
	$conn = new mysqli('localhost','username','password','reg');
	$result = $conn->query("select * from users");	
?>

<html>
	<head><title> Admin - list of users </title></head>
	<body>
	<h1> List Of Users</h1>
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Actions</th>
			</tr>
		</thead>
		
<?php
	while($row = mysqli_fetch_assoc($result)){
?>
			<tr>
				<td><?= $row['id']?></td>
				<td><?= $row['name']?></td>
				<td><?= $row['email']?></td>
				<td><a href="edit.php?id=<?=$row['id']?>"> Edit</a> | <a href="delete.php?id=<?=$row['id']?>">Delete</a></td>
			</tr>

<?php
}
?>

		</tbody>
		<tfoot>
			<tr>
				<td><br/><br/>Total Of</th>
				<td style="text-align:center"><br/><br/><?= mysqli_num_rows($result)?> users </a></td>
				<td colspan="3" style="text-align:right"><br/><br/><a href="add.php"> Add user</a></td>
			</tr>
		</tfoot>
		</table>
	</body>

</html>


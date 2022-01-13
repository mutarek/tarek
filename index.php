
<?php

require_once 'classes/user.php';


$user = new User();

if (isset($_POST['save_user'])) {
	$data = $_POST;
	$user->save_user($data);
}

$alldata = $user->getallUser();

?>
<!DOCTYPE html>
<html>
<head>
	<title>OOP Php</title>
</head>
<body>
<form action="" method="POST">
	<input type="text" name="name" placeholder="Enter Your name">	
	<input type="email" name="email"  placeholder="Enter Your Email">
	<input type="pass" name="password" placeholder="Enter Your Pass">
	<input type="submit" name="save_user" value="Save User">
</form>

<table border="">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Action</th>
	</tr>

	<?php while ($data = mysqli_fetch_assoc($alldata)) {
		?>


<tr>
	<td><?= $data['name'] ?></td>
	<td><?= $data['email'] ?></td>
	<td><?= $data['password'] ?></td>
	<td>
		<a href="">Edit</a>
		<a href="delete.php?id=<?= $data['id'] ?>">Delete</a>
	</td>
</tr>

<?php 
	}
	?>

</table>
</body>
</html>
<?php
	include('db.php');
	$result = mysqli_query($connection, "SELECT * FROM `art2` ORDER BY id DESC");

	while($row = mysqli_fetch_assoc($result))
	{?>
		
		<h3><?php echo $row['username'];?></h3>
		<h3><?php echo $row['email'];?></h3>
		<p><?php echo $row['text'];?></p>
		<p><?php echo $row['pubdate'];?></p>
		<hr>

		
	<?php }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="add.php">Dobavit</a>

</body>
</html>
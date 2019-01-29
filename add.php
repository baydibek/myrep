<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="add.php">
		Username<br> 
		<input type="text" required="required" name="username" pattern="^[a-zA-Z-0-9]+$"><br>
		Email<br>
		<input type="email" required="required" name="email"><br>
		Text<br>
		<textarea cols="40" rows="10" name="text" required="required"></textarea><br>
		<input type="hidden" name="pubdate" value="<?php echo date('Y-m-d H:i:s'); ?>">
		<input type="submit" name="add" value="Dobavit">
	</form>
	<?php 
	include('db.php');

	if(isset($_POST['add']))
	{
	$username = strip_tags(trim($_POST['username']));
	$email = strip_tags(trim($_POST['email']));
	$text = strip_tags(trim($_POST['text']));
	$pubdate = $_POST['pubdate'];

	mysqli_query($connection, "INSERT INTO `art2`(`username`, `email`, `text`, `pubdate`, `ip_address`, `browser`) 
		VALUES ('$username', '$email', '$text', '$pubdate', '".$_SERVER['REMOTE_ADDR']."', '".$_SERVER['HTTP_USER_AGENT']."')");
	}
	?>
</body>
</html>
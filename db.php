<?php
$connection = mysqli_connect('localhost', 'root', '', 'task2_db');
	
	if($connection == false)
	{
		echo 'Ne udalos';
		echo mysqli_connect_error();
		exit();
	}
	?>
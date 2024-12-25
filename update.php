<?php
	$connect = mysqli_connect("MySQL-8.2","root","","insta");

	$update = "UPDATE posts SET text = '{$_GET["text"]}', img = '{$_GET["img"]}' WHERE id = '{$_GET["id"]}' ";

	$query = mysqli_query($connect, $update);

	header("Location: https://update/index.php");
?>
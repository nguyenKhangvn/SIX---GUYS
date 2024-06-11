<?php
	require '../check_sup_admin_login.php';


	$id = $_GET['id'];

	include '../connect.php';
	$sql = "delete from admin
			where id = '$id'";

	if(mysqli_query($connect, $sql)){
		header("Location: index.php?success=1");
		exit();
	} else {
		echo "Lỗi";
	}
	mysqli_close($connect);


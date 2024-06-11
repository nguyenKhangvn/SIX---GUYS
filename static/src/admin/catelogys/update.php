<?php
	require '../check_admin_login.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    
    require "../connect.php";
    $sql = "UPDATE catelogy
            SET name = ?
            WHERE id = ?";
    $stmt = mysqli_prepare($connect, $sql);

    mysqli_stmt_bind_param($stmt, 'si', $name, $id);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    
    header("Location: index.php?success=1");
    exit(); 


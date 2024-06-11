<?php
	require '../check_admin_login.php';
    $name = $_POST['name'];

    require '../connect.php';

    $sql = 'INSERT INTO catelogy (name) VALUES (?)';
    $stmt = mysqli_prepare($connect, $sql);

    mysqli_stmt_bind_param($stmt, 's', $name);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    header('location:index.php?success=Thêm thành công');

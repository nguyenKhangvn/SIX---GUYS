<?php
	require '../check_sup_admin_login.php';


    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $photo = $_POST['photo'];

    require '../connect.php';

    $sql = 'INSERT INTO manufactures (name, address, phone, photo) VALUES (?, ?, ?, ?)';
    $stmt = mysqli_prepare($connect, $sql);

    mysqli_stmt_bind_param($stmt, 'ssss', $name, $address, $phone, $photo);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    header('location:index.php?success=Thêm thành công');

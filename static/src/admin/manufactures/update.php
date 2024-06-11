<?php
	require '../check_sup_admin_login.php';


    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $photo = $_POST['photo'];

    require "../connect.php";
    $sql = "update manufactures set
            name = ?,
            address = ?,
            phone = ?,
            photo = ?
            where id = ?";
    $stmt = mysqli_prepare($connect, $sql);

    mysqli_stmt_bind_param($stmt, 'ssssi', $name, $address, $phone, $photo, $id);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    header("Location:index.php?success=1");

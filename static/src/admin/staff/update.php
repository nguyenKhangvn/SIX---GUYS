<?php
        require '../check_sup_admin_login.php';


    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    require "../connect.php";
    $sql = "update admin set
            name = ?,
            password = ?,
            email = ?,
            phone = ?,
            address = ?
            where id = ?";
    $stmt = mysqli_prepare($connect, $sql);

    mysqli_stmt_bind_param($stmt, 'sssssi', $name, $password, $email, $phone, $address, $id);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    header("Location:index.php?success=1");

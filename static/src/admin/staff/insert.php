<?php
	require '../check_sup_admin_login.php';



    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
   
   
   

    require '../connect.php';

    $sql = 'INSERT INTO admin (name, password, email, phone, address) VALUES (?, ?, ?, ?, ?)';
    $stmt = mysqli_prepare($connect, $sql);

    mysqli_stmt_bind_param($stmt, 'sssss', $name, $password, $email, $phone, $address);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
    header('location:index.php?success=Thêm thành công');

<?php
    session_start();

    $email = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (empty($email) || empty($password)) {
        echo 'Không được để trống!';
        exit;
    }

    require 'admin/connect.php';
    
    // Kiểm tra email có trong csdl chưa
    $sql = "SELECT COUNT(*) as count FROM customers WHERE email = '$email'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if ($row['count'] > 0) {
        echo 'Email đã tồn tại!';
        header('Location: form_up.php');
        exit;
    }

    // thêm khách hàng mới
    $name = time(); 
    $sql = "INSERT INTO customers (name, password, token, phone, email, address) VALUES ('$name', '$password', '', '', '$email', '')";
    if (mysqli_query($connect, $sql) === FALSE) {
        echo 'Error: ' . mysqli_error($connect);
        exit;
    }

    $sql = "SELECT id FROM customers WHERE email='$email'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $name;

    echo '<h1>Đăng ký thành công</h1>';
    header('Location: index.php');
    exit;

    mysqli_close($connect);


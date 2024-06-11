<?php
    $email = $_POST['username'];
    $password = $_POST['password'];

    // lưu cookies
    if(isset($_POST['remember'])){
        $remember = true;
    }
    else{
        $remember = false;
    }

    require 'admin/connect.php';
    $sql = "SELECT * FROM customers WHERE email = '$email' AND password = '$password'";
       
    $result = mysqli_query($connect, $sql);
    $number_rows = mysqli_num_rows($result);

    if($number_rows == 1){
        echo "Đăng nhập thành công";

        session_start();
        $each = mysqli_fetch_array($result);
        $id = $each['id'];
        $_SESSION['id'] =  $each['id'];
        $_SESSION['name'] = $each['name'];

        if($remember){
            $token = uniqid('user_', true);
            $sql = "update customers
                    set
                    token='$token'
                    where id='$id'";
            mysqli_query($connect, $sql);
            setcookie('remember', $token, time() + 86400*30);
        }

         header('location: index.php');
         exit;
    } else{
        header('location: form_login.php?error=Đăng nhập sai rồi');
    }
    //header('Location: ../admin/index.php');

    // header('location: sign_in.php?error=Đăng nhập sai rồi');


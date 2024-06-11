<?php

    function current_url() {
        $url = "http://" . $_SERVER['HTTP_HOST'];
        return $url;
    } 
    
    $email = $_POST['email'];

    require 'admin/connect.php';

    $sql = "select id from customers
            where email = '$email'";
    $result = mysqli_query($connect, $sql);
    if(mysqli_num_rows($result) === 1){
        $each = mysqli_fetch_array($result);
        $id = $each['id'];
        $token = uniqid(true);
        $sql = "select * from forgot_password where customer_id = '$id'";
    
        $result = mysqli_query($connect, $sql);
        if(mysqli_num_rows($result) === 0){
            $sql = "insert into forgot_password(customer_id, token)
            values('$id', '$token')";
            mysqli_query($connect, $sql);
            // $link = current_url() . 'Ecor/static/src/form_update_password.php?token='.$token;
            // die();
        }
        else{
            $sql = "update forgot_password
                    set token='$token'
                    where customer_id='$id'";
            mysqli_query($connect, $sql);
       
        }
        header("location:mail.php?mess=2&mail=$email&token=$token");
    }
    else{
        echo "Không tìm thấy email tài khoản";
    }
    
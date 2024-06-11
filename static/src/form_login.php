<?php
    if(isset($_COOKIE['remember'])){
        require 'admin/connect.php';
        $token = $_COOKIE['remember'];
        $sql = "select * from customers
                where token='$token'
                limit 1";
        $result = mysqli_query($connect, $sql);
        $number_rows = mysqli_num_rows($result);
        if($number_rows == 1){
            $each = mysqli_fetch_array($result);
            session_start();    
            $_SESSION['id'] = $each['id'];
            $_SESSION['name'] = $each['name'];
        }  
    }
    if(isset($_SESSION['id'])){
        header('location:index.php');
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../static/css/login_Khang.css">
    <title>login</title>
</head>

<body>
    <form action="login.php" method="post" id="form">
        <h1>Chào mừng bạn đến với 6-Guys</h1>
        <div class="form-group">
            <label for="username">Tài khoản:</label>
            <input class="form-sign" type="text" id="username" name="username" required>
            <span class="form-message"></span>
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu:</label>
            <input class="form-sign" type="password" id="password" name="password" required>
            <span class="form-message"></span>
        </div>
	    <div class="check">
             Ghi nhớ đăng nhập     
            <input type="checkbox" id="remember" name="remember">
            <label for="remember"></label>   
           
        </div>
       
        <button type="submit">Đăng nhập</button>
        <p>Bạn chưa có tài khoản? <a href="form_up.php" class="signup-link">Đăng ký</a></p>
        <p><a href="index.php" class="p-again">Quay lại</a>
        <a href="form_forgot_password.php" class="p-forgot">Quên mật khẩu</a>   
        </p>

         

    </form>
    <!-- <script src="../js/login.js"></script> -->
    <!-- <script>
        Validator({
            form: '#form',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#username', 'Vui lòng nhập tên của bạn'),
                Validator.isEmail('#username'),
                Validator.isRequired('#password', 'Vui lòng nhập mật khẩu của bạn'),
                Validator.minLength('#password', 3),
            ],
            onsubmit: function(data) {
                console.log(data);
            },
        });
    </script> -->
</body>

</html>
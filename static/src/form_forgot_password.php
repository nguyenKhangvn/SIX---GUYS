<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../static/css/login_Khang.css">
    <link rel="stylesheet" href="../../static/font/fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <form action="forgot_password.php" method="post" id="form" style="width: 400px">
        <h1>Tìm lại Mật khẩu</h1>
        <div class="form-group">
            <label for="email">Nhập Email:</label>
            <input class="form-input" type="text" id="email" name="email" required>
            <span class="form-message"></span>
        </div>
        <button type="submit">Tiếp theo</button>
        <p>Bạn chưa có tài khoản? <a href="form_up.php" class="signup-link">Đăng ký</a></p>
        <p><a href="login.php" class="p-again">Quay lại</a>
        </p>
    </form>
    <!-- <script src="../js/login.js"></script>
    <script>
        Validator({
            form: '#form',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#email', 'Vui lòng nhập tên của bạn'),
                Validator.isEmail('#email'),
            ],
            onsubmit: function(data) {
                console.log(data);
            },
        });
    </script> -->
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="../../static/css/login_Khang.css">

</head>

<body>
    <form action="register.php" method="post" id="form">
        <h1>Chào mừng bạn đã đến với 6-Guys</h1>
        <div class="form-group">
            <label for="username">Tài khoản:</label>
            <input class="form-input" type="text" id="username" name="username" required>
            <span class="form-message"></span>
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu:</label>
            <input class="form-input" type="password" id="password" name="password" required>
            <span class="form-message"></span>
        </div>
        <div class="form-group">
            <label for="confirm_password">Xác nhận mật khẩu:</label>
            <input class="form-input" type="password" id="confirm_password" name="confirm_password" required>
            <span class="form-message"></span>
        </div>
        <button type="submit">Đăng ký</button>
        <p>Bạn đã có tài khoản? <a href="form_login.php" class="signup-link">Đăng nhập</a></p>
        <p><a href="index.php" class="p-again">Quay lại</a></p>
        <p style="color:red">*Note: Nhập đúng email để có thể lấy lại mật khẩu!</p>
    </form>
    <!-- <script src="main.js"></script>
    <script>
        Validator({
            form: '#form',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#username', 'vui lòng nhập tên của bạn'),
                Validator.isRequired('#password', 'vui lòng nhập mật khẩu của bạn'),
                Validator.minLength('#password', 6),
                Validator.isRequired('#confirm_password', 'vui lòng nhập tên của bạn'),
                Validator.isComfirmed('#confirm_password', function() {
                    return document.querySelector('#password').value;
                })
            ],
            onsubmit: function(data) {
                console.log(data);
            },
        });
    </script> -->
</body>

</html>
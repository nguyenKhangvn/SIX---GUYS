<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="../../static/css/login_Khang.css">

</head>

<body>
    <form action="update_password.php" method="post" id="form">
        <h1>Chào mừng bạn đã đến với 6-Guys</h1>
        <div class="form-group">
            <label for="username">Mã xác nhận:</label>
            <input class="form-input" type="text" id="token" name="token" required>
            <span class="form-message"></span>
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu mới:</label>
            <input class="form-input" type="password" id="password" name="password" required>
            <span class="form-message"></span>
        </div>
      
        <button type="submit">Xác nhận</button>
        <p><a href="form_forgot_password.php" class="p-again">Quay lại</a></p>
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


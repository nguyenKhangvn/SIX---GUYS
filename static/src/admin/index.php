<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../../../static/css/admin_form_index.css">
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <h1>Chào mừng bạn đến với 6-Guys</h1>
            <label for="username">Tài khoản:</label>
            <input class="form-sign" type="text" id="username" name="username" required>
            
            <label for="password">Mật khẩu:</label>
            <input class="form-sign" type="password" id="password" name="password" required>
            
            <button type="submit">Đăng nhập</button>
        </form>
    </div>
</body>
</html>

<?php
	require '../check_sup_admin_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhân viên</title>
    <link rel="stylesheet" href="../../../../static/css/admin_form.css">
</head>
<body>
    <?php include '../menu.php'; ?>
    <div class="container">
        <h1>Thêm nhân viên</h1>
        <form action="insert.php" method="post">
            <label for="name">Tên:</label>
            <input type="text" id="name" name="name">
            
            <label for="address">Địa chỉ:</label>
            <textarea id="address" name="address"></textarea>
            
            <label for="password">Mật khẩu:</label>
            <input type="text" id="password" name="password">

            <label for="phone">Điện Thoại:</label>
            <input type="text" id="phone" name="phone">
            
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            
            <button type="submit">Thêm</button>
        </form>
    </div>
</body>
</html>

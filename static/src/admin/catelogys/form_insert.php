<?php
	require '../check_admin_login.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhà sản xuất</title>
    <link rel="stylesheet" href="../../../../static/css/admin_form.css">
</head>
<body>
    <?php include '../menu.php'; ?>
    <div class="container">
        <h1>Thêm danh mục</h1>
        <form action="insert.php" method="post">
            <label for="name">Tên:</label>
            <input type="text" id="name" name="name">

            
            <button type="submit">Thêm</button>
        </form>
    </div>
</body>
</html>

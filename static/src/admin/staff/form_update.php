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
    <?php 
        include '../menu.php';
        $id = $_GET['id'];
        require '../connect.php';
        $sql = "select * from admin
                where id = '$id'";
        $res = mysqli_query($connect,$sql);
        $i = mysqli_fetch_array($res);

    ?>
    <div class="container">
        <h1>Chỉnh sửa nhân viên</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $i['id'] ?>">
            <label for="name">Tên:</label>
            <input type="text" id="name" name="name" value="<?php echo $i['name'] ?>">

            <label for="password">Mật khẩu:</label>
            <input type="text" id="password" name="password" value="<?php echo $i['password'] ?>">
            
            <label for="address">Địa chỉ:</label>
            <textarea id="address" name="address" value="<?php echo $i['address'] ?>"></textarea>
            
            <label for="phone">Điện Thoại:</label>
            <input type="text" id="phone" name="phone" value="<?php echo $i['phone'] ?>">
            
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo $i['email'] ?>">
            
            <button type="submit">Sửa</button>
        </form>
    </div>
    <?php 
    mysqli_close($connect);
    ?>
</body>
</html>

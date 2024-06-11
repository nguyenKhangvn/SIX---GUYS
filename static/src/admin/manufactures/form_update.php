<?php
	require '../check_sup_admin_login.php';
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
    <?php 
        include '../menu.php';
        $id = $_GET['id'];
        require '../connect.php';
        $sql = "select * from manufactures
                where id = '$id'";
        $res = mysqli_query($connect,$sql);
        $i = mysqli_fetch_array($res);

    ?>
    <div class="container">
        <h1>Chỉnh sửa nhà sản xuất</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $i['id'] ?>">
            <label for="name">Tên:</label>
            <input type="text" id="name" name="name" value="<?php echo $i['name'] ?>">
            
            <label for="address">Địa chỉ:</label>
            <textarea id="address" name="address" value="<?php echo $i['address'] ?>"></textarea>
            
            <label for="phone">Điện Thoại:</label>
            <input type="text" id="phone" name="phone" value="<?php echo $i['phone'] ?>">
            
            <label for="photo">Ảnh:</label>
            <input type="text" id="photo" name="photo" value="<?php echo $i['photo'] ?>">
            
            <button type="submit">Sửa</button>
        </form>
    </div>
    <?php 
    mysqli_close($connect);
    ?>
</body>
</html>

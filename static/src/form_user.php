<?php session_start();
    if(empty($_SESSION['id'])){
        header('location:form_login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="../../static/css/login_Khang.css">

</head>

<body>
    <?php 
        $id = $_SESSION['id'];
    ?>
    <form action="user_change.php" method="post" id="form">
        <h1>Chào mừng bạn đã đến với 6-Guys</h1>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="form-group">
            <label for="username">Tên:</label>
            <input class="form-input" type="text" id="username" name="username" required>
            <span class="form-message"></span>
        </div>
        <div class="form-group">
            <label for="number">Số điện thoại:</label>
            <input class="form-input" type="text" id="number" name="number" required>
            <span class="form-message"></span>
        </div>
        <button type="submit">Thay đổi</button>
        <p><a href="user.php" class="p-again">Quay lại</a>
    </form>
</body>

</html>
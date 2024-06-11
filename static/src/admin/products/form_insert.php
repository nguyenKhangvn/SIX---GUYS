<?php
	require '../check_admin_login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link rel="stylesheet" href="../../../../static/css/admin_form.css">
    <link rel="stylesheet" href="../../../../static/css/admin_menu.css">
</head>
<body>
    <?php 
        include '../menu.php'; 
        require '../connect.php';
        $sql_manufacture = "select * from manufactures";
        $res_manufacture = mysqli_query($connect, $sql_manufacture);

        $sql_catelogy = "select * from catelogy";
        $res_catelogy = mysqli_query($connect, $sql_catelogy);
    ?>
    <div class="container">
        <h1>Thêm sản phẩm</h1>
         <!-- enctype: mã hóa file ảnh= -->
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <label for="name">Tên:</label>
            <input type="text" id="name" name="name">
            
            <label for="photo">Ảnh:</label>
            <input type="file" name="photo">

            <label for="price">Giá:</label>
            <input type="number" name="price">

            <label for="description">Mô tả:</label>
            <textarea id="description" name="description" rows="4"></textarea>

            <label for="manufacture_id">Nhà sản xuất:</label>
            <select name="manufacture_id" id="manufacture_id">
                <?php foreach ($res_manufacture as $each): ?>
                    <option value="<?php echo $each['id']?>">
                        <?php echo $each['name']?>
                    </option>
                <?php endforeach ?>
            </select>
            
            <label for="unit">Đơn vị tính:</label>
            <input type="text" id="unit" name="unit">
                <!-- xem lại phần danh mục -->
            <label for="catelogy_id">Danh mục:</label>
            <select name="catelogy_id[]" id="catelogy_id" multiple>
            <?php foreach ($res_catelogy as $each): ?>
                    <option value="<?php echo $each['id']?>">
                        <?php echo $each['name']?>
                    </option>
                <?php endforeach ?>
            </select>
            


            <label for="date_end">Ngày hết hạn:</label>
            <input type="date" id="date_end" name="date_end">

            <label for="discount">Giảm giá:</label>
            <input type="number" step=0.5 id="discount" name="discount">

            <label for="number">Số lượng:</label>
            <input type="number" name="number">

            <button type="submit">Thêm</button>
        </form>
    </div>
</body>
</html>

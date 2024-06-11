
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
    <link rel="stylesheet" href="../../../../static/css/admin_menu.css">
</head>
<body>
    <?php 
        include '../menu.php';
        $id = $_GET['id'];
        require '../connect.php';
        $sql_manufacture = "select * from manufactures";
        $res_manufacture = mysqli_query($connect, $sql_manufacture);

        $sql_catelogy = "select * from catelogy";
        $res_catelogy = mysqli_query($connect, $sql_catelogy);

        $sql = "select * from products
                where id = '$id'";
        $res = mysqli_query($connect,$sql);
        $each = mysqli_fetch_array($res);
    ?>
    <div class="container">
        <h1>Chỉnh sửa sản phẩm</h1>
        <form action="update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <label for="name">Tên:</label>
            <input type="text" id="name" name="name" value="<?php echo $each['name']?>">
            
            <label for="photo">Ảnh cũ:</label>
            <img src="photo/<?php echo $each['photo'] ?>" alt="" width="100">
            <input type="hidden" name="photo_old" value="<?php echo $each['photo'] ?>">

            <label for="photo">Ảnh:</label>
            <input type="file" name="photo_new">

            <label for="price">Giá:</label>
            <input type="number" name="price" value="<?php echo $each['price'] ?>">

            <label for="description">Mô tả:</label>
            <textarea id="description" name="description" rows="4"><?php echo $each['description'] ?></textarea>

            <label for="manufacture_id">Nhà sản xuất:</label>
            <select name="manufacture_id" id="manufacture_id">
            <?php foreach ($res_manufacture as $manufacture): ?>
                <option
                 value="<?php echo $manufacture['id']?>"
                 <?php if($each['manufacture_id'] == $manufacture['id']){ ?>
                    selected
                <?php } ?>
                >
                    <?php echo $manufacture['name']?>
                </option>
            <?php endforeach ?>
            </select>
            
            <label for="unit">Đơn vị tính:</label>
            <input type="text" id="unit" name="unit" value="<?php echo $each['unit'] ?>">
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
            <input type="date" id="date_end" name="date_end" >

            <label for="discount">Giảm giá:</label>
            <input type="number" id="discount" name="discount" >

            <button type="submit">Sửa</button>
        </form>
    </div>
    <?php 
    mysqli_close($connect);
    ?>
</body>
</html>

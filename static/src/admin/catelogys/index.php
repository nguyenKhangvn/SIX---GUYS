<?php
	require '../check_admin_login.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../../static/css/index_admin.css">
</head>
<body>
    
<?php
    require '../menu.php';
    require '../connect.php';
    
    $sql = "select * from catelogy";
    $res = mysqli_query($connect , $sql);
?>
    <div class="wrap">
        <h1>Quản lý danh mục</h1>
        <a href="form_insert.php">Thêm danh mục</a>
        <table width="100%" border='1'>
            <tr>
                <th>Mã</th>
                <th>Tên danh mục</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>

            <?php foreach ($res as $i): ?>
                <tr>
                    <td><?php echo $i['id'] ?></td>
                    <td><?php echo $i['name'] ?></td>
                    <td>
                        <a href="delete.php?id=<?php echo $i['id'] ?>">Xoá</a>
                    </td>
                    <td>
                        <a href="form_update.php?id=<?php echo $i['id'] ?>">Sửa</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
 
</body>
</html>


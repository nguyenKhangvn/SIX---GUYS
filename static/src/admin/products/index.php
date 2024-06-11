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
    
    // phan trang
    $page = 1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];    
    }

    $search = "";
    if(isset($_GET['search'])){
        $search = $_GET['search']; 
    }

    
    $count_query = "SELECT COUNT(*) FROM products
                    WHERE name LIKE '%$search%'";
    $count_result = mysqli_query($connect, $count_query);
    $total_products = mysqli_fetch_array($count_result)[0];
    $products_per_page = 15;
    $total_pages = ceil($total_products / $products_per_page);
    $offset = $products_per_page * ($page - 1);

    
    $sql_product = "SELECT products.*, manufactures.name AS manufactures_name
                FROM products
                JOIN manufactures ON products.manufacture_id = manufactures.id
                WHERE products.name LIKE '%$search%'
                LIMIT $products_per_page OFFSET $offset";
            
    $res = mysqli_query($connect , $sql_product);


?>
    <div class="wrap">
        <h1>Quản lý nhà sản phẩm</h1>
        <div class="search-bar">
            <input type="search" class="search-input_text" name="search" id="search-input" placeholder="Tìm kiếm..." value="<?php echo $search?>">
            <button id="search-button">Tìm kiếm</button>
        </div>
        <a href="form_insert.php">Thêm sản phẩm</a>
        <table width="100%" border='1'>
            <tr>
                <th>Mã</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Tên nhà cung cấp</th>
                <th>Đơn vị tính</th>
                <th>Số lượng</th>
                <th>Ngày hết hạn</th>
                <th>Ngày nhập</th>
                <th>Giảm giá</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>

            <?php foreach ($res as $i): ?>
                <tr>
                    <td><?php echo $i['id'] ?></td>
                    <td><?php echo $i['name'] ?></td>
                    <td>
                        <img src="photo/<?php echo $i['photo']?>" alt="" width="100px">
                    </td>
                    <td><?php echo $i['price'] ?></td>
                    <td>
                        <?php echo $i['manufactures_name'] ?>
                    </td>
                    <td><?php echo $i['unit'] ?></td>
                    
                    <td><?php echo $i['number'] ?></td>

                    <td><?php echo $i['date_end'] ?></td>
                    <td>
                        <?php echo $i['date_start'] ?>
                    </td>
                    <td>
                        <?php echo $i['discount'] ?>
                    </td>
                    <td>
                        <a href="delete.php?id=<?php echo $i['id'] ?>">Xoá</a>
                    </td>
                    <td>
                        <a href="form_update.php?id=<?php echo $i['id'] ?>">Sửa</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
        <div style="text-align: center;">
            <!-- in ra trang kế tiếp -->
            <?php for($i = 1; $i <= $total_pages; $i++){ ?>
                <a href="?page=<?php echo $i ?> & search=<?php echo $search?>">
                    <?php echo $i ?>
                </a>
            <?php }?>
        </div>
    </div>
 
</body>
</html>


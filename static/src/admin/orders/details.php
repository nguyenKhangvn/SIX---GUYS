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
    
    $order_id = $_GET['id'];

    $page = 1;
   
    $count_query = "SELECT COUNT(*) FROM orders";
    $count_result = mysqli_query($connect, $count_query);
    $total_products = mysqli_fetch_array($count_result)[0];
    $products_per_page = 10;
    $total_pages = ceil($total_products / $products_per_page);
    $offset = $products_per_page * ($page - 1);

   $sql = "select *
                 from order_product
                 join products on products.id = order_product.product_id
                 where order_id = '$order_id'";
        $result = mysqli_query($connect, $sql); 
        $sum = 0;
?>
    <div class="wrap">
        <h1>Quản lý đơn hàng</h1>
       
        <table border="1" width="100%">
            <tr>
                <th>Ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
            </tr>
            <?php foreach ($result as $each): ?>
                <tr>
                    <td><img height="100" src="../products/photo/<?php echo $each['photo'] ?>"></td>
                    <td><?php echo $each['name'] ?></td>
                    <td><?php echo $each['price'] ?></td>
                    <td>
                        
                        <?php echo $each['quantity'] ?>
                    
                    </td>
                    <td>
                        <?php
                            echo $each['quantity']*$each['price'];
                            $sum += $each['quantity']*$each['price'];
                        ?>
                    </td>
                </tr>
            <?php endforeach ?>
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


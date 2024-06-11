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
    
    $page = 1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];    
    }
   
    $count_query = "SELECT COUNT(*) FROM orders";
    $count_result = mysqli_query($connect, $count_query);
    $total_products = mysqli_fetch_array($count_result)[0];
    $products_per_page = 15;
    $total_pages = ceil($total_products / $products_per_page);
    $offset = $products_per_page * ($page - 1);

    $sql = "select orders.*,
                customers.name,
                customers.phone,
                customers.address
                from orders
                join customers
                on customers.id = orders.customer_id
                order by orders.id DESC
                limit $products_per_page offset $offset";
        
        $result = mysqli_query($connect, $sql); 
?>
    <div class="wrap">
        <h1>Quản lý đơn hàng</h1>
        <table width="100%" border='1'>
            <tr>
                <th>Mã</th>
                <th>Thời gian đặt</th>
                <th>Thông tin người nhận</th>
                <th>Thông tin người đặt</th>
                <th>Trạng thái</th>
                <th>Tổng tiền</th>
                <th>Xem</th>
                <th>Sửa</th>
            </tr>

            <?php foreach ($result as $each): ?>
                <tr>
                    <td><?php echo $each['id'] ?></td>
                    <td><?php echo $each['created_at'] ?></td>
                    <td>
                        <?php echo $each['name_receiver'] ?><br>
                        <?php echo $each['phone_receiver'] ?><br>
                        <?php echo $each['address_receiver'] ?>
                    </td>
                    <td>
                        <?php echo $each['name'] ?><br>
                        <?php echo $each['phone'] ?><br>
                        <?php echo $each['address'] ?>
                    </td>
                    <td class="status">
                        <?php
                            if($each['status'] == 0){
                                echo "Mới đặt";
                            } 
                            else if($each['status'] == 1){
                                echo "Đã duyệt";
                            }
                            else if($each['status'] == 2){
                                echo "Đã hủy";
                            }
                        ?>
                    </td>
                    <td><?php echo $each['total_price'] ?></td>
                    <td>
                        <a href="details.php?id=<?php echo $each['id']?>">Xem</a>
                    </td>
                    <td>
                        <?php if($each['status'] == 0){ ?>
                            <button 
                                class="btn-update"
                                data-id='<?php echo $each['id'] ?>'
                                data-type='1'
                            >
                            Duyệt
                            </button>
                            <br>
                            <br>
                            <button 
                                class="btn-update"
                                data-id='<?php echo $each['id'] ?>'
                                data-type='2'
                            >
                            Hủy
                            </button>
                        <?php } ?>
                    </td>
                </tr>
            <?php endforeach ?>

        </table>
        <div style="text-align: center;">
                <!-- in ra trang kế tiếp -->
            <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                <a href="?page=<?php echo $i ?>">
                    <?php echo $i ?>
                </a>
            <?php } ?>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.btn-update').click(function () { 
                let btn = $(this);
                let id = btn.data('id');                
                let status = parseInt(btn.data('type'));     
                $.ajax({
                    type: "GET",
                    url: "update.php",
                    data: {id, status},
                    // dataType: "dataType",
                    success: function (response) {
                        var dom = btn.parents('tr');
                        btn.parents('td').remove();
                        if(status == 1){
                            $('.status',dom).text('Đã duyệt');
                        }
                        else $('.status',dom).text('Đã hủy');
                    }
                });
                
            });
        });
    </script>
</body>
</html>


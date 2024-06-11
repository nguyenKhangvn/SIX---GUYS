<?php 
//session_start();
require '../check_admin_login.php'; 
require '../menu.php'; 
require '../connect.php'; 

$sql = "SELECT SUM(total_price) AS sum_total 
        FROM orders 
        WHERE created_at BETWEEN (SELECT CAST(DATE_FORMAT(NOW(),'%Y-%m-01') AS DATE)) AND CURDATE() 
        AND status = 1";
// die($sql);

$result = mysqli_query($connect, $sql);
$total_price_month = mysqli_fetch_array($result);

$sql = "SELECT SUM(quantity) AS so_luong 
        FROM order_product 
        JOIN orders ON orders.id = order_product.order_id 
        WHERE orders.status = 1";
$result = mysqli_query($connect, $sql);
$count_product = mysqli_fetch_array($result);

$sql = "SELECT * 
        FROM orders 
        WHERE EXTRACT(YEAR FROM created_at) = (SELECT YEAR(CURDATE()))";
$result = mysqli_query($connect, $sql);
$count_orders = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Company Statistics</title>
    <style>
        .wrapper-demo {
            height: 7vh;
            color: #423f3b;
            font-weight: 600px;
            margin-left: 620px;
        }

        .typing-demo {
            width: 30ch;
            animation: typing 2s steps(22), blink .5s step-end infinite alternate;
            white-space: nowrap;
            overflow: hidden;
            border-right: 3px solid;
            font-family: monospace;
            font-size: 2em;
        }

        @keyframes typing {
            from {
                width: 0
            }
        }

        @keyframes blink {
            50% {
                border-color: transparent
            }
        }

        .container {
            position: relative;
            font-family: "Open Sans", sans-serif;
            text-align: center;
            margin: 0 auto;
            width: 100%;
        }

        .wrap {
            display: flex;
            color: white;
            font-weight: bold;
            width: 50%;
            margin: 0 600px;
            
        }

        #title {
            color: #fff;
            margin: 30px;
            display: block;
            font-weight: normal;
            font-size: 60px;
        }

        .number_box {
            width: 333px;
            height: 393px;
            background: #444444;
            border-radius: 3px;
            margin: 10px;
            padding: 100px 50px;
            box-shadow: 1px 1px 4px 3px rgba(71, 244, 116, 0.4);
        }

        .count {
            line-height: 100px;
            text-align: center;
            font-size: 80px;
            color: #47f474;
            font-weight: bold;
        }

        @media (max-width: 800px) {
            #title,
            .count {
                font-size: 32px;
            }
            h2 {
                font-size: 18px;
            }
            .wrap {
                width: 98%;
            }
            .number_box {
                width: auto;
                height: 355px;
                padding: 25px;
                margin-left: 2px;
                line-height: auto;
            }
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wrapper-demo">
                            <div class="typing-demo">
                                <?php echo "Xin chào!!" ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="wrap">
        <!-- <div class="number_box">
            <span class="count"><?php echo $total_price_month['sum_total'] ?? 0 ?></span>
            <h2>Doanh thu tháng này</h2>
        </div> -->

        <div class="number_box">
            <span class="count"><?php echo $count_product['so_luong'] ?? 0 ?></span>
            <h2>Số sản phẩm đã bán</h2>
        </div>

        <div class="number_box">
            <span class="count"><?php echo $count_orders ?? 0 ?></span>
            <h2>Số hóa đơn trong năm</h2>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $('.count').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
</body>
</html>

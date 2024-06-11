<?php
session_start();

// Lấy tổng tiền từ session
if (isset($_SESSION['total'])) {
    $total = $_SESSION['total'];
} else {
    $total = 0;
}

// Khởi tạo giỏ hàng từ session, nếu không tồn tại thì sẽ là một mảng trống
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$sum = 0;

// Tính tổng tiền cho từng sản phẩm trong giỏ hàng
foreach ($cart as $id => $each) {
    $itemTotal = $each['price'] * $each['quantity'];
    $sum += $itemTotal;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin thanh toán</title>
    <link rel="stylesheet" href="../../static/css/form_checkout_Khang.css">
    <link rel="stylesheet" href="../../static/css/cart_Trung.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="col-md-8">
        <div class="checkout-form">
            <h2>Thông tin thanh toán</h2>

            <?php
            $id = $_SESSION['id'];

            // Kết nối CSDL
            require 'admin/connect.php';

            // Truy vấn thông tin khách hàng
            $sql = "SELECT * FROM customers WHERE id = '$id'";
            $result = mysqli_query($connect, $sql);

            // Lấy thông tin khách hàng từ kết quả truy vấn
            if ($result && mysqli_num_rows($result) > 0) {
                $each = mysqli_fetch_assoc($result);

                // Hiển thị form thông tin thanh toán và tổng tiền
                echo '
                    <form action="checkout.php" method="post">
                        <div class="form-group">
                            <label for="name_receiver">Tên người nhận:</label>
                            <input type="text" name="name_receiver" id="name_receiver" class="form-control" placeholder="Nhập tên người nhận" value="' . $each['name'] . '" required>
                        </div>
                        <div class="form-group">
                            <label for="phone_receiver">Số điện thoại người nhận:</label>
                            <input type="text" name="phone_receiver" id="phone_receiver" class="form-control" placeholder="Nhập số điện thoại người nhận" value="' . $each['phone'] . '" required>
                        </div>
                        <div class="form-group">
                            <label for="address_receiver">Địa chỉ người nhận:</label>
                            <input type="text" name="address_receiver" id="address_receiver" class="form-control" placeholder="Nhập địa chỉ người nhận" value="' . $each['address'] . '" required>
                        </div>';
                echo '<label style="font-weight: bold;">Sản phẩm:</label>';

                foreach ($cart as $id => $each) {
                    echo '
                        <div class="cart-item">
                            <div class="img-item">
                                <img src="admin/products/photo/' . $each['photo'] . '" alt="' . $each['name'] . '">
                                <div class="right-img">
                                    <h3>' . $each['name'] . '</h3>
                                    <div class="price-sp">
                                        <p>Giá:  </p>
                                        <p>' . number_format($each['price'], 0 ,'','.') . 'đ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <div class="price-item">
                                    <div class="quantity-control">
                                        <a href="update_quantity_checkout.php?id=' . $id . '&type=0">-</a>
                                        ' . $each['quantity'] . '
                                        <a href="update_quantity_checkout.php?id=' . $id . '&type=1">+</a>
                                    </div>
                                    <p class="price">' . number_format($each['price'], 0 ,'','.') . 'đ</p>
                                </div>
                            </div>
                        </div>';
                }

                echo '
                        <div class="form-group">
                            <label for="total">Tổng tiền:</label>
                            <input type="text" name="total" id="total" class="form-control" value="' .  number_format($sum, 0, '', '.') . '" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary">Hoàn tất thanh toán</button>
                    </form>
                    <a href="index.php"><button type="submit" class="btn btn-primary">Thêm sản phẩm</button></a>
                ';
                
            } else {
                // Hiển thị thông báo nếu không tìm thấy thông tin khách hàng
                echo '<p>Không tìm thấy thông tin khách hàng.</p>';
            }

            // Đóng kết nối CSDL
            mysqli_close($connect);
            ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>

<?php
session_start();

// Khởi tạo giỏ hàng từ session, nếu không tồn tại thì sẽ là một mảng trống
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$sum = 0;

// Tính tổng tiền cho từng sản phẩm trong giỏ hàng
foreach ($cart as $id => $each) {
    $itemTotal = $each['price'] * $each['quantity'];
    $sum += $itemTotal;
}

// Lưu tổng số tiền vào session để sử dụng ở các trang khác
$_SESSION['total'] = $sum;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../static/css/base.css">
    <link rel="stylesheet" href="../../static/css/grid.css">
    <link rel="stylesheet" href="../../static/css/cart_Trung.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../static/font/fontawesome-free-6.5.1-web/css/all.min.css">
    <title>cart</title>
</head>

<body>
    <div class="app">
        <div class="header">
            <div class="header-info">
                <div class="right">
                    <!--NOTIFY -->
                    <div class="header__notify color_textLogo">
                        <div class="header__notify-bell">
                            <i class="header__notify-icon fa-regular fa-bell"></i>
                            <!-- <div class="notify--no">
                                <p>No Announcement!</p>
                            </div> -->
                            <div class="notify--yes">
                                <!---->
                            </div>
                            <p class="logo-p">Trợ giúp</p>
                        </div>
                    </div>

                    <!-- LOGIN -->
                    <div class="header__login color_textLogo">
                        <a href="user.php">
                            <div class="login-icon">
                                <div class="ic1_2">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                                <div class="login-title">
                                    <?php if (empty($_SESSION['id'])) { ?>
                                        <ul class="login-info">
                                            <li class="login-item"><a href="form_login.php">Đăng Nhập</a></li>
                                            <li class="login-item"><a href="form_up.php"> Đăng ký</a></li>
                                        </ul>
                                    <?php } else { ?>
                                        <li class="login-item"><a href="out.php">Đăng xuất</a></li>
                                    <?php } ?>
                                </div>


                                <?php if (empty($_SESSION['id'])) { ?>
                                    <p class="logo-p">Đăng nhập</p>
                                <?php } else { ?>
                                    <p class="logo-p">Xin chào, </p>
                                <?php } ?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo">
            <a href="index.php">
                <div class="header__shop" style="color:#333">
                    <image src="../../static/img/snapedit_1711604435755.png" width="80px" alt="error"></image>
                    <p>6-GUYs</p>
                </div>
            </a>
            <div class="pagecart">
                <p>Giỏ Hàng</p>
            </div>
        </div>
        <div class="app__container">
            <div class="cart">
                <div class="grid">
                    <div class="grid wide">
                        <div class="cart">
                            <div class="cart-items">
                                <?php if (empty($cart)) : ?>
                                    <p>Giỏ hàng đang trống.</p>
                                <?php else : ?>
                                    <?php foreach ($cart as $id => $each) : ?>
                                        <div class="cart-item">
                                            <div class="img-item">
                                                <img src="admin/products/photo/<?php echo $each['photo'] ?>">
                                                <div class="right-img">
                                                    <h3><?php echo $each['name'] ?></h3>
                                                    
                                                    <div class="price-sp">
                                                        <p>Giá:</p>
                                                        <p><?php echo number_format($each['price'],0,'','.') ?></p>
                                                    </div>
                                                </div>
                                            </div>   
                                            
                                            <div class="item-details">
                                                <div class="price-item">
                                                    <div class="quantity-control">
                                                        <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=0">-</a>
                                                        <?php echo $each['quantity'] ?>
                                                        <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=1">+</a>
                                                    </div>
                                                    <p class="price"><?php echo number_format($each['price'],0,'','.'); ?>đ</p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($cart)) : ?>
                                <div class="hi">
                                    <div class="cart-summary">
                                        <div class="cart-summary-top">
                                            <h2>Tổng Cộng:</h2>
                                            <p class="total-price"><?php echo number_format($sum,0,'','.'); ?></p>
                                        </div>
                                        <form action="form_checkout.php" method="get" class="form">
                                            <button class="oder-buy btn btn--groud" type="submit" class="checkout-btn">Thanh Toán</button>
                                        </form>
                                        <br>
                                        <a href="index.php">
                                            <button class="oder-buy btn"  class="checkout-btn">Thêm sản phẩm</button>
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
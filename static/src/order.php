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
    <title>Đơn hàng</title>
    <link rel="stylesheet" href="../../static/css/base.css">
    <link rel="stylesheet" href="../../static/css/user_Nguyen.css">
    <link rel="stylesheet" href="../font/fontawesome-free-6.5.1-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
  
</head>
<body>
<?php
        $id = $_SESSION['id'];
        require 'admin/connect.php';
        $sql = "select * from customers where id = '$id'";

        $res =  mysqli_query($connect, $sql);
    ?>
    <div class="app">

    <?php include 'header.php'; ?>

        <?php  foreach ($res as $each) : ?>
            <div class="profile">
                <div class="profile-content">
                    <div class="content__letf">                   
                        <div class="avatar">
                            <img class="avatar__img" src="https://th.bing.com/th/id/OIP.s0IXWSugomqSD2aGejuApAAAAA?w=256&h=256&rs=1&pid=ImgDetMain">
                            <h3 class="avatar__name"><?php echo $each['name'] ?></h3>
                        </div>
                        <div class="category">
                            <div class="category__heading-user">
                                <h3 class="category__heading-title">
                                <i class="category__heading-icon fa-solid fa-list"></i>
                                Danh mục</h3>                          
                            </div>
                            <?php include 'menu.php'; ?>
                        </div>          
                    </div>
                    <div class="content__right">
                        <div class="info-order">
                            <div class="info-order__title">
                                <h3 class="info__heading info__heading--order">Đơn hàng của tôi</h3>
                                <div class="gategory__order">
                                    <a href="order.php" class="btn-order">
                                        <button class="btn-order--strong btn-order--active">Trạng thái đơn hàng</button>
                                    </a>
                                    <a href="order_history.php" class="btn-order">
                                        <button class="btn-order--strong">Lịch sử đặt hàng</button>
                                    </a>
                                </div>
                            </div>
                            <div class="info-order__detail">
                                <div class="info-order__heading">
                                    <a href="" class="info-order__heading-link">
                                        <i class="info-order__heading-icon fa-solid fa-truck"></i>
                                        <span class="info-order__heading-title info-order__heading-title--color">Chờ giao hàng</span>
                                    </a>
                                    <span class="info-order__heading-title--border"></span>
                                    <span class="info-order__heading-title info-order__heading-title--color2">Đơn hàng đã rời kho phân loại</span>
                                    <span class="info-order__heading-title--border"></span>
                                    <button class="btn-contact-shop">
                                        <i class="btn-contact-shop-icon fa-solid fa-comment-dots"></i>
                                        Liên hệ người bán
                                    </button>
                
                                </div>
                                <div class="info-order__item">
                                    <div class="info-order-title">
                                        <a href="" class="info-order-link">
                                            <div class="info-order-link-img">
                                                <img src="https://down-vn.img.susercontent.com/file/8c4a5f9a7be49a467116d8f372151160" class="info-order-img">
                                            </div>
                                            <div class="info-order-link-name">
                                                <span class="info-order-name info-order-link-name--strong">Đậu Nành Sống Hữu Cơ SallyFood 1kg Đỗ Tương Quê Sạch Giống Thuần Chủng Nông Sản Quê Sally Food</span>
                                                <span class="info-order-name">Phân loại: 500g</span>
                                                <span class="info-order-name">x1</span>
                                            </div>                
                                        </a>                                   
                                    </div>
                                    <div class="info-order-price">
                                        <i class="info-order-price--icon fa-solid fa-money-bill"></i>
                                        <span class="info-order-price-money">Thành tiền</span>
                                        <span class="info-order-price-detail">27.500đ</span>
                                    </div> 
                                </div>
                                <div class="info-order__btn">
                                    <span class="info-order-note">Vui lòng chỉ nhấn "Đã nhận hàng" khi đơn hàng đã được giao đến bạn và sản phẩm nhận được không có vấn đề nào</span>
                                    <button class="btn-order-option btn-order-option--active">Đánh giá</button>
                                    <button class="btn-order-option btn-order-option--active">Đã nhận hàng</button>
                                    <button class="btn-order-option btn-order--disabled">Thanh toán</button>
                                    <button class="btn-order-option btn-order--disabled">Hủy đơn</button>
                                </div>
                            </div>
                            <div class="info-order__detail">
                                <div class="info-order__heading">
                                    <a href="" class="info-order__heading-link">
                                        <i class="info-order__heading-icon fa-solid fa-truck"></i>
                                        <span class="info-order__heading-title info-order__heading-title--color">Chờ giao hàng</span>
                                    </a>
                                    <span class="info-order__heading-title--border"></span>
                                    <span class="info-order__heading-title info-order__heading-title--color2">Đơn hàng đã đến trạm giao hàng 39-BDH Quy Nhon Hub</span>
                                    <span class="info-order__heading-title--border"></span>
                                    <button class="btn-contact-shop">
                                        <i class="btn-contact-shop-icon fa-solid fa-comment-dots"></i>
                                        Liên hệ người bán
                                    </button>
                                </div>
                                <div class="info-order__item">
                                    <div class="info-order-title">
                                        <a href="" class="info-order-link">
                                            <div class="info-order-link-img">
                                                <img src="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lmzubkrkh1awdf" class="info-order-img">
                                            </div>
                                            <div class="info-order-link-name">
                                                <span class="info-order-name info-order-link-name--strong">Củ cải khô loại 1 non giòn ( Hút chân không)</span>
                                                <span class="info-order-name">Phân loại: 0.5kg</span>
                                                <span class="info-order-name">x1</span>
                                            </div>                
                                        </a>                                   
                                    </div>
                                    <div class="info-order-price">
                                        <i class="info-order-price--icon fa-solid fa-money-bill"></i>
                                        <span class="info-order-price-money">Thành tiền</span>
                                        <span class="info-order-price-detail">55.000đ</span>
                                    </div> 
                                </div>
                                <div class="info-order__btn">
                                    <span class="info-order-note">Vui lòng chỉ nhấn "Đã nhận hàng" khi đơn hàng đã được giao đến bạn và sản phẩm nhận được không có vấn đề nào</span>
                                    <button class="btn-order-option btn-order-option--active">Đánh giá</button>
                                    <button class="btn-order-option btn-order-option--active">Đã nhận hàng</button>
                                    <button class="btn-order-option btn-order--disabled">Thanh toán</button>
                                    <button class="btn-order-option btn-order--disabled">Hủy đơn</button>
                                </div>
                            </div>
                            <div class="info-order__detail">
                                <div class="info-order__heading">
                                    <a href="" class="info-order__heading-link">
                                        <i class="info-order__heading-icon fa-solid fa-credit-card"></i>
                                        <span class="info-order__heading-title info-order__heading-title--color">Chờ thanh toán</span>
                                    </a>
                                    <span class="info-order__heading-title--border"></span>
                                    <span class="info-order__heading-title info-order__heading-title--color2">Vui lòng thanh toán đơn hàng</span>
                                    <span class="info-order__heading-title--border"></span>
                                    <button class="btn-contact-shop">
                                        <i class="btn-contact-shop-icon fa-solid fa-comment-dots"></i>
                                        Liên hệ người bán
                                    </button>
                                </div>
                                <div class="info-order__item">
                                    <div class="info-order-title">
                                        <a href="" class="info-order-link">
                                            <div class="info-order-link-img">
                                                <img src="https://down-vn.img.susercontent.com/file/c89d5ec823de14a89bc5f31331a82f8b" class="info-order-img">
                                            </div>
                                            <div class="info-order-link-name">
                                                <span class="info-order-name info-order-link-name--strong">Đậu Nành Hữu Cơ Thuần Chủng Không Biến Đổi Gen</span>
                                                <span class="info-order-name">Phân loại: 1kg</span>
                                                <span class="info-order-name">x2</span>
                                            </div>                
                                        </a>                                   
                                    </div>
                                    <div class="info-order-price">
                                        <i class="info-order-price--icon fa-solid fa-money-bill"></i>
                                        <span class="info-order-price-money">Thành tiền</span>
                                        <span class="info-order-price-detail">180.000đ</span>
                                    </div> 
                                </div>
                                <div class="info-order__btn">
                                    <span class="info-order-note">Vui lòng chỉ nhấn "Đã nhận hàng" khi đơn hàng đã được giao đến bạn và sản phẩm nhận được không có vấn đề nào</span>
                                    <button class="btn-order-option btn-order-option--active">Đánh giá</button>
                                    <button class="btn-order-option btn-order--disabled">Đã nhận hàng</button>
                                    <button class="btn-order-option btn-order-option--active">Thanh toán</button>
                                    <button class="btn-order-option btn-order-option--active">Hủy đơn</button>
                                </div>
                            </div>
                            <div class="info-order__detail">
                                <div class="info-order__heading">
                                    <a href="" class="info-order__heading-link">
                                        <i class="info-order__heading-icon fa-solid fa-credit-card"></i>
                                        <span class="info-order__heading-title info-order__heading-title--color">Chờ thanh toán</span>
                                    </a>
                                    <span class="info-order__heading-title--border"></span>
                                    <span class="info-order__heading-title info-order__heading-title--color2">Vui lòng thanh toán đơn hàng</span>
                                    <span class="info-order__heading-title--border"></span>
                                    <button class="btn-contact-shop">
                                        <i class="btn-contact-shop-icon fa-solid fa-comment-dots"></i>
                                        Liên hệ người bán
                                    </button>
                                </div>
                                <div class="info-order__item">
                                    <div class="info-order-title">
                                        <a href="" class="info-order-link">
                                            <div class="info-order-link-img">
                                                <img src="https://down-vn.img.susercontent.com/file/sg-11134201-23020-obwi4c5k60mv74" class="info-order-img">
                                            </div>
                                            <div class="info-order-link-name">
                                                <span class="info-order-name info-order-link-name--strong">Nấm hương rừng khô đặc sản tây bắc [ hàng loại 1 - Thơm - khô - ngon ]</span>
                                                <span class="info-order-name">Phân loại: Túi 250g</span>
                                                <span class="info-order-name">x1</span>
                                            </div>                
                                        </a>                                   
                                    </div>
                                    <div class="info-order-price">
                                        <i class="info-order-price--icon fa-solid fa-money-bill"></i>
                                        <span class="info-order-price-money">Thành tiền</span>
                                        <span class="info-order-price-detail">75.200đ</span>
                                    </div> 
                                </div>
                                <div class="info-order__btn">
                                    <span class="info-order-note">Vui lòng chỉ nhấn "Đã nhận hàng" khi đơn hàng đã được giao đến bạn và sản phẩm nhận được không có vấn đề nào</span>
                                    <button class="btn-order-option btn-order-option--active">Đánh giá</button>
                                    <button class="btn-order-option btn-order--disabled">Đã nhận hàng</button>
                                    <button class="btn-order-option btn-order-option--active">Thanh toán</button>
                                    <button class="btn-order-option btn-order-option--active">Hủy đơn</button>
                                </div>
                            </div>
                            <div class="info-order__detail">
                                <div class="info-order__heading">
                                    <a href="" class="info-order__heading-link">
                                        <i class="info-order__heading-icon fa-solid fa-credit-card"></i>
                                        <span class="info-order__heading-title info-order__heading-title--color">Chờ thanh toán</span>
                                    </a>
                                    <span class="info-order__heading-title--border"></span>
                                    <span class="info-order__heading-title info-order__heading-title--color2">Vui lòng thanh toán đơn hàng</span>
                                    <span class="info-order__heading-title--border"></span>
                                    <button class="btn-contact-shop">
                                        <i class="btn-contact-shop-icon fa-solid fa-comment-dots"></i>
                                        Liên hệ người bán
                                    </button>
                            
                                </div>
                                <div class="info-order__item">
                                    <div class="info-order-title">
                                        <a href="" class="info-order-link">
                                            <div class="info-order-link-img">
                                                <img src="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lomf738vzr93fe" class="info-order-img">
                                            </div>
                                            <div class="info-order-link-name">
                                                <span class="info-order-name info-order-link-name--strong">Hạt điều sấy chín nguyên vị không muối không lụa từ Nông sản Giọt Nắng</span>
                                                <span class="info-order-name">Phân loại: Nguyên hạt (ít vỡ), Túi zip 250 gam</span>
                                                <span class="info-order-name">x1</span>
                                            </div>                
                                        </a>                                   
                                    </div>
                                    <div class="info-order-price">
                                        <i class="info-order-price--icon fa-solid fa-money-bill"></i>
                                        <span class="info-order-price-money">Thành tiền</span>
                                        <span class="info-order-price-detail">124.000đ</span>
                                    </div> 
                                </div>
                                <div class="info-order__btn">
                                    <span class="info-order-note">Vui lòng chỉ nhấn "Đã nhận hàng" khi đơn hàng đã được giao đến bạn và sản phẩm nhận được không có vấn đề nào</span>
                                    <button class="btn-order-option btn-order-option--active">Đánh giá</button>
                                    <button class="btn-order-option btn-order--disabled">Đã nhận hàng</button>
                                    <button class="btn-order-option btn-order-option--active">Thanh toán</button>
                                    <button class="btn-order-option btn-order-option--active">Hủy đơn</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

        <?php include 'footer.php'; ?>
        <?php mysqli_close($connect); ?>
    </div>
</body>
</html>
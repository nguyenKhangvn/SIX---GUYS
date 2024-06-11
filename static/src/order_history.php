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
    <link rel="stylesheet" href="../../font/fontawesome-free-6.5.1-web/css/all.min.css">
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
                                        <button class="btn-order--strong">Trạng thái đơn hàng</button>
                                    </a>
                                    <a href="order_history.php" class="btn-order">
                                        <button class="btn-order--strong btn-order--active">Lịch sử đặt hàng</button>
                                    </a>
                                </div>
                            </div>
                            <div class="info-order__detail">
                                <div class="info-order__heading">
                                    <i class="info-order__heading-icon fa-solid fa-face-smile"></i>
                                    <span class="info-order__heading-title info-order__heading-title--color">Đơn hàng đã được giao thành công</span>
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
                                                <img src="https://down-vn.img.susercontent.com/file/sg-11134201-22110-1g4f64vwlhjvf5" class="info-order-img">
                                            </div>
                                            <div class="info-order-link-name">
                                                <span class="info-order-name info-order-link-name--strong">Đậu Ngự Hữu Cơ SallyFood 1kg (Đậu Bơ Lima Hay Đậu Quyên) Bùi Béo Giống Thuần Chủng Nông Sản Quê Sạch</span>
                                                <span class="info-order-name">Phân loại: 1kg</span>
                                                <span class="info-order-name">x2</span>
                                            </div>                
                                        </a>                                   
                                    </div>
                                    <div class="info-order-price">
                                        <i class="info-order-price--icon fa-solid fa-money-bill"></i>
                                        <span class="info-order-price-money">Thành tiền</span>
                                        <span class="info-order-price-detail">189.200đ</span>
                                    </div> 
                                </div>
                                <div class="info-order__btn">
                                    <div class="info-order-note info-order-note--success">
                                        <i class="info-order-note-icon fa-regular fa-face-smile-beam"></i>
                                        <span class="info-order-note-text">Đơn hàng đã đến tay bạn thành công, rất vui khi được phục vụ bạn!</span>
                                    </div>
                                    <div>
                                        <button class="btn-order-option btn-order-option--active">Đánh giá</button>
                                        <button class="btn-order-option btn-order-option--active">Đặt lại</button>
                                    </div>
                                </div>
                            </div>
                            <div class="info-order__detail">
                                <div class="info-order__heading">
                                    <i class="info-order__heading-icon fa-solid fa-face-smile"></i>
                                    <span class="info-order__heading-title info-order__heading-title--color">Đơn hàng đã được giao thành công</span>
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
                                                <img src="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lo7qpoutdrlj24" class="info-order-img">
                                            </div>
                                            <div class="info-order-link-name">
                                                <span class="info-order-name info-order-link-name--strong">Trái cây sấy dẻo dinh dưỡng loại 1 dâu tây xoài nguyên miếng nam việt quất nho 250g từ Nông sản Giọt Nắng</span>
                                                <span class="info-order-name">Phân loại: Trái cây mix sấy dẻo, 250gram </span>
                                                <span class="info-order-name">x1</span>
                                            </div>                
                                        </a>                                   
                                    </div>
                                    <div class="info-order-price">
                                        <i class="info-order-price--icon fa-solid fa-money-bill"></i>
                                        <span class="info-order-price-money">Thành tiền</span>
                                        <span class="info-order-price-detail">119.000đ</span>
                                    </div> 
                                </div>
                                <div class="info-order__btn">
                                    <div class="info-order-note info-order-note--success">
                                        <i class="info-order-note-icon fa-regular fa-face-smile-beam"></i>
                                        <span class="info-order-note-text">Đơn hàng đã đến tay bạn thành công, rất vui khi được phục vụ bạn!</span>
                                    </div>
                                    <div>
                                        <button class="btn-order-option btn-order-option--active">Đánh giá</button>
                                        <button class="btn-order-option btn-order-option--active">Đặt lại</button>
                                    </div>
                                </div>
                            </div>
                            <div class="info-order__detail">
                                <div class="info-order__heading">
                                    <i class="info-order__heading-icon fa-solid fa-face-sad-tear"></i>
                                    <span class="info-order__heading-title info-order__heading-title--color">Đơn hàng đã hủy</span>
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
                                                <img src="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-loyxxn2anior09" class="info-order-img">
                                            </div>
                                            <div class="info-order-link-name">
                                                <span class="info-order-name info-order-link-name--strong">Granola Siêu Hạt Premium Không Óc Chó hỗ trợ giảm cân hiệu quả bổ sung dinh dưỡng hộp 500g từ Nông Sản Giọt Nắng</span>
                                                <span class="info-order-name">Phân loại: 1kg</span>
                                                <span class="info-order-name">x1</span>
                                            </div>                
                                        </a>                                   
                                    </div>
                                    <div class="info-order-price">
                                        <i class="info-order-price--icon fa-solid fa-money-bill"></i>
                                        <span class="info-order-price-money">Thành tiền</span>
                                        <span class="info-order-price-detail">222.000đ</span>
                                    </div> 
                                </div>
                                <div class="info-order__btn">
                                    <div class="info-order-note info-order-note--cancel">
                                        <i class="info-order-note-icon fa-regular fa-face-sad-tear"></i>
                                        <span class="info-order-note-text">Thật buồn, bạn đã hủy đơn hàng!</span>
                                    </div>
                                    <div>
                                        <button class="btn-order-option btn-order-option--active">Đánh giá</button>
                                        <button class="btn-order-option btn-order-option--active">Đặt lại</button>
                                    </div>
                                </div>
                            </div>
                            <div class="info-order__detail">
                                <div class="info-order__heading">
                                    <i class="info-order__heading-icon fa-solid fa-face-sad-tear"></i>
                                    <span class="info-order__heading-title info-order__heading-title--color">Đơn hàng đã hủy</span>
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
                                                <img src="https://down-vn.img.susercontent.com/file/e09b485df7caeb5e77df99d647cb5521" class="info-order-img">
                                            </div>
                                            <div class="info-order-link-name">
                                                <span class="info-order-name info-order-link-name--strong">[Nông sản Việt] 500g Hạt điều tươi nhân trắng nấu sữa, làm bánh tuyệt vời - Raw Cashew Kernels</span>
                                                <span class="info-order-name">Phân loại: Nguyên hạt sạch</span>
                                                <span class="info-order-name">x1</span>
                                            </div>                
                                        </a>                                   
                                    </div>
                                    <div class="info-order-price">
                                        <i class="info-order-price--icon fa-solid fa-money-bill"></i>
                                        <span class="info-order-price-money">Thành tiền</span>
                                        <span class="info-order-price-detail">130.000đ</span>
                                    </div> 
                                </div>
                                <div class="info-order__btn">
                                    <div class="info-order-note info-order-note--cancel">
                                        <i class="info-order-note-icon fa-regular fa-face-sad-tear"></i>
                                        <span class="info-order-note-text">Thật buồn, bạn đã hủy đơn hàng!</span>
                                    </div>
                                    <div>
                                        <button class="btn-order-option btn-order-option--active">Đánh giá</button>
                                        <button class="btn-order-option btn-order-option--active">Đặt lại</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php include 'footer.php'; ?>
        <?php mysqli_close($connect); ?>
    </div>
</body>
</html>
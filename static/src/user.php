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
    <title>Thông tin cá nhân</title>
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/user_Nguyen.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="../font/fontawesome-free-6.5.1-web/css/all.min.css">
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
                                <nav class="category__list">
                                    <ul class="category__list-title">
                                        <li class="category-item">
                                            <a href="" class="category-item-link">
                                                <i class="category-item-icon fa-solid fa-user"></i>
                                                <span>Tài khoản</span>
                                            </a>
                                        </li>
                                        <li class="category-item">
                                            <a href="order.php" class="category-item-link">
                                                <i class="category-item-icon fa-solid fa-clipboard-list"></i>
                                                <span>Đơn hàng</span>
                                            </a>
                                        </li>
                                        <li class="category-item">
                                            <a href="address.php" class="category-item-link">
                                                <i class="category-item-icon fa-solid fa-location-dot"></i>
                                                <span>Địa chỉ</span>
                                            </a>
                                        </li>
                                        <li class="category-item">
                                            <a href="payment.php" class="category-item-link">
                                                <i class="category-item-icon fa-solid fa-credit-card"></i>
                                                <span>Thanh toán</span>
                                            </a>
                                        </li>
                                        <li class="category-item">
                                            <a href="voucher.php" class="category-item-link">
                                                <i class="category-item-icon fa-solid fa-ticket"></i>
                                                <span>Voucher</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        
                    </div>

                    <div class="content__right">
                        <div class="info-accout">
                            <h3 class="info__heading">Hồ sơ của tôi</h3>
                            <div class="info__user">
                                <div class="info__user-title">
                                    <ul class="info__user-title-list">
                                        <li class="info__user-title-item">Tên: </li>
                                        <li class="info__user-title-item">Email: </li>
                                        <li class="info__user-title-item">Số điện thoại: </li>
                                        <!-- <li class="info__user-title-item">Ngày sinh: </li> -->
                                        <li class="info__user-title-item">Mật khẩu: </li>
                                    </ul>
                                </div>
                                <div class="info__user-detail">
                                    <ul class="info__user-detail-list">
                                        <a href="form_user.php">
                                        <li class="info__user-detail-item">
                                            <span class="detail-item-text"><?php echo $each['name'] ?></span><button class="info-edit-btn" id="edit-name-btn">Thay đổi</button></li>
                                        </a>
                                       
                                        <li class="info__user-detail-item">
                                            <span class="detail-item-text"><?php echo $each['email'] ?></span><button class="info-edit-btn"></button></li>
                                        <li class="info__user-detail-item">
                                            <span class="detail-item-text"><?php echo $each['phone'] ?></span><button class="info-edit-btn"></button></li>
                                        <!-- <li class="info__user-detail-item">
                                            <input type="date" class="birthday-user">    
                                        </li> -->
                                        <li class="info__user-detail-item">
                                            <span class="detail-item-text"><?php echo $each['password'] ?></span><button class="info-edit-btn"></button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-info-save">
                                <button class="btn-info-save--color"><span style="color: white;">LƯU</span></button>
                            </div>
            
                        </div>
                    </div>
                </div>


                <!-- Modal layout -->
                <!-- <div class="modal-edit">
                    <div class="modal-edit__overlay"></div>
                    
                    <div class="modal-edit__body">
                        Name edit 
                        <div class="auth-form">
                            <div class="auth-form__container">
                                <div class="auth-form__header">
                                    <h3 class="auth-form__heading">Bạn đang thay đổi tên</h3>
                                    <div class="auth-form__close">
                                        <i class="auth-form__close-icon fa-solid fa-xmark"></i>
                                    </div>
                                </div>
                                <div class="auth-form__edit">
                                    <div class="form-edit__form">                 
                                        <input type="text" class="form-edit__input form-edit__input--name" placeholder="Nhập tên mới tại đây">  
                                    </div>
                                </div>
                                <button class="btn auth-form__btn">Đồng ý</button>
                            </div>

                        </div> 
                    </div>
                </div> -->
            </div>
        <?php endforeach; ?>
        
        <?php include 'footer.php'; ?>
        
    </div>
    
</body>
</html>
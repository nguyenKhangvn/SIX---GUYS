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
    <title>Mã giảm giá</title>
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
                            <div class="info-order__title info-voucher__title">
                                <h3 class="info__heading info__heading--order">Kho Voucher</h3>
                                <div class="gategory__order gategory__voucher">
                                    <div class="voucher-title">Mã Voucher</div>
                                    <input type="text" class="voucher-input" placeholder="Nhập mã voucher tại đây">
                                    <button class="voucher-btn">Nhập</button>
                                </div>
                            </div>
                            <div class="info-voucher__list">
                                <div class="voucher__list-letf">
                                    <div class="voucher-item">
                                        <img src="https://linhhandmade.com/assets/post/5b700e54768d4-12-08-2018-capture4png.png" alt="" class="voucher-item-img">
                                        <div class="voucher-item-title">
                                            <div class="voucher-item-text">Giảm ₫50k</div>
                                            <div class="voucher-item-text">Đơn tối thiểu ₫200k</div>
                                            <div class="voucher-item-text"><i class="voucher-item-time-icon fa-regular fa-clock"></i>Thời hạn sử dụng: 10/04/2024</div>
                                        </div>
                                        <a href="" class="voucher-item-use">Sử dụng</a>
                                    </div>
                                    <div class="voucher-item">
                                        <img src="https://www.bolsaspapelregaloycintas.es/modules/mpm_customblock/views/img/3.png" alt="" class="voucher-item-img">
                                        <div class="voucher-item-title">
                                            <div class="voucher-item-text">Giảm 8% Giảm tối đa ₫100k</div>
                                            <div class="voucher-item-text">Đơn Tối Thiểu ₫120k</div>
                                            <div class="voucher-item-text"><i class="voucher-item-time-icon fa-regular fa-clock"></i>Thời hạn sử dụng: 07/04/2024</div>
                                        </div>
                                        <a href="" class="voucher-item-use">Sử dụng</a>
                                    </div>                     
                                </div>
                                <div class="voucher__list-right">
                                    <div class="voucher-item">
                                        <img src="https://linhhandmade.com/assets/post/5b700e54768d4-12-08-2018-capture4png.png" alt="" class="voucher-item-img">
                                        <div class="voucher-item-title">
                                            <div class="voucher-item-text">Giảm tối đa ₫100k</div>
                                            <div class="voucher-item-text">Đơn Tối Thiểu ₫45k</div>
                                            <div class="voucher-item-text"><i class="voucher-item-time-icon fa-regular fa-clock"></i>Thời hạn sử dụng: 16/04/2024</div>
                                        </div>
                                        <a href="" class="voucher-item-use">Sử dụng</a>
                                    </div> 
                                    <div class="voucher-item">
                                        <img src="https://www.bolsaspapelregaloycintas.es/modules/mpm_customblock/views/img/3.png" alt="" class="voucher-item-img">
                                        <div class="voucher-item-title">
                                            <div class="voucher-item-text">Giảm 12% Giảm tối đa ₫1,5tr</div>
                                            <div class="voucher-item-text">Đơn Tối Thiểu ₫1tr</div>
                                            <div class="voucher-item-text"><i class="voucher-item-time-icon fa-regular fa-clock"></i>Thời hạn sử dụng: 19/04/2024</div>
                                        </div>
                                        <a href="" class="voucher-item-use">Sử dụng</a>
                                    </div>                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        <?php include 'footer.php'; ?>

    </div>
</body>
</html>
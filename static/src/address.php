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
    <title>Địa chỉ</title>
   
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
                        <div class="info-accout">
                            <h3 class="info__heading">Địa chỉ của tôi</h3>
                            <div class="info__address">
                                <div class="info__address-user">
                                    <div class="info__address-user-default">Mặc định</div>
                                    <span class="info__address-user-name">Nguyễn Văn A</span>
                                    <span class="info__address-user-num">0123456789</span>
                                    <p class="info__address-user-detail">Tan Hoang Gia Hotel, Số 55a, Nguyễn Lữ Phường Ngô Mây, Thành Phố Quy Nhơn, Bình Định</p>
                                </div>
                                <div class="btn__address">
                                    <div class="btn__address-option">
                                        <button class="btn__address-update">Cập nhật</button>
                                        <button class="btn__address-update">Xóa</button>
                                    </div>
                                    <div class="btn__address-option">
                                        <button class="btn__address-default btn__address-default--disabled">Thiết lập mặc định</button>
                                    </div>                               
                                </div>                          
                            </div>
                            <div class="info__separate"></div>
                            <div class="info__address">
                                <div class="info__address-user">
                                    <span class="info__address-user-name">Nguyễn Văn A</span>
                                    <span class="info__address-user-num">0123456789</span>
                                    <p class="info__address-user-detail">Thôn Gia Thạnh Xã Cát Minh, Huyện Phù Cát, Bình Định</p>
                                </div>
                                <div class="btn__address">
                                    <div class="btn__address-option">
                                        <button class="btn__address-update">Cập nhật</button>
                                        <button class="btn__address-update">Xóa</button>
                                    </div>
                                    <div class="btn__address-option">
                                        <button class="btn__address-default">Thiết lập mặc định</button>
                                    </div>  
                                </div>
                                
                            </div>
                            <div class="info__separate"></div>
                            <div class="info__address">
                                <div class="info__address-user">
                                    <span class="info__address-user-name">Nguyễn Văn A</span>
                                    <span class="info__address-user-num">0123456789</span>
                                    <p class="info__address-user-detail">171 ngô mây Phường Ngô Mây, Thành Phố Quy Nhơn, Bình Định</p>
                                </div>
                                <div class="btn__address">
                                    <div class="btn__address-option">
                                        <button class="btn__address-update">Cập nhật</button>
                                        <button class="btn__address-update">Xóa</button>
                                    </div>
                                    <div class="btn__address-option">
                                        <button class="btn__address-default">Thiết lập mặc định</button>
                                    </div>                                   
                                </div>                         
                            </div>
                            <div class="info__separate"></div>
                            <div class="btn__address-add">
                                <button class="btn__address-add--color"><span class="btn__address-plus">+</span>Thêm địa chỉ mới</button>
                            </div>       
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <?php include 'footer.php';
        mysqli_close($connect) ?>

    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../static/css/footer_Trung.css">
    <link rel="stylesheet" href="../../static/css/base.css">
    <link rel="stylesheet" href="../../static/css/grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../static/font/fontawesome-free-6.5.1-web/css/all.min.css">
    <title>Document</title>
</head>

<body>

    <?php


        require 'admin/connect.php';

        $sql_catelogy = "select * from catelogy";
        $result_catelogy = mysqli_query($connect, $sql_catelogy);

    ?>
    <div class="app">
        <footer class="footer">
            <div class="grid wide">
                <div class="row footer__content">
                    <div class="col l-2-4 m-4 c-8">
                        <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="Help_Center/HelpCenter.html">Trung tâm trợ giúp</a>
                            </li>
			    <li class="footer-item">
                                <a href="Help_Center/Hpolicy-list.html">Điều khoản</a>
                            </li>
			    <li class="footer-item">
                                <a href="Help_Center/policy1.html">Điều khoản dịch vụ</a>
                            </li>
                            <li class="footer-item">
                                <a href="Help_Center/policy2.html">Chính sách bảo mật</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col l-2-4 m-4 c-4">
                        <h3 class="footer__heading">Giới thiệu</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="#">Giới thiệu</a>
                            </li>
                            <li class="footer-item">
                                <a href="#">Tuyển dụng</a>
                            </li>
                            <li class="footer-item">
                                <a href="#">Thông tin liên lạc</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col l-2-4 m-4 c-8">
                        <h3 class="footer__heading">Liên hệ với chúng tôi</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                <a href="https://www.facebook.com">
                                    <i class="fab fa-facebook"></i>
                                    Facebook
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="https://www.instagram.com">
                                    <i class="fab fa-instagram"></i>
                                    Instagram
                                </a>
                            </li>
                            <li class="footer-item">
                                <a href="#">
                                    <i class="fa-solid fa-phone"></i>
                                    0298458521
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col l-2-4 m-4 c-4">
                        <h3 class="footer__heading">Danh mục</h3>
                        <ul class="footer-list">
                            <li class="footer-item">
                                 <?php foreach ($result_catelogy as $each) : ?>
                                    <li class="category__list-item">
                                        <a class="category__item-link" href="catelogy_a_product.php?catelogy_id=<?php echo $each['id']; ?>"><?php echo $each['name'] ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </li>
                           
                        </ul>
                    </div>

                    <div class="col l-2-4 m-8 c-12">
                        <h3 class="footer__heading footer__download-mobile">Vào cửa hàng trên ứng dụng</h3>
                        <div class="footer__download">
                            <img src="../../static/img/QRcode.png" alt="Download QR" class="footer__download-qr">
                            <div class="footer__download-app">
                                <a href="https://play.google.com/store/" class="footer__download-app-link">
                                    <img src="../../static/img/googlestore.png" alt="Google play"
                                        class="footer__download-icon">
                                </a>
                                <a href="https://www.apple.com/vn/app-store/" class="footer__download-app-link">
                                    <img src="../../static/img/Appstore.png" alt="Appstore" class="footer__download-icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="grid wide">
                    <p class="footer__text"><a href="admin/index.php">©</a>  2020 Bản quyền thuộc về tập thể nhóm 5 - Website được tạo ra vì
                        mục đích học tập, không vì mục đích thương mại</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Six-Guys</title>
    <link rel="stylesheet" href="../../static/css/grid.css">
    <link rel="stylesheet" href="../../static/css/base.css">
    <link rel="stylesheet" href="../../static/css/page_AKhang.css">
    <link rel="stylesheet" href="../../static/font/fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>

<?php
    require 'admin/connect.php';
    $sql_catelogy = "select * from catelogy";
    $result_catelogy = mysqli_query($connect, $sql_catelogy);
?>


        <div class="header-navbar">
            <ul class="nav__list">
                <li class="nav__list-item"><a href="#">Trang chủ</a></li>
                <li class="nav__list-item">
                    <a href="#">Sản phẩm</a>
                    <i class="dropdown-icon fa-solid fa-circle-chevron-down"></i>
                     <ul class="nav__dropdown">
                        <li class="dropdown-header">
                            <h4 class="dropdown-title">List sản phẩm</h4>
                        </li>
                        <?php foreach ($result_catelogy as $each) : ?>
                            <li class="dropdown-item">
                                <a href="#"><?php echo $each['name'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                </li>
                <li class="nav__list-item"><a href="#">Mã giảm giá</a></li>
                <li class="nav__list-item"><a href="#">Giới thiệu</a></li>
                <li class="nav__list-item"><a href="#">Hỗ trợ</a></li>
            </ul>
        </div>
        <?php mysqli_close($connect); ?>
</body>

</html>
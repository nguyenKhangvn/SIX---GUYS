<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../static/css/base.css">
    <link rel="stylesheet" href="../../static/css/grid.css">
    <link rel="stylesheet" href="../../static/css/Product_details_Trung.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../static/font/fontawesome-free-6.5.1-web/css/all.min.css">
    <title>Product_details</title>
</head>

<body class="body">
    <?php
    // $email = $_POST['username'];
    $id = $_GET['id'];
    require 'admin/connect.php';
    $sql = "select * from products
                    where id = '$id'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);


    $sql_rate = "select * from rate
                        join customers ON rate.customer_id = customers.id 
                        where rate.product_id = '$id'";;
    $result_rate = mysqli_query($connect, $sql_rate);
    // $each_rate = mysqli_fetch_array($result_rate);

    ?>
    <div class="app">
        <div class="app__container">
            <div class="grid">
                <!-- Để làm sau vì phụ thuộc vào các trang khác -->
                <div class="grid wide">
                    <div class="link_menu">
                        <div class="product-description_details--list link_menu--list ">
                            <a href="index.php">Trang chủ</a>


                        </div>
                    </div>
                    <div class="product-details">
                        <!-- product -->
                        <section class="product">
                            <div class="product-img_boder">
                                <img src="admin/products/photo/<?php echo $each['photo'] ?>" height="100" class="product_img">
                            </div>
                            <ul class="product-list">
                                <li class="product-share">
                                    <p>Chia sẻ :</p>
                                    <a href="https://www.facebook.com" class="product-share-link">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="https://www.messenger.com" class="product-share-link">
                                        <i class="fa-brands fa-facebook-messenger"></i>
                                    </a>
                                    <a href="https://www.instagram.com" class="product-share-link">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="https://twitter.com" class="product-share-link">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="product-share">
                                    <a href="" class="product-share-link heart">
                                        <i class="fa-solid fa-heart"></i>
                                        <p>Đã thích (10k)</p>
                                    </a>
                                </li>
                            </ul>
                        </section>
                        <!-- details -->
                        <div class="details-groud">
                            <div class="details">
                                <div class="details-inf">
                                    <span>
                                        <?php echo $each['name'] ?>
                                    </span>
                                </div>
                                <div class="details-evaluate">
                                    <div class="details-evaluate_inf">
                                        <div class="details-evaluate-item">
                                            <a href="">4.9</a>
                                            <i class="fa-solid fa-star star"></i>
                                            <i class="fa-solid fa-star star"></i>
                                            <i class="fa-solid fa-star star"></i>
                                            <i class="fa-solid fa-star star"></i>
                                            <i class="fa-solid fa-star star"></i>
                                        </div>
                                        <div class="details-evaluate-item wale">
                                            <a href="">1K</a>
                                            <h3>Đánh giá</h3>
                                        </div>
                                        <div class="details-evaluate-item wale">
                                            <a href="">2k</a>
                                            <h3>Đã bán</h3>
                                        </div>
                                    </div>
                                    <div class="Report">
                                        <a href="" class="Report-link">Báo cáo</a>
                                    </div>
                                </div>
                                <div class="details-price">
                                    <p class="details_dp1">Giá</p>
                                    <p><?php echo number_format($each['price'], 0, ',', '.') ?>đ</p>
                                </div>
                                <!-- <div class="details-voucher">
                                    <span>Mã giảm giá</span>
                                </div> -->
                                <div class="details-select">
                                    <p class="details_dp1">Đơn vị</p>
                                    <p><?php echo $each['unit'] ?></p>
                                </div>
                                <div class="details-quantity">
                                    <span>Số Lượng</span>
                                    <div class="details-quantity__page-control">
                                        <a href="" class="details-quantity__page-btn details-quantity__page-icon--disable">
                                            <i class="details-quantity__page-icon fas fa-chevron-left"></i>
                                        </a>
                                        <a href="" class="details-quantity__page-btn details-quantity__page-icon--disable count">
                                            <span>1</span>
                                        </a>
                                        <a href="" class="details-quantity__page-btn details-quantity__page-icon--disable">
                                            <i class="details-quantity__page-icon fas fa-chevron-right"></i>
                                        </a>
                                    </div>
                                    <span><?php echo $each['number'] ?> sản phẩm</span>
                                </div>
                                <div class="details-oder">

                                    <button data-id='<?php echo $each['id'] ?>' class="oder-cart btn btn--disable">
                                        Thêm vào giỏ hàng
                                    </button>
                                    <button data-id='<?php echo $each['id']; ?>' data-price='<?php echo $each['price']; ?>' class="oder-buy btn btn--ground">
                                        <span>Mua ngay</span>
                                    </button>
                                    <!-- '<?php echo $each['price']; ?>' -->


                                </div>
                            </div>
                            <div class="details_footer">
                                <div class="details_footer-change">
                                    <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/2bcf834c40468ebcb90b.svg" alt="">
                                    <span>Đổi trả miễn phí</span>
                                </div>
                                <div class="details_footer-safe">
                                    <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/511aca04cc3ba9234ab0.png" alt="">
                                    <span>100% an toàn thực phẩm</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Đánh giá sản phẩm -->
                    <div class="Evaluate">
                        <?php include 'form_rate.php'; ?>

                        <!-- Hiển thị đánh giá sản phẩm -->

                        <div class="backgroud_comments">
                            <?php
                            echo "<hr>";
                            if (mysqli_num_rows($result_rate) > 0) {

                                while ($each_rate = mysqli_fetch_array($result_rate)) {
                                    echo "<div class ='comments_d' >";
                                    echo " <div class='brcm'> ";
                                    echo " <p class='brcm__font'>Khách hàng: </p>";
                                    echo "<p>" . $each_rate['name'] . "</p>";
                                    echo "</div>";
                                    echo " <div class='brcm'> ";
                                    echo " <p class='brcm__font'>Rating: </p>";
                                    echo "<p>" . $each_rate['star'] . "</p>";
                                    echo "</div>";
                                    echo " <div class='brcm'> ";
                                    echo " <p class='brcm__font'>Comment: </p>";
                                    echo "<p>" . $each_rate['comment'] . "</p>";
                                    echo "</div>";
                                    echo "</div> ";
                                    echo "<hr>";
                                }
                            } else {
                                echo "<div class ='comments_d' >";
                                echo " <div class='brcm'> ";
                                echo "<p>Sản phẩm chưa có đánh giá.</p>";
                                echo "</div>";
                                echo "</div> ";
                                echo "<hr>";
                            }
                            ?>
                        </div>
                    </div>

                    <!--product-description-->
                    <div class="product-description--gourd">
                        <div>
                            <div class="product-description">
                                <div class="product-description_details">
                                    <h3>CHI TIẾT SẢN PHẨM</h3>
                                    <div class="product-description_details--list">
                                        <p>Danh mục:</p>
                                        <a href="index.php">Trang chủ</a>
                                        <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/966fbe37fe1c72e3f2dd.svg" alt="">
                                        <!-- <a href="">Rau</a>
                                        <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/productdetailspage/966fbe37fe1c72e3f2dd.svg"
                                            alt=""> -->
                                        <a href=""><?php echo $each['name'] ?></a>
                                    </div>
                                    <div class="product-description_details--list">
                                        <p>Nguồn gốc</p>
                                        <a href="">Nông trại An Khang</a>
                                    </div>
                                </div>
                                <div class="product-description_details">
                                    <H3>MÔ TẢ SẢN PHẨM</H3>
                                    <div class="product-description_details--abc">
                                        <p><?php echo $each['description'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.oder-cart').click(function() {
                if (<?php echo isset($_SESSION['id']) ? 'true' : 'false'; ?>) {
                    let id = $(this).data('id');
                    $.ajax({
                        type: "GET",
                        url: "add_to_cart.php",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            if (data == 1) {
                                $.notify("Đã thêm vào giỏ hàng thành công", "success");
                            } else {
                                alert(data);
                            }
                        }
                    });
                } else {
                    window.location.href = "form_login.php";
                }
            });



        $('.oder-buy').click(function () {
            if (<?php echo isset($_SESSION['id']) ? 'true' : 'false'; ?>) {
                let productId = $(this).data('id');
                let productPrice = $(this).data('price');              
                $.ajax({
                    url: 'product_order-buy.php',
                    type: 'POST',
                    data: {
                        id: productId,
                        price: productPrice
                    },
                    success: function (data) {          
                        if (data == 1) {
                            window.location.href = "form_checkout.php";
                        } else {
                            alert("Lỗi mua sản phẩm.");
                          // console.log(data);
                        }
                    }
                });
            } else {
                window.location.href = "form_login.php";
            }
        });


        });
    </script>



</body>

</html>
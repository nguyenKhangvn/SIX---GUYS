<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Six-Guys - Popular Products</title>
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

    // phan trang
    $page = 1;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }

    $search = "";
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
    }

    // Count total products
    $count_query = "SELECT COUNT(*) FROM products WHERE name LIKE '%$search%'";
    $count_result = mysqli_query($connect, $count_query);
    $total_products = mysqli_fetch_array($count_result)[0];
    $products_per_page = 30;
    $total_pages = ceil($total_products / $products_per_page);
    $offset = $products_per_page * ($page - 1);

 
    $sql = "SELECT p.id, p.name, p.photo, p.price, p.description, p.manufacture_id, p.unit, p.date_end, p.date_start, p.discount, p.number AS total_quantity_sold
            FROM products p
            JOIN rate op ON p.id = op.product_id
            GROUP BY p.id
            ORDER BY total_quantity_sold DESC
            LIMIT 10";
    // die($sql);
    $result = mysqli_query($connect, $sql);

    $sql_catelogy = "SELECT * FROM catelogy";
    $result_catelogy = mysqli_query($connect, $sql_catelogy);
    include 'header.php';
    include 'banner.php';
    ?>
    <div class="app">
        <div class="app__container">
            <div class="grid wide">
                <div class="row sm-gutter app__content">
                    <div class="col l-2 m-0 c-0">
                        <div class="category">
                            <h2 class="category__heading">
                                <i class="category-icon fa-solid fa-list"></i>
                                Danh mục
                            </h2>
                            <ul class="category__list">
                                <?php foreach ($result_catelogy as $each) : ?>
                                    <li class="category__list-item category__list-item--active">
                                        <a class="category__item-link" href="catelogy_a_product.php?catelogy_id=<?php echo $each['id']; ?>"><?php echo $each['name'] ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col l-10 m-12 c-12">
                        <div class="home__filter">
                            <span class="home__filter__label">Sắp xếp</span>
                            <form action="product_popular.php">
                                 <button class="home__filter-btn btn btn--normal" name="popular">Phổ biến</button>
                            </form>
                            <form action="product_new.php">
                                    <button class="home__filter-btn btn btn--normal" name="new">Mới nhất</button>
                            </form>
                            <form action="product_sale_off.php">
                                    <button class="home__filter-btn btn btn--normal" name="sale-off">Bán chạy</button>
                            </form>
                            <div class="select-input">
                                <span class="select-input__label">Giá</span>
                                <i class="select-input__icon fas fa-chevron-down"></i>

                                <!-- List option -->
                                <ul class="select-input__list">
                                    <li class="select-input__item">
                                        <a href="product_price_asc.php" class="select-input__link">Giá: thấp đến cao</a>
                                    </li>
                                    <li class="select-input__item">
                                        <a href="product_price_desc.php" class="select-input__link">Giá: cao đến thấp</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="home-filter__page">
                                <span class="home-filter__page-num">
                                    <span class="home-filter__page-current"><?php echo $page ?></span>/<?php echo $total_pages ?>
                                </span>
                            </div>
                        </div>
                        <div class="home__product">
                            <div class="row sm-gutter">
                                <?php foreach ($result as $each) : ?>
                                    <div class="col l-2-4 m-4 c-6">
                                        <!-- Product items -->
                                        <a href="../../static/src/product.php?id=<?php echo $each['id'] ?>" class="home-product-item">
                                            <div class="home-product-item__img">
                                                <img src="../../static/src/admin/products/photo/<?php echo $each['photo'] ?>">
                                            </div>
                                            <h4 class="home-product-item__name"><?php echo $each['name'] ?></h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old"><?php echo number_format(((($each['price']*$each['discount'])/100)) + $each['price'], 0, ',', '.')?>đ</span>
                                                <span class="home-product-item__price-current"><?php echo number_format($each['price'], 0, ',', '.') ?>đ</span>
                                            </div>
                                            <div class="home-product-item__action">
                                                <span class="home-product-item__like home-product-item__like--liked">
                                                    <i class="home-product-item__like-icon-default far fa-heart"></i>
                                                    <i class="home-product-item__like-icon-liked fas fa-heart"></i>
                                                </span>
                                                <div class="home-product-item__rating">
                                                    <i class="home-product-item__rating--gold fas fa-star"></i>
                                                    <i class="home-product-item__rating--gold fas fa-star"></i>
                                                    <i class="home-product-item__rating--gold fas fa-star"></i>
                                                    <i class="home-product-item__rating--gold fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span class="home-product-item__sold">88 đã bán</span>
                                                </div>
                                            </div>
                                            <!-- xuất sứ -->
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">Whoo</span>
                                                <span class="home-product-item__origin-name">Hàn Quốc</span>
                                            </div>
                                            <div class="home-product-item__favorite">
                                                <i class="fas fa-check"></i>
                                                <span class="">Yêu thích</span>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent des-sale"><?php echo $each['discount'] ?> %</span>
                                                <span class="home-product-item__sale-off-label">GIẢM</span>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <ul class="pagination">
                            <!-- Previous Page Link -->
                            <li class="pagination-item">
                                <a class="pagination-item-link" href="?page=<?php echo ($page > 1) ? ($page - 1) : 1 ?>&search=<?php echo htmlspecialchars($search); ?>">
                                    <i class="pagination-icon fa-solid fa-circle-arrow-left"></i>
                                </a>
                            </li>

                            <!-- Dynamic Pagination Links -->
                            <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                                <li class="pagination-item <?php echo ($i == $page) ? 'pagination-item-link--active' : '' ?>">
                                    <a class="pagination-item-link" href="?page=<?php echo $i ?>&search=<?php echo htmlspecialchars($search); ?>"><?php echo $i ?></a>
                                </li>
                            <?php } ?>

                            <!-- Next Page Link -->
                            <li class="pagination-item">
                                <a class="pagination-item-link" href="?page=<?php echo ($page < $total_pages) ? ($page + 1) : $total_pages ?>&search=<?php echo htmlspecialchars($search); ?>">
                                    <i class="pagination-icon fa-solid fa-circle-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php  include 'footer.php'; ?>

</body>

</html>

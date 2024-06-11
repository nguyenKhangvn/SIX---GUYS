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
    <div class="app">
        <div class="header">
            <div class="header-info">
                <a href="index.php">
                    <div class="header__shop" >
                    
                            <image src="../../static/img/snapedit_1711604435755.png" width="80px" alt="error"></image>
                            <p>6-GUYs</p>
                    
                    </div>
                </a>

                <!-- REASCH -->
                
              
                    <div class="header__search">
                        <form action="search.php" method="POST">
                            <div class="box-search">
                                <input class="input-search" type="search" name="input-search"
                                    placeholder="Nhập sản phẩm cần tìm..."></input>
                                <button class="btn-search" type="submit"  name="search">
                                    <i class="btn-search-icon fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </form>
                       
                    </div>
              
                

                <!-- CART -->
                <a href="cart.php">
                    <div class="header__cart color_textLogo">
                        <div class="cart-logo">
                            <i class="cart-icon fa-solid fa-cart-shopping"></i>
                            <!-- <div class="cart-list--no">
                                <div class="cart-list--no-nois">
                                    <i class="cart-icon--no fa-regular fa-face-sad-tear"></i>
                                     <p class="cart-title--no">Not item hear!</p> 
                                </div>
                            </div> -->
                            <div class="cart-list--yes">
                            </div>
                            <p class="logo-p">Giỏ hàng</p>
                        </div>
                    </div>
                </a>
                    

                <!--NOTIFY -->
                <a href="Help_Center/HelpCenter.html">
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
                </a>
                   

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
</body>

</html>
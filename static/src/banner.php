<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /*banner*/
        .banner {
            border: 1px solid;
            margin: 0 auto;
            margin-top: 25px;
            display: flex;
            align-items: center;

            height: 500px;
            position: relative;
            overflow: hidden;

        }

        .banner-slide {
            display: flex;
        }

        .banner-item {
            animation: banner 8s 3s infinite;
        }

        .banner-image {
            width: 100vw;
            height: 500px;
        }

        @keyframes banner {
            0% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(-200%);
            }
        }
    </style>
</head>

<body>
    <div class="banner">
        <div class="banner-slide">
            <div class="banner-item">
                <img class="banner-image" src="https://mayfoods.vn/wp-content/uploads/2017/11/Banner-raucu-2.jpg">
            </div>
            <div class="banner-item">
                <img class="banner-image" src="https://www.vimexfood.com.vn/wp-content/uploads/2021/07/Banner-thit-bo-scaled.jpg">
            </div>
            <div class="banner-item">
                <img class="banner-image" src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=1920,fit=crop/mv05288PD7tyngKo/tramcua-seafood-1-mv04PD4G3yIVRyxk.png">
            </div>
        </div>
    </div>
</body>

</html>
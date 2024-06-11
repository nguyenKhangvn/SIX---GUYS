<?php
	require '../check_admin_login.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $photo_new = $_FILES['photo_new'];
    if($photo_new['size'] > 0){
        $folder = 'photo/';
        $file_extension = explode('.', $photo_new['name'])[1];
        $file_name = time() . '.' . $file_extension;
        $path_file = $folder . $file_name;

        move_uploaded_file($photo_new["tmp_name"], $path_file);
    }
    else $file_name = $_POST['photo_old'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $manufacture_id = $_POST['manufacture_id'];
    $unit = $_POST['unit'];
    $catelogys_id =  $_POST['catelogy_id'];
    $date_end = $_POST['date_end'];
    $discount = $_POST['discount'];
    require '../connect.php';
    $sql = "update products
            set name='$name',
                photo='$file_name',
                price='$price',
                description='$description',
                manufacture_id = '$manufacture_id',
                unit = '$unit',
                date_end = '$date_end',

                discount = '$discount' 
                where id='$id';"; 

                //  die($sql);
    mysqli_query($connect, $sql);

    $product_id = $id;
    foreach ($catelogys_id as $catelogy_id) {
        $sql = "insert into product_catelogy(catelogy_id, product_id) values('$catelogy_id','$product_id')";
        // die($sql);
        $result = mysqli_query($connect, $sql);
    }
    header('location: index.php');
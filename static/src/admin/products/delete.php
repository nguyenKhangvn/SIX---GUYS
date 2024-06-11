<?php
require '../check_admin_login.php';


$id = $_GET['id'];

include '../connect.php';



$check_sql = "SELECT * FROM product_catelogy WHERE product_id = '$id'";
$check_result = mysqli_query($connect, $check_sql);

if (mysqli_num_rows($check_result) > 0) {
   
    $sql = "delete from product_catelogy WHERE product_id = '$id'";
    if (!mysqli_query($connect, $sql)) {
        echo "Lỗi: " . mysqli_error($connect);
        exit();
    }
}

$check_rate_sql = "SELECT * FROM rate WHERE product_id = '$id'";
$check_rate_result = mysqli_query($connect, $check_rate_sql);

if (mysqli_num_rows($check_rate_result) > 0) {
    
    $delete_rate_sql = "DELETE FROM rate WHERE product_id = '$id'";
    if (!mysqli_query($connect, $delete_rate_sql)) {
        echo "Lỗi: " . mysqli_error($connect);
        exit();
    }
}

$check_order_sql = "SELECT * FROM order_product WHERE product_id = '$id'";
$check_order_result = mysqli_query($connect, $check_order_sql);

if (mysqli_num_rows($check_order_result) > 0) {
    
    $delete_order_sql = "DELETE FROM order_product WHERE product_id = '$id'";
    if (!mysqli_query($connect, $delete_order_sql)) {
        echo "Lỗi: " . mysqli_error($connect);
        exit();
    }
}

$sql = "DELETE FROM products WHERE id = '$id'";
if (mysqli_query($connect, $sql)) {
   
    header("Location: index.php?success=1");
    exit();
} else {
    echo "Lỗi: " . mysqli_error($connect);
}

mysqli_close($connect);


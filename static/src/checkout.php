<?php
$name_receiver = $_POST['name_receiver'];
$phone_receiver = $_POST['phone_receiver'];
$address_receiver = $_POST['address_receiver'];

require 'admin/connect.php';
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: form_login.php");
    exit();
}

if (!isset($_SESSION['cart'])) {
    echo 0;
} else {
    $cart = $_SESSION['cart'];
    

    $total_price = 0;
    foreach ($cart as $id => $each) {
        $total_price += $each['quantity'] * $each['price'];
    }
    if ($total_price == 0) {
        header('location: index.php');
        echo 0;
    } else {
        $customer_id = $_SESSION['id'];
        $status = 0; // mới đặt

        foreach ($cart as $id => $each) {
            $quantity = $each['quantity'];
            $sql_num = "SELECT number FROM products WHERE id = '$id'";
            $result_num = mysqli_query($connect, $sql_num);
            if (mysqli_num_rows($result_num) > 0) {
                $product = mysqli_fetch_array($result_num);
                $currentQuantity = $product['number'];

                if ($currentQuantity >= $quantity) {
                    $newQuantity = $currentQuantity - $quantity;
                    $updateSql = "UPDATE products SET number = '$newQuantity' WHERE id = '$id'";
                    mysqli_query($connect, $updateSql);

                    if ($newQuantity == 0) {
                        $deleteSql = "UPDATE products SET status = 'hidden' WHERE id = '$id'";
                        mysqli_query($connect, $deleteSql);
                    }
                } else {
                    header('location: index.php?error=quantity');
                    exit(); // Exit if quantity is insufficient
                }
            }
        }

        //thêm đơn hàng
        $sql = "INSERT INTO orders(customer_id, name_receiver, phone_receiver, address_receiver, status, total_price) VALUES ('$customer_id', '$name_receiver', '$phone_receiver', '$address_receiver', '$status', '$total_price')";
        mysqli_query($connect, $sql);

        //Lấy 1 đơn hàng trên cùng 1 thời điểm tránh 1 tài khoản đặt hàng trên 2 máy trên cùng 1 thời điểm
        $sql = "SELECT MAX(id) FROM orders WHERE customer_id='$customer_id'";
        $result = mysqli_query($connect, $sql);
        $order_id = mysqli_fetch_array($result)['MAX(id)'];

        
        foreach ($cart as $product_id => $each) {
            $quantity = $each['quantity'];
            $sql = "INSERT INTO order_product(order_id, product_id, quantity) VALUES ('$order_id', '$product_id', '$quantity')";
            mysqli_query($connect, $sql);
        }

        unset($_SESSION['cart']);
        header("Location: index.php");
        exit();
    }
}
mysqli_close($connect);
?>

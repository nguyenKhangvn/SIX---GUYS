<?php
session_start();

if (isset($_POST['id']) && isset($_POST['price'])) {
    $id = $_POST['id'];
    $price = $_POST['price'];

    $_SESSION['product_id'] = $id;
    $_SESSION['product_price'] = $price;
    $_SESSION['total'] = $price * 1; 

    echo 1;
} else {
    echo 0;
}


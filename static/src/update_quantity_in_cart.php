<?php 	
	
	session_start();
    $id = $_GET['id'];
    include "admin/connect.php";
    $sql = "SELECT number FROM products WHERE id = $id";
    // die($sql);
    $res = mysqli_query($connect, $sql);
     $n = mysqli_fetch_array($res); 
     $vn = $n['number'];
    if(isset($_SESSION['cart'][$id]) && !empty($_SESSION['cart'][$id])){
        $type = $_GET['type'];
        if($type === '0'){
            if($_SESSION['cart'][$id]['quantity'] > 1){
                $_SESSION['cart'][$id]['quantity']--;
            }
            else{
                unset($_SESSION['cart'][$id]);
            }
        }
        else{
            if($_SESSION['cart'][$id]['quantity'] < $vn) {
                $_SESSION['cart'][$id]['quantity']++;
            } else {
                echo "<script>alert('Đã vượt quá số lượng hiện có'); window.location.href='cart.php';</script>";
                return;
            }
            
        }
    }
    mysqli_close($connect);
    header('location:cart.php');
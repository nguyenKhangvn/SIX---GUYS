<?php
// Các biến cần thiết để cập nhật
$id = $_POST['id'];
$name = $_POST['username'];
$phone = $_POST['number'];

// Kết nối đến cơ sở dữ liệu
require 'admin/connect.php';

// Câu lệnh SQL để cập nhật thông tin khách hàng
$sql = "UPDATE customers SET 
    name = '$name', 
    phone = '$phone' 
    WHERE id = '$id'";

// die($sql);
// Thực thi câu lệnh SQL
if (mysqli_query($connect, $sql)) {
    header("location:user.php");
} else {
    echo "Lỗi: " . mysqli_error($connect);
}

// Đóng kết nối
mysqli_close($connect);
?>

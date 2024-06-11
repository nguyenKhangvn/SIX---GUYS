<?php
	require '../check_admin_login.php';

// Thu thập dữ liệu từ form
$name = $_POST['name'];
// khi truyền file mình chuyển file ảnh từ máy thực lên máy ảo nên mình phải lưu lại trên sever để khi mình có thể xem lại vì mình chỉ có thể lưu lại trên server
$photo = $_FILES['photo'];
$price = $_POST['price'];
$description = $_POST['description'];
$manufacture_id = $_POST['manufacture_id'];
$unit = $_POST['unit'];
$catelogys_id =  $_POST['catelogy_id'];
$date_end = $_POST['date_end'];
$discount = $_POST['discount'];
$number = $_POST['number'];

// Thực hiện lưu trữ ảnh vào thư mục và lấy đường dẫn
$folder = 'photo/';
$file_extension = explode('.', $photo['name'])[1]; // lấy đuoi file ảnh
$file_name = time() . '.' . $file_extension;
$path_file = $folder . $file_name;
move_uploaded_file($photo["tmp_name"], $path_file);

// Kết nối đến cơ sở dữ liệu
require '../connect.php';
$sql = "insert into products(name,photo,price,description,
manufacture_id, unit, date_end, discount, number) values('$name','$file_name','$price',
'$description','$manufacture_id', '$unit'  , '$date_end' , '$discount', '$number')"; 
mysqli_query($connect, $sql);

$product_id = mysqli_insert_id($connect); // get id product after inserted
foreach ($catelogys_id as $catelogy_id) {
$sql = "insert into product_catelogy(catelogy_id, product_id) values('$catelogy_id','$product_id')";
$result = mysqli_query($connect, $sql);
}

header('location: index.php');

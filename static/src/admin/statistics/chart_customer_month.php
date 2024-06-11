<?php
        require '../connect.php';
        $month_year = $_GET['month'];
        $date = DateTime::createFromFormat("Y-m", $month_year);
        $month = $date->format("m");
        $year = $date->format("Y");

        $sql = "SELECT
        email,
        name,
        phone,
        SUM(total_price)as total_paid
        FROM customers LEFT JOIN orders on orders.customer_id = customers.id
        WHERE orders.status = 1
        and EXTRACT(MONTH FROM created_at) = $month
        and EXTRACT(YEAR FROM created_at) = $year 
        GROUP BY customers.id
        ORDER BY total_paid DESC";
        // die($sql);
        $result = mysqli_query($connect, $sql);

        $arr = [];
        $i = 0;
        foreach ($result as $each) {
            $arr[$i]['name'] = $each['name'];
            $arr[$i]['email'] = $each['email'];
            $arr[$i]['phone'] = $each['phone'];
            $arr[$i]['total_paid'] = $each['total_paid'];
            $i++;
        }
        echo json_encode($arr);
    
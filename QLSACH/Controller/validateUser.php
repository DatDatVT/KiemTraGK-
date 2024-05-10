<?php

    //lấy thông tin người dùng nhập vào
    $user = $_POST["userNameLogin"];
    $pass = $_POST["passWordLogin"];

    //so sánh xem có trùng với db không
    $conn = new mysqli('localhost', 'root', '', 'quanlysach');

    $sql = "SELECT * FROM user WHERE TenUser = '$user'";
    $result = $conn->query($sql)->fetch_assoc();

    if($result['MatKhau']==$pass)
    {
        session_start();
        $_SESSION['user'] = $user;

        header('Location: http://localhost/HocWebPHP/QLSACH/View/Sach.php');
    }else
    {
        echo 'Đăng nhập không thành công!';
    }
    
    $conn->close();

?>

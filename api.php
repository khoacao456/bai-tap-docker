<?php
// Cho phép kết nối và trả về JSON
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Lấy thông tin đăng nhập từ biến môi trường (sẽ cài trong Docker)
$servername = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASS');
$dbname = getenv('DB_NAME');

// Kết nối MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["message" => "Kết nối thất bại: " . $conn->connect_error]);
} else {
    echo json_encode(["message" => "Thành công! Đã kết nối tới MySQL trong Docker."]);
}
?>
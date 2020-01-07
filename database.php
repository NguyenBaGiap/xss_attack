<?php
// Khởi tạo kết nối database
$servername = '127.0.0.1';
$username 	= 'root';
$password 	= 'nguyenbagiap';
$database 	= 'php_attack';

// Create connection:
$db = new mysqli($servername,$username,$password,$database);
$db->set_charset('utf8mb4');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

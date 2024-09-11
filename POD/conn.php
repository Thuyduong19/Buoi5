<?php
// Kết nối với cơ sở dữ liệu bằng PDO
try {
    $conn = new PDO('mysql:host=localhost;dbname=melody', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Unable to connect to MySQL: " . $e->getMessage());
}
?>
<?php
include 'conn.php';
try{
$id = 7; 
$pdo = "DELETE FROM `my_contacts` WHERE `id` = $id"; 
$stmt = $conn->prepare($pdo);
$stmt->execute();
if ($stmt->rowCount() > 0) {
    echo 'Xóa dữ liệu thành công';
} else {
    echo 'ID không tồn tại';
}
}catch (PDOException $e) {
    die("Unable to connect to MySQL: " . $e->getMessage());
}
?>
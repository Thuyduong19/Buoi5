<?php
include 'conn.php';
try{
$pdo = "UPDATE `my_contacts` SET `contact_no` = '785',`email` = 'duong@ocean.oc' WHERE `id` = 4"; 
$stmt = $conn->prepare($pdo);
$stmt->execute();
if ($stmt->rowCount() > 0) {
    echo 'cập dữ liệu thành công';
} else {
    echo 'ID không tồn tại';
}
}catch (PDOException $e) {
    die("Unable to connect to MySQL: " . $e->getMessage());
}
?>
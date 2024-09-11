<?php
include 'conn.php';
try{
    $pdo = "INSERT INTO `my_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`) 
    VALUES('Duong','female','541',' poseidon@sea.oc ','Hanoi','Vietnam')";
$stmt = $conn->prepare($pdo);
$stmt->execute();
echo 'Thêm dữ liệu thành công';
}catch (PDOException $e) {
    die("Unable to connect to MySQL: " . $e->getMessage());
}
?>
<?php
$dbh = mysqli_connect('localhost', 'root', '', 'melody');
// Kết nối với MySQL Server

if (!$dbh)     
die("Unable to connect to MySQL: " . mysqli_error($dbh)); 
// Thông báo lỗi nếu kết nối thất bại 

if (!mysqli_select_db($dbh, 'melody'))     
die("Unable to select database: " . mysqli_error($dbh)); 
// Thông báo lỗi nếu chọn CSDL thất bại

$sql_stmt = "INSERT INTO `my_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`)"; 
$sql_stmt .= "VALUES('Poseidon','Mail','541',' poseidon@sea.oc ','Troy','Ithaca')"; 

$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Adding record failed: " . mysqli_error($dbh)); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Poseidon has been successfully added to your contacts list";
}

mysqli_close($dbh); // Đóng kết nối CSDL 
?>
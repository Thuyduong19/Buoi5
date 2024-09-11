<?php
 $dbh = mysqli_connect('localhost', 'root', '','melody'); 
 // Kết nối tới MySQL Server
 
 if (!$dbh)    
 die("Unable to connect to MySQL: " . mysqli_error($dbh)); 
 // Thông báo lỗi nếu kết nối thất bại 
 
 if (!mysqli_select_db($dbh,'melody'))     
 die("Unable to select database: " . mysqli_error($dbh)); 
 // Thông báo lỗi nếu chọn CSDL thất bại
 
 $sql_stmt = "UPDATE `my_contacts` SET `contact_no` = '785',`email` = 'poseidon@ocean.oc'";
 $sql_stmt .= "WHERE `id` = 5";
 
 $result = mysqli_query($dbh,$sql_stmt);
 // Thực thi câu lệnh SQL

 if (!$result) {
     die("Deleting record failed: " . mysqli_error($dbh));
     // Thông báo lỗi nếu thực thi thất bại
 } else {
     echo "ID number 5 has been successfully updated";
 }
 
 mysqli_close($dbh); //close the database connection
?>
<?php
include 'conn.php';
$stmt = $conn->prepare("SELECT * FROM my_contacts");
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (count($rows) > 0) {
    foreach ($rows as $row) {
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'Full Names: ' . $row['full_names'] . '<br>';
        echo 'Gender: ' . $row['gender'] . '<br>';
        echo 'Contact No: ' . $row['contact_no'] . '<br>';
        echo 'Email: ' . $row['email'] . '<br>';
        echo 'City: ' . $row['city'] . '<br>';
        echo 'Country: ' . $row['country'] . '<br><br>';
    }
} else {
    echo "No contacts found.";
}
?>
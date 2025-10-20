<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item_name = $_POST['item_name'] ?? '';
    $description = $_POST['description'] ?? '';
    $location = $_POST['location'] ?? '';
    $date_found = $_POST['date_found'] ?? '';  // avoids the warning
    $contact_info = $_POST['contact_info'] ?? '';

    $sql = "INSERT INTO found_items (item_name, description, location, date_found, contact_info)
            VALUES ('$item_name', '$description', '$location', '$date_found', '$contact_info')";

    if (mysqli_query($conn, $sql)) {
        echo "Found item reported successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item = mysqli_real_escape_string($conn, $_POST['item']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);

    $sql = "INSERT INTO lost_items (item_name, description, location, date_lost, contact_info) 
            VALUES ('$item', '$description', '$location', '$date', '$contact')";

    if (mysqli_query($conn, $sql)) {
        echo "Lost item reported successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
?>

<?php
include 'connect.php';

$sql = "SELECT * FROM found_items ORDER BY date_found DESC";
$result = mysqli_query($conn, $sql);

echo "<h2>All Found Items</h2>";
echo "<table border='1' cellpadding='10'>
<tr>
<th>ID</th>
<th>Item Name</th>
<th>Description</th>
<th>Location</th>
<th>Date Found</th>
<th>Contact Info</th>
</tr>";

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['item_name']."</td>
        <td>".$row['description']."</td>
        <td>".$row['location']."</td>
        <td>".$row['date_found']."</td>
        <td>".$row['contact_info']."</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No found items reported yet.</td></tr>";
}

echo "</table>";

mysqli_close($conn);
?>

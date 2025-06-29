<?php
// View order by user_id
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    $sql = "SELECT * FROM orders WHERE user_id = $user_id";
    $result = $conn->query($sql);

    echo "<h2>Order History for User ID: $user_id</h2><ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>Order ID: " . $row['id'] . " - Status: " . $row['status'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No user_id specified.";
}
?>

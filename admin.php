<?php
// List all books (no output encoding)
$sql = "SELECT * FROM books";
$result = $conn->query($sql);

echo "<h2>Admin - Manage Books</h2><ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>ID: " . $row['id'] . " Title: " . $row['title'] . " - <a href='?delete=" . $row['id'] . "'>Delete</a></li>";
}

// Delete book
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM books WHERE id = $id";
    $conn->query($sql);
    echo "Deleted book ID $id";
}
echo "</ul>";
?>

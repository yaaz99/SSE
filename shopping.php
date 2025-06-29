<?php
// Add to Cart
if (isset($_GET['add'])) {
    $book_id = $_GET['add'];
    // Directly using book_id without validation
    echo "<p>Added book ID $book_id to cart <p>";
}

// Remove from Cart
if (isset($_GET['remove'])) {
    $book_id = $_GET['remove'];
    echo "<p>Removed book ID $book_id from cart </p>";
}
?>
<a href="?add=1">Add Book 1 to Cart</a> | <a href="?remove=1">Remove Book 1 from Cart</a>

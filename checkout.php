<?php
// Place order
if (isset($_POST['checkout'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $credit_card = $_POST['credit_card'];

    $sql = "INSERT INTO orders (name, address, credit_card) VALUES ('$name', '$address', '$credit_card')";
    $conn->query($sql);

    echo "Order placed successfully!";
}
?>

<form method="POST">
    Name: <input name="name"><br>
    Address: <input name="address"><br>
    Credit Card: <input name="credit_card"><br>
    <button name="checkout">Place Order</button>
</form>

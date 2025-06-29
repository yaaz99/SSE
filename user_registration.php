<?php
// Connect to DB
$conn = new mysqli('localhost', 'root', '', 'bookstore');

// Register User
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $conn->query($sql);
    echo "User registered!";
}

// Login User
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // No session management
        echo "Login successful! Welcome, $username";
    } else {
        echo "Invalid credentials";
    }
}
?>

<form method="POST">
    <h2>Register</h2>
    Username: <input name="username"><br>
    Password: <input name="password" type="password"><br>
    <button name="register">Register</button>
</form>

<form method="POST">
    <h2>Login</h2>
    Username: <input name="username"><br>
    Password: <input name="password" type="password"><br>
    <button name="login">Login</button>
</form>

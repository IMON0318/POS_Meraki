<?php

session_start();

require_once('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT Id, username FROM User WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    if ($row) {
        // Login successful
        $_SESSION['user_id'] = $row['Id'];
        $_SESSION['username'] = $row['username'];
        header("Location: dashboard.php?welcome=Welcome Back admin");
    } else {
        // Login failed
        header("Location: index.php?error=Invalid username or password");
        exit();
    }
}

$conn->close();

?>

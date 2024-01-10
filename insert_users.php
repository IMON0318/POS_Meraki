<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require_once('conn.php');

$name = mysqli_real_escape_string($conn, $_POST['name']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$contact_person = mysqli_real_escape_string($conn, $_POST['contact_person']);
$contact_no = mysqli_real_escape_string($conn, $_POST['contact_no']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$tin_no = mysqli_real_escape_string($conn, $_POST['tin_no']);
$role = mysqli_real_escape_string($conn, $_POST['role']);

// Using prepared statement to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO client_supplier_tbl (name, address, contact_person, contact_no, email, tin_no, role) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssisii", $name, $address, $contact_person, $contact_no, $email, $tin_no, $role);

if ($stmt->execute()) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

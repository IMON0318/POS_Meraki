<?php 
session_start();

if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require_once('conn.php');

if(isset($_POST['add_terms'])) {
    $terms_name = mysqli_real_escape_string($conn, $_POST['terms_name']);

    $stmt = $conn->prepare("INSERT INTO terms_data (terms_name) VALUES (?)");
    $stmt->bind_param("s", $terms_name);

    if($stmt->execute()) {
        header("Location: purchase.php?success=Terms successfully Added");
        exit(); // Ensure script execution stops after redirect
    }
    else {
        header("Location: purchase.php?error=Terms Failed Added!");
        exit(); // Ensure script execution stops after redirect
    }

    $stmt->close();
}

if(isset($_POST['add_uom'])) {
    $uom_name = mysqli_real_escape_string($conn, $_POST['uom_name']);

    $stmt = $conn->prepare("INSERT INTO uom_data (uom_name) VALUES (?)");
    $stmt->bind_param("s", $uom_name);

    if($stmt->execute()) {
        header("Location: purchase.php?success=UOM successfully Added");
        exit(); // Ensure script execution stops after redirect
    }
    else {
        header("Location: purchase.php?error=UOM Failed Added!");
        exit(); // Ensure script execution stops after redirect
    }

    $stmt->close();
}

$conn->close();
?>

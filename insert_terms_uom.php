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


if(isset($_POST['new_transac'])) {
    
    $date = mysqli_real_escape_string($conn, $_POST['date_include']);
    $invoice = mysqli_real_escape_string($conn, $_POST['invoice']);
    $suppliers = mysqli_real_escape_string($conn, $_POST['suppliers']);
    $qty = mysqli_real_escape_string($conn, $_POST['qty']);
    $uom = mysqli_real_escape_string($conn, $_POST['uom_select']);
    $desc = mysqli_real_escape_string($conn, $_POST['desc']);
    $po = mysqli_real_escape_string($conn, $_POST['p_o']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $total = mysqli_real_escape_string($conn, $_POST['total_amount']);
    $terms = mysqli_real_escape_string($conn, $_POST['terms_select']);
    $date_paid = mysqli_real_escape_string($conn, $_POST['date_paid']);
    $CR = mysqli_real_escape_string($conn, $_POST['CR']);
    $mop = mysqli_real_escape_string($conn, $_POST['mop']);
    $ref_no = mysqli_real_escape_string($conn, $_POST['ref_no']);
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);
    
    // Using prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO purchase (date, invoice, Id_client_sup, quantity, uom_id, description, po_num, price, total_amount, terms_id, date_paid, CR, mop, reference_no, remarks) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
    $stmt->bind_param("siiiisiddisssis", $date, $invoice, $suppliers, $qty, $uom, $desc, $po, $price, $total, $terms, $date_paid, $CR, $mop, $ref_no, $remarks);
    
    if ($stmt->execute()) {
        header("Location:  purchase.php?success=Data Inserted Successfully");
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}

?>

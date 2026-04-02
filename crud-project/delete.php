<?php
include 'config.php';

// Kunin ang ID
$id = (int)$_GET['id'];

// Delete query
$sql = "DELETE FROM borrow_records WHERE id=$id";

if ($conn->query($sql)) {
    // Redirect pabalik sa index
    header("Location: index.php");
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}
?>

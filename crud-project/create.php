<?php
include 'config.php';

// Check kung na-submit ang form
if(isset($_POST['submit'])) {

    // Kunin ang input
    $borrower_name  = $_POST['borrower_name'];
    $borrower_id    = $_POST['borrower_id'];
    $equipment_name = $_POST['equipment_name'];
    $quantity       = $_POST['quantity'];
    $borrow_date    = $_POST['borrow_date'];
    $return_date    = $_POST['return_date'];
    $notes          = $_POST['notes'];

    // Basic validation
    if($borrower_name && $borrower_id && $equipment_name && $quantity && $borrow_date && $return_date) {

        // Insert query
        $sql = "INSERT INTO borrow_records 
                (borrower_name, borrower_id, equipment_name, quantity, borrow_date, return_date, notes) 
                VALUES ('$borrower_name', '$borrower_id', '$equipment_name', '$quantity', '$borrow_date', '$return_date', '$notes')";

        if($conn->query($sql)) {
            // Redirect pabalik sa index
            header("Location: index.php");
        } else {
            echo "Error: " . $conn->error;
        }

    } else {
        echo "<p style='color:red;'>Please fill in all required fields.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Record — Equipment Borrowing System</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">

    <h2>Add Borrow Record</h2>

    <div class="form-box">
        <form method="POST">

            Borrower Name: <input type="text" name="borrower_name" required><br><br>
            Student / Employee ID: <input type="text" name="borrower_id" required><br><br>
            Equipment Name: <input type="text" name="equipment_name" required><br><br>
            Quantity: <input type="number" name="quantity" required min="1"><br><br>
            Borrow Date: <input type="date" name="borrow_date" required><br><br>
            Return Date: <input type="date" name="return_date" required><br><br>
            Notes: <textarea name="notes"></textarea><br><br>

            <button type="submit" name="submit" class="btn btn-success">Save Record</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>

        </form>
    </div>

</div>

<footer>
    Equipment Borrowing System &copy; <?= date('Y') ?> | ITEL 203 – Web Systems and Technologies
</footer>

</body>
</html>
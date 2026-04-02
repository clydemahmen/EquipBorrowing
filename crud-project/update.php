<?php
include 'config.php';

// Kunin ang ID mula URL
$id = $_GET['id'];

// Kunin ang existing data
$result = $conn->query("SELECT * FROM borrow_records WHERE id=$id");
$row = $result->fetch_assoc();

// Kapag submit
if(isset($_POST['update'])) {

    $borrower_name  = $_POST['borrower_name'];
    $borrower_id    = $_POST['borrower_id'];
    $equipment_name = $_POST['equipment_name'];
    $quantity       = $_POST['quantity'];
    $borrow_date    = $_POST['borrow_date'];
    $return_date    = $_POST['return_date'];
    $status         = $_POST['status'];
    $notes          = $_POST['notes'];

    // Update query
    $sql = "UPDATE borrow_records 
            SET borrower_name='$borrower_name', borrower_id='$borrower_id', 
                equipment_name='$equipment_name', quantity='$quantity', 
                borrow_date='$borrow_date', return_date='$return_date', 
                status='$status', notes='$notes'
            WHERE id=$id";

    if($conn->query($sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record — Equipment Borrowing System</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">

    <h2>Edit Borrow Record</h2>

    <div class="form-box">
        <form method="POST">

            Borrower Name: <input type="text" name="borrower_name" value="<?= $row['borrower_name'] ?>"><br><br>
            Student / Employee ID: <input type="text" name="borrower_id" value="<?= $row['borrower_id'] ?>"><br><br>
            Equipment Name: <input type="text" name="equipment_name" value="<?= $row['equipment_name'] ?>"><br><br>
            Quantity: <input type="number" name="quantity" value="<?= $row['quantity'] ?>"><br><br>
            Borrow Date: <input type="date" name="borrow_date" value="<?= $row['borrow_date'] ?>"><br><br>
            Return Date: <input type="date" name="return_date" value="<?= $row['return_date'] ?>"><br><br>
            Status:
            <select name="status">
                <option value="Borrowed" <?= $row['status'] === 'Borrowed' ? 'selected' : '' ?>>Borrowed</option>
                <option value="Returned" <?= $row['status'] === 'Returned' ? 'selected' : '' ?>>Returned</option>
                <option value="Overdue"  <?= $row['status'] === 'Overdue'  ? 'selected' : '' ?>>Overdue</option>
            </select><br><br>
            Notes: <textarea name="notes"><?= $row['notes'] ?></textarea><br><br>

            <button type="submit" name="update" class="btn btn-warning">Update Record</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>

        </form>
    </div>

</div>

<footer>
    Equipment Borrowing System &copy; <?= date('Y') ?> | ITEL 203 – Web Systems and Technologies
</footer>

</body>
</html>
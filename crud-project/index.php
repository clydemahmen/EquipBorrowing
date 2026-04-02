<?php
include 'config.php';

// Auto-mark overdue
$conn->query("UPDATE borrow_records SET status='Overdue'
              WHERE status='Borrowed' AND return_date < CURDATE()");

// Stats
$totalRecords  = $conn->query("SELECT COUNT(*) AS c FROM borrow_records")->fetch_assoc()['c'];
$totalBorrowed = $conn->query("SELECT COUNT(*) AS c FROM borrow_records WHERE status='Borrowed'")->fetch_assoc()['c'];
$totalReturned = $conn->query("SELECT COUNT(*) AS c FROM borrow_records WHERE status='Returned'")->fetch_assoc()['c'];
$totalOverdue  = $conn->query("SELECT COUNT(*) AS c FROM borrow_records WHERE status='Overdue'")->fetch_assoc()['c'];

// Search and Filter
$search = isset($_GET['q']) ? $_GET['q'] : '';
$filterStatus = isset($_GET['status']) ? $_GET['status'] : '';

$where = "WHERE 1=1";

if($search) {
    $where .= " AND (borrower_name LIKE '%$search%' OR borrower_id LIKE '%$search%' OR equipment_name LIKE '%$search%')";
}

if($filterStatus) {
    $where .= " AND status = '$filterStatus'";
}

// Kunin lahat ng records
$result = $conn->query("SELECT * FROM borrow_records $where ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Equipment Borrowing System</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">

    <h2>Equipment Borrowing System</h2>

    <!-- Stats -->
    <div class="stats-row">
        <div class="stat-box">
            <div class="stat-number"><?= $totalRecords ?></div>
            <div class="stat-label">Total Records</div>
        </div>
        <div class="stat-box">
            <div class="stat-number"><?= $totalBorrowed ?></div>
            <div class="stat-label">Borrowed</div>
        </div>
        <div class="stat-box">
            <div class="stat-number"><?= $totalReturned ?></div>
            <div class="stat-label">Returned</div>
        </div>
        <div class="stat-box">
            <div class="stat-number"><?= $totalOverdue ?></div>
            <div class="stat-label">Overdue</div>
        </div>
    </div>

    <!-- Search and Filter -->
    <form method="GET">
        <div class="search-bar">
            <input type="text" name="q" placeholder="Search borrower, ID, equipment..."
                value="<?= $search ?>">
            <select name="status">
                <option value="">All Status</option>
                <option value="Borrowed" <?= $filterStatus === 'Borrowed' ? 'selected' : '' ?>>Borrowed</option>
                <option value="Returned" <?= $filterStatus === 'Returned' ? 'selected' : '' ?>>Returned</option>
                <option value="Overdue"  <?= $filterStatus === 'Overdue'  ? 'selected' : '' ?>>Overdue</option>
            </select>
            <button type="submit" class="btn btn-primary">Search</button>
            <?php if($search || $filterStatus): ?>
            <a href="index.php" class="btn btn-secondary">Clear</a>
            <?php endif; ?>
            <a href="create.php" class="btn btn-success" style="margin-left:auto;">+ Add Record</a>
        </div>
    </form>

    <!-- Table -->
    <?php if($result->num_rows > 0): ?>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Borrower Name</th>
            <th>ID No.</th>
            <th>Equipment</th>
            <th>Qty</th>
            <th>Borrow Date</th>
            <th>Return Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>

        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['borrower_name'] ?></td>
            <td><?= $row['borrower_id'] ?></td>
            <td><?= $row['equipment_name'] ?></td>
            <td><?= $row['quantity'] ?></td>
            <td><?= $row['borrow_date'] ?></td>
            <td><?= $row['return_date'] ?></td>
            <td>
                <?php
                $status = $row['status'];
                $cls = strtolower($status);
                echo "<span class='badge badge-$cls'>$status</span>";
                ?>
            </td>
            <td>
                <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>"
                    class="btn btn-danger"
                    onclick="return confirm('Sigurado ka ba?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>

    </table>
    <?php else: ?>
    <p style="text-align:center;padding:30px;color:#888;">No records found. <a href="create.php">Add one now!</a></p>
    <?php endif; ?>

</div>

<footer>
    Equipment Borrowing System &copy; <?= date('Y') ?> | ITEL 203 – Web Systems and Technologies
</footer>

</body>
</html>
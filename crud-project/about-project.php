<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Project -- Equipment Borrowing System</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">

    <h2>About the Project</h2>

    <div class="info-card">
        <h3>Project Title</h3>
        <p><strong>EquipBorrow - Equipment Borrowing System</strong></p>
    </div>

    <div class="info-card">
        <h3>Purpose of the System</h3>
        <p>
            EquipBorrow is a web-based system that allows users to efficiently manage the borrowing and returning of equipment,
            track the status of each transaction, and maintain organized records of all borrowers.
        </p>
    </div>

    <div class="info-card">
        <h3>System Features</h3>
        <ul style="padding-left:20px;line-height:2;">
            <li>Add new borrow records (Create)</li>
            <li>View all borrow records in a table (Read)</li>
            <li>Edit existing borrow records (Update)</li>
            <li>Delete borrow records (Delete)</li>
            <li>Search records by borrower name, ID, or equipment</li>
            <li>Filter records by status (Borrowed, Returned, Overdue)</li>
            <li>Auto-detect overdue records</li>
            <li>Dashboard stats (total, borrowed, returned, overdue)</li>
            <li>Basic input validation</li>
        </ul>
    </div>

    <div class="info-card">
        <h3>Technologies Used</h3>
        <ul style="padding-left:20px;line-height:2;">
            <li><strong>PHP</strong> - Server-side scripting</li>
            <li><strong>MySQL</strong> - Database management</li>
            <li><strong>HTML5</strong> - Page structure</li>
            <li><strong>CSS3</strong> - Styling and design</li>
            <li><strong>XAMPP</strong> - Local development server</li>
            <li><strong>phpMyAdmin</strong> - Database administration</li>
            <li><strong>Visual Studio Code</strong> - Code editor</li>
            <li><strong>GitHub</strong> - Version control</li>
            <li><strong>InfinityFree</strong> - Web hosting / Deployment</li>
        </ul>
    </div>

    <div class="info-card">
        <h3>File Structure</h3>
        <pre style="background:#f4f4f4;padding:15px;border-radius:4px;font-size:13px;line-height:1.8;">
crud-project/
config.php - Database connection
navbar.php - Shared navigation
index.php  - Main page (View all records + Search)
create.php - Add new borrow record
update.php - Edit existing record
delete.php - Delete record
about-project.php - This page
developers.php - Team information
database.sql - SQL schema + sample data
 assets/
     - styles.css - CSS stylesheet
        </pre>
    </div>

</div>

<footer>
    Equipment Borrowing System &copy; <?= date('Y') ?> | ITEL 203 - Web Systems and Technologies
</footer>

</body>
</html>
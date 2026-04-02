<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developers — Equipment Borrowing System</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container">

    <h2>Meet the Developers</h2>

    <div class="dev-card">
        <h4>Sam Ceremonia</h4>
        <div class="role">Full-Stack Developer</div>
        <p>Designed the database schema, developed the main index page with search and filter functionality, and set up the XAMPP local development environment.</p>
    </div>

    <div class="dev-card">
        <h4>Kenjie Corcega</h4>
        <div class="role">Backend Developer</div>
        <p>Built the create.php and update.php pages, implemented form handling and input validation, and wrote the SQL queries for CRUD operations.</p>
    </div>

    <div class="dev-card">
        <h4>Clyde Errol Del Valle</h4>
        <div class="role">UI/UX and Deployment</div>
        <p>Created the CSS stylesheet, designed the navbar and page layout, set up the GitHub repository, and deployed the system to InfinityFree.</p>
    </div>

    <div class="info-card" style="margin-top:25px;">
        <h3>Project Information</h3>
        <table style="box-shadow:none;">
            <tr>
                <td style="font-weight:bold;width:200px;color:#555;">Subject</td>
                <td>ITEL 203 - Web Systems and Technologies</td>
            </tr>
            <tr>
                <td style="font-weight:bold;color:#555;">Task</td>
                <td>Group Performance Task #2 - PHP and MySQL CRUD</td>
            </tr>
            <tr>
                <td style="font-weight:bold;color:#555;">System</td>
                <td>Equipment Borrowing System</td>
            </tr>
            <tr>
                <td style="font-weight:bold;color:#555;">Section</td>
                <td>Information Technology 2B</td>
            </tr>
            <tr>
                <td style="font-weight:bold;color:#555;">Date</td>
                <td><?= date('F d, Y') ?></td>
            </tr>
            <tr>
                <td style="font-weight:bold;color:#555;">Deployment</td>
                <td>https://equipborrow.infinityfreeapp.com</td>
            </tr>
            <tr>
                <td style="font-weight:bold;color:#555;">GitHub</td>
                <td>-- Add GitHub Repository URL here --</td>
            </tr>
        </table>
    </div>

</div>

<footer>
    Equipment Borrowing System &copy; <?= date('Y') ?> | ITEL 203 - Web Systems and Technologies
</footer>

</body>
</html>
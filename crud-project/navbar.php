<?php if (!isset($activePage)) $activePage = ''; ?>
<div class="navbar">
    <a href="index.php" class="brand">🏷️ EquipBorrow</a>
    <a href="index.php" class="<?= $activePage === 'index' ? 'active' : '' ?>">Home</a>
    <a href="create.php" class="<?= $activePage === 'create' ? 'active' : '' ?>">Add Record</a>
    <a href="about-project.php" class="<?= $activePage === 'about' ? 'active' : '' ?>">About</a>
    <a href="developers.php" class="<?= $activePage === 'developers' ? 'active' : '' ?>">Developers</a>
</div>

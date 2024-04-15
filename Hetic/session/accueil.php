<?php include './header.php'; ?>
<?php if (!empty($_SESSION['username'])) : ?>
    <h1>Hello <?= $_SESSION['username']?></h1>
<?php else : ?>
    <h1>Please log in to access your page</h1>
<?php endif; ?>
<?php include './footer.php'; ?>
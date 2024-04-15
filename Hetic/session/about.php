<?php include './header.php'; ?>
<h2>HETIC</h2>
<p>I'm learning...</p>
<?php if (!empty($_SESSION['username'])) : ?>
<h2>Your secret is: <?= $_SESSION['secret']?></h2>
<?php else : ?>
    <h1>Please log in to access your information</h1>
<?php endif; ?>
<?php include './footer.php'; ?>

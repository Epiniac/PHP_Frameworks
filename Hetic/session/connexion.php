<?php include './header.php'; ?>
<style>
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10% 5%;
    }
</style>
<form action="traitement.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Log in">
</form>

<?php include './footer.php'; ?>

<?php include './header.php'; ?>
<style>
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10% 5%;
    }
</style>
<form action="registration.php" method="post">
    <input type="text" name="username" placeholder="Your username">
    <input type="text" name="secret" placeholder="Write your secret words">
    <input type="password" name="password" placeholder="Password">
    <input type= "password" name="password2" placeholder="Confirm password">
    <input type="submit" value="Register">
</form>
<?php include './footer.php'; ?>
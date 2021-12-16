<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<?php echo($_SESSION['message']); ?>
<form action="loginbridge.php" method="POST">
    User name:<input type="text" name="user"><br>
    Password:<input type="text" name="pass"><br>
    <input type="submit" value="login">
</form>
<p>Don't have an account? <a href="create_account.php">Create one Here</a></p>

</html>
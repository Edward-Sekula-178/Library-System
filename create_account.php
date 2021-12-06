<!DOCTYPE html>
<html>
<Head>
    <title>Page Title</title>
</Head>
<body>
    
</body>
</html>

<form action="addusers.php" method = 'post'>
    Username:<input type = 'text' name = 'Username'><br>
    Password:<input type = 'text' name = 'Passwd'><br>
    First name:<input type='text' name='forename'><br>
    Last name:<input type="text" name='surname'><br>
    Email:<input type='text' name = 'email'><br>
    </select>
    <br>
    <input type='radio' name='role' value='User' checked>User<br>
    <input type='radio' name='role' value='librarian' checked>librarian<br>
    <input type='radio' name='role' value='Admin' checked>Mega chad Sexy Librarian<br>
    <input type="submit" value="Add User">
</form>
<?php
include_once('functions.php');
Newuser('Username','Passwd','forename','surname','role','email');
?>
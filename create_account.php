<!DOCTYPE html>
<html>
<Head>
    <title>Page Title</title>
</Head>
<body>
    
</body>
</html>

<form action="addusers.php" method = 'post'>
    First name:<input type='text' name='forename'><br>
    Last name:<input type="text" name='surname'><br>
    Password:<input type='text' name='passwd'><br>
    House<input type='text' name='house'><br>
    Year<input type='text' name='year'><br>
    Gender<select name='gender'>
        <option value='M'>Male</option>
        <option vale='F'>Female</option>
    </select>
    <br>
    <input type='radio' name='role' value='pupil' checked>Pupil<br>
    <input type='radio' name='role' value='Staff' checked>Staff<br>
    <input type='radio' name='role' value='Admin' checked>Admin<br>
    <input type="submit" value="Add User">
</form>
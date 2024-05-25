<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up</h2>
    <form method="POST" action="/home">
        @csrf
        <label>First Name</label><br>
        <input type="text" name="fname" required><br>
        <label>Last Name</label><br>
        <input type="text" name="lname" required><br>
        <p>Gender:</p>
            <input type="radio" value="1" name="gender" required>Male <br>
            <input type="radio" value="2" name="gender">Female <br>
            <input type="radio" value="3" name="gender">Other <br>
        <p>Nationality:</p>
        <select name="nationality" required>
            <option value="1">Indonesian</option>
            <option value="2">Singaporean</option>
            <option value="3">Malaysian</option>
            <option value="4">Australian</option>
        </select>
        <p>Language Spoken :</p>
            <input type="checkbox" value="1" name="language"> Bahasa Indonesia <br>
            <input type="checkbox" value="2" name="language"> English <br>
            <input type="checkbox" value="3" name="language"> Other <br>
        <p>Bio :</p>
        <textarea name="bio" cols="30" rows="10" required></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>
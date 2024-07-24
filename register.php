<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h2>User Registration</h2>
    <form action="process_registration.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" required><br><br>
        <label for="medical_conditions">Medical Conditions:</label><br>
        <textarea id="medical_conditions" name="medical_conditions" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>

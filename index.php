<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Registration by Sarah</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

    <h2>Author Registration Form</h2>

    <form action="processes/AuthRegistration.php" method="POST">
        <label for="Author_FullName">Full Name:</label>
        <input type="text" name="Author_FullName" required><br>

        <label for="Author_Email">Email:</label>
        <input type="email" name="Author_Email_Address" required><br>

        <label for="Author_Address">Address:</label>
        <input type="text" name="Author_Address" required><br>

        <label for="Author_Biography">Biography:</label>
        <textarea name="Author_Biography" rows="4" required></textarea><br>

        <label for="Author_Date_Of_Birth">Date of Birth:</label>
        <input type="date" name="Author_Date_Of_Birth" required><br>

        <label for="Author_Suspended">Suspension Status:</label>
        <input type="checkbox" name="Author_Suspended"><br>

        <input type="submit" value="Register Author">
    </form>

</body>
</html>

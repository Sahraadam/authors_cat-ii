<?php

require_once('configs/DbConn.php');

if (isset($_GET['id'])) {
    $authorId = $_GET['id'];

    $stmt = $DbConn->prepare("SELECT * FROM authors_table WHERE Author_ID = ?");
    $stmt->execute([$authorId]);
    $author = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Edit Author by Sarah</title>
</head>
<body>

    <h2>Edit Author Details</h2>

    <?php if (isset($author)): ?>
        <form action="processes/UpAuth.php" method="POST">

        <input type="hidden" name="authorId" value="<?= $author['Author_ID'] ?>">
            
            <label for="AuthorFullName">Full Name:</label>
            <input type="text" name="AuthorFullName" value="<?= $author['Author_FullName'] ?>" required><br>

        <label for="AuthorEmail">Email:</label>
        <input type="email" value="<?= $author['Author_Email_Address'] ?>" name="AuthorEmail" required><br>

        <label for="AuthorAddress">Address:</label>
        <input type="text" name="AuthorAddress" value="<?= $author['Author_Address'] ?>" required><br>

        <label for="AuthorBiography">Biography:</label>
        <textarea name="AuthorBiography" rows="4" required><?= $author['Author_Biography'] ?></textarea><br>

        <label for="AuthorDateOfBirth">Date of Birth:</label>
        <input type="date" name="AuthorDateOfBirth" required><br>

        <label for="AuthorSuspended">Suspension Status:</label>
        <input type="checkbox" name="AuthorSuspended"><br>

            <input type="submit" value="Update Author">
        </form>
    <?php else: ?>
        <p>No author found with the specified ID</p>
    <?php endif; ?>

</body>
</html>

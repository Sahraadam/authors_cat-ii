<?php

require_once('configs/DbConn.php');

$stmt = $DbConn->prepare("SELECT * FROM authors_table ORDER BY Author_FullName ASC");
$stmt->execute();
$authors = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>View Authors by Sarah</title>
</head>
<body>

    <h2>Registered Authors</h2>

    <table>
        <tr>
            <th>Author Id</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Biography</th>
            <th>Date of Birth</th>
            <th>Suspension Status</th>
            <th></th>
            <th></th>
        </tr>

        <?php foreach ($authors as $author): ?>
            <tr>
                <td><?= $author['Author_ID'] ?></td>
                <td><?= $author['Author_FullName'] ?></td>
                <td><?= $author['Author_Email_Address'] ?></td>
                <td><?= $author['Author_Address'] ?></td>
                <td><?= $author['Author_Biography'] ?></td>
                <td><?= $author['Author_Date_Of_Birth'] ?></td>
                <td><?= $author['Author_Suspended'] ? 'Yes' : 'No' ?></td>
            <td><form id="formtwo" action="EditAuthors.php" method="GET">
            <input type="hidden" name="id" value="<?php echo $author['Author_ID']; ?>">
            <button type="submit">Edit</button>
        </form></td>
                <td><form id="formtwo" action="processes/DelAuth.php" method="GET">
            <input type="hidden" name="id" value="<?php echo $author['Author_ID']; ?>">
            <button type="submit">Delete</button>
        </form></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>

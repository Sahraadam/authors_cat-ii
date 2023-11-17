<?php

require_once('../configs/DbConn.php');

if (isset($_GET['id'])) {
    $authorId = $_GET['id'];

    $stmt = $DbConn->prepare("DELETE FROM authors_table WHERE Author_ID = ?");
    $stmt->execute([$authorId]);

         echo "<script>alert('Author deleted successfully!');
                         window.location.href = '../ViewAuthors.php';</script>";
} else {
    echo "";
         echo "<script>alert('Invalid Author ID!');
                         window.location.href = '../ViewAuthors.php';</script>";
}

?>

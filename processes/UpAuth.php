<?php

require_once('../configs/DbConn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $author_FullName = $_POST['Author_FullName'];
    $author_Email = $_POST['Author_Email'];
    $author_Address = $_POST['Author_Address'];
    $authorBiography = $_POST['Author_Biography'];
    $author_Date_Of_Birth = $_POST['Author_Date_Of_Birth'];
    $author_Id = $_POST['author_Id'];
    $author_Suspended = isset($_POST['Author_Suspended']) ? 1 : 0;

    $stmt = $DbConn->prepare("UPDATE authors_table SET Author_FullName = ?, Author_Email_Address = ?, Author_Address = ?, Author_Biography = ?, Author_Date_Of_Birth = ?, Author_Suspended = ? WHERE Author_ID = ?");

    $stmt->execute([$author_FullName, $author_Email, $author_Address, $author_Biography, $author_Date_Of_Birth, $author_Suspended, $author_Id]);

     echo "<script>alert('Author updated successfully!');
                         window.location.href = '../ViewAuthors.php';</script>";
}

?>
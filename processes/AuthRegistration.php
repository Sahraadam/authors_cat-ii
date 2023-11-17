<?php

require_once('../configs/DbConn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $author_FullName = $_POST['Author_FullName'];
    $author_Email = $_POST['Author_Email_Address'];
    $author_Address = $_POST['Author_Address'];
    $author_Biography = $_POST['Author_Biography'];
    $author_Date_Of_Birth = $_POST['Author_Date_Of_Birth'];
    $author_Suspended = isset($_POST['Author_Suspended']) ? 1 : 0;

    $stmt = $DbConn->prepare("INSERT INTO authors_table (Author_FullName, Author_Email_Address, Author_Address, Author_Biography, Author_Date_Of_Birth, Author_Suspended) VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->execute([$author_FullName, $author_Email, $author_Address, $author_Biography, $author_Date_Of_Birth, $author_Suspended]);

     echo "<script>alert('Author registered successfully!');
                         window.location.href = '../ViewAuthors.php';</script>";
}

?>

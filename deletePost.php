<?php
require_once __DIR__ . '/db.php';
if (isset($_GET['id'])) {
    $sql = "DELETE FROM posts WHERE id=?";
    $statement = $conn->prepare($sql);
    $statement->bind_param("i", $_GET['id']);
    $statement->execute() or die("<b>Error:</b> Can't delete the post<br/>" . mysqli_connect_error());
    $result = $statement->get_result();

    header("Location: /mysql-blob-php/");
    die();
}
?>
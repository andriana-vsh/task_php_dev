<?php
require_once __DIR__ . '/db.php';
if (isset($_GET['id'])) {
    $sql = "SELECT imageType,imageData FROM posts WHERE id=?";
    $statement = $conn->prepare($sql);
    $statement->bind_param("i", $_GET['id']);
    $statement->execute() or die("<b>Error:</b> Problem on Retrieving Post <br/>" . mysqli_connect_error());
    $result = $statement->get_result();

    $row = $result->fetch_assoc();
    header("Content-type: " . $row["imageType"]);
    echo $row["imageData"];
}
?>


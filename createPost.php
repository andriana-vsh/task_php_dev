<?php
require_once __DIR__ . '/db.php';
    $imgData = !empty($_FILES['userImage']['tmp_name'])?file_get_contents($_FILES['userImage']['tmp_name']):"";
    $imgType = !empty($_FILES['userImage'])?$_FILES['userImage']['type']:"";
    $title = !empty($_POST['title'])?$_POST['title']:"";
    $post =!empty($_POST['post'])?$_POST['post']:"";
    $now = date_create()->format('Y-m-d H:i:s');
    $createdBy = isset($_COOKIE['usersession'])?$_COOKIE['usersession']:"";
    $sql = "INSERT INTO posts(imageType, imageData, title, post, creationDate, createdBy) VALUES(?, ?, ?, ?, ?, ?)";
    $statement = $conn->prepare($sql);
    $statement->bind_param('ssssss', $imgType, $imgData, $title, $post, $now, $createdBy);
    $current_id = $statement->execute() or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_connect_error());
    header("Location: /mysql-blob-php/");
    die();
?>
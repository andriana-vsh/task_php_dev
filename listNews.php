<?php
$sql = "SELECT id, title, post, createdBy, creationDate FROM posts  ORDER BY creationDate DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
?>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
    
    <div class="post-item">
        <img src="imageView.php?id=<?php echo $row["id"];?>">
        <h1><?php echo $row["title"];?> </h1>
        <p> <?php echo $row["post"];?> </p>
        <?php if(isset($_COOKIE['usersession'])): ?> 
            <?php if($_COOKIE['usersession']==$row["createdBy"]): ?> 
                <span><?php echo $row['creationDate']?></span> 
                <input name="Submit2" type="button" class="button" onclick="javascript:location.href='deletePost.php?id=<?php echo $row["id"] ;?>';" value="Delete" />
            <?php else: ?>
                <span><?php echo $row['creationDate']?></span>
            <?php endif; ?>
        <?php else: ?>
            <span><?php echo $row['creationDate']?></span>
        <?php endif; ?>
        <br/>
        <br/>
    </div>
<?php
    }
}
?>

<?php
require_once __DIR__ . '/db.php';
//check if session exists else create
$now = date_create()->format('Y-m-d H:i:s');
if (isset($_COOKIE['usersession'])) {
    $usersession=$_COOKIE['usersession'];
}else{
    $usersession=md5($now . rand(0, 1000000000));
    setcookie("usersession", $usersession, time()+18000000);
}

?>
<HTML>
<HEAD>
<TITLE>Upload Image to MySQL BLOB</TITLE>
<link href="css/form.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style>

</style>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</HEAD>
<BODY>
    <form name="frmImage" enctype="multipart/form-data" action="createPost.php"
        method="post">
        <div class="phppot-container tile-container">
            <label>Upload Image File:</label>
            <div class="row">
                <input name="userImage" type="file" class="full-width" />
            </div>
            <label>Enter title:</label>
            <div class="row">
                <input name="title" type="text" class="full-width" />
            </div>
            <label>Enter post:</label>
            <div class="row">
                <textarea name="post" class="full-width textarea"></textarea>
            </div>
            <div class="row">
                <input type="submit" value="Submit" />
            </div>
        </div>
    </form>
    <div class="image-gallery">
        <?php require_once __DIR__ . '/listNews.php'; ?>
    </div>
</BODY>
</HTML>
<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="uploadfile" id="uploadfile">
        <br>
        <br>
        <input type="submit" name="submit" value="Upload File">
    </form>
</body>
</html>

<?php
$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder = "uploads/".$filename;
echo $folder;
move_uploaded_file($tempname,$folder);
?>
<?php
include('./database/connection.php');
global $conn;

if (isset($_POST["submit"])) {
    $file_name = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $folder = 'Images/' . $file_name;

    $sql = "INSERT INTO images (fileName) VALUES ('$file_name')";
    $query = $conn->exec($sql);

    if (move_uploaded_file($tmp_name, $folder)) {
        echo "image upload successfully";
    } else {
        echo "error";
    }
}
?>


<div style="width: 50px; height: 50px;">
    <?php
    $sql = "SELECT * FROM images";
    // $query = $conn->exec($sql);
    foreach ($conn->query($sql) as $row) {
    ?>



        <img src="Images/<?php echo $row["fileName"] ?>" alt="">

    <?php
    } ?>
</div>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images Upload</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <form action="./index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>
<?php
require "required.php";

if (isset($_POST['categories'])) {
    $query = "select * from chall2_cartoon a,chall2_categories b where a.id_categories=b.id and b.categories = '" . $_POST['categories'] . "'";
    $db = $conn->prepare($query);
    $db->execute();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime List</title>
    <link rel="stylesheet" href="assets/sass/style.css" />
</head>

<body>
    <div class="container">
        <div class="title">
            <h1>List Character <?= ucwords($_POST['categories']) ?></h1>
        </div>
        <div class="boxed">
            <?php
            while ($row = $db->fetch()) { ?>
                <div class="character" id="<?= $row['name'] ?>">
                    <img src="<?= $row['link'] ?>" class="pictures">
                    <label for="<?= $row['name'] ?>"><?= $row['name'] ?></label>
                </div>
                <hr>
            <?php }
            ?>
        </div>
        <div class="banner">
            <span>Def-Chall &copy; 2019</span>
        </div>
    </div>
</body>

</html>
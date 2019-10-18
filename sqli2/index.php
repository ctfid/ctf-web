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
            <h1>Anime Categories</h1>
        </div>
        <div class="boxed">
            <form action="list_anime.php" method="post">
                <ul>
                    <li>
                        <input type="radio" name="categories" id='naruto' value="naruto">
                        <div class="checked"></div>
                        <label for="naruto">Naruto</label>
                    </li>
                    <li>
                        <input type="radio" name="categories" id='sao' value="sword art online">
                        <div class="checked"></div>
                        <label for="sao">Sword Art Online</label>
                    </li>
                </ul>
                <button type="submit" class="btn btn-submit">PILIH</button>
            </form>
        </div>
        <div class="banner">
            <span>Def-Chall &copy; 2019</span>
        </div>
    </div>
</body>

</html>
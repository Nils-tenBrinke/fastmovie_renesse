<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastMovie Renesse | Search '<?= $_GET['MovieName']; ?>'</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="navigation w-screen h-auto px-8">
        <div class="flex flex-row justify-between">
            <a href="index.php" id="logo">
                <span class="GrayText">FAST</span>
                <span class="RedText">MOVIE</span>
            </a>
            <div class="nav-links">
                <ul class="flex flex-row space-x-16">
                    <li><a href="#!">over ons</a></li>
                    <li><a href="#!">contact</a></li>
                    <li><a href="#!" class="CTA">TICKETS</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php
    require("./php/MovieController.php");
    $MC = new MovieController("localhost","fastmovie_renesse","root","");
    $MovieName = $_GET['MovieName'];
    $movies = $MC->SearchMovie($MovieName);
    ?>
    <div class="flex flex-wrap justify-between gap-4 pt-28 w-3/4 mx-auto">
        <?= $MC->ShowMovies($movies); ?>
    </div>
    </body>
</html>
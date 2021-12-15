<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

    <title>FastMovie Renesse</title>
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
                    <form method="POST">
                        <input class="w-80" type="text" name="txtSearchMovie">
                        <input type="submit" value="Zoeken" name="btnSearchMovie">
                    </form>


                    <?php
                    include("./php/tmdb_api/tmdb-api.php");
                    $apikey = "d3e3162392009d2e4475cde410afc226";
                    $tmdb = new TMDB($apikey, 'en', true);
                    require("./php/MovieController.php");
                    if(isset($_POST['btnSearchMovie'])){
                        $MovieName = $_POST['txtSearchMovie'];
                        $MC = new MovieController();
                        $MC->SearchMovie($MovieName);
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="h-screen" id="bgimg">test</div>
</body>
</html>
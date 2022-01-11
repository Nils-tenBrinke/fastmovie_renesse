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
            <form method="GET" class="search-bar" autocomplete="off">
                <input class="w-96" type="text" name="txtSearchMovie">
                <input type="submit" value="Zoeken" name="btnSearchMovie" class="cta">
            </form>


            <?php
            require("./php/MovieController.php");
            if(isset($_GET['btnSearchMovie'])){
                $MovieName = $_GET['txtSearchMovie'];
                header("Location:results.php?MovieName=$MovieName");
            }
            ?>
            <div class="nav-links">
                <ul class="flex flex-row space-x-16">
                    <li><a href="#!">over ons</a></li>
                    <li><a href="#!">contact</a></li>
                    <li><a href="#!" class="CTA">TICKETS</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="flex w-3/4 mx-auto pt-56">
        <div class="">
            <span class="GrayText">FAST</span>
            <span class="RedText">MOVIE</span>
        </div>
        
    </div>
</body>
</html>
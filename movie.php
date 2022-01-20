<?php
$id = $_GET['id'];
include "php/_partials/_navigation.php";
$MC = new MovieController("localhost","fastmovie_renesse","root","");
$myMovie = $MC->ShowSingleMovie($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastMovie Renesse | <?= $myMovie->getTitle(); ?></title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <style>
        body{
            background-image: none;
        }
    </style>
</head>
<body>

    
    <div class="flex flex-row w-3/4 mx-auto pt-56">
        <div class="w-2/5">
            <div class="">
                <span class="GrayHead"><?= $myMovie->getTitle(); ?></span>
            </div>
            <div class="movieInfo">
                <p><span><img src="./images/clock.svg" class="inline"></span> <?= $myMovie->get('runtime') ?> min</p>
                <p><span><img src="./images/text.svg"></span> <?= $myMovie->get('original_language'); ?></p>
                <p><span><img src="./images/star.svg"></span> <?= $myMovie->getVoteAverage(); ?> / 10 (<?= $myMovie->get('vote_count'); ?>)</p>
            </div>
            <div class="">
                <p class="HeaderP pt-24"><?= $myMovie->get('overview'); ?></p>
            </div>
        </div>
        <div class="w-1/3 relative float-right">
            <iframe src="https://www.youtube.com/embed/<?= $myMovie->getTrailer(); ?>" frameborder="0"></iframe>
        </div>
    </div>
</body>
</html>
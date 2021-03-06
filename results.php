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
    <?php include "php/_partials/_navigation.php";
    $MC = new MovieController("localhost","fastmovie_renesse","root","");
    $MovieName = $_GET['MovieName'];
    $movies = $MC->SearchMovie($MovieName);
    ?>
    <div class="flex flex-wrap justify-between gap-4 pt-28 w-3/4 mx-auto">
        <?= $MC->ShowMovies($movies); ?>
    </div>
    </body>
</html>
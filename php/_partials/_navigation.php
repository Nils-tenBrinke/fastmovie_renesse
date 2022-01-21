<div class="navigation w-full h-auto px-8">
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
                <li><a href="actualmovies.php" class="CTA">TICKETS</a></li>
            </ul>
        </div>
    </div>
</div>
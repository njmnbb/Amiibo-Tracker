<!--Begin header-->
<?php include('header.php'); ?>

<!--Begin contentContainer-->
<div id = "contentContainer">
    
    <!--Begin content-->
    <div id = "content" class = "find">
        <!--Loading in pictures from multiple directories-->
        
        <!--Smash Bros amiibo-->
        <img src = "headerImages/smashlogo.png" alt = "" id = "findHeaders">
        <?php
            $dirname = "smashImages/";
            $images = glob($dirname."*.png");
            echo '<ul>' . "\n";
            foreach($images as $image) {
                /*echo "<div id = 'figureContainer'>";*/
                echo "\t\t\t" . '<li id = "findPage"><a href = "figure?action='.basename($image, ".png").'"><img src = "'.$image.'" id = "findPictures" /></a></li>' . "\n";
                /*echo "<br>";
                echo ucwords(basename($image, ".png"));
                echo "</div>";*/
            }
            echo "\t\t" . '</ul>' . "\n";
        ?>
        
        <br>

        <!--Super Mario amiibo-->
        <img src = "headerImages/mariologo.png" alt = "" id = "findHeaders">
        <?php
            $dirname = "marioImages/";
            $images = glob($dirname."*.png");
            echo '<ul>' . "\n";
            foreach($images as $image) {
                echo "\t\t\t" . '<li id = "findPage"><a href = "figure.php?action='.basename($image, ".png").'"><img src = "'.$image.'" id = "findPictures" /></a></li>' . "\n";
            }
            echo "\t\t" . '</ul>' . "\n";
        ?>
    </div>
</div>

<!--Begin footer-->
<?php include('footer.html'); ?>
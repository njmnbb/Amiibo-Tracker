<!--Begin header-->
<?php include('header.php'); ?>

<!--Begin contentContainer-->
<div id = "contentContainer">
    
    <!--Begin content-->
    <div id = "content">
        <!--Displaying selected amiibo-->
        
        <?php include('scrape.php'); ?>
        <?php
            // Declaring variables for later use
            $picture = $_GET['action'];
            $dirname = "companyImages/";
            $companyPicture = glob($dirname."*.png");

            // Printing out name of figure and disclaimer
            $newPicture = ucwords(basename($picture, "2"));
            echo "<p id = 'figure_title'>" . $newPicture . "</p>\n";

            // If picture is from Super Mario series...
            if (substr($picture, -1) == '2') {
                // Grabbing figure's data from JSON file
                $response = json_decode(file_get_contents("data/marioData.json"));

                // Print out figure's picture
                echo "\t" . '<img src = "marioImages/' . $picture . ".png" . '" id = "figure">' . "\n";
            }

            // If picture is from Smash Bros series...
            else {
                // Grabbing figure's data from JSON file
                $response = json_decode(file_get_contents("data/smashData.json"));

                // Print out figure's picture
                echo "\t" . '<img src = "smashImages/' . $picture . ".png" . '" id = "figure">' . "\n";
            }

            // Looping through the JSON file for the correct figure to display
            foreach($response as $key => $figure) {

                // If the the correct figure is found...
                if($figure->name == $newPicture) {

                    // Setting an ID for the figure
                    $figureID = $key;

                    // Putting a figure's URL into an array for later scraping
                    $urlArray = array();
                    foreach($figure as $key => $url) {
                        if($key == 'name') continue;
                        $urlArray[$key] = $url;
                    }

                    // Scraping each URL for stock data
                    $scrapeArray = scrape($urlArray);
                    break;
                }
            }

            //Creating table for companies and their stock
            $i = 0;
            echo "\t" . '<table id = "companyList">' . "\n";
            foreach($scrapeArray as $key => $stock) {
                echo "\t\t<tr>\n";
                echo "\t\t\t" . '<td><img src = "' . $companyPicture[$i] . '" id = "companyLogo"></td>' . "\n";
                echo "\t\t\t<td>";
                if($scrapeArray[$key] == 'In stock!') echo '<a href = "' . $response[$figureID]->$key . '" target = "_blank">';
                echo $stock;
                if($scrapeArray[$key] == 'In stock!') echo '</a>';
                echo "</td>\n";
                echo "\t\t</tr>\n";
                $i++;
            }
            echo "\t</table>\n";
        ?>
    </div>
</div>

<!--Begin footer-->
<?php include('footer.html'); ?>
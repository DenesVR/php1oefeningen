<?php
$steden = array("Berlijn"=>"img/berlijn.jpg","Parijs"=>"img/parijs.jpg","Londen"=>"img/londen.jpg")

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Oefening 1.2</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

    <div class="jumbotron text-center">
        <h1>Leuke plekken in Europa</h1>
        <p>Tips voor citytrips voor vrolijke vakantiegangers!</p>
    </div>

    <div class="container">
        <div class="row">
            <?php

            foreach ($steden as $key => $value) {

                echo "<div class='col-sm-4'>";
                echo "<h3>".$key."</h3>";
                echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>";
                echo "<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>";
                echo "<img src=" . $value . ">";
                echo "</div>";
            }

            ?>
        </div>
    </div>

    </body>
    </html>
<?php

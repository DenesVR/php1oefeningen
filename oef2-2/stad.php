<?php
include_once "connection.php";
include_once "lib/html_components.php";
?>

    <div class="jumbotron text-center">
        <h1>Detail stad</h1>
    </div>

<?php

$sql = "SELECT * FROM images where img_id=".$_GET['img_id'];
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        echo "<div class='col-sm-12'>";
        echo "<h3>".$row[img_title]."</h3>";
        echo "<p>Filename: " . $row[img_filename] . " </p>";
        echo "<p>".$row[img_width]." x ".$row[img_height]." pixels</p>";
        echo "<img src=" . $row[img_filename] . " style='width:75%'>";
        echo "<br>";
        echo "<a href='http://localhost:8081/php1oefeningen/oef2-1/steden2.php'>Terug naar overzicht</a>";
        echo "</div>";

    }
}
else
{
    echo "No records found";
}

?>
    </div>
    </div>

    </body>
</html>


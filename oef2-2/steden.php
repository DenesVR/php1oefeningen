<?php
include_once "lib/connection.php";
include_once "lib/html_components.php";

printHead();
printJumbo();
?>

<div class="container">
    <div class="row">
        <?php

        $sql = "SELECT * FROM images";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){

                echo "<div class='col-sm-4'>";
                echo "<h3>".$row[img_title]."</h3>";
                echo "<p>".$row[img_width]." x ".$row[img_height]."</p>";
                echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>";
                echo "<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>";
                echo "<img src=" . $row[img_filename] . ">";
                echo "</div>";

            }
        }

        ?>
    </div>
</div>

</body>
</html>

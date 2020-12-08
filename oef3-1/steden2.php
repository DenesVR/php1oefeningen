<?php
include_once "lib/connection.php";
include_once "lib/html_components.php";

printHead();
printJumbo("Leuke plekken in Europa","Tips voor citytrips voor vrolijke vakantiegangers!");
?>

<div class="container">
    <div class="row">
        <?php

        //get data
        $rows = GetData( "select * from images" );

        //get template
        $template = file_get_contents("templates/column_steden.html");

        //merge
        $html = MergeViewWithData( $template, $rows );
        print $html;

        ?>
    </div>
</div>

</body>
</html>

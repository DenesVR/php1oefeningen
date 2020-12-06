<?php
include_once "lib/connection.php";
include_once "lib/html_components.php";

printHead();

echo $_SESSION['message'];
?>

    <div class="jumbotron text-center">
        <h1>Detail stad</h1>
    </div>

<?php

if ( ! is_numeric( $_GET['img_id']) ) die("Ongeldig argument " . $_GET['img_id'] . " opgegeven");

$rows = GetData( "select * from images where img_id=" . $_GET['img_id'] );

//get template
$template = file_get_contents("templates/form_stad.html");

//merge
foreach ( $rows as $row )
{
    $output = $template;

    foreach( array_keys($row) as $field )
    {
        $output = str_replace( "@$field@", $row["$field"], $output );
    }
    print $output;
}

?>

    </body>
</html>
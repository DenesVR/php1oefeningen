<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

include "lib/connection.php";

if ( $_SERVER['REQUEST_METHOD'] == "POST" AND $_POST["submitButton"] == "OK" ) {
    //var_dump($_POST);
    //print json_encode($_POST);
    $img_id = $_POST['img_id'];
    $img_title = $_POST['img_title'];
    $img_filename = $_POST['img_filename'];
    $img_width = $_POST['img_width'];
    $img_height = $_POST['img_height'];

    $stmt = UpdateData("UPDATE images SET img_title='$img_title', img_filename='$img_filename', img_width='$img_width', img_height='$img_height' WHERE img_id=$img_id");

    header('location: steden2.php');
}
?>

<html>
<body>



</body>
</html>
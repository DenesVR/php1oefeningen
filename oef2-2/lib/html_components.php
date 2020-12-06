<?php

#Printen van de html head
function printHead() {
    echo file_get_contents("templates/head.html");
}

#Printen van de Jumbotron html
function printJumbo() {
    echo file_get_contents("templates/jumbo.html");
}

function MergeViewWithData( $template, $data ) {
    $returnvalue = "";

    foreach ( $data as $row )
    {
        $output = $template;

        foreach( array_keys($row) as $field )  //eerst "img_id", dan "img_title", ...
        {
            $output = str_replace( "@$field@", $row["$field"], $output );
        }

        $returnvalue .= $output;
    }

    return $returnvalue;
}
<?php

#Printen van de html head
function printHead() {
    $head = file_get_contents("templates/head.html");
    print $head;
}

#Printen van de Jumbotron html
function printJumbo($titel = "", $subtitel= "") {
    $jumbo = file_get_contents("templates/jumbo.html");
    $jumbo = str_replace("@titel@", "$titel", $jumbo);
    $jumbo = str_replace("@subtitel@", "$subtitel", $jumbo);
    print $jumbo;
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
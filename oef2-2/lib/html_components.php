<?php

#Printen van de html head
function printHead() {
    echo file_get_contents("templates/head.html");
}

#Printen van de Jumbotron html
function printJumbo() {
    echo file_get_contents("templates/jumbo.html");
}

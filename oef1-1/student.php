<?php

$student =	array(
    "voornaam" =>  "Jan",
    "naam" =>  "Janssens",
    "straat" =>  "Oude baan",
    "huisnr" =>  "22",
    "postcode" =>  2800,
    "gemeente" =>  "Mechelen",
    "geboortedatum" =>  "14/05/1991",
    "telefoon" =>  "015 24 24 26",
    "e-mail" =>  "jan.janssens@gmail.com"
);


function StudentToTable($student){
    echo "<h1>Student</h1>";
    echo "<table>";
    echo "<tr><td>Voornaam</td><td>".$student['voornaam']."</td></tr>";
    echo "<tr><td>Naam</td><td>".$student['naam']."</td></tr>";
    echo "<tr><td>Straat</td><td>".$student['straat']."</td></tr>";
    echo "<tr><td>Huisnr</td><td>".$student['huisnr']."</td></tr>";
    echo "<tr><td>Postcode</td><td>".$student['postcode']."</td></tr>";
    echo "<tr><td>Gemeente</td><td>".$student['gemeente']."</td></tr>";
    echo "<tr><td>Geboortedatum</td><td>".$student['geboortedatum']."</td></tr>";
    echo "<tr><td>Telefoon</td><td>".$student['telefoon']."</td></tr>";
    echo "<tr><td>E-mail</td><td>".$student['e-mail']."</td></tr>";
    echo "</table>";
}

StudentToTable($student);

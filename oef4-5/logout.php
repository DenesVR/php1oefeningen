<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

$public_access =  false;
require_once "lib/autoload.php";
session_regenerate_id('user');
session_destroy();
header("Location: login.php?logout=true");

?>

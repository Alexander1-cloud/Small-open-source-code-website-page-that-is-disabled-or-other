<?php defined('A') or die; /* This is Open Source script */

if($_SERVER['REQUEST_URI']!=='/')
{
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    die();
}

?>
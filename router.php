<?php
    require "vendor/autoload.php";

    if ( 'home' == $_GET["page"] )
    {
        include 'pages/home/home-index.php';
    }
    elseif ( 'about-us' == $_GET["page"] )
    {
        include 'pages/about-us/aboutus-index.php';
    }
    else
    {
        include 'pages/404/404.php';
    }

?>
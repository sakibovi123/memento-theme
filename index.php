<?php
    use App\classes\Home;

    require "vendor/autoload.php";

    $router = new Home();
    $router->home();

    include 'header.php';
    include 'footer.php';
?>
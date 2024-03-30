<?php

class View
{
    function __construct()
    {

    }

    function Render($name)
    {
        $element = $_GET['url'];
        if ($element == 'Login') {
            require("views/" . $name . ".php");
        } else {
            require("Views/navigation.php");
            require("views/" . $name . ".php");
            require("Views/Footer.php");
        }
    }
}

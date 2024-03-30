<?php

$msg = $_GET['msg'];

class DataBase{
    public function __construct()
    {

    }

    public function redirect($page) {
        header("location : $page");
    }
}

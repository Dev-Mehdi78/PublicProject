<?php

class Weblog extends Controller{
    public function __construct()
    {
        parent::__construct();
        $this->view->Render("Weblog/index");
    }
}

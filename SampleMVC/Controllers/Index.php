<?php

class Index extends Controller{
    public function __construct()
    {
        parent::__construct();
        $this->view->Render("Index/index");
    }
}
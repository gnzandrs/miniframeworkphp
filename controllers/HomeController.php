<?php

class HomeController {

    public function indexAction()
    {
        return new View('home', ['title' => 'title of test']);
    }

}

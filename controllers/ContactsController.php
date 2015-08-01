<?php

class ContactsController {

    public function indexAction()
    {
        return new View('contacts');
    }

    public function cityAction($city)
    {
        exit('contacts ' . $city);
    }

}
<?php

class ProfileController {

    public function indexAction()
    {
        return new View('home');
    }

    public function showAction()
    {
        return View('show', ['name' => 'Tom', 
							'lastname' => 'Riddle', 
							'Age' => '17', 
							'City' => 'London', 
							'Country' => 'England',
							'Job' => 'CEO']);
    }
	
	public function sendEmailAction($contacto)
	{
		return View('email', ['to' => $contacto,
							  'from' => 'thedarklord@shadow.uk',
							  'subject' => 'Would you like to join us?']);
	}
}
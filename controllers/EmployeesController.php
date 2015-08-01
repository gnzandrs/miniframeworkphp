<?php

class EmployeesController {
	
	public function indexAction()
	{
		return new View('employees', ['CEO' => 'Tom Riddle', 'COO', 'Severus Snape']);
	}
}
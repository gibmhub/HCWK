<?php

	require_once(__DIR__.'/../config-secret.php');	
	
	$database = new mysqli($mysql_server, $mysql_username, $mysql_password, 'symposium_2014');
	
	class NotFoundException extends Exception {}

	class Ticket {		
		
		public $ticketcode;
		public $name;
		public $email;
		
		public function __construct($ticketcode) {
			
			$this->ticketcode = $ticketcode;

			global $database;
			
			if ($result = $database->query('SELECT ticketcode, name, email FROM ticketliste WHERE ticketcode = "'.$ticketcode.'"')) {
				if ($row = $result->fetch_object()) {
					$this->name = $row->name;
					$this->email = $row->email;
				} else {
					throw new NotFoundException();					
				}
			} else {
				throw new NotFoundException();
			}
		
		}
		
		public function writeToDatabase() {
		
			global $database;
			
			$database->query('UPDATE ticketliste SET name = "'.$this->name.'", email = "'.$this->email.'" WHERE ticketcode = "'.$this->ticketcode.'"');
			
		}
			
	}
?>
<?php

	require_once(__DIR__.'/../config-secret.php');	
	
	$database = new mysqli($mysql_server, $mysql_username, $mysql_password, 'symposium_2014');
	
	class NotFoundException extends Exception {}

	class Ticket {		
		
		public $ticketcode;
		public $name;
		public $email;
		public $timestamp;
				
		static public function get($ticketcode) {
		
			global $database;
			
			if ($result = $database->query('SELECT name, email, timestamp FROM ticketliste WHERE ticketcode = "'.$ticketcode.'"')) {
				if ($row = $result->fetch_object()) {
					$ticket = new Ticket();
					$ticket->ticketcode = $ticketcode;
					$ticket->name = $row->name;
					$ticket->email = $row->email;
					$ticket->timestamp = $row->timestamp;
				} else {
					throw new NotFoundException();					
				}
			} else {
				throw new NotFoundException();
			}
		}

		static public function register($ticketcode, $name, $email) {
		
			$ticket = self::get($ticketcode);
			$ticket->name = $name;
			$ticket->email = $email;
			$ticket->write_to_database();
		}

		public function write_to_database() {
		
			global $database;
			
			$database->query('UPDATE ticketliste SET name = "'.$this->name.'", email = "'.$this->email.'" WHERE ticketcode = "'.$this->ticketcode.'"');
			
		}
			
	}
?>
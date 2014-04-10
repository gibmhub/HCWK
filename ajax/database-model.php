<?php

	require_once(__DIR__.'/../config-secret.php');	
	
	$database = new mysqli($mysql_server, $mysql_username, $mysql_password, 'symposium_2014');
	
	class NotFoundException extends Exception {}
	class EmailNotSentException extends Exception {}

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
					return $ticket;
				} else {
					throw new NotFoundException();					
				}
			} else {
				throw new NotFoundException();
			}
		}
		
		private function write_to_database() {
		
			global $database;
			
			$database->query('UPDATE ticketliste SET name = "'.$this->name.'", email = "'.$this->email.'" WHERE ticketcode = "'.$this->ticketcode.'"');
			
		}

		static public function register($ticketcode, $name, $email) {
		
			$ticket = self::get($ticketcode);
			$ticket->name = $name;
			$ticket->email = $email;
			$ticket->write_to_database();
			
			// send email
			$receiver = $email;
			$subject = 'Registrierung zum 26. Heidelberger Symposium';
			$mailheader = "Content-type: text/html; charset=utf-8\r\n";
			$mailheader .= 'From: info@hcwk.de';
			$message_body = '<p>Hallo '.$name.',</p><p>Vielen Dank für Ihre Registrierung zum 26. Heidelberger Symposium mit der Ticketnummer <b>'.$ticketcode.'</b>.</p><p>Viel Spaß beim Symposium wünscht<br>Das Organisationsteam</p>'; // TODO: edit email text with more info
			if (!mail($receiver, $subject, $message_body, $mailheader)) {
				throw new EmailNotSentException();	
			}

		}
		
		static public function get_paid_online_ticketcode($txn_type, $txn_id) {
			global $database;
			if ($result = $database->query('SELECT ticketcode FROM ticketliste WHERE use_online = 1 AND txn_id IS NULL LIMIT 1')) {
				if ($row = $result->fetch_object()) {
					$ticketcode = $row->ticketcode;
					$database->query('UPDATE ticketliste SET txn_type = "'.$txn_type.'", txn_id = "'.$txn_id.'" WHERE ticketcode = "'.$ticketcode.'"');	
					return $ticketcode;
				} else {
					throw new NotFoundException();					
				}
			} else {
				throw new NotFoundException();
			}
			
		}
		
		static public function has_txn_id($txn_id) {
			global $database;
			if ($result = $database->query('SELECT ticketcode FROM ticketliste WHERE txn_id = "'.$txn_id.'"')) {
				if ($row = $result->fetch_object()) {
					return true;
				} else {
					return false;					
				}
			} else {
				return false;
			}
		}
					
	}
?>
<?php

	require_once(__DIR__.'/../config-secret.php');
	
	require_once(__DIR__.'/../VIWebFramework/VILogger.php');
	$logger = VILogger::get('tickets.'.basename(__FILE__, '.php'));
	
	$database = new mysqli($mysql_server, $mysql_username, $mysql_password, $mysql_database);
	
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

			global $logger;
			$logger->log('register ticketcode: '.$ticketcode.' | '.$name.' | '.$email, VI_LOG_LEVEL_INFO);

			$ticket = self::get($ticketcode);
			$ticket->name = $name;
			$ticket->email = $email;
			$ticket->write_to_database();
			
			// send email
			$receiver = $email;
			$subject = 'Registrierung zum 26. Heidelberger Symposium';
			$mailheader = "Content-type: text/html; charset=utf-8\r\n";
			$mailheader .= 'From: info@hcwk.de';
			$message_body = '<p>Hallo '.$name.',</p><p>Vielen Dank für Ihre Registrierung zum 26. Heidelberger Symposium mit der Ticketnummer <b>'.$ticketcode.'</b>.</p><p>Ihr Namensschild liegt zu Beginn des Symposiums für Sie bereit und dient Ihnen während der Veranstaltungszeit als Eintrittskarte. Bitte bringen Sie einen Ausweis zur Namensschildvergabe mit. Sie können Ihre hinterlegten Daten ändern, indem Sie die Registrierung unter <a href="http://www.heidelberger-symposium.de/tickets">http://www.heidelberger-symposium.de/tickets</a> erneut durchführen.</p><p>Alle weiteren Informationen erhalten Sie auf unserer <a href="http://www.heidelberger-symposium.de">Webseite</a>.</p><p>Viel Spaß beim Symposium wünscht,<br>Das Organisationsteam</p>';
			if (!mail($receiver, $subject, $message_body, $mailheader)) {
				throw new EmailNotSentException();	
			}

		}
		
		static public function get_paid_online_ticketcode($txn_type, $txn_id, $type) {
		
			global $logger;
			$logger->log('requested paid online ticketcode: '.$txn_type.' | '.$txn_id.' | '.$type, VI_LOG_LEVEL_INFO);
			
			global $database;
			if ($result = $database->query('SELECT ticketcode FROM ticketliste WHERE use_online = 1 AND txn_id IS NULL LIMIT 1')) {
				if ($row = $result->fetch_object()) {
					$ticketcode = $row->ticketcode;
					$database->query('UPDATE ticketliste SET txn_type = "'.$txn_type.'", txn_id = "'.$txn_id.'", tickettype = "'.$type.'" WHERE ticketcode = "'.$ticketcode.'"');	
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
	
function process_payment($payment_status, $txn_type, $txn_id, $name, $email, $type) {
	if ($payment_status=='completed') {
	
		if (Ticket::has_txn_id($txn_id)) {
			die('Transaction already processed');
		}
	
		$ticketcode = Ticket::get_paid_online_ticketcode($txn_type, $txn_id, $type);
		
		Ticket::register($ticketcode, $name, $email);
		
		if ($type=='reduced-double') {
			// send extra code per email
			$ticketcode = Ticket::get_paid_online_ticketcode($txn_type, $txn_id, $type);
			$receiver = $email;
			$subject = 'Ihr Online-Ticket zum 26. Heidelberger Symposium';
			$mailheader = "Content-type: text/html; charset=utf-8\r\n";
			$mailheader .= 'From: info@hcwk.de';
			$message_body = '<p>Hallo '.$name.',</p><p>Vielen Dank für den Kauf des Ticketspecials.</p><p>Ihr eigenes Ticket wurde bereits registriert. Sie erhalten diesbezüglich eine Bestätigung in einer separaten Email.</p><p>Ihr zusätzlich erworbener Ticket-Code lautet <b>'.$ticketcode.'</b>. Bitte geben Sie diesen Code an die entsprechende Person weiter, sodass er oder sie sich damit online unter <a href="http://www.heidelberger-symposium.de/tickets">http://www.heidelberger-symposium.de/tickets</a> registrieren kann.</p><p>Viel Spaß beim Symposium wünscht<br>Das Organisationsteam</p>';
			mail($receiver, $subject, $message_body, $mailheader) or die('Error sending Email');
		}
	
	} else {

	}

}

function ticketsLeftCount() {
	global $database;
	if ($result = $database->query('SELECT COUNT(*) FROM ticketliste WHERE timestamp IS NULL')) {
		if ($row = $result->fetch_row()) {
			return $row[0];
		}
	}
}

?>
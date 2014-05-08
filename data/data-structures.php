<?php

class Referent {
	
	protected $id;
	
	public $name;
	public $desc;
	public $vita;
	protected $vortrag;
	
	static protected $referenten = array();
	
	protected function __construct($id) {
		$this->id = $id;
	}
		
	static public function get($id = NULL) {
		if ($id===NULL) {
			throw new Exeption();
		}
		if(!isset(self::$referenten[$id])) {
			self::$referenten[$id] = new Referent($id);
		}
		return self::$referenten[$id];
	}
	
	static public function getReferent($id) {
		if (!isset(self::$referenten[$id])) {
			return null;
		}
		return self::$referenten[$id];
	}
	
	static public function allReferenten() {
		return self::$referenten;
	}
	
	public function getID() {
		return $this->id;
	}
	
	public function getVortrag() {
		return $this->vortrag;
	}
	
	public function setVortrag(Vortrag $vortrag, $link = true) {
		$this->vortrag = $vortrag;
		if($link) {
			$vortrag->addReferent($this, false);
		}
	}
		
	public function getReferentBox($class='') {
		$html = '
			<div class="referent-box-wrapper">
				<div class="referent-box media '.$class.'">
					<h4><a href="/referent/'.$this->id.'">'.$this->name.' <small>'.$this->desc.'</small></a></h4>
					<a class="pull-left unstyled" href="/referent/'.$this->id.'"><img class="media-object" src="/img/referenten/'.$this->id.'.jpg"></a>
					<div class="media-body">
						'.preg_replace('/\s+?(\S+)?$/', '', substr($this->vita, 0, 300)).'… <a href="/referent/'.$this->id.'">weiterlesen</a></p>
						<p><b>Veranstaltung:</b> <a href="/vortrag/'.$this->vortrag->getID().'">'.$this->vortrag->title.'</a></p>
					</div>
				</div>
			</div>
		';
		return $html;
	}
	
}

class Vortrag {

	protected $id;

	public $title;
	public $desc;
	public $raum;
	public $raum_link;
	public $day;
	public $slot;
	protected $referenten = array();	

	static protected $vortraege = array();
	
	protected function __construct($id) {
		$this->id = $id;
	}
	
	static public function get($id = NULL) {
		if ($id===NULL) {
			throw new Exeption();
		}
		if(!isset(self::$vortraege[$id])) {
			self::$vortraege[$id] = new Vortrag($id);
		}
		return self::$vortraege[$id];
	}
	
	static public function getVortrag($id) {
		return self::$vortraege[$id];
	}
	
	public function getID() {
		return $this->id;
	}
	
	public function addReferent(Referent $referent, $link = true) {
		$this->referenten[$referent->getID()] = $referent;
		if($link) {
			$referent->setVortrag($this, false);
		}
	}

	public function getReferenten() {
		return $this->referenten;
	}

	public function tableItem() {
		include_once(__DIR__.'/referenten.php');
		$referentenLinks = array();
		foreach ($this->referenten as $referent) {
			$referentenLinks[] = '<a href="/referent/'.$referent->getID().'">'.$referent->name.'</a>';
		}
		$html = '
			<div class="vortrag-table-item">
				<b><a href="/vortrag/'.$this->id.'">'.$this->title.'</a></b><br>';
		if (count($referentenLinks)>0) {
			$html .= '<i>mit '.implode(', ', $referentenLinks).'</i><br>';
		}
		if (isset($this->raum)&&$this->raum!='') {
			if (isset($this->raum_link)&&$this->raum_link!='') {
				$html .= '<a href="'.$this->raum_link.'" target="_blank">';
			}
			$html .= $this->raum;
			if (isset($this->raum_link)&&$this->raum_link!='') {
				$html .= '</a>';
			}
		}
		$html .= '</a>
			</div>
		';
		return $html;
	}
	
	static public function day_string($day) {
		switch ($day) {
			case 0: return 'Mittwoch 7.5.';
			case 1: return 'Donnerstag 8.5.';
			case 2: return 'Freitag 9.5.';
			case 3: return 'Samstag 10.5.';
		}
		return NULL;
	}
	static public function slot_string($slot) {
		$suffix = 'h';
		switch ($slot) {
			case 1: return '9.00'.$suffix;
			case 2: return '11.00'.$suffix;
			case 3: return '14.00'.$suffix;
			case 4: return '16.00'.$suffix;
			case 5: return '18.00'.$suffix;
			case 6: return '20.00'.$suffix;
		}
		return NULL;
	}
	static public function timeslot_string($day, $slot) {
		return self::day_string($day).', '.self::slot_string($slot);
	}

	public function get_timeslot_string() {
		$str = self::timeslot_string($this->day, $this->slot);
		if (isset($this->raum)&&$this->raum!='') {
			$str .= ', ';
			if (isset($this->raum_link)&&$this->raum_link!='') {
				$str .= '<a href="'.$this->raum_link.'" target="_blank">';
			}
			$str .= $this->raum;
			if (isset($this->raum_link)&&$this->raum_link!='') {
				$str .= '</a>';
			}
		}
		return $str;
	}
	
	static public function vortraege_in_timeslot($day, $slot) {
		$vortraege = array();
		foreach (self::$vortraege as $vortrag) {
			if ($vortrag->day==$day&&$vortrag->slot==$slot) {
				$vortraege[] = $vortrag;
			}
		}
		return $vortraege;
	}
	
}

class Person {

	public $name;
	public $bild;
	public $studienfach;
	public $extra;
	
}

class Sponsor {

	public $name;
	public $logo;
	public $link;
	public $klasse;
	
}

class FAQItem {

	public $frage;
	public $antwort;
	
}

?>
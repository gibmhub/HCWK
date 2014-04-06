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
		$referentenLinks = array();
		foreach ($this->referenten as $referent) {
			$referentenLinks[] = '<a href="/referent/'.$referent->getID().'">'.$referent->name.'</a>';
		}
		$html = '
			<div class="vortrag-table-item">
				<b><a href="/vortrag/'.$this->id.'">'.$this->title.'</a></b><br>
				<i>'.implode(', ', $referentenLinks).'</i>
				</a>
			</div>
		';
		return $html;
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
	
	const kHauptsponsor = 1;
	const kNebensponsor = 0;
	
}

?>
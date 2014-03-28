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
}

class Vortrag {

	protected $id;

	public $titel;
	public $desc;
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
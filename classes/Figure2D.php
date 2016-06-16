<?php 


// class Figure2D extends Forme2D{
class Figure2D {
	protected $formes = array(); 

	public function ajouter(Forme2D $forme){
		$this->formes[] = $forme;
	}

	public function surfaceTotale(){
		$surface = 0; 
		foreach ($this->formes as $forme) {
			$surface += round($forme->aire(),3);
		}
		return $surface;
	}

	public function perimetreTotale(){
		$perimetre=0; 
		foreach ($this->formes as $forme) {
			$perimetre += round($forme->perimetre(),3);
		}
		return $perimetre;
	}
}


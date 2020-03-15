<?php
class Realisateur extends Personne{
    private $_nbreFilmRealise;

    public function __construct($nom,$prenom,$dateDeNaissance){
        parent::__construct($nom,$prenom,$dateDeNaissance);
        $this->_nbreFilmRealise=[];
    }
    
    public function getInfoRealisateur(){
    echo "Prénom du Réalisateur : " .$this->getPrenom() ."</br>
        Nom du réalisateur : " .$this->getNom() ."</br>
        Age du réalisateur : ".$this->getAge()." ans.</br>";
    echo "Nombre de film à son actif : ".count($this->_nbreFilmRealise).".</br>";
        echo "Il a réalisé : </br>";
    foreach($this->_nbreFilmRealise as $nbreFilmRealise){
        echo $nbreFilmRealise->getTitreDuFilm()."</br>";
    }
    }

    public function ajouterFilm($nbreFilmRealise){
        $this->_nbreFilmRealise[] =$nbreFilmRealise;
    }

}



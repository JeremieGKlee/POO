<?php

class Casting {
    private $_acteur;
    private $_film;
    private $_role;

public function __construct(Acteur $acteur,Film $film,Role $role){
    $this->_acteur=$acteur;
    $this->_film=$film;
    $film->ajouterActeur($this);
    $acteur->ajouterJoueDansFilm($this);
    $this->_role=$role;
    $role->ajouterCasting($this);
}
public function getPrenomActeur(){
    return $this->_acteur->getPrenom();
}
public function getNomActeur(){
    return $this->_acteur->getNom();
}
public function getFilm(){
    return $this->_film->getTitreDuFilm();
}
public function getRole(){
    return $this->_role->getNomDuRole();
}
public function setActeur($acteur){
    $this->_acteur=$acteur;
}
public function setFilm($film){
    $this->_film=$film;
}
public function setRole($role){
    $this->_role=$role;
}

public function getListeInfoActeur(){
       echo "Nombre de casting".count($this->_nbreCasting)."</br>";
    //     echo "Il a joué dans : </br>";
    // foreach($this->_nbreCasting as $nbreCasting){
    //     echo $nbreCasting->getFilm()."</br>";
    // }
    // echo "Nombre de rôle à son actif : ".count($this->_nbreCasting).".</br>";
    //     echo "Il a joué comme rôle de : </br>" ;
    // foreach($this->_nbreCasting as $nbreCasting){
    //     echo $nbreCasting->getRole()."</br>";
    }
}


   
<?php


class Personne{
    private $_nom;
    private $_prenom;
    private $_dateDeNaissance;

    public function __construct($nom,$prenom,$dateDeNaissance){
        $this->_nom=$nom;
        $this->_prenom=$prenom;
        $this->_dateDeNaissance= new DateTime($dateDeNaissance);
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getDateDeNaissance(){
        return $this->_dateDeNaissance;
    }
    public function getAge(){
        $dateMaintenant = new DateTime();
        return $this->_dateDeNaissance->diff($dateMaintenant)->format('%y');
    }
    public function setNom($nom){
        $this->_nom= $nom;
    }
}
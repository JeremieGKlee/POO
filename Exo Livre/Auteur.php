<?php
class Auteur{
    private $_nom;
    private $_prenom;
    private $_nbreDeLivres;
    
public function __construct($nom,$prenom){
        $this->_nom = $nom;
        $this->_prenom =$prenom;
        $this->_nbreDeLivres=[];
}
public function getNom(){
    return $this->_nom;
}
public function getPrenom(){
    return $this->_prenom;
}
public function setNom($nom){
    $this->_nom = $nom;
}
public function __toString(){
    return "Auteur : ".$this->_prenom ." ".$this->_nom." </br>";
}
public function getAfficherBibliographie(){
    echo "Livres de ".$this->_prenom ." ".$this->_nom." </br>";
    foreach ($this->_nbreDeLivres as $value){
        echo $value->getTitre()." (".$value->getAnnéeDeParution().") : ".$value-> getNbreDePages()." pages / ".$value->getPrix()." €</br>";
    }
}
public function ajouterLivre($livreEnPlus){
    $this->_nbreDeLivres[] = $livreEnPlus;
}
}
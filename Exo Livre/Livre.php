<?php
class Livre{
    private $_titre;
    private $_nbreDePages;
    private $_annéeDeParution;
    private $_prix;
    private $_auteur;
    public function __construct($titre,$nbreDePages,$annéeDeParution,$prix,Auteur $auteur){
        $this->_titre = $titre;
        $this->_nbreDePages =$nbreDePages;
        $this->_annéeDeParution = $annéeDeParution;
        $this->_prix =$prix;
        $this->_auteur = $auteur;
        $auteur->ajouterLivre($this);
    }
    public function getTitre(){
        return $this->_titre;
    }
    public function getNbreDePages(){
        return $this->_nbreDePages;
    }
    public function getAnnéeDeParution(){
        return $this->_annéeDeParution;
    }
    public function getPrix(){
        return $this->_prix;
    }
    public function getNomAuteur(){
        return $this->_auteur->getNom();
    }
    public function getPrenomAuteur(){
        return $this->_auteur->getPrenom();
    }
    public function setTitre($titre){
        $this->_titre = $titre;
    }
    public function setNbreDePages($nbreDePages){
        $this->_nbreDePages = $nbreDePages;
    }
    public function setAnnéeDeParution($annéeDeParution){
        $this->_annéeDeParution = $annéeDeParution;
    }
    public function setPrix($prix){
        $this->_prix = $prix;
    }
    public function __toString(){
        return "Renseignements livre : "."</br>
                Titre du livre : " .$this->_titre ."</br>
                Nbre de pages : " .$this->_nbreDePages ." pages </br>
                Année de parution : " .$this->_annéeDeParution ."</br>
                Prix du livre : " .$this->_prix ." €.</br>
                Nom et prénom de l'auteur : " .$this->getPrenomAuteur() ." ".$this->getNomAuteur()."</br>";
    }
}
        
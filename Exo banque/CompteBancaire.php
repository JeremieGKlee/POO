<?php
class CompteBancaire{
    private $_libelle;
    private $_soldeInitial;
    private $_deviseMonetaire;
    private $_titulaire;

    public function __construct($libelle,$soldeInitial,$deviseMonetaire,$titulaire){
        $this->_libelle=$libelle;
        $this->_soldeInitial=$soldeInitial;
        $this->_deviseMonetaire=$deviseMonetaire;
        $this->_titulaire=$titulaire;
        $titulaire->ajouterCompte($this);
    }
    public function getLibelle(){
        return $this->_libelle;
    }
    public function getSoldeInitial(){
        return $this->_soldeInitial;
    }
    public function getDeviseMonetaire(){
        return $this->_deviseMonetaire;
    }
    public function getTitulaire(){
        return $this->_titulaire;
    }
    public function setLibelle($libelle){
        $this->_libelle= $libelle;
    }
    public function setSoldeInitial($soldeInitial){
        $this->_soldeInitial=$soldeInitial;
    }
    public function setDeviseMonetaire($deviseMonetaire){
        $this->_deviseMonetaire=$deviseMonetaire;
    }
    public function setTitulaire($titulaire){
        $this->_titulaire=$titulaire;
    }
    public function __toString(){  
    }
    public function getInfos(){
        return "Libellé du compte: $this->_libelle <br>
                Solde du compte : $this->_soldeInitial<br>
                Devise du compte : $this->_deviseMonetaire<br>
                Nom du titulaire : ".$this->getTitulaire()->getPrenom()."<br>
                Prenom du titulaire :".$this->getTitulaire()->getNom()."<br>
                <br>";
    }
    public function crediter($montant){
        $this->_soldeInitial+=$montant;
        
    }
    public function debiter($montant){
        $this->_soldeInitial-=$montant;
    }
    public function virement($montant,$compte_cible){
        $this-> debiter($montant);
        $compte_cible-> crediter($montant);
    }
    public function sommeDesComptes(){
        
    }
}
<?php
class Titulaire{
    private $_nom;
    private $_prenom;
    private $_dateNaissance;
    private $_ville;
    private $_compte;

    public function __construct($nom,$prenom,$dateNaissance,$ville){
        $this->_nom=$nom;
        $this->_prenom=$prenom;
        $this->_dateNaissance= new DateTime($dateNaissance);
        $this->_ville=$ville;
        $this->_compte=[];
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getDateNaissance(){
        return $this->_dateNaissance;
    }
    public function getAge(){
        $datemaintenant = new DateTime();
        return $this->_dateNaissance->diff($datemaintenant)->format('%y'); 
    }
    public function getVille(){
        return $this->_ville;
    }
    public function setNom($nom){
        $this->_nom=$nom;
    }
    public function setPrenom($prenom){
        $this->_prenom=$prenom;
    }
    public function setVille($ville){
        $this->_ville=$ville;
    }
    public function getInfosTitulaire(){
        echo "Nom du titulaire : $this->_prenom <br>
                Prenom du titulaire :$this->_nom <br>
                Age du titulaire :" .$this->getAge()."<br>";
        echo "Nombre de compte liés ".count($this->_compte)."</br>";
        $total = 0;
        foreach($this->_compte as $compte){
            echo $compte->getlibelle()." " .$compte->getSoldeInitial()."</br>";
            $total += $compte->getSoldeInitial();
        }
        echo "<br>Total des ". count($this->_compte). " comptes : $total";

    }

    public function ajouterCompte($compte){
        $this->_compte[] = $compte;  // array_push($this->_compte, $compte)
    }
    

}

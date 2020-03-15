<?php
class Dentiste extends Personne{
    

    public function __construct($nom,$prenom){
        parent::__construct($nom,$prenom);
        $this->_nbreDeConsultations=[];
    }
    public function getAfficherConsultationDentiste(){
        echo "Consultations de Dr. ".$this->getPrenom() ." ".$this->getNom()." </br>";
        foreach ($this->_nbreDeConsultations as $value){
            echo $value->getDate()." ".$value->getHeure()." avec ".$value-> getPrenomPatient()." ".$value->getNomPatient()." </br>";
        }
    }
public function ajouterConsultation($Consultation){
    $this->_nbreDeConsultations[] = $Consultation;
}
public function __toString(){
    return "Dr. ".$this->getPrenom() ." ".$this->getNom()." </br>";
}
}

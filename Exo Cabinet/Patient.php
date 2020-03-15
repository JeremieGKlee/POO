<?php
class Patient extends Personne{

    private $_nbreDeConsultation;
    public function __construct($nom,$prenom){
        parent::__construct($nom,$prenom);
        $this->_nbreDeConsultations=[];
    }
    public function getAfficherConsultationPatient(){
        echo "Consultations de ".$this->getPrenom() ." ".$this->getNom()." </br>";
        foreach ($this->_nbreDeConsultations as $value){
            echo $value->getDate()." ".$value->getHeure()." avec Dr. ".$value-> getPrenomDentiste()." ".$value->getNomDentiste()." </br>";
        }
    }
public function ajouterConsultation($Consultation){
    $this->_nbreDeConsultations[] = $Consultation;
}
public function __toString(){
    return "Patient ".$this->getPrenom() ." ".$this->getNom()." </br>";
}
}
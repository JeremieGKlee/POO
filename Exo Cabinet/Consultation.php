<?php

class Consultation {
    private $_date;
    private $_heure;
    private $_cient;
    private $_dentiste;

public function __construct($date, $heure, Patient $patient,Dentiste $dentiste){
    $this->_date = $date;
    $this->_heure =$heure;
    $this->_patient = $patient;
    $patient->ajouterConsultation($this);
    $this->_dentiste = $dentiste;
    $dentiste->ajouterConsultation($this);
}
public function getDate(){
    return $this->_date;
}
public function getHeure(){
    return $this->_heure;
}
public function getClient(){
    return $this->_client;
}
public function getNomDentiste(){
    return $this->_dentiste->getNom();
}
public function getPrenomDentiste(){
    return $this->_dentiste->getPrenom();
}
public function getNomPatient(){
    return $this->_patient->getNom();
}
public function getPrenomPatient(){
    return $this->_patient->getPrenom();
}
public function setClient($patient){
    $this->_patientt = $patient;
}
public function setDentiste($dentiste){
    $this->_dentiste = $dentiste;
}
}
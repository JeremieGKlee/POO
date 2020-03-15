<?php
class Role{
    private $_nomDuRole;
    private $_castings;
    // private static $_allRoles=[];


    public function __construct($nomDuRole){
        $this->_nomDuRole=$nomDuRole;
        $this->_castings=[];
    }
    public function getNomDuRole(){
        return $this->_nomDuRole;
    }
    public function getCastings(){
        return $this->_castings;
    }

    public function setNomDuRole($nomDuRole){
        $this->_nomDurole= $nomDuRole;
    }
    public function ajouterCasting($castings){
        $this->_castings[]= $castings;
    }
     public function getListActeurRole(){
        foreach($this->_castings as $casting){
            echo $casting->getPrenomActeur()." ".$casting->getNomActeur()."</br>";
            echo $casting->getNomActeur()." "."</br>

        }       
     }
    //  public static function getListActeurRole(){
    //     foreach(self::_allRoles as $value){
    //         echo $cvalue->getNomDuRole()."</br>";

    //     }       
     }


}

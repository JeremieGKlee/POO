<?php

class Film{
    private $_titreDuFilm;
    private $_anneeDeSortie;
    private $_duree;
    private $_synopsis;
    private $_realisateur;
    private $_genre;
    private $_nbreActeur;

    public function __construct($titreDuFilm,$anneeDeSortie,$duree,$synopsis,Realisateur $realisateur,Genre $genre){
        $this->_titreDuFilm=$titreDuFilm;
        $this->_anneeDeSortie=$anneeDeSortie;
        $this->_duree=$duree;
        $this->_synopsis=$synopsis;
        $this->_realisateur=$realisateur;
        $realisateur->ajouterFilm($this);
        $this->_genre=$genre;
        $genre->ajouterFilmAuGenre($this);
        $this->_nbreActeur=[];
    }
    public function getTitreDuFilm(){
        return $this->_titreDuFilm;
    }
    public function getAnneeDeSortie(){
        return $this->_anneeDeSortie;
    }
    public function getDuree(){
        return $this->_duree;
    }
    public function getSynopsis(){
        return $this->_synopsis;
    }
    public function getRealisateur(){
        return $this->_realisateur;
    }
    public function getRealisateurPrenom(){
        return $this->_realisateur->getPrenom();
    }
    public function getRealisateurNom(){
        return $this->_realisateur->getNom();
    }
    public function getGenre(){
        return $this->_genre-> getGenreDeFilm();
    }
    public function setTitreDuFilm($titreDuFilm){
        $this->_titreDuFilm= $titreDuFilm;
    }
    public function setAnneeDeSortie($anneeDeSortie){
        $this->_anneeDeSortie= $anneeDeSortie;
    }
    public function setDuree($duree){
        $this->_duree=$duree;
    }
    public function setSynopsis($synopsis){
        $this->_synopsis= $synopsis;
    }
    public function setRealisateur($realisateur){
        $this->_realisateur= $realisateur;
    }
    public function setGenre($genre){
        $this->_genre= $genre;
    }
    public function ajouterActeur($nbreActeur){
        $this->_nbreActeur[] =$nbreActeur;
    }
    public function getInfoFilm(){
        echo "Titre du film : " .$this->getTitreDuFilm() ."</br>
        Année de sortie : " .$this->getAnneeDeSortie() ."</br>
        Durée du film : "   .date('H:i', mktime(0,$this->_duree))."</br>
        Genre du film : " .$this->getGenre() ."</br>
        Prénom et Nom du réalisateur : " .$this->getRealisateurPrenom() ." ".$this->getRealisateurNom()."</br>
        Ce film compte : ".count($this->_nbreActeur). " acteurs </br>";
        foreach ($this->_nbreActeur as $nbreActeur ) {
            echo "Prénom et Nom de l'acteur : ".$nbreActeur->getPrenomActeur()." ".$nbreActeur->getNomActeur()."</br>";
           
        }
 


    }
}

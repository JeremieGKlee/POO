<?php
class Genre{
    private $_genreDeFilm;
    private $_nombreDeFilmAuGenre;

    public function __construct($genreDeFilm){
        $this->_genreDeFilm=$genreDeFilm;
        $this->_nombreDeFilmAuGenre=[];
    }
    public function getGenreDeFilm(){
        return $this->_genreDeFilm;
    }
    public function setGenre($genreDeFilm){
        $this->_genreDeFilm= $genreDeFilm;
    }
    public function getInfoTousLesFilmsDunGenre(){
        echo "Il existe ".count($this->_nombreDeFilmAuGenre)." films dans le genre ".$this->getGenreDeFilm()."</br>";
        echo "Liste des films de ce genre : </br>";
    foreach($this->_nombreDeFilmAuGenre as $nombreDeFilmAuGenre){
        echo $nombreDeFilmAuGenre->getTitreDuFilm()."</br>";
    }
    }
    public function ajouterFilmAuGenre($nombreDeFilmAuGenre){
        $this->_nombreDeFilmAuGenre[] =$nombreDeFilmAuGenre;
    }
}
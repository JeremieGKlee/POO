<?php

include 'Personne.php';
include 'Patient.php';
include 'Dentiste.php';
include 'Consultation.php';

// class Personne ($nom,$prenom)
// class Patient ($nom,$prenom)
// class Dentiste ($nom,$prenom)
// class Consultation ($date,$heure,$client,$dentiste)


$p1 = new Patient("MURMANN","Micka");
$p2 = new Patient("GIBELLO","Virgile");

$d1 = new Dentiste("WILSHEIM","Sébastien");
$d2 = new Dentiste("DURAND","Tara");

// class film ($titreDuFilm,$anneeDeSortie,$duree,$synopsis,$realisateur,$genre)

$c1 = new Consultation("05-05-2019","9:00",$p1,$d1);
$c2 = new Consultation("01-04-2019","8:00",$p1,$d2);
$c3 = new Consultation("01-05-2019","10:00",$p1,$d1);
$c4 = new Consultation("01-06-2019","11:00",$p2,$d2);



$p1->getAfficherConsultationPatient();
echo $p1;
$p2->getAfficherConsultationPatient();
echo $p2;
$d1->getAfficherConsultationDentiste();
echo $d1;
$d2->getAfficherConsultationDentiste();
echo $d2;

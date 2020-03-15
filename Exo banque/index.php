<?php

include 'CompteBancaire.php';
include 'Titulaire.php';

// class CompteBancaire  ($libelle,$soldeInitial,$deviseMonetaire,$titulaire)
// class Titulaire ($nom,$prenom,$dateNaissance,$ville)

$t1 = new Titulaire("TERIEUR","Alain","14.10.1985","MOLSHEIM");
$t2 = new Titulaire("COVER","Harry","27.02.1965","BONDUELLE");

$c1 = new CompteBancaire("PER",1000,"€",$t1);
$c2 = new CompteBancaire("PEL",5000,"€",$t1);
$c3 = new CompteBancaire("Test",500,"€",$t1);


$t1->getInfosTitulaire();


// $c3 = new CompteBancaire("PEP",8000,"€",$t1);

// $c4 = new CompteBancaire("PER",11000,"€",$t2);
// $c5 = new CompteBancaire("PEL",55000,"€",$t2);
// $c6 = new CompteBancaire("PEP",88000,"€",$t2);

// echo $c1->getInfos();
// echo $c2->getInfos();
// echo $c3->getInfos();

// echo $c4->getInfos();
// echo $c5->getInfos();
// echo $c6->getInfos();

// echo $t1-> getInfosTitulaire();
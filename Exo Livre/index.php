<?php

include 'Livre.php';
include 'Auteur.php';

// class Livre ($titre,$nbreDePage,$annéeDeParution,$prix,$auteur)
// class Auteur ($nom,$prenom)
$a1 = new Auteur("KING","Stephen");

$l1 = new Livre("CA",1138,"1986",20,$a1);
$l2 = new Livre("Simetierre",374,"1983",15,$a1);
$l3 = new Livre("Le Fléau",823,"1978",14,$a1);
$l4 = new Livre("Shining",447,"1977",16,$a1);

// echo $l1;
// echo $a1;
$a1->getAfficherBibliographie();
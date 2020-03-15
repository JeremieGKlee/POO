<?php


include 'Film.php';
include 'Personne.php';
include 'Realisateur.php';
include 'Acteur.php';
include 'Genre.php';
include 'Role.php';
include 'Casting.php';

// class film ($titreDuFilm,$anneeDeSortie,$duree,$synopsis,$realisateur,$genre)
// class Personne ($nom,$prenom,$dateDeNaissance)
// class Acteur ($nom,$prenom,$dateDeNaissance)
// class Realisateur ($nom,$prenom,$dateDeNaissance)
// class Genre ($genreDeFilm)
// class Role ($nomDuRole)


$rea1 = new Realisateur("KOPTER","Elie","1958-10-11");
$rea2 = new Realisateur("PALETAN","Enora","1947-08-25");
$rea3 = new Realisateur("NOUI","Eva","1977-05-13");
$rea4 = new Realisateur("COVER","Harry","1956-02-12");
$rea5 = new Realisateur("AYMAR","Jean","1947-08-24");
$rea6 = new Realisateur("DENT","Jessie","1997-09-19");
$rea7 = new Realisateur("TERIEUR","Alain","1975-01-28");
$rea8 = new Realisateur("BO","Harry","1967-02-24");

$a1 = new Acteur("EVENU","Hilaire","1981-10-21");
$a2 = new Acteur("SLAVE","Hugo","1982-08-05");
$a3 = new Acteur("HADY","Jacques","1984-06-11");
$a4 = new Acteur("DMEPASSA","Jeanne","1959-03-13");
$a5 = new Acteur("QUEUNYTET","Jenny","1963-08-24");
$a6 = new Acteur("PERE","Jess","1964-08-15");
$a7 = new Acteur("COUP","Justin","1975-03-16");
$a8 = new Acteur("GOLADE","Larry","1968-07-28");

$g1 = new Genre("Horreur");
$g2 = new Genre("Dramatique");
$g3 = new Genre("Amour");
$g4 = new Genre("S.F.");
$g5 = new Genre("Action");
$g6 = new Genre("Famille");
$g7 = new Genre("Policier");
$g8 = new Genre("Adulte");

$ro1 = new Role("Le lançeur d'alerte");
$ro2 = new Role("Patient zero");
$ro3 = new Role("Le tousseur");
$ro4 = new Role("Le cracheur ");
$ro5 = new Role("L'enrhumé");
$ro6 = new Role("Le porteur du Coronavirus");
$ro7 = new Role("Le pas de bol");
$ro8 = new Role("Le postillonneur");

// class film ($titreDuFilm,$anneeDeSortie,$duree,$synopsis,$realisateur,$genre)

$f1 = new Film("Runaway Train","1980",90,"Lara Clette",$rea8,$g1);
$f2 = new Film("Unstoppable","2020",87,"Larry Zona et Missis Hippy",$rea7,$g2);
$f3 = new Film("Le train","1973",125,"Line Ot'tension",$rea6,$g3);
$f4 = new Film("La bataille du rail","1977",132,"Luc Ratif",$rea5,$g4);
$f5 = new Film("Source Code","1981",65,"Lucas-René Fenêtre",$rea4,$g5);
$f6 = new Film("Le crime de l'Orient Express","1993",111,"Luce Hyfer O'Zenfer",$rea3,$g6);
$f7 = new Film("Le Pôle Express","2011",77,"Cécile En Cieux",$rea2,$g7);
$f8 = new Film("Le train sifflera trois fois","2014",89,"Héléna Du Mondaubalcon",$rea1,$g8);
$f9 = new Film("Train de nuit","2015",131,"Charles Ottofraize",$rea8,$g1);
$f10 = new Film("Lone Ranger","2017",94,"Colette Et Berthe Mavallée",$rea7,$g2);
$f11 = new Film("Transsiberian","1983",113,"Georgette Tousskjebouf",$rea6,$g3);
$f12 = new Film("Dernier train pour Busan ","1988",104,"Gilles S. Desplumes",$rea5,$g4);
$f13 = new Film("Snowpiercer, le Transperceneige","2001",91,"Jérémy Unmantopourlivère",$rea4,$g5);
$f14 = new Film("The Passenger","2019",82,"Juda Nanasse Éjudas Bricot",$rea3,$g6);
$f15 = new Film("Piège à grande vitesse","2005",73,"Justine Ptitghoute Et Sa Sœur Anne-Corinne Ptitghoute",$rea2,$g7);
$f16 = new Film("Le rail","2009",79,"Marie-Ange Pluvieux, Marie-Ange Heureuxs",$rea1,$g8);

$Casting1 = new Casting($a1,$f1,$ro1);
$Casting2 = new Casting($a2,$f2,$ro2);
$Casting3 = new Casting($a3,$f3,$ro3);
$Casting4 = new Casting($a4,$f4,$ro4);
$Casting5 = new Casting($a5,$f5,$ro5);
$Casting6 = new Casting($a6,$f6,$ro6);
$Casting7 = new Casting($a7,$f7,$ro7);
$Casting8 = new Casting($a8,$f8,$ro8);
$Casting9 = new Casting($a1,$f2,$ro3);
$Casting10 = new Casting($a2,$f3,$ro4);
$Casting11 = new Casting($a3,$f4,$ro5);
$Casting12 = new Casting($a4,$f5,$ro6);
$Casting13 = new Casting($a5,$f6,$ro7);
$Casting14 = new Casting($a6,$f7,$ro8);
$Casting15 = new Casting($a7,$f8,$ro1);
$Casting16 = new Casting($a8,$f1,$ro2);

// $rea1->getInfoRealisateur();
// $g1->getInfoTousLesFilmsDunGenre();
// $a1->getInfoActeur();
// $f1->getInfoFilm();


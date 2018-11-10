<?php
include 'cnx.php';

$sql=$bdd->prepare("SELECT * from acteur, jouer where acteur.codeActeur = jouer.numActeur  and numFilm = '".$_GET['idFilm']."'");
$sql->execute();

$lesFilms = $sql->fetchAll(PDO::FETCH_ASSOC);
foreach($lesFilms as $ligne)
{ 
    echo"<div id=idActeur class=cine3 >";
        echo"<section class=divtext>";
            echo"<p>".$ligne['codeActeur']."</p>".'</br>';
            echo $ligne['nomActeur'];
        echo"</section>";
        echo "<img src=".$ligne['imageActeur'].">";
    echo"</div>";
   
}
?>
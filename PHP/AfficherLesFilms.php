<?php
include 'cnx.php';

$sql=$bdd->prepare("SELECT * from film, projeter where film.codeFilm = projeter.numFilm  and numCinema = '".$_GET['idCinema']."'");
$sql->execute();

$lesFilms = $sql->fetchAll(PDO::FETCH_ASSOC);
foreach($lesFilms as $ligne)
{ 
    echo"<div id=idfilm class=cine2>";
        echo"<section class=divtext>";
            echo"<p>".$ligne['codeFilm']."</p>".'</br>';
            echo $ligne['nomFilm'];
        echo"</section>";
        echo "<img src=".$ligne['imageFilm'].">";
    echo"</div>";
   
}

?>
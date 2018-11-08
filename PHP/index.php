<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link rel="stylesheet" type="text/css" href="../CSS/CSS.css">
        <script type="text/javascript" src="../JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="../JS/fonctions.js"></script>
    </head>
    <body>
        <?php
            include 'cnx.php';

            $sql = $bdd->prepare("select * from cinema ");
            $sql->execute();
            foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<div id=cinema >";
                    echo"<section class=divtext>";
                        echo"<div id=Test onclick='AfficherLesFilms()'>";
                            echo "<p>".$ligne['codeCine']."</p>".'</br>';
                        echo"</div>";
                        echo $ligne['nomCine'];
                    echo"</section>";
                    echo "<img src=".$ligne['imageCine'].">";
                    
                echo "</div>";
            }
            
        ?>
        <div id='divFilms'></div>
    </body>
</html>
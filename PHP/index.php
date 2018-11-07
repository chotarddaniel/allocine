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
                echo "<img src=".$ligne['imageCine']."  width='250' height='250'>";
            }
            
        ?>
        
    </body>
</html>
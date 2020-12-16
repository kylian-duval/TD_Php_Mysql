<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "fonctionmenu.php";
    menu(); ?>
<?php 
    try {
        $BDD = new PDO('mysql:host=192.168.65.227; dbname=TD2 exo 2 kylian;charset=utf8','kiki', 'kiki');
        //echo '<p>aucun probleme </p>';
        $donneBDD = $BDD->query("SELECT `nom`,`prenom` FROM `medecin` WHERE 1");
    
        while ($tabBdd = $donneBDD -> fetch()){
            echo '<p>'.$tabBdd["nom"]." ".$tabBdd["prenom"].'</p>';
        }
    }catch(Exception $e){

    echo "J'ai eu un problème erreur";
    };

    highlight_file(__FILE__);
    

    ?>
    
</body>
</html>
<?php
function afficher_requet_select($marequete){

    try {
    $BDD = new PDO('mysql:host=192.168.65.227; dbname=TD2 exo 2 kylian;charset=utf8','kiki', 'kiki');
    $donneBDD = $BDD->query("$marequete");
    echo '<table border="2"><tr><td>Nom</td><td>Prenom</td></tr>';
    while ($tabBdd = $donneBDD -> fetch()){  
        echo '<tr>';
        echo '<td align=center><span>' .$tabBdd["nom"]. '</span></td>';
        echo '<td align=center><span>' .$tabBdd["prenom"]. '</span></td>';
        echo '</tr>';
    
    }
    echo '</table>';
}catch(Exception $e){

echo '<span style=color:red> J`ai eu un problème erreur <\span>';
};
};

function InsertMedecin($numSS,$nom,$prénon){

    $BDD = new PDO('mysql:host=192.168.65.227; dbname=TD2 exo 2 kylian;charset=utf8','kiki', 'kiki');
    $roquette = ("INSERT INTO `medecin`(matricule, nom, prenom) VALUE('".$numSS."','".$nom."', '".$prénon."')");

    $BDD->query("$roquette");

}

?>


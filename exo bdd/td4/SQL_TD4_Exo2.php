<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "fonction.php";
     include "fonctionmenu.php";
    menu(); 

    afficher_requet_select("SELECT `nom`,`prenom` FROM `patient` WHERE 1");
    highlight_file(__FILE__);

    ?>
 
</body>

</html>
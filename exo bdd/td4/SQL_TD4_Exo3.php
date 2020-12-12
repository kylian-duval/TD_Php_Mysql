<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "fonction.php"; 
    include "fonctionmenu.php";
    menu(); ?>


    <?php
  InsertMedecin('2000', 'duval', 'kylian');
    highlight_file(__FILE__);

    ?>
 
</body>

</html>
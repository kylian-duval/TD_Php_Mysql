<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "fonction/fonction.php";
    include "fonction.php";
       menu(); ?> 
</head>

<body>
    <?php
    echo '<h1 align=center>fonction appeler 1er foi</h1>';
    tab();
    echo '<h1 align=center>fonction appeler 2eme foi</h1>';
    tab();
    highlight_file((__FILE__))
    ?>
</body>

</html>
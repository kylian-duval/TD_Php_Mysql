﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "fonction.php";
    menu(); ?>
    
<div align=center>
    <table border="5">
        <caption><h3>liste des matières</h3></caption>
        <thead>
            <tr>
                <td></td>
                <th>1er semestre</th>
                <th>2ème semestre</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th rowspan=3>SIO1 </th>
                <td>Sl1, Sl2, Sl3, Sl4</td>
                <td>SI5, SI6</td>
            </tr>
            <tr>
                <td>SLAM</td>
                <td>SISR</td>
            </tr>
            <tr>
            <td>SLAM1, SLAM2</td>
            <td>SISR1, SISR2</td>
            </tr>
            <tr>
                <th rowspan=3>SIO2 </th>
                <td colspan="2">SI7</td>
            </tr>
            <tr>
                <td>SLAM</td>
                <td>SISR</td>
            </tr>
            <tr>
                <td>SlAM3, SLAM4, SLAM5</td>
                <td>SISR3, SISR4, SISR5</td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>

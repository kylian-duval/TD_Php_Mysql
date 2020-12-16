<?php

session_start();

function tab()
{
    echo '<div align= center>
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
</div>';
}

function infoperso($nom,$prenon,$age)
{
    echo '<div align = center><table border="2"><tr><td>Nom</td><td>Prenom</td><td>Age</td></tr>';
        echo '<tr>';
        echo '<td align=center><span>' .$prenon. '</span></td>';
        echo '<td align=center><span>' .$nom. '</span></td>';
        echo '<td align=center><span>' .$age. '</span></td>';
        echo '</tr>';
    echo '</table></div>';

}

function calcul(){


    '<p>';
            
            $tab = array(20, 18, 16, 20, 8);
            $i;
            $result = 0;
            '<p>';
            for ($i = 0; $i < 5; $i++) {
                $result = $tab[$i] + $result;
            }
            '</p>';
    
            $result = $result / $i;
            echo '<span>  la moyenne du tableau est de :' . $result . '</span>';
            
            
        '</p>';
    }


function connection(){

if (isset($_SESSION['login'])){
 echo '<form action="" method="post">
 <input type="submit" name="deco" value="Déconection" />
 <p><a href="http://www.la-providence.net/">lien secret</a></p>
 </div></form>';
}else{
echo'<form action="" method="post">
        <p><input type="text" name="login" placeholder="entrée le login"> </p>
        <p><input type="password" name="mdp" placeholder="votre mots de passe"> </p>
        <div><input type="submit" name="valide" value="Connection" /> <p> login = admin , password = 1234 </p></div>
    


</form>';
}
$login = 'admin';
$password = '1234';
if (isset($_POST['valide'])) {
if ($_POST['login'] == $login) {
if ($_POST['mdp'] == $password) {
$_SESSION['login'] = $_POST['login'];
echo '<meta http-equiv="refresh" content="0">';

} else echo 'le mot de passe est incorrect. ';
} else echo 'le login est inconnu. ';

}

if(isset($_POST['deco'])){
session_destroy();
echo '<meta http-equiv="refresh" content="0">';
}
}

?>
﻿<html>

<head>
    <title> formulaire 1</title>
    <?php include "fonction.php";
    menu(); ?>
    <div>
        <p>
            <span>Civilité:</span>
            <input type="radio" id="huey" name="drone" value="huey" checked>
            <label for="huey">Mr</label>
            <input type="radio" id="dewey" name="drone" value="dewey">
            <label for="dewey">Mme ou Mlle</label>
        </p>
        <p>
            <span>Nom:</span>
            <input type="text" id="Nom" name="Nom">
        </p>
        <p>
            <span>Prénom:</span>
            <input type="text" id="Prénom" name="Prénom">
        </p>
        <p>
            <span>Date de naissance:</span>
            <select name="jour" id="jour-select">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <select name="mois" id="mois-select">
                <option value=""></option>
                <option value="Janvier">Janvier</option>
                <option value="Février">Février</option>
                <option value="Mars">Mars</option>
                <option value="Avril">Avril</option>
                <option value="Mai">Mai</option>
                <option value="Juin">Juin</option>
                <option value="Juillet">Juillet</option>
                <option value="Août">Août</option>
                <option value="Septembre">Septembre</option>
                <option value="Octobre">Octobre</option>
                <option value="Novembre">Novembre</option>
                <option value="Décembre">Décembre</option>
            </select>
            <span>Année:</span>
            <input type="text" id="Année" name="Année">
        </p>
        <p>
            <span>Adresse:</span>
            <span>Numéro:</span>
            <input type="text" id="Numéro" name="Numéro">
            <span>Rue:</span>
            <input type="text" id="Rue" name="Rue">
            <span> Code postal:</span>
            <input type="text" id="Code postal" name="Code postal">
        </p>
        <p>
            <span>Ville:</span>
            <input type="text" id="Ville" name="Ville">
        </p>
        <p>
            <span>Numéro de téléphone:</span>
            <input type="text" id="téléphone" name="téléphone">
        </p>
        <p>
            <span>Adresse mail:</span>
            <input type="text" id="formulaire.txt" name="formulaire.txt">
        </p>
    </div>
    <div>
        <p>
            <form action='' method="$_POST">
                <input type="submit" value="envoyé">
            </form>
        </p>
    </div>
    </body>

</html>
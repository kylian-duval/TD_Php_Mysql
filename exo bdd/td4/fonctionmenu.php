<?php function menu()
{ ?>
  <link rel="stylesheet" href="../../menu.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript">
    $(function() {
      if ($.browser.msie && $.browser.version.substr(0, 1) < 7) {
        $('li').has('ul').mouseover(function() {
          $(this).children('ul').show();
        }).mouseout(function() {
          $(this).children('ul').hide();
        })
      }
    });
  </script>
  </head>

  <body>

    <ul id="menu">
      <li><a href="../../index.php">Accueil</a></li>
      <li>
        <a href="#">EXERCICE HTML</a>
        <ul>
          <li>
            <a href="../../html/exo1.php">EXERCICE 1</a>
          </li>
          <li>
            <a href="../../html/exo2.php">EXERCICE 2</a>
          </li>
          <li>
            <a href="../../html/tableau.php">EXO TABLEAU</a>
          </li>
          <li>
            <a href="../../html/formulaire.php">EXO FORMULAIRE</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#">EXERCICE CSS</a>
        <ul>
          <li>
            <a href="../../ExoCss_1.php">EXERCICE 1</a>
          </li>
          <li>
            <a href="../../ExoCss_2.php">EXERCICE 2</a>
          </li>
          <li>
            <a href="../../ExoCss_3.php">EXERCICE 3</a>
          </li>
          <li>
            <a href="../../ExoCss_4.php">EXERCICE 4</a>
          </li>
          <li>
            <a href="../../ExoCss_1a.php">EXERCICE 1a</a>
          <li>
            <a href="../../ExoCss_2a.php">EXERCICE 2a</a>
          </li>
        </ul>
      </li>
      <li align=center>
        <a href="#">Exercice php</a>
        <ul>
          <li>
            <a href="#">PARTIE 1</a>
            <ul align=left>
              <li>
                <a href="../../exercicephp-part-1/exercice1.php">EXERCICE 1</a>
              </li>
              <li>
                <a href="../../exercicephp-part-1/exercice2_1.php">EXERCICE 2.1</a>
              </li>
              <li>
                <a href="../../exercicephp-part-1/exercice2_2.php">EXERCICE 2.2</a>
              </li>
              <li>
                <a href="../../exercicephp-part-1/exercice3.php">EXERCICE 3</a>
              </li>
              <li>
                <a href="../../exercicephp-part-1/exercice4.php">EXERCICE 4</a>
              </li>
              <li>
                <a href="../../exercicephp-part-1/exercice5.php">EXERCICE 5</a>
              </li>
              <li>
                <a href="../../exercicephp-part-1/exercice6.php">EXERCICE 6</a>
              </li>
              <li>
                <a href="../../exercicephp-part-1/exercice7.php">EXERCICE 7</a>
              </li>
              <li>
                <a href="../../exercicephp-part-1/exo-final.php">EXO FINAL</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">PARTIE 2</a>
            <ul align=left>
              <li>
                <a href="../../exercicephp-part-2/PHP_Partie2_Exo1.php">EXERCICE 1</a>
              </li>
              <li>
                <a href="../../exercicephp-part-2/PHP_Partie2_Exo2.php">EXERCICE 2</a>
              </li>
              <li>
                <a href="../../exercicephp-part-2/PHP_Partie2_Exo3.php">EXERCICE 3</a>
              </li>
              <li>
                <a href="../../exercicephp-part-2/PHP_Partie2_ExoFinal.php">EXERCICE FINAL</a>
              </li>
            </ul>
          </li>
          <li>
          </li>
        </ul>
      </li>
      <li align=center>
        <a href="#">Exercice SQL</a>
        <ul>
          <li>
            <a href="#">TD 1</a>
            <ul align=left>
              <li>
                <a href="../td1/indexexo.php">EXERCICE 1 A 7</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">TD 2</a>
            <ul align=left>
              <li>
                <a href="../td2/indexexo.php">EXERCICE 1 A 3</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">TD 3</a>
            <ul align=left>
              <li>
                <a href="../td3/SQL_TD3_Exo2.php">EXO 2 REQUETTE 1 A 9</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">TD 4</a>
            <ul>
              <li>
                <a href="SQL_TD4_Exo1.php">EXERCICE 1</a>
              </li>
              <li>
                <a href="SQL_TD4_Exo2.php">EXERCICE 2</a>
              </li>
              <li>
                <a href="SQL_TD4_Exo3.php">EXERCICE 3</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  <?php } ?>
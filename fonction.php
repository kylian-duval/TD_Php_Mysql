<?php function menu()
{ ?>
  <link rel="stylesheet" href="menu.css">
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
  <!-- AdPacks -->
  </head>

  <body>

    <ul id="menu">
      <li><a href="">Accueil</a></li>
      <li>
        <a href="#">EXERCICE HTML</a>
        <ul>
          <li>
            <a href="/html/exo1.php">EXERCICE 1</a>
          </li>
          <li>
            <a href="/html/exo2.php">EXERCICE 2</a>
          </li>
          <li>
            <a href="/html/formulaire.php">EXO TABLEAU</a>
          </li>
          <li>
            <a href="/html/tableau.php">EXO FORMULAIRE</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#">EXERCICE CSS</a>
        <ul>
          <li>
            <a href="#">EXERCICE 1</a>
          </li>
          <li>
            <a href="#">EXERCICE 2</a>
          </li>
          <li>
            <a href="#">EXERCICE 3</a>
          </li>
          <li>
            <a href="#">EXERCICE 4</a>
          </li>
          <li>
            <a href="#">EXERCICE 5</a>
          <li>
            <a href="#">EXERCICE 6</a>
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
                <a href="#">EXERCICE 1</a>
              </li>
              <li>
                <a href="#">EXERCICE 2</a>
              </li>
              <li>
                <a href="#">EXERCICE 3</a>
              </li>
              <li>
                <a href="#">EXERCICE 4</a>
              </li>
              <li>
                <a href="#">EXERCICE 5</a>
              </li>
              <li>
                <a href="#">EXERCICE 6</a>
              </li>
              <li>
                <a href="#">EXERCICE 7</a>
              </li>
              <li>
                <a href="#">EXERCICE 8</a>
              </li>
              <li>
                <a href="#">EXERCICE 9</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">PARTIE 2</a>
            <ul align=left>
              <li>
                <a href="#">EXERCICE 1</a>
              </li>
              <li>
                <a href="#">EXERCICE 2</a>
              </li>
              <li>
                <a href="#">EXERCICE 3</a>
              </li>
              <li>
                <a href="#">EXERCICE FINAL</a>
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
                <a href="#">EXERCICE 1 A 7</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">TD 2</a>
            <ul align=left>
              <li>
                <a href="#">EXERCICE 1 A 3</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">TD 3</a>
            <ul align=left>
              <li>
                <a href="#">EXO 2 REQUETTE 1 A 9</a>
              </li>
            </ul>
          </li>
          <li>
          <a href="#">TD 4</a>
          <ul>
            <li>
              <a href="#">EXERCICE 1</a>
            </li>
            <li>
              <a href="#">EXERCICE 2</a>
            </li>
            <li>
              <a href="#">EXERCICE 3</a>
            </li>
          </ul>
        </li>
        </ul>
      </li>
    </ul>

    <br><br><br>
  <?php } ?>
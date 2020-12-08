<?php function menu()
{ ?>
  <meta charset="utf-8">
  <link rel="stylesheet" href="menu.css">
  <title>Un menu déroulant en CSS3</title>
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
        <a href="#">Categories</a>
        <ul>
          <li>
            <a href="#">CSS</a>
            <ul>
              <li><a href="#">Item 11</a></li>
              <li><a href="#">Item 12</a></li>
              <li><a href="#">Item 13</a></li>
              <li><a href="#">Item 14</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Graphic design</a>
            <ul>
              <li><a href="#">Item 21</a></li>
              <li><a href="#">Item 22</a></li>
              <li><a href="#">Item 23</a></li>
              <li><a href="#">Item 24</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Development tools</a>
            <ul>
              <li><a href="#">Item 31</a></li>
              <li><a href="#">Item 32</a></li>
              <li><a href="#">Item 33</a></li>
              <li><a href="#">Item 34</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Web design</a>
            <ul>
              <li><a href="#">Item 41</a></li>
              <li><a href="#">Item 42</a></li>
              <li><a href="#">Item 43</a></li>
              <li><a href="#">Item 44</a></li>
            </ul>
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
                <ul>
                  <li>
                    <a href="#">Work 311</a>
                  </li>
                  <li>
                    <a href="#">Work 312</a>
                  </li>
                  <li>
                    <a href="#">Work 313</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">Work 32</a>
                <ul>
                  <li>
                    <a href="#">Work 321</a>
                  </li>
                  <li>
                    <a href="#">Work 322</a>
                  </li>
                  <li>
                    <a href="#">Work 323</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">Work 33</a>
                <ul>
                  <li>
                    <a href="#">Work 331</a>
                  </li>
                  <li>
                    <a href="#">Work 332</a>
                  </li>
                  <li>
                    <a href="#">Work 333</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li>
        <a href="#">About</a>
      </li>
      <li>
        <a href="#">Contact</a>
      </li>
    </ul>

    <br><br><br>



  <?php } ?>
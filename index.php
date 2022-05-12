<!DOCTYPE html>
<html>
  <head>
    <script  type="text/javascript" src="https://codesandbox.io/public/sse-hooks/sse-hooks.f648b14c15c640a14a557113a991cb8d.js"></script>
    <script  type="text/javascript" src="https://codesandbox.io/static/js/banner.be879265d.js"></script>

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="parent">
      <div class="header-div">
        <img src="logo.png" class="logo" alt="" />
        <h1 class="title">GoldenSkyServer</h1>
        <p id="header-p">IP: GOLDEN-SKY.DE | PC, HANDY & KONSOLE</p>
        
        <!--NAVI-->
        <div class="navigation">
            <a href="#">Startseite </a>
            <a href="#">Regelwerk </a>
            <a href="#">Voten </a>
            <a href="#">Ränge und Funktionen </a>
            <a href="#">WebShop </a>
        </div>
      </div>

      <div class="page-body">
        <div class="content-div">
          <!--$_COOKIE
        
        -->
        <?php

$ip="play.golden-sky.de"; //IP Eintragen
@$abfrage = fsockopen ($ip, 25565, $errno, $errstr, 5); //Port angeben standart: 25565 (Bei Minecraft)

if (!$abfrage) { 

echo 'PENIS1<img scr="offline.png"></img>';  // Wenn Server nicht erreichbar ist, wird das Offlinebild ausgegeben.

}
else {

echo 'PENIS2<img scr="online.png"></img>'; //Wenn der Server erreichbar ist, wird diese Grafik angezeigt

}
?>


          <h2>Der Server</h2>
          <p>
            Wir sind ein vielf&auml;ltiger, sich stetig entwickelnder Minecraft
            Server und bestehen seit 2013. Damals noch f&uuml;r Cracked-Spieler
            verf&uuml;gbar, sind wir heute ein offizieller Server und zeichnen
            uns besonders durch unsere parallele Verf&uuml;gbarkeit f&uuml;r
            sowohl Java, als aber auch Spieler der Bedrock Version aus. Unsere
            Schwerpunkte liegen auf den Spielmodi SkyBlock und Survival. Dabei
            erlangen die Spieler R&auml;nge und Funktionen nach Spielzeit. Je
            l&auml;nger sie spielen, desto mehr Rechte und Funktionen stehen
            ihnen zur Verf&uuml;gung. Die Spieler k&ouml;nnen bei uns nicht nur
            ihr eigenes Reich sowohl in den L&uuml;ften, als auch auf der Erde
            erschaffen, sondern auch untereinander Handel treiben. F&uuml;r eine
            geballte Abwechslung und bleibenden SpielspaÃŸ sorgt eine Reihe an
            Features in SkyBlock, sowie die MobArenen und das Quest System. Eine
            detaillierte Erl&auml;uterung folgt nun ...
          </p>
          <div class="pic-with-text">
            <div class="pic-with-text-left">
              <figure>
                <img class="preview-image" src="pic.jpg" alt="no image" />
                <figcaption>SkyBlock</figcaption>
              </figure>
            </div>
            <p>
              In SkyBlock erstellt sich der Spieler eine eigene fliegende Insel.
              Dieser erh&auml;lt dabei zu Beginn eine vorgefertigte
              Starterinsel, welche die Grundlage f&uuml;r sein Abenteuer in
              luftiger H&ouml;he darstellt. Am Cobble Generator erfarmt sich der
              SkyBeginner dann seine Rohstoffe, die er f&uuml;r den Anfang
              braucht, darunter diverse Steine und Erze. Gleichzeitig absolviert
              er die Quests, um neue und steigend wertvollere Items und den
              Fortschritt im Spiel zu erlangen. Durch das
              spielmodus&uuml;bergreifende mcMMO profitiert er zudem von
              relevanten Vorteilen im Alltag von Minecraft. Ab dem Rang SkyProfi
              erh&auml;lt der Spieler Zutritt zu den Caverns, in denen er noch
              schneller Rohstoffe farmen kann und sich den widerst&auml;ndigen
              Kreaturen stellen und sein K&ouml;nnen beweisen muss. Mit den
              Quests und den nun verf&uuml;gbaren wertigeren Items kann der
              Spieler sowohl sein Leben erh&ouml;hen, als auch seine
              R&uuml;stung und seinen Schaden erweitern. Ab dem Rang SkyExperte
              erh&auml;lt der Spieler Zugang zum End und hat nun Zugriff auf
              weitere Items und Bl&ouml;cke.....
            </p>
            <p>
              Der SkyBlock Modus hat noch viel mehr zu bieten. Bist du
              interessiert? Dann joine uns jetzt &uuml;ber PC, Handy oder
              Konsole und schaffe dir deinen ganz eigenen Eindruck!
            </p>
          </div>

          <div class="pic-with-text">
            <div class="pic-with-text-right">
              <figure>
                <img class="preview-image" src="pic.jpg" alt="no image" />
                <figcaption>Survival</figcaption>
              </figure>
            </div>
            <p>
              In Survival wird der Spieler in die bloÃŸe Welt von Minecraft
              geschmissen, er hat nichts! Doch erstmal in der Farmwelt
              angekommen, steht ihm die ganze Welt offen. Grenzenlose
              Erkundungstouren, ein weiter Marsch, unz&auml;hlige Biome und
              manchmal sogar gef&auml;hrliche Kreaturen warten auf ihn. Von der
              Farmwelt auf die Erde zur&uuml;ckgekehrt kann sich der Wood sein
              erstes kleines Grundst&uuml;ck definieren und bebauen... Der
              Beginn seines Imperiums. Als Iron erlangt er Zugang zum Nether und
              damit Zugang zu Netherstuff, als Gold zum End und Zugang zu
              unz&auml;hligen Festungen. Mit den R&auml;ngen steigt dann auch
              die Gr&ouml;ÃŸe seines Grundst&uuml;ckes. Durch das K&auml;mpfen in
              den MobArenen erlangt er Abwechslung und wertvolle Items. Zwar
              gibt es im Gegensatz zum SkyBlock Modus keine Quests, jedoch gibt
              es Jobs! Der Spieler kann einen Job annehmen und damit sein
              Imperium durch Spielerhandel finanzieren. Weiter profitiert der
              Spieler auch hier vom spielmodus&uuml;bergreifenden mcMMO System,
              welches den Alltag in Minecraft um einiges erleichtern kann. Auf
              den erspielten L&auml;ndereien kann der eigenen Kreativit&auml;t
              freien Lauf gelassen werden und durch Jobs k&ouml;nnen die eigenen
              F&auml;higkeiten wie Leben, R&uuml;stung und Schaden verbessert
              werden.
            </p>
            <p>
              Der Survival Modus hat dich &uuml;berzeugt? Dann joine uns jetzt
              &uuml;ber PC, Handy oder Konsole und schaffe dir deinen ganz
              eigenen Eindruck!
            </p>
          </div>

          <p>
            Zum jetzigen Zeitpunkt sind noch nicht alle obig genannten Features
            verf&uuml;gbar, wir sind jedoch dran!
          </p>
        </div>
        <div class="sidebar-div">
          <h2>Neuigkeiten</h2>
          <p>Hier steht alles ne....</p>
        </div>
      </div>

      <div class="footer-div">
        <p>&copy; 2013 - 2022 by GoldenSkyServer</p>
      </div>
      <!-- Cookies popup -->
      <div class="popup" id="popup">
        <div class="popupText">
          <p class="blackP">
            Um euch das bestm&ouml;gliche Erlebnis auf unserer Website bieten zu
            k&ouml;nnen, verwenden wir Cookies.
          </p>
        </div>
        <div class="popupButtons">
          <p>
            <button
              class="minecraft-btn mx-auto w-64 text-center text-white truncate p-1 border-2 border-b-4 hover:text-yellow-200"
              id="cookiePopupId"
            >
              Alles Klar !
            </button>
          </p>
        </div>
      </div>
      <div id="popup-how-to-join" class="popup-how-to-join">
          <div id="popup-how-to-join-content" class="popup-how-to-join-content">
              <div id="close-x" class="close-x"><p>X</p></div>
            <h1>Java Edition</h1>
            <p>Im Folgenden ist eine Anleitung zu sehen, wie ihr den Server in der Java Edition von Minecraft hinzufügt.</p>
            <img class="preview-image-gif" src="java.gif" alt="no gif">
            <h1>Bedrock Edition</h1>
            <p>Im Folgenden ist eine Anleitung zu sehen, wie ihr den Server in der Bedrock Edition von Minecraft hinzufügt. Diese
                umfasst die Versionen für Android, iOS, Nintendo Switch, PlayStation, XBox und weitere Konsolen. Spieler der Bedrock Edition
                benötigen <b>KEINEN</b> Java Account und sind im Spiel mit einem Punkt vor der Namen gekennzeichnet.
            </p>
            <img class="preview-image-gif" src="bedrock.gif" alt="no gif">
          </div>
    </div>
    </div>
    <script src="javascript.js"></script>
  </body>
</html>

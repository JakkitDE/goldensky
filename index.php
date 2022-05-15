<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body ondragstart="return false">
    <div class="parent">
      <div class="header-div">
        <img src="logo.png" class="logo" alt="" />
        <h1 class="title">GoldenSkyServer</h1>
        <p id="header-p">FÜR PC, HANDY & KONSOLE</p>
		
        <!--NAVI-->
        <div class="navigation">
            <?php
				include('menu.html');
				// MENÜ
			?>
        </div>
      </div>

      <div class="page-body">
        <div class="content-div">
			<?php
				if(isset($_GET['page'])){
					$page = $_GET['page'];
					switch($page){
						case "home":
							include('home.html');
							break;
						case "rules":
							include('regelwerk.html');
							break;
						case "votes":
							include('voten.html');
							break;
						case "ranks":
							include('raenge.html');
							break;
						case "shop":
							include('webshop.html');
							break;
						default:
							include('home.html');
					}
				}else{
					include('home.html');
				}
			?>
          
        </div>
        <div class="sidebar-div">
			<?php
				$ip="play.golden-sky.de"; //IP Eintragen
				@$abfrage = fsockopen ($ip, 25565, $errno, $errstr, 5); //Port angeben standart: 25565 (Bei Minecraft)
				if (!$abfrage) {
					echo "<p class=\"right\"><b>Server Status </b><img class=\"status-image\" src=\"offline.png\"></p>";  // Wenn Server nicht erreichbar ist, wird das Offlinebild ausgegeben.
				}else {
					echo "<p class=\"right\"><b>Server Status </b><img class=\"status-image\" src=\"online.png\"></p>"; //Wenn der Server erreichbar ist, wird diese Grafik angezeigt
				}
			?>
		
          <h2>Neuigkeiten</h2>
          <?php
			include('news.html');
			//SIDEBAR NEWS
		  ?>
        </div>
      </div>

      <div class="footer-div">
        <?php
			include('footer.html');
		?>
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
            <?php
				include('how_to_join.html');
				//HOW TO JOIN POPUP
			?>
          </div>
    </div>
    </div>
    <script src="javascript.js"></script>
  </body>
</html>


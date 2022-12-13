<?php
  // require('../config/config.php');
  require_once ('sections/header.php');

  if (isset($_SESSION["userID"])) {
    $userID = $_SESSION["userID"];
  } else {
    $userID = "undefined";
  }
  
?>
    <link rel="stylesheet" href="../style/gamecorner.css">
    <main class="flexer">
      <div class="flexer" id="gameCornerMascot">
        <img src="../media/alien/GameCornerAlien.png">
        <div id="talkPoint"></div>
        <p class="mascotTalk" id="gameCornerSpeech">
          Here's where all the magic happens - the Game Corner! Your rank is based on your top scores from each game combined. So give these games your all and improve your high scores in each game to climb the ranks! Get gaming and good luck!
        </p>
      </div>
    </main>
  </body>

  <script> 
    var userID = <?= $userID?>
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../script/nav.js"></script>
  <script src="../script/data.js"></script>
  <script src="../script/functions.js"></script>
  <script src="../script/script.js"></script>
</html>
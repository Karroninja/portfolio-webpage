<?php
    // ob_start(); 
    // require('../config/config.php');
    require_once 'sections/header.php';
?>
<link rel="stylesheet" href="../style/abotus.css">
<main>
    <div id="aboutGrid">
        <div class="aboutCrewDiv btnHolder" id="aboutJohanna">
            <div class="pBtn"></div>
            <button class="pBtn">Johanna</button>
            <div class="pBtn"></div>
        </div>
        <div class="aboutCrewDiv btnHolder" id="aboutKarolinelindroos">
            <div class="pBtn"></div>
            <button class="pBtn">Karoline Lindroos</button>
            <div class="pBtn"></div>
        </div> 
        <div class="aboutCrewDiv btnHolder" id="aboutPetter">
            <div class="pBtn"></div>
            <button class="pBtn">Petter</button>
            <div class="pBtn"></div>
        </div> 
        <div class="aboutCrewDiv btnHolder" id="aboutLudvig">
            <div class="pBtn"></div>
            <button class="pBtn">Ludvig</button>
            <div class="pBtn"></div>
        </div> 
        <div class="flexer" id="aboutInfoPlanet">
            <div>
                <p>This website is the final project in the course ”Databasbaserad publicering” at Malmö University. Examiner is Erik Pineiro.</p>
            </div>
        </div> 
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php if ($isLoggedIn) { ?>
    <script src="../script/data.js"></script>
    <script src="../script/functions.js"></script>
    <script src="../script/script.js"></script>
<?php } else { ?>
    <script src="../script/aboutus.js"></script>
<?php } ?>
</body>
</html>
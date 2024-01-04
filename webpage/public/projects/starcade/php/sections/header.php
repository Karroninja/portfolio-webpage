<?php
    session_start();
    $isLoggedIn = $_SESSION["userID"] ?? "";
    
    if ($_SERVER["SCRIPT_NAME"] == "/index.php" || $_SERVER["SCRIPT_NAME"] == "/projects/starcade/index.php"){ 
        include_once "php/assets/functions.php";
        $link_alien_icon = "./media/alien/icon.png";
        $link_style_main= "./style/style.css";
        $link_style_nav= "./style/nav.css";
        $link_nav_js = "./script/nav.js";
    } else {
        include_once "assets/functions.php";
        $link_alien_icon = "../media/alien/icon.png";
        $link_style_main= "../style/style.css";
        $link_style_nav= "../style/nav.css";
        $link_nav_js = "../script/nav.js";
    }

    function aLink($href, $text, $id = "") {
        // om användaren är inne på tex index.php så ska den a länken i naven (hamburgaremenyn)
        // ha en klass(med rules som ex underscore) för att användaren ska kunna se vart han är inne någonstans.  
        if ($href === $_SERVER["SCRIPT_NAME"]) {
            return "<a class='active' href='$href'>$text</a>";
        }
        return "<a id='$id' href='$href'>$text</a>";
    }

    $username = "";

    // om användaren är inloggad så hämtar vi användarnamnet + totalpoints som vi sedan kan lägga till på sidan. 
    if ($isLoggedIn) {
        $username =  getInfoAboutUserById($_SESSION["userID"], "userName");
        $totalPoints = getInfoAboutUserById($_SESSION["userID"], "totalPoints");
    }
    $scriptNameToString = strval($_SERVER["SCRIPT_NAME"]);
    // $firstCharactersScriptName = substr($scriptNameToString, 0, 4);
    $firstCharactersScriptName = substr($scriptNameToString, 0, 4);
    // $path = $_SERVER['SCRIPT_FILENAME'];
    // $pathName = basename($path);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Starcade</title>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?=$link_style_main?>">
        <link rel="stylesheet" href="<?=$link_style_nav?>">
        <link rel="icon" href="<?=$link_alien_icon?>">
    </head>
    <body>
        <header>
        </header>
        <nav>
        <?php if ($isLoggedIn) : ?>
            <div class="flexer" id="loggedinInfo">
                <div>
                    <span><?= $username?></span>
                    <span><?= $totalPoints?></span>
                </div>
                <div></div>
            </div>
        <?php endif ?>
            <div id="hamClosed">
                <input id="hamCheckbox" type="checkbox">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div id="hamOpen">
                <div id="hamOpenContent">
                <!-- Om man är inloggad-->
                <?php if ($isLoggedIn) {
                    if ($firstCharactersScriptName == "/php") {
                        echo aLink("/php/commonspace.php", "Commonspace");
                        echo aLink("/php/myspace.php", "Myspace");
                        echo aLink("/php/gamecorner.php", "Game Corner");
                        echo aLink("/php/worldranking.php", "World Ranking");
                        echo aLink("/php/aboutus.php", "About us");
                        echo aLink("admin/logout.php", "Log out", "logout"); 
                    } else { ?>
                        <a href="http://localhost:7777/index.php">
                            <img src="../media/kl-logo.png" alt="KL Logo" class="kl-logo">
                        </a>
                    <?php echo aLink("/projects/starcade/php/commonspace.php", "Commonspace");
                          echo aLink("/projects/starcade/php/myspace.php", "Myspace");
                          echo aLink("/projects/starcade/php/gamecorner.php", "Game Corner");
                          echo aLink("/projects/starcade/php/worldranking.php", "World Ranking");
                          echo aLink("/projects/starcade/php/aboutus.php", "About the Creators");
                          echo aLink("/projects/starcade/php/admin/logout.php", "Log out", "logout");
                    }
                    // Detta kanske behöver ses över sen när jag lägger upp allt på en server.
                } else {
                    if ($_SERVER["SCRIPT_NAME"] == "/projects/starcade/php/gamecorner.php" || 
                        $_SERVER["SCRIPT_NAME"] == "/projects/starcade/php/register.php"   || 
                        $_SERVER["SCRIPT_NAME"] == "/projects/starcade/php/gamescreen.php" ||
                        $_SERVER["SCRIPT_NAME"] == "/projects/starcade/php/aboutus.php") { ?>
                        <a href="http://localhost:7777/index.php">
                            <img src="../media/kl-logo.png" alt="KL Logo" class="kl-logo">
                        </a>
                    <?php echo aLink("../index.php", "Log in");
                          echo aLink("/projects/starcade/php/aboutus.php", "About the Creators");
                    } elseif($_SERVER["SCRIPT_NAME"] == "/projects/starcade/index.php") { ?>
                        <a href="http://localhost:7777/index.php">
                            <img src="./media/kl-logo.png" alt="KL Logo" class="kl-logo">
                        </a>
                    <?php echo aLink("php/gamecorner.php", "Game Corner");
                          echo aLink("/projects/starcade/php/aboutus.php", "About the Creators");
                    }
                } ?>
                </div>
            </div>
        </nav>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?=$link_nav_js?>"></script>
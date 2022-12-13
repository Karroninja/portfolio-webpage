<?php
    // ob_start(); 
    require('../config/config.php');
    require_once 'sections/header.php';
    if(!$isLoggedIn){
        header("Location: ../index.php");
        exit();
    }
?>
    <link rel="stylesheet" href="../style/friends.css">
    <main>
        <section id="userBox">
            <div id="otherSpace"></div>
        </section>
        <section class="flexer" id="lowerBox"></section>
    </main>
</body>

<script> var userID = <?php echo $_SESSION["userID"]?>;</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../script/data.js"></script>
<script> 
    var otherUserID = 
        <?php
            echo $_GET['friend'];
        ?>
</script>
<script src="../script/classes.js"></script>
<script src="../script/functions.js"></script>
<script src="../script/script.js"></script>
</html>
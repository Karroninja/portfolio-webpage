<?php
    include('../config/config.php');
    $title = "Profile";
    include('../view/header.php');
?>
<main class="main">
    <article class="article">
        <img src="img/jag.png" alt="image of me" width="400px" class="main--me"/>
        <h3 class="main--h3">Hello!</h3>
        <h1 class="main--h1">I Am Karoline Lindroos</h1>
        <p>Welcome to my interactive resume, I am a student in modern web developing.</p>
    </article>
    <section class="main--about-me">
        <div class="contact-info">
            <h1>Details</h1>
            <table>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>Karoline Lindroos</td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td>:</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td>:</td>
                    <td>Järna, Sweden</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>lindrooskaroline@gmail.com</td>
                </tr>
            </table>
        </div>
        <div class="about-me">
            <h1>About Me</h1>
            <p>
                I am studying to become a web developer. I have good knowledge of front-end and back-end techniques. I am a person who likes to learn new things and expand my knowledge. I love structure and order and I love spending time on fixing little details. 
            </p>
            <div id="arrowDiv">
                <span class="arrow">&#8594;</span>
                <!-- <a href="downloadpdf.php" taret="_blank">Download CV</a> -->
                <button clasS="btn">Download CV</button>
            </div>
        </div>
    </section>
    <section class="projects" id="projects">
        <h1>Projects</h1>
        <div class="projectdiv carlbarks">
            <div class="projectimg carlbarksimg">
                <img src="\img/carlbarks.png" alt="Carl Barks">
            </div>
            <h2>Fria läromedlet Carl Barks</h2>
            <em>HTML | CSS | JavaScript | jQuery</em>
            <p>Carl Barks was the final webb project for the course “programming for the web” at Malmö University during spring 2020.</p>
            <button class="btn">
                <a href="\projects\Carl_Barks/index.html">SITE</a>
            </button>
            <button class="btn">
                <a href="#">CODE</a>
            </button>
        </div>
        <div class="projectdiv starcade">
            <div class="projectimg">
                <img src="\img/starcade.png" alt="Starcade">
            </div>
            <h2>Starcade</h2>
            <em>HTML | CSS | JavaScript | jQuery | PHP | AJAX</em>
            <p>Starcade was the final webb project for the course “database-based publishing” at Malmö University during autumn 2020.</p>
            <button class="btn">
                <a href="\projects\starcade/index.php">SITE</a>
            </button>
            <button class="btn">
                <a href="#">CODE</a>
            </button>
        </div>
    </section>
</main>
<?php include('../view/footer.php')?>
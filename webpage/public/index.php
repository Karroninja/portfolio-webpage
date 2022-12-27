<?php
    include('../config/config.php');
    $title = "Profile";
    include('../view/header.php');
?>
<!-- <main class="main"> -->
<article class="article">
    <picture class="main--me">
        <source media="(min-width: 767px)" srcset="img/jag1.png">
        <img src="img/jag.jpg" alt="image of me" class="main--me">
    </picture>
    <h3 class="main--h3">Hello!</h3>
    <h1 class="main--h1">I Am Karoline Lindroos</h1>
    <p class="main--p">Welcome to my resume, I am a student in modern web developing.</p>
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
                <td>Nationality</td>
                <td>:</td>
                <td>Swedish</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>hello@klindroos.se</td>
            </tr>
        </table>
    </div>
    <div class="about-me">
        <h1>About Me</h1>
        <p>
            I have good knowledge of front-end and back-end techniques. I am a person who likes to learn new things and expand my knowledge. I love structure and order and I love spending time on fixing little details. 
        </p>
        <div id="arrowDiv">
            <span class="arrow">&#8594;</span>
            <a href="\files/resume-english-karoline-lindroos.pdf" class="btn" role="button" download>Download Resume</a>
        </div>
    </div>
</section>
<section class="abilities" id="abilities">
    <div class="wrapper abilities-div">
        <h1>Abilities</h1>
        <div class="skills">
            <h2>Skills</h2>
            <table>
                <tr>
                    <th>HTML 5</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                </tr>
                <tr>
                    <th>CSS 3</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                </tr>
                <tr>
                    <th>jQuery</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>
                <tr>
                    <th>JavaScript</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>
                <tr>
                    <th>PHP</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>
                <tr>
                    <th>Responsive Design</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>                
                <tr>
                    <th>SASS / SCSS</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>
                <tr>
                    <th>Interaction Design</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>                
                <tr>
                    <th>PDO</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>
                <tr>
                    <th>JSON</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th>SQL / SQLite</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>
                <tr>
                    <th>Pico</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>
                <tr>
                    <th>Git / Github</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>
                <tr>
                    <th>Node.js</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>
                <tr>
                    <th>Java</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>
                <tr>
                    <th>C#</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>
                <tr>
                    <th>C</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>
                <tr>
                    <th>React.js</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>
                <tr>
                    <th>Python</th>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>
            </table>
        </div>
        <!-- <div class="language">
            <h2>Languages</h2>
            <table>
                <tr>
                    <td>Swedish</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                </tr>
                <tr>
                    <td>English</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>Norwegian</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond filled">&diams;</td>
                    <td class="diamond">&diams;</td>
                    <td class="diamond">&diams;</td>
                </tr>
            </table>
        </div> -->
    </div>
</section>
<section class="projects" id="projects">
    <div class="wrapper">
        <h1>Projects</h1>
        <div class="projectdiv consult">
            <a href="http://www.student.bth.se/~kalr22/dbwebb-kurser/design/me/kmom10/proj/">
                <div class="projectimg">
                    <img src="\img/consult.jpg" alt="Screenshot Consult">
                </div>
                <h2>Consult</h2>
                <em>HTML | CSS | SASS | JavaScript | PHP</em>
                <p>Consult was the final project for the course "web design & usability" at Bleking Institute of Technology during autumn 2022.</p>
            </a>
            <div class="btn-div">
                <a href="http://www.student.bth.se/~kalr22/dbwebb-kurser/design/me/kmom10/proj/" class="btn" role="button">SITE</a>
                <!-- <a href="https://github.com/Karroninja/portfolio-webpage/tree/main/webpage/public/projects/starcade" class="btn" role="button">CODE</a> -->
            </div>
        </div>
        <div class="projectdiv carlbarks">
            <a href="\projects\memorygame/game.html">
                <div class="projectimg carlbarksimg">
                    <img src="\img/movingmemory.jpg" alt="Screenshot moving memory game">
                </div>
                <h2>Carl Barks Moving Memory Game</h2>
                <em>HTML | CSS | JavaScript | jQuery</em>
                <p>Carl Barks moving memory game was made during spring 2020. It was a part of a final web project for the course “programming for the web” at Malmö University.</p>
            </a>
            <div class="btn-div">
                <a href="\projects\memorygame/game.html" class="btn" role="button">SITE</a>
                <a href="https://github.com/Karroninja/portfolio-webpage/tree/main/webpage/public/projects/memorygame" class="btn" role="button">CODE</a>
            </div>
        </div>
        <!-- <hr> -->
        <div class="projectdiv starcade">
            <a href="\projects\starcade/index.php">
                <div class="projectimg">
                    <img src="\img/starcade.jpg" alt="Screenshot Starcade">
                </div>
                <h2>Starcade</h2>
                <em>HTML | CSS | JavaScript | jQuery | PHP | AJAX</em>
                <p>Starcade was the final webb project for the course “database-based publishing” at Malmö University during autumn 2020.</p>
            </a>
            <div class="btn-div">
                <a href="\projects\starcade/index.php" class="btn" role="button">SITE</a>
                <a href="https://github.com/Karroninja/portfolio-webpage/tree/main/webpage/public/projects/starcade" class="btn" role="button">CODE</a>
            </div>
        </div>
        <!-- <hr> -->
        <div class="projectdiv bmo">
            <a href="http://www.student.bth.se/~kalr22/dbwebb-kurser/webtec/me/kmom10/public/home.php">
                <div class="projectimg">
                    <img src="\img/bmo.jpg" alt="Screenshot BMO">
                </div>
                <h2>BMO</h2>
                <em>HTML | CSS | PHP | PDO | SQLite</em>
                <p>BMO was the final project for the course "web technologies" at Bleking Institute of Technology during autumn 2022.</p>
            </a>
            <div class="btn-div">
                <a href="http://www.student.bth.se/~kalr22/dbwebb-kurser/webtec/me/kmom10/public/home.php" class="btn" role="button">SITE</a>
                <!-- <button class="btn">
                    <a href="#">CODE</a>
                </button> -->
            </div>
        </div>
    </div>
</section>
<!-- </main> -->
<?php include('../view/footer.php')?>
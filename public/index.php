<?php
    include('../config/config.php');
    $title = "Profile";
    include('../view/header.php');
?>
<!-- <main class="main"> -->
<article class="article">
    <picture class="main--me">
        <!-- <source media="(min-width: 767px)" srcset="img/jag.jpg"> -->
        <img src="img/jag.jpg" alt="image of me" class="main--me">
    </picture>
    <h3 class="main--h3">Hello!</h3>
    <h1 class="main--h1">I Am Karoline Lindroos</h1>
    <p class="main--p">Welcome to my resume, I have a passion for web development.</p>
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
                <td>31</td>
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
            <a href="\files/resume-karoline-lindroos.pdf" class="btn" role="button" download>Download Resume</a>
        </div>
    </div>
</section>
<section class="abilities" id="abilities">
    <div class="wrapper abilities-div">
        <h1 class="title">Abilities</h1>
        <div class="skills">
            <h2>Skills</h2>
            <div class="skill-div">
                <span>HTML 5</span>
                <div class="diamond-div">
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>CSS 3</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>Responsive Design</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>jQuery</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>JavaScript</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>PHP</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>SASS / SCSS</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>Interaction Design</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>Git / Github</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>PDO</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>JSON</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>SQL / SQLite</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>Node.js</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>Java</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>C#</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>C</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>Markdown</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>React.js</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>Python</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>npm</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
        </div>
        <div class="tools">
            <h2>Tools</h2>
            <div class="skill-div">
                <span>Wordpress</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>VS Code</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>Macbook Air</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>Mac Terminal</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>Illustrator</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>Brackets</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>Photoshop</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>Adobe XD</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>Cyberduck</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>Pico</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>Google Lighthouse</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>Indesign</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
        </div>
        <div class="languages">
            <h2>Languages</h2>
            <div class="skill-div">
                <span class="lang-ex">Swedish (moder tongue)</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span>English (fluent)</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                </div>
            </div>
            <div class="skill-div">
                <span class="lang-ex">Norwegian (comprehend)</span>
                <div>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond filled">&diams;</span>
                    <span class="diamond">&diams;</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="projects" id="projects">
    <div class="wrapper">
        <h1 class="title">Projects</h1>
        <div class="projectdiv movies">
            <a href="\projects\movies/index.html" target="_blank">
                <div class="projectimg">
                    <img src="\img/movies.jpg" alt="Screenshot Consult">
                </div>
                <h1>Movies</h1>
                <p class="technologies">React | Html | CSS | API</p>
                <p>This project is created using React, incorporating data from both the Open Movie Database (OMDb) API and the Spotify API. Users can explore movie information sourced from OMDb and enjoy a seamless integration with Spotify to enhance their overall experience.</p>
            </a>
            <div class="btn-div">
                <a href="\projects\movies/index.html" class="btn" role="button" target="_blank">SITE</a>
                <!-- <a href="https://github.com/Karroninja/portfolio-webpage/tree/main/webpage/public/projects/starcade" class="btn" role="button">CODE</a> -->
            </div>
        </div>
        <div class="projectdiv consult">
            <a href="\projects\consult/index.php" target="_blank">
                <div class="projectimg">
                    <img src="\img/consult.jpg" alt="Screenshot Consult">
                </div>
                <h1>Consult</h1>
                <p class="technologies">PICO | Markdown | SASS/SCSS | JavaScript | PHP</p>
                <p>Consult was the final project for the course "web design & usability" at Blekinge Institute of Technology during autumn 2022. An independent web project.</p>
            </a>
            <div class="btn-div">
                <a href="\projects\consult/index.php" class="btn" role="button" target="_blank">SITE</a>
                <!-- <a href="https://github.com/Karroninja/portfolio-webpage/tree/main/webpage/public/projects/starcade" class="btn" role="button">CODE</a> -->
            </div>
        </div>
        <div class="projectdiv carlbarks">
            <a href="\projects\memorygame/game.html" target="_blank">
                <div class="projectimg carlbarksimg">
                    <img src="\img/movingmemory.jpg" alt="Screenshot moving memory game">
                </div>
                <h1>Carl Barks Moving Memory Game</h1>
                <p class="technologies">HTML | CSS | JavaScript | jQuery</p>
                <p>Carl Barks moving memory game was made during spring 2020. It was a part of a final web project for the course “programming for the web” at Malmö University. I was responsible for both conceptualizing and coding the game.</p>
            </a>
            <div class="btn-div">
                <a href="\projects\memorygame/game.html" class="btn" role="button" target="_blank">SITE</a>
                <a href="https://github.com/Karroninja/portfolio-webpage/tree/main/webpage/public/projects/memorygame" class="btn" role="button" target="_blank">CODE</a>
            </div>
        </div>
        <!-- <hr> -->
        <div class="projectdiv starcade">
            <a href="\projects\starcade/index.php" target="_blank">
                <div class="projectimg">
                    <img src="\img/starcade.jpg" alt="Screenshot Starcade">
                </div>
                <h1>Starcade</h1>
                <p class="technologies">HTML | CSS | JavaScript | jQuery | PHP | AJAX</p>
                <p>Starcade was the final webb project for the course “database-based publishing” at Malmö University during autumn 2020. I had responsibility for the PHP backend development.</p>
            </a>
            <div class="btn-div">
                <a href="\projects\starcade/index.php" class="btn" role="button" target="_blank">SITE</a>
                <a href="https://github.com/Karroninja/portfolio-webpage/tree/main/webpage/public/projects/starcade" class="btn" role="button" target="_blank">CODE</a>
            </div>
        </div>
        <!-- <hr> -->
        <div class="projectdiv bmo">
            <a href="http://www.student.bth.se/~kalr22/dbwebb-kurser/webtec/me/kmom10/public/home.php" target="_blank">
                <div class="projectimg">
                    <img src="\img/bmo.jpg" alt="Screenshot BMO">
                </div>
                <h1>BMO</h1>
                <p class="technologies">HTML | CSS | PHP | PDO | SQLite</p>
                <p>BMO was the final project for the course "web technologies" at Blekinge Institute of Technology during autumn 2022. An independent web project.</p>
            </a>
            <div class="btn-div">
                <a href="http://www.student.bth.se/~kalr22/dbwebb-kurser/webtec/me/kmom10/public/home.php" class="btn" role="button" target="_blank">SITE</a>
                <!-- <button class="btn">
                    <a href="#">CODE</a>
                </button> -->
            </div>
        </div>
    </div>
</section>
<!-- </main> -->
<?php include('../view/footer.php')?>
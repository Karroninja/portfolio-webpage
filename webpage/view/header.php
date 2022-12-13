<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Karoline Lindroos">
    <meta name="description" content="Karoline Lindroos Portfolio">
    <link rel="shortcut icon" href="\img\kl-logo-head1.svg"/>
    <link rel="stylesheet" type="text/css" href="\css\style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet"> -->
    <title><?=$title?></title>
</head>
<body>
<nav class="navbar">
    <div class="site-header">
        <div class="logo">
            <a href="./index.php">
                <img src="\img\kl-logo.svg" alt="Logo KL">
            </a>
        </div>
        <a id="nav-toggle" class="nav-toggle" role="button" aria-expanded="true"> 
            <i id="toggler" class="fa fa-bars"></i>
            <!-- <span class="sr-only">Toggle Menu</span> -->
        </a>
    </div>
    <div class="normal-nav" role="navigation">
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="#abilities">Abilities</a></li>
            <li><a href="#projects">Projects</a></li>
        </ul>
    </div>
</nav>
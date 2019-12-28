<!doctype html>
<html>

<head>
    <title>The Upgrade Zone</title>
    <?php
    include 'php/head.php';
    ?>
</head>

<body>
<!-- =====HEADER===== -->
<?php
    $current = "home"; 
    include 'php/header.php';
?>

<!-- =====CONTENT===== -->
<div id="content">
    <h1>Welcome!</h1>
    <p style="text-align: center;">
        Welcome to my website! My online portfolio and host for my programming and art projects, and other gubbins I make.
    </p>
    <a class="navButton" href="games.php">Games<p>Games up for purchase, prototypes, and competition entries.</p></a>
    <a class="navButton" href="projects.php">Projects<p>Miscellaneous programming and real life projects.</p></a>
    <a class="navButton" href="gallery.php">Gallery<p>Drawn and digital art, and 3D modelling.</p></a>
    <a class="navButton" href="videos.php">Videos<p>Edited gameplay, memes, and other videos.</p></a>
    <a class="navButton" href="about.php">About<p>My skills and how to contact me.</p></a>
</div>

<!-- =====FOOTER===== -->
<?php
    include 'php/footer.php';
?>

</body>
</html>
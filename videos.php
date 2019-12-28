<!doctype html>
<html>

<head>
    <title>Videos</title>
    <?php
    include 'php/head.php';
    ?>
</head>

<body>
<!-- =====HEADER===== -->
<?php
    $current = "videos"; 
    include 'php/header.php';
?>

<!-- =====CONTENT===== -->
<div id="content">
    <h1>Videos</h1>

    <div class="gallery">
        <div class="slide hidden" onclick="galleryHideVideo(this)">
            <p>Click anywhere to close</p>
            <iframe width="854" height="480" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="max-width: 100%"></iframe>
        </div>

        <img class="thumb" onclick="galleryShowVideo(this, 'https://www.youtube.com/embed/j7gvZczZHkc')" src="videos/Pyro Takes Skill Thumbnail.png">
        <img class="thumb" onclick="galleryShowVideo(this, 'https://www.youtube.com/embed/9BUily6v0jE')" src="videos/Pirate Demo thumbnail.png">
        <div style="clear: both;"></div>
    </div>

</div>

<!-- =====FOOTER===== -->
<?php
    include 'php/footer.php';
?>

</body>
</html>
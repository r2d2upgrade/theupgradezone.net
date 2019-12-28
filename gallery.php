<!doctype html>
<html>

<head>
    <title>Gallery</title>
    <?php
    include 'php/head.php';
    ?>
</head>

<body>
<!-- =====HEADER===== -->
<?php
    $current = "gallery"; 
    include 'php/header.php';
?>

<!-- =====CONTENT===== -->
<div id="content">
    <h1>Gallery</h1>

    <h2>Digital Art</h2>
    <div class="gallery">
        <div class="slide hidden" onclick="galleryHideSlide(this)">
            <p>Click anywhere to close</p>
            <img src="">
        </div>
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/art/Pirate Demo.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/art/Traffic Boss r2.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/art/Gardener Graffiti 75percent.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/art/Demoman Eyelander 25percent.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/art/Pyro Headshot 2.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/art/Sentinel Headshot.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/art/The Sentinel Destruction 25percent.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/art/The Sentinel Gasmask.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/art/Zakrah 50percent.png">
        <div style="clear: both;"></div>
    </div>


    <h2>3D Modelling</h2>
    <div class="gallery">
        <div class="slide hidden" onclick="galleryHideSlide(this)">
            <p>Click anywhere to close</p>
            <img src="">
        </div>
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/The Sentinel Bust Render 001.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/Duck Token Anim.gif">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/ZK88 Rifle 2 Gold Render 01.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/ZK88 Void Sword Render 01.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/ZK88 Bow.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/Clockwork Sword Test Render 01.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/ZK88 Sword 3 Render 01.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/ZK88 Mech Gattling Gun 02.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/ZK88 Mech Gattling Gun 01.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/ZK88 Staff of Time Render 01.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/ZK88 Empire Rifle Render 01.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/ZK88 Sniper Rifle Render 04.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/ZK88 Sniper Rifle Render 01.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/Spider Cube Render 02.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/Spider Cube Render 01.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/ZK88 Sword 2 Render 03.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/ZK88 Sword 2 Render 02.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/ZK88 Rifle Render 02.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/ZK88 Rifle Render 01.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/ZK88 Blaster Render 02.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/ZK88 Blaster Render 01.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/Alphon Tech Assault Rifle 02.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/Robot Render 03.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/Low Poly Sword 2 Render 2.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/Low Poly Sword 2 Render 1.png">
        <img class="thumb" onclick="galleryShowSlide(this, this.src)" src="gallery/3d/ZK88 Sword  Low Poly Render 1.png">
        <div style="clear: both;"></div>
    </div>

</div>

<!-- =====FOOTER===== -->
<?php
    include 'php/footer.php';
?>

</body>
</html>
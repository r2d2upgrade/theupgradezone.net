<!doctype html>
<html>

<head>
    <title>Projects</title>
    <?php
    include 'php/head.php';
    ?>
</head>

<body>
<!-- =====HEADER===== -->
<?php
    $current = "projects"; 
    include 'php/header.php';
?>

<!-- =====CONTENT===== -->
<div id="content">
    <h1>Projects</h1>

    <!-- =====Minecraft Map Blueprint Generator===== -->
    <div class="accordion" onclick="accordionToggle(this)">Minecraft Map Blueprint Generator <i>(1.0)</i></div>
    <div class="hidden accordionContent">
        <!-- Slideshow -->
        <div class="slideshow split60">
            <img class="slide" onclick="slideshowSetSlide(this, this.src)" src="projects/MinecraftMapInstructionGen/previews/preview_01.png" alt="Preview">
            <img class="thumb" onclick="slideshowSetSlide(this, this.src)" src="projects/MinecraftMapInstructionGen/previews/preview_02.png" alt="Preview">
            <img class="thumb" onclick="slideshowSetSlide(this, this.src)" src="projects/MinecraftMapInstructionGen/previews/preview_03.png" alt="Preview">
            <img class="thumb" onclick="slideshowSetSlide(this, this.src)" src="projects/MinecraftMapInstructionGen/previews/preview_04.png" alt="Preview">
            <img class="thumb" onclick="slideshowSetSlide(this, this.src)" src="projects/MinecraftMapInstructionGen/previews/preview_05.png" alt="Preview">
            <div style="clear: both;"></div>
        </div>
        <!-- Info -->
        <div class="split40">
            <!-- Desc -->
            <p>A tool that turns images into Minecraft Map blueprints that allows you to build map art by hand.</p>
            <!-- Open/Download -->
            <a href="projects/MinecraftMapInstructionGen/MinecraftMapInstructionGen.html" class="downloadButton">Open</a>
        </div>
        <div style="clear: both;"></div>
    </div>

    <!-- =====Perlin Noise Terrain===== -->
    <div class="accordion" onclick="accordionToggle(this)">Small World - Terrain Generator <i>(Beta 1.0)</i></div>
    <div class="hidden accordionContent">
        <!-- Image -->
        <a href="projects/SmallWorld/preview/preview_01.png"><img class="split50" src="projects/SmallWorld/preview/preview_01.png" alt="Preview"></a>
        <!-- Info -->
        <div class="split50">
            <!-- Desc -->
            <p>A little experimental webtoy that lets you fiddle around with terrain generation.</p>
            <!-- Open/Download -->
            <a href="projects/SmallWorld/SmallWorld.html" class="downloadButton">Open</a>
        </div>
        <div style="clear: both;"></div>
    </div>

    <!-- =====Thaumcraft Research Helper===== -->
    <div class="accordion" onclick="accordionToggle(this)">Thaumcraft Research Helper <i>(Beta 1.0)</i></div>
    <div class="hidden accordionContent">
        <!-- Image -->
        <a href="projects/ThaumcraftHelper/preview/preview_01.png"><img class="split50" src="projects/ThaumcraftHelper/preview/preview_01.png" alt="Preview"></a>
        <!-- Info -->
        <div class="split50">
            <!-- Desc -->
            <p>This online program is a helpful tool for the Minecraft Mod Thaumcraft. It calculates the shortest connecting path between two aspects, and shows how you can craft each aspect.</p>
            <!-- Open/Download -->
            <a href="projects/ThaumcraftHelper/ThaumcraftHelper.html" class="downloadButton">Open</a>
        </div>
        <div style="clear: both;"></div>
    </div>


    <!-- =====Tail Simulator===== -->
    <div class="accordion" onclick="accordionToggle(this)">Tail Simulator <i>(1.0)</i></div>
    <div class="hidden accordionContent">
        <!-- Image -->
        <a href="projects/TailSimulator/previews/preview_01.png"><img class="split50" src="projects/TailSimulator/previews/preview_01.png" alt="Preview"></a>
        <!-- Info -->
        <div class="split50">
            <!-- Desc -->
            <p>A joke project that lets you 'simulate' tail physics of different animals.</p>
            <!-- Open/Download -->
            <a href="projects/TailSimulator/TailSimulator.exe" class="downloadButton">Download .exe</a>
        </div>
        <div style="clear: both;"></div>
    </div>


    <!-- =====Minecraft Banner Designer===== -->
    <div class="accordion" onclick="accordionToggle(this)">Minecraft Banner Designer <i>(1.0)</i></div>
    <div class="hidden accordionContent">
        <!-- Slideshow -->
        <div class="slideshow split60">
            <img class="slide" onclick="slideshowSetSlide(this, this.src)" src="projects/MinecraftBannerDesigner/previews/preview_01.png" alt="Preview">
            <img class="thumb" onclick="slideshowSetSlide(this, this.src)" src="projects/MinecraftBannerDesigner/previews/preview_01.png" alt="Preview">
            <img class="thumb" onclick="slideshowSetSlide(this, this.src)" src="projects/MinecraftBannerDesigner/previews/preview_02.png" alt="Preview">
            <div style="clear: both;"></div>
        </div>
        <!-- Info -->
        <div class="split40">
            <!-- Desc -->
            <p>Allows you to design banners for Minecraft and gives you the crafting recipes needed for them.</p>
            <!-- Open/Download -->
            <a href="projects/MinecraftBannerDesigner/MinecraftBannerDesigner.exe" class="downloadButton">Download .exe</a>
        </div>
        <div style="clear: both;"></div>
    </div>


    <!-- =====Colour Picker===== -->
    <div class="accordion" onclick="accordionToggle(this)">Colour Picker <i>(1.0)</i></div>
    <div class="hidden accordionContent">
        <!-- Image -->
        <a href="projects/ColourPicker/previews/preview_01.png"><img class="split50" src="projects/ColourPicker/previews/preview_01.png" alt="Preview"></a>
        <!-- Info -->
        <div class="split50">
            <!-- Desc -->
            <p>Lets you see what the colour values for any pixel on the screen is, including RGB and Hex.</p>
            <!-- Open/Download -->
            <a href="projects/ColourPicker/ColourPicker.exe" class="downloadButton">Download .exe</a>
        </div>
        <div style="clear: both;"></div>
    </div>

</div>

<!-- =====FOOTER===== -->
<?php
    include 'php/footer.php';
?>

</body>
</html>
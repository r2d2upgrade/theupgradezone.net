<header>
    <div id="logo">
        <!-- <h1>The Upgrade Zone</h1> -->
        <img src="images/TheUpgradeZone_Logo.png" alt="Logo">
    </div>
    <div id="menuButton" onclick="document.getElementById('nav').classList.toggle('hidden');"><h1>Menu</h1></div>
    <div id="nav" class="hidden">
        <ul>
            <li><a style="background-image:url(images/iconx64_home.png)" href="index.php" <?php if ( $current == "home" ) { echo "class='active'"; } ?> >Home</a></li>
            <li><a style="background-image:url(images/iconx64_games.png)" href="games.php" <?php if ( $current == "games" ) { echo "class='active'"; } ?> >Games</a></li>
            <li><a style="background-image:url(images/iconx64_projects.png)" href="projects.php" <?php if ( $current == "projects" ) { echo "class='active'"; } ?> >Projects</a></li>
            <li><a style="background-image:url(images/iconx64_gallery.png)" href="gallery.php" <?php if ( $current == "gallery" ) { echo "class='active'"; } ?> >Gallery</a></li>
            <li><a style="background-image:url(images/iconx64_videos.png)" href="videos.php" <?php if ( $current == "videos" ) { echo "class='active'"; } ?> >Videos</a></li>
            <li><a style="background-image:url(images/iconx64_about.png)" href="about.php" <?php if ( $current == "about" ) { echo "class='active'"; } ?> >About</a></li>
        </ul>
    </div>
</header>
<!doctype html>
<html>

<head>
    <title>About</title>
    <?php
    include 'php/head.php';
    ?>
</head>

<body>
<!-- =====HEADER===== -->
<?php
    $current = "about"; 
    include 'php/header.php';
?>

<!-- =====CONTENT===== -->
<div id="content">
    <h1>About</h1>
    <p>My name's Dave. This is my skillset and how you can contact me.</p>

    <div class="split50">
	    <h2>Known Languages</h2>
	    <ul>
	    	<li>
		    	<h1>General Applications</h1>
		    	<p>C++</p>
		    	<P>C#</P>
	    	</li>
	    	<li>
	    		<h1>Gamemaker</h1>
	    		<p>GML</p>
	    	</li>
	    	<li>
	    		<h1>Web Development</h1>
	    		<p>HTML</p>
	    		<p>CSS</p>
	    		<p>Javascript</p>
	    		<p>PHP</p>
	    	</li>
	    </ul>
	</div>
	<div class="split50">
	    <h2>Known Programs</h2>
	    <ul>
	    	<li>
	    		<h1>Visual Studio</h1>
	    		<p>Programming environment</p>
	    	</li>
	    	<li>
		    	<h1>Gamemaker</h1>
		    	<p>Game engine</p>
	    	</li>
	    	<li>
		    	<h1>Blender</h1>
		    	<p>3D Modelling, rendering, and animation</p>
	    	</li>
	    	<li>
		    	<h1>GIMP</h1>
		    	<p>Photo editor</p>
	    	</li>
	    	<li>
		    	<h1>Inkscape</h1>
		    	<p>Vector based graphics creation</p>
	    	</li>
	    </ul>
	</div>
	<div style="clear: both;"></div>

	<h2>Contact</h2>
	<a class="contactButton">eMail<p>theupgradezone@live.com</p></a>
	<a class="contactButton">Twitter<p>@TheUpgradeZone</p></a>
</div>

<!-- =====FOOTER===== -->
<?php
    include 'php/footer.php';
?>

</body>
</html>
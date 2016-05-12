<!DOCTYPE html>
<html>
<head>
	<title>Amiibo Tracker | The Easiest Way to Track Amiibo</title>

	<!--Favicon-->
	<link rel="icon" 
      type="image/ico" 
      href="headerImages/favicon.ico" />

    <!--Linking CSS stylesheets-->
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="accordion.css">

    <!--Linking Javascript sources-->
    <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>  
	<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>

</head>
<body>
   
    <!--Loading pictures into banner-->
	<div id = "container">
		<div class = "photobanner">
			<img class = "first" src = "smashImages/mario.png" alt = "" draggable = "false">
			<img src = "smashImages/link.png" alt = "" draggable = "false">
			<img src = "smashImages/fox.png" alt = "" draggable = "false">
			<img src = "smashImages/yoshi.png" alt = "" draggable = "false">
			<img src = "smashImages/villager.png" alt = "" draggable = "false">
			<img src = "smashImages/pikachu.png" alt = "" draggable = "false">
			<img src = "smashImages/princess Peach.png" alt = "" draggable = "false">
			<img src = "smashImages/kirby.png" alt = "" draggable = "false">
			<img src = "smashImages/marth.png" alt = "" draggable = "false">
			<img src = "smashImages/wii Fit Trainer.png" alt = "" draggable = "false">
			<img src = "smashImages/samus.png" alt = "" draggable = "false">
			<img src = "smashImages/donkey Kong.png" alt = "" draggable = "false">
			<img src = "smashImages/zelda.png" alt = "" draggable = "false">
			<img src = "smashImages/little Mac.png" alt = "" draggable = "false">
			<img src = "smashImages/diddy Kong.png" alt = "" draggable = "false">
			<img src = "smashImages/luigi.png" alt = "" draggable = "false">
			<img src = "smashImages/captain Falcon.png" alt = "" draggable = "false">
			<img src = "smashImages/pit.png" alt = "" draggable = "false">
			<img src = "smashImages/lucario.png" alt = "" draggable = "false">
			<img src = "smashImages/rosalina.png" alt = "" draggable = "false">
			<img src = "smashImages/bowser.png" alt = "" draggable = "false">
			<img src = "smashImages/toon Link.png" alt = "" draggable = "false">
			<img src = "smashImages/sheik.png" alt = "" draggable = "false">
			<img src = "smashImages/ike.png" alt = "" draggable = "false">
			<img src = "smashImages/meta Knight.png" alt = "" draggable = "false">
			<img src = "smashImages/king DeDeDe.png" alt = "" draggable = "false">
			<img src = "smashImages/shulk.png" alt = "" draggable = "false">
			<img src = "smashImages/sonic.png" alt = "" draggable = "false">
			<img src = "smashImages/mega Man.png" alt = "" draggable = "false">
			<img src = "smashImages/robin.png" alt = "" draggable = "false">
			<img src = "smashImages/lucina.png" alt = "" draggable = "false">
			<img src = "smashImages/wario.png" alt = "" draggable = "false">
			<img src = "smashImages/pac-Man.png" alt = "" draggable = "false">
			<img src = "smashImages/ness.png" alt = "" draggable = "false">
			<img src = "smashImages/charizard.png" alt = "" draggable = "false">
			<img src = "marioImages/mario2.png" alt = "" draggable = "false">
			<img src = "marioImages/luigi2.png" alt = "" draggable = "false">
			<img src = "marioImages/peach2.png" alt = "" draggable = "false">
			<img src = "marioImages/bowser2.png" alt = "" draggable = "false">
			<img src = "marioImages/yoshi2.png" alt = "" draggable = "false">
			<img src = "marioImages/toad2.png" alt = "" draggable = "false">
			<!--Add more pictures here.
			    If more pictures are added,
				fix animation in CSS.
				Width of a picture is 125px-->
			<img src = "smashImages/mario.png" alt = "" draggable = "false">
			<img src = "smashImages/link.png" alt = "" draggable = "false">
			<img src = "smashImages/fox.png" alt = "" draggable = "false">
			<img src = "smashImages/yoshi.png" alt = "" draggable = "false">
			<img src = "smashImages/villager.png" alt = "" draggable = "false">
			<img src = "smashImages/pikachu.png" alt = "" draggable = "false">
			<img src = "smashImages/princess Peach.png" alt = "" draggable = "false">
			<img src = "smashImages/kirby.png" alt = "" draggable = "false">
			<img src = "smashImages/marth.png" alt = "" draggable = "false">
			<img src = "smashImages/wii Fit Trainer.png" alt = "" draggable = "false">
			<img src = "smashImages/samus.png" alt = "" draggable = "false">
			<img src = "smashImages/donkey Kong.png" alt = "" draggable = "false">
			<img src = "smashImages/zelda.png" alt = "" draggable = "false">
			<img src = "smashImages/little Mac.png" alt = "" draggable = "false">
			<img src = "smashImages/diddy Kong.png" alt = "" draggable = "false">
			<img src = "smashImages/luigi.png" alt = "" draggable = "false">
			<img src = "smashImages/captain Falcon.png" alt = "" draggable = "false">
			<img src = "smashImages/pit.png" alt = "" draggable = "false">
			<img src = "smashImages/lucario.png" alt = "" draggable = "false">
			<img src = "smashImages/rosalina.png" alt = "" draggable = "false">
			<img src = "smashImages/bowser.png" alt = "" draggable = "false">
			<img src = "smashImages/toon Link.png" alt = "" draggable = "false">
			<img src = "smashImages/sheik.png" alt = "" draggable = "false">
			<img src = "smashImages/ike.png" alt = "" draggable = "false">
			<img src = "smashImages/meta Knight.png" alt = "" draggable = "false">
			<img src = "smashImages/king DeDeDe.png" alt = "" draggable = "false">
			<img src = "smashImages/shulk.png" alt = "" draggable = "false">
			<img src = "smashImages/sonic.png" alt = "" draggable = "false">
			<img src = "smashImages/mega Man.png" alt = "" draggable = "false">
			<img src = "smashImages/robin.png" alt = "" draggable = "false">
			<img src = "smashImages/lucina.png" alt = "" draggable = "false">
			<img src = "smashImages/wario.png" alt = "" draggable = "false">
			<img src = "smashImages/pac Man.png" alt = "" draggable = "false">
			<img src = "smashImages/ness.png" alt = "" draggable = "false">
			<img src = "smashImages/charizard.png" alt = "" draggable = "false">
			<img src = "marioImages/mario2.png" alt = "" draggable = "false">
			<img src = "marioImages/luigi2.png" alt = "" draggable = "false">
			<img src = "marioImages/peach2.png" alt = "" draggable = "false">
			<img src = "marioImages/bowser2.png" alt = "" draggable = "false">
			<img src = "marioImages/yoshi2.png" alt = "" draggable = "false">
			<img src = "marioImages/toad2.png" alt = "" draggable = "false">
		</div>
	</div>
	<!--End loading pictures-->

	<!--Adding logo. Links back to home page if clicked-->
	<a href = "amiibo"><img id = "logo" src = "headerImages/amiibologo.png"></a>
	<div id = "menuBar"></div>
    
<?php
     $title = "Welcome";

     include ("./header.php");

	//Set vars
	$address = "N/A";
	$referer = "N/A";
	$agent = "N/A";

	//Get vars
	if(ISSET($_SERVER['REMOTE_ADDR'])) {
		$address = $_SERVER['REMOTE_ADDR'];
	}
	if(ISSET($_SERVER['HTTP_REFERER'])) {
		$referer = $_SERVER['HTTP_REFERER'];
	}
	if(ISSET($_SERVER['HTTP_USER_AGENT'])) {
		$agent = $_SERVER['HTTP_USER_AGENT'];
	}
?>
	<br>
	Client Information: <br>
	<br>
	Resolution -- : <script type='text/javascript'>document.write(screen.width+'x'+screen.height); </script> <br>
	Address ----- : <?php print ($address); ?> <br>
	Referer ----- : <?php print ($referer); ?> <br>
	Agent ------- : <?php print ($agent); ?> <br>
	<br>
	<br>

	Readme:<br>
	<br>
	Welcome to my website, you can probably guess what my name is. One of my hobbies is web development, and in order to host my personal projects online I am using subdomains of this main one. What you are viewing now is simply a placeholder website for the main nicholasrinella.com domain.
<?php
     include ("./footer.php");
?>

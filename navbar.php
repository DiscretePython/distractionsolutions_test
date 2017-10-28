<?php
echo ("<div class=\"navbar\">
  		<a href=\"index.php#home\">Home</a>
  		<a href=\"index.php#news\">News</a>
		<a href=\"index.php#youtube\">Youtube</a>
	  	<a href=\"index.php#contributors\">Contact</a>
		<a href=\"Photos.php#top\">Photos</a>
		<a href=\"distractions.php#top\">Resources</a>
		<a href=\"phpmyadmin/\">SQL Shite</a>
		<a href=\"UserForm.php\">");
 		if(isset($_SESSION['username']))
		{	
			echo "Edit " .$_SESSION['username']."'s details";
		}
		else
		{
			echo "Login";
		}
		echo ("</a>;
	</div>");
?>
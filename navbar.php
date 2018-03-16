<?php
echo ("<div class=\"navbar\">
  		<a href=\"..\index.php#home\">Home</a>
  		<a href=\"..\index.php#news\">News</a>
		<div class=\"dropdown\">
			<button class=\"dropbtn\">About
				<i class=\"fa fa-caret-down\"></i>
    		</button>
			<div class=\"dropdown-content\">
      		<div class=\"drop_menu_header\">
       			<h2>Who are we?</h2>
      		</div> 
			<div class=\"row\">
		        <div class=\"column\">
		          <h3>People</h3>
		          <a href=\"..\People\William.php#top\">William</a>
		          <a href=\"..\People\Justin.php#top\">Justin</a>
		        </div>
		     </div>
			 </div>
		 </div>
		<div class=\"dropdown\">
			<button class=\"dropbtn\">Resources
				<i class=\"fa fa-caret-down\"></i>
    		</button>
			<div class=\"dropdown-content\">
      		<div class=\"drop_menu_header\">
       			<h2>Resources</h2>
      		</div> 
			<div class=\"row\">
		        <div class=\"column\">
		          <h3>Internal Links</h3>
		          <a href=\"..\distractions.php#top\">Distractions</a>
		          <a href=\"..\Photos.php#top\">Photos</a>
		          <a href=\"..\index.php#youtube\">Youtube</a>
		        </div>
		        <div class=\"column\">
		          <h3>YouTube Channels</h3>
		          <a href=\"https://www.youtube.com/channel/UCrY8HCw-tFuigIKYmEfq37g\">Will's Vlog</a>
		          <a href=\"https://www.youtube.com/channel/UCVpv24wGNZZqCsGpLtLPG4A\">The Distracting Podcast</a>
		          <a href=\"https://www.youtube.com/user/CoolMovesBMX\">CoolMovesBMX</a>
		        </div>
		        <div class=\"column\">
		          <h3>Behind the site</h3>
		          <a href=\"..\devblog\">Development Blog</a>
		          <a href=\"..\phpmyadmin/\">SQL Login</a>
		          <a href=\"https://github.com/DiscretePython/distractionsolutions_test\">Git Hub Page</a>
		        </div>
		     </div>
			 </div>
			 
		</div>
		<a href=\"..\UserForm.php\">");
 		if(isset($_SESSION['username']))
		{	
			echo "Edit " .$_SESSION['username']."'s details";
		}
		else
		{
			echo "Login";
		}
		echo ("</a>
	</div>");
?>
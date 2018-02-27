<?php
session_start();
?>
<?php include 'set_cookie.php';?>
<html>
<?php include 'head.php';?>
<body class="back">
	<?php include 'navbar.php';?>
	<div id="home"></div>
	<div class="i-1"></div>
	<div class="header_title"> Your Solutions To All Of The Worlds Problems</div> 
	<p class="body">Thank you for visiting</p>
	<div id="news" class="news">
		<p>Now with some Dev Blog</p>
	

	</div>
	<div id="youtube" class="YTcluster">
		<H1 class="YTtitle">Our Youtube Channels</H1>
		<div class="YTbio">
			<H2>Will's Vlog</H2>
			<p class="YTbio_description">Will's personal youtube videos, a modern set of fun home videos</p>					
			<iframe class="embeddedYT" src="https://www.youtube.com/embed/UQvd0G_qcuE?rel=0" allowfullscreen></iframe>
		</div> 
		<div class="YTbio">
			<H2>The Distracting Podcast</H2>
			<p class="YTbio_description">The joint weekly podcast featuring Justin, Sarah, Robin and Will.</p>					
			<iframe class="embeddedYT" src="https://www.youtube.com/embed/aLHcyfZyT9A?rel=0" allowfullscreen></iframe>
		</div>
		<div class="YTbio">
			<H2>CoolMovesBMX</H2>
			<p class="YTbio_description">Justin's sick BMX youtube channel</p>					
			<iframe class="embeddedYT" src="https://www.youtube.com/embed/rfGuP9QVSJ8?rel=0" allowfullscreen></iframe>
		</div> 
	</div>
	<div id="contributors">
		<div class="contributor">
			<img class="contributor_img" src="./images/Will.jpg">
			<p class="bio">William is the mastermind in front of this website.<br><a href="mailto:willknowling@gmail.com">willknowling@gmail.com</a></p>
		</div>
		<div class="contributor">
			<img class="contributor_img" src="./images/Justin.JPG">
			<p class="bio">Justin is the mastermind behind this website.<br><a href="mailto:justin.j.hiltz@hotmail.com">justin.j.hiltz@hotmail.com</a></p>
		</div>
	</div>
</body>
</html>

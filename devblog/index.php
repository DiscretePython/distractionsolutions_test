<?php
session_start();
?>
<?php include '../set_cookie.php';?>
<html>
<?php include '../head.php';?>
<body class="back">
	<?php include '../navbar.php';?>
	<div id="top"></div>
	<div class="i-8"></div>
	<div class="header_title"> Our Solutions To All Of Our Many Selfmade Problems</div> 
	<div class="body">
	<H1 class="YTtitle">Thoughts during Development</H1>  <!-- CSS Needs Updateing, this is piggybaking on the youtube section title //-->

		<div class="blog_post">
		<article>
			<div class="blog_header_container">
				<H2>Change log 23/12/17</H2>
				<H6>December 23, 2017 by William Knowling</H6>
			</div>
			<p>
			Just added another row of youtube channels and links to the distratcions page and some CSS to make the photos page slightly more readable. 
			</p>
		</article>
	</div>
	<div class="blog_post">
		<article>
			<div class="blog_header_container">
				<H2>Change log 13/12/17</H2>
				<H6>December 13, 2017 by William Knowling</H6>
			</div>
			<p>
			Today I reglued the menu to the top of the pages. This was necessary because when the drop down part was added to it the positioning had to be reset, this turned out to be a disaster.  When it was fixed it truncated it, but that looks better so happy accident.<br><br>
			Also did some work in the background to make adding content to the easier blog soon.  Their will be a very simple CMS but before we do this we need to switch over to the database instead of straight up editing the html for these posts.  When this is done posting comments will be a thing also :)<br><br>
			The point at which the youtube boxes start to take up the entire width of the screen was inceased to the point where they were two accross.  This doesn't leave that awkward fourth gap which was too much whitespace.<br><br>
			Now we will just mess around with some images have a real update soon, hopefully something that fixes the web css. 
			<div class="id-dropdown">
  			<img src="../images/i9.JPG" alt="Beautiful Dog" width="100" height="50">
  				<div class="id-dropdown-content">
    				<img src="../images/i9.JPG" alt="Beautiful Dog" width="600" height="400">
    				<div class="id-desc">Beautiful Dog, Canaada</div>
  				</div>
			</div>
			</p>
		</article>
	</div>		
	
	<div class="blog_post">
		<article>
			<div class="blog_header_container">
				<H2>Change log 12/12/17</H2>
				<H6>December 12, 2017 by William Knowling</H6>
			</div>
			<p><ul>
			<li>set a defualt margin for the body to overright the browser defualt which left space on the sides of the stretched photos where you could see the background</li>
			<li>added a dev blog (I guess you figuered that one out if you are here)</li>
			<li>changed the menu so it now includes a dropdown menu that is logically split as to declutter the navbar, has the added benifit of been faster also</li>
			<li>added some more links to the menu (U.Tube channels, github & devblog)</li>
			<li>changed the background gradiant start colour to a navy blue (pulled from the title photo for dev blog, above)</li>
			<li>added some more content to the distractions page</li>
			<li>Found and fixed bug with contents in distractions page where if you overfilled the flex box it would overflow, now if you put too much inside it will just keep expanding and expanding.  To see this look at the bottom of the box of links for web stuff and see how it is slightly lower (magic)</li>
			<li><s>updated the media size limits for youtube profiles on smaller screens, this will need fixing in the future further but is getting closer</s>  I cant see a better way at this point till we have more boxxes, I will relook at this once it is integrated with the database</li>
			</ul></p>
		</article>
	</div>	
	
	
	<div class="blog_post">
		<article>
			<div class="blog_header_container">
				<H2>Test Post(copy)</H2>
				<H6>December 12, 2017 by William Knowling</H6>
			</div>
			<p>Working on styling and spaces between them now</p>
		</article>
	</div>	
	 
	<div class="blog_post">
		<article>
			<div class="blog_header_container">
				<H2>Test Post</H2>
				<H6>December 12, 2017 by William Knowling</H6>
			</div>
			<p>This is the first post to figure. Its only purpose is to allow us to have something to mess around with to get some styling working before we build a cms to work with the database.  As I said this is not very exciting yet.</p>
		</article>
	</div>

	</div>
	
</body>
</html>

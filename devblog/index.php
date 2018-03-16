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
				<H2>A quick update</H2>
				<H6>March 16, 2018 by William Knowling</H6>
			</div>
			<p> A long backlog was cleared today with the addition of the of the "favorite and Forget" links in the distractions tab.  I also changed the header image at the top of that page</p>
			<p> The podcast is now in full swing with intresting guests and subjects each week.  Right now we have more than enough subjects to last for the next two or three weeks.  That will include a plane "Woops" in Yakutsk, Russia that left $368 million on the ground, an aircraft carrier made of Ice and Hitler's one lonely ball.</p>
		</article>
	</div>
	
	<div class="blog_post">
		<article>
			<div class="blog_header_container">
				<H2>Mega Febuary Update and Podcast</H2>
				<H6>Febuary 27, 2018 by William Knowling</H6>
			</div>
			<p> We managed to smush a bunch of small fixes into this one.  First we updated the css so the site works and looks decent on mobile and high density displays.</p>
			<p> We have also started a weekly podcast.  It is called the distracting podcast.  As of right now we stream it on wednesday (twitch) and upload it on thursday (youtube).  The podcast is based on a similar idea as this site, just a series of distractions.</p>
		</article>
	</div>
	
	<div class="blog_post">
		<article>
			<div class="blog_header_container">
				<H2>Using Excel to put a Class Schedule into Google's Calendar</H2>
				<H6>January 9, 2018 by William Knowling</H6>
			</div>
			<p>
			I didn't get a little pocket calendar this year to keep my schedule in so I needed to switch to the 21st cetury's method of keeping track of time [enter google stage left].  Messing around I found that I could upload a list of events in a csv that was in a certain format. To do this:
			<ol>
			<li>In a fresh excel file put the header titles accross the top (spelling is very important) & ( the "|" represents column sepeartions and should not be in the excel file)<br><code>Subject|Start Date|Start Time|End Date|End Time|All Day Event|Description|Location|Private</code></li><br>
			<li>For each class fill in the information for the first class eg:<br><code>ECON 2623|99/12/30|13:00|End Date|End Time|TRUE|"Empirical Analysis in Business and Economics 2 , second half"|anytown|FALSE</code><br> in the enddate I suggest you set it to <code>=$B2</code> or the coresponding cell with the start date.  Similarly with your end time <code>=$C2+(length of class in hours)/24</code> deviding by the 24 puts it into hours from excel's defualt days. </li><br>
			<li>To make a copy of this create an equation in the following row directly under the dates pervious <code>=$(cell letter)2,=$A2,=$B2,...</code> for each cell except the dates where you will add 7.  Drag this new row down to till you get to the last day of classes for this time slot</li><br>
			<li>To make certain cells into a format that google will acccept, select the dates and change the formating to <code>mm-dd-yyyy</code> (you can find this by Right Clicking -> Format Cells -> Custom and type it in the only box where you can type). <br> You will also need to change the time cells to <code>h:mm AM/PM</code> from the custom choices.</li><br>
			<li>Save your work</li><br>
			<li>Save your work again but click "Save As" instead. Change the file type to "CSV UTF-8"</li><br>
			<li>From your Gooogle Calendar click on the Cog to go to your settings menu (from the drop down click settings).  On the right side menu add a calendar so if their is a mistake it wont destroy your other events.  </li><br>
			<li>On the right menu again click on "Inport & export", upload your new csv </li><br>
			<li>Repeat for each class and all of their time slots</li><br>
			</ol>
			<br>
			In other great news we welcome Mathew Helmer to the team!    			
			</p>
		</article>
	</div>
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

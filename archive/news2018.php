<?php 
$page_title = "2018 News";
$page_description = "Manhattan High School 2018 News";

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
	include_once($path);
?>

	<main class="archive-page">
		<article class="fullwidth">
			<h2 class="contenthead">Shelter In - December 7, 2018 <span class="labels"> <span class="beacon-label">Beacon</span></span></h2>
			<div class="maincontent">
	    		<p>Dear Parents/Guardians and Staff,</p>
				<p>The safety and well-being of all students and staff members at P35M: Manhattan High School at The Beacon School remains our highest priority.  Towards that end, we are informing about an incident that took place today near our school today, during which no one was hurt.</p>
				<p>At approximately 1:00 pm, a small engine fire occurred in an unoccupied school bus outside of the school building.  FDNY immediately responded to the scene.  Out of an abundance of caution, the school was placed in a shelter-in for approximately 15 minutes.  FDNY quickly addressed the issue, after which point the shelter-in was lifted.  A new school bus was assigned to transport students and service was not interrupted.</p>
				<p>We assure you that every precaution was taken and will continue to be taken to ensure the safety of our students and staff.  I want to thank all students and staff for their cooperation during the shelter-in.</p>
				<p>We look forward to your continued partnership as we work together to ensure that P35M: Manhattan High School at The Beacon School continues to provide the best and safest learning environment possible for all of its students and staff.</p>
				<p>If you have any questions, please feel free to contact Assistant Principal Gavriel Berkovits at (212) 465-4390.</p>
				<p>Sincerely yours,</p>
				<p>Marta Barnett<br />
				Principal</p>
			</div>
		</article>
		<article class="fullwidth">
			<h2 class="contenthead">College Application Week - October 18, 2018 <span class="labels"><span class="main-label">Main</span> <span class="beacon-label">Beacon</span></span></h2>
			<div class="maincontent">
				<div class="news-image"><img src="/images/news/collegeappwk.png" alt="College Application Week"></div>
				<p>The week of October 22 is College Application Week. Seniors should fill out at least 1 application. For assistance, please see <a href="mailto:twatkin@schools.nyc.gov">Ms. Watkins</a> at the Beacon Site or <a href="mailto:vrankins@schools.nyc.gov">Ms. Rankins</a> at the Main Site. More information about the college application process is available at <a href="https://startheregetthere.org" target="_blank">Start Here Get There</a>.</p>
			</div>
		</article>
		<article class="fullwidth">
			<h2 class="contenthead">Camping Trip - June 4, 2018 <span class="labels"><span class="main-label">Main</span> <span class="beacon-label">Beacon</span></span></h2>
			<div class="maincontent">
				<p>On May 24 and 25 Mr. Wybaillie took students from the Main and Beacon sites on an overnight camping trip. We all had a lot of fun and practiced some great living environment skills!</p>
				<div class="news-photo"><img src="/images/news/06_04_2018_Camping_Trip.jpg" alt="Students at the camping trip"></div>
				<br />
			</div>
		</article>
		<article class="fullwidth">
			<h2 class="contenthead">Snow Day - March 20, 2018 <span class="labels"><span class="all-label">All</span></span></h2>
			<div class="maincontent">
				<p>Due to expected severe weather conditions, all New York City district schools will be closed Wednesday, March 21, 2018. After-school programs, adult education, YABC programs, and PSAL activities are also cancelled.</p>
				<p>SAT School Day administration will be postponed to Tuesday, April 24, 2018.</p>
			</div>
		</article>
		<article class="fullwidth">
			<h2 class="contenthead">NBA Game - February 14, 2018 <span class="labels"><span class="main-label">Main</span> <span class="beacon-label">Beacon</span></span></h2>
			<div class="maincontent">
				<div class="news-photo"><img src="/images/news/02_14_2018_Nets_Game.jpg" alt="Students at the NBA game"></div>
				<p>On Monday February 12, 2018 select students were greeted on a trip to a NBA basketball game between the Brooklyn Nets and Los Angeles Clippers. This was the 2nd annual reward trip for students who have shown great improvement both in academics and social behavior.</p>
				<p>Special Thank you to staff who have helped out on trips Ms. Flores, Ms. Bodner, Ms. Murphy, Mr. Rivera, Mr. Spady, Mr. Prisco, and Mr. Turner. Special thank you to Barclays Center staff and Brooklyn Nets for the hospitality.</p>
			</div>
		</article>
		<article class="fullwidth">
			<h2 class="contenthead">Election Results - February 12, 2018 <span class="labels"><span class="beacon-label">Beacon</span></span></h2>
			<div class="maincontent">
				<p>The student government election results are in! Check them out on the student government page.</p>
			</div>
		</article>
		<article class="fullwidth">
			<h2 class="contenthead">Snow Day - January 3, 2018 <span class="labels"><span class="all-label">All</span></span></h2>
			<div class="maincontent">
				<p>As per the New York City Department of Education all NYC Public Schools will be closed Thursday, January 4th, 2018. After-school programs, adult education, YABC programs, and PSAL activities are also cancelled.</p>
				</div>
		</article>
		<!--Back to General Archive Button-->
		<button type="button" class="primary-btn archive-btn" onClick="archivePage();">Back to Past News</button>
	</main>

<script>
    function archivePage(){
        window.location="/newsarchive.php";
    }
</script>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/footer.php";
	include_once($path);
?>
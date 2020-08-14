<?php 
$page_title = "2019 News";
$page_description = "Manhattan High School 2019 News";

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
	include_once($path);
?>

	<main class="archive-page">
		<article class="fullwidth">
			<h2 class="contenthead">Phone Service Restored - August 7, 2019 <span class="labels"><span class="beacon-label">Beacon</span></span></h2>
			<div class="maincontent">
				<p>Our issues with the phones have been fixed. Thank you for your patience.</p>
			</div>
		</article>
		<article class="fullwidth">
			<h2 class="contenthead">Phone Service Not Working - July 30, 2019 <span class="labels"><span class="beacon-label">Beacon</span></span></h2>
			<div class="maincontent">
				<p>We are currently experiencing technical difficulties with the phone service at our Beacon site. We can dial out, but we cannot receive calls, so you may be unable to reach us by phone.</p>
				<p>If you need to reach us, email is the best method of communication at this time. For attendance issues, please email Ms. Rivera at <a href="mailto:erivera67@schools.nyc.gov">erivera67@schools.nyc.gov</a>. For email addresses of teachers and personnel, please view the <a href="directory.php">Faculty Directory</a>. For general inquiries, please email <a href="mailto:admin@manhattanhs.org">admin@manhattanhs.org</a></p>
			</div>
		</article>
		<article class="fullwidth">
			<h2 class="contenthead">Fleet Week - May 30, 2019 <span class="labels"><span class="all-label">All</span></span></h2>
			<div class="maincontent">
				<div class="news-photo"><img src="/images/news/fleetwk2019.jpeg" alt="Fleet Week"></div>
				<p>On May 23, Manhattan High School students attended Fleet Week on board the USS New York.</p>
			</div>
		</article>
		<article class="fullwidth">
			<h2 class="contenthead">Snow Day - March 3, 2019 <span class="labels"><span class="all-label">All</span></span></h2>
			<div class="maincontent">
				<div class="news-photo"><img src="/images/news/03_03_2019_Snow_Day.gif" alt="Snow Day Announcement"></div>
				<p>Due to expected severe weather conditions, all New York City public schools will be closed Monday, March 4, 2019. After-school programs, adult education, YABC programs, and PSAL activities are also cancelled.</p>
				<p>DOE central and field offices will remain open.</p>
				<p>New York City district schools will be open, Tuesday, March 5, 2019. All programs and activities will be held as scheduled.</p>
				<p>Thank you to all custodial engineers and custodial staff who will be out in full force to shovel snow, clear sidewalks, and ensure our buildings are ready for staff and students to safely return.</p>
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
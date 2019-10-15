<?php 
$page_title = "2017 News";
$page_description = "Manhattan High School 2017 News";

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
	include_once($path);
?>

	<main class="archive-page">
		<article class="fullwidth">
			 <h2 class="contenthead">NBA Game - December 20, 2017 <span class="labels"><span class="main-label">Main</span> <span class="beacon-label">Beacon</span></span></h3>
			<div class="fullcontent">
				<div class="news-photo"><img src="/images/news/12_20_2017_Nets_Game.jpg" alt="Nets Game"></div>
				<p>On Dec 12, 2017 Manhattan HS selected students from both Beacon and the main site to attend a NBA Basketball game. These students were rewarded for excellent progress made from September to December. They have progressed in both academics and behavior in the classroom. They enjoyed the Brooklyn Nets play the Washington Wizards, where the kids were able to receive a free shirt for their attendance.</p>
				<p>We hope to have more students on the next reward trip on February 12th, when we attend the Nets Vs Clippers game.</p>
			</div>
		</article>
		<article class="fullwidth">
			<h3 class="contenthead">Welcome! - December 13, 2017 <span class="labels"><span class="all-label">All</span></span></h3>
			<div class="fullcontent">
				<div class="news-image"><img src="/images/news/hello_world_label.svg" alt="Hello World"></div>
				<p>Welcome to our new website! On these pages we have all sorts of useful school information, including staff, courses, photos, and more.</p>
				<p>Be sure to explore around, and contact <a href="mailto:aroberts16@schools.nyc.gov">Mr. Roberts</a> if you run into any issues.</p>
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
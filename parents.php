<?php 
$page_title = "Parents";
$page_description = "Manhattan High School Parents Page";

include("includes/header.php");
?>

	<main id="subcontent">
		<div id="left">
			<section class="contentleft">
				<h2 class="contenthead">School Information</h2>
				<div class="maincontent">
					<a href="directory.php" id="buttondy"><div class="buttontop"></div><div class="buttonbottom">Directory</div></a>
					<a href="courses.php" id="buttoncs"><div class="buttontop"></div><div class="buttonbottom">Courses</div></a>
					<a href="photos.php" id="buttonps"><div class="buttontop"></div><div class="buttonbottom">Photos</div></a>
					<a href="schedules/P35_2019_2020_Band_Schedule.pdf" id="buttonbb" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Beacon Bands</div></a>
					<a href="schedules/2019_2020_Main_Schedule_P35.pdf" id="buttonms" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Main Schedule</div></a>
					<a href="donate.php" id="buttondn"><div class="buttontop"></div><div class="buttonbottom">Donate</div></a>
				</div>
			</section>
			<section class="contentleft">
				<h2 class="contenthead">Important Logins</h2>
				<div class="maincontent">
					<a href="https://pupilpath.skedula.com" id="buttonpp" target="_blank"><div class="buttontop"></div><div class="buttonbottom">PupilPath</div></a>
				</div>
			</section>
		</div>
		<div id="right">
			<section class="contentright">
				<h2 class="contentheadright">Helpful Links</h2>
				<div class="sidecontent">
					<a href="/calendars/school-calendar-2019-2020.pdf" id="buttoncl" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Calendar</div><div id="calm"><? echo date("M"); ?></div><div id="cald"><? echo date("d"); ?></div></a>
					<a href="http://www.p12.nysed.gov/assessment/schedules/2020/504-120.pdf" id="buttonrg" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Regents</div></a>
					<a href="https://infohub.nyced.org/docs/default-source/default-document-library/acpolicy-graduationrequirementscard.pdf" id="buttongr" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Graduation</div></a>
				</div>
			</section>
			<section class="contentright">
				<h2 class="contentheadright">Other Websites</h2>
				<div class="sidecontent">
					<a href="http://schools.nyc.gov" id="buttonnyc" target="_blank"><div class="buttontop"></div><div class="buttonbottom">NYCDOE</div></a>
					<a href="http://www.nysed.gov" id="buttonnys" target="_blank"><div class="buttontop"></div><div class="buttonbottom">NYSED</div></a>
					<a href="http://www.beaconschool.org" id="buttonbs" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Beacon</div></a>
					<a href="http://www.nychealthandhospitals.org/bellevue/" id="buttonbl" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Bellevue</div></a>
					<a href="http://www.optnyc.org" id="buttonopt" target="_blank"><div class="buttontop"></div><div class="buttonbottom">OPT</div></a>
					<a href="http://www.psal.org" id="buttonpl" target="_blank"><div class="buttontop"></div><div class="buttonbottom">PSAL</div></a>
				</div>
			</section>
		</div>
	</main>

<?php include("includes/footer.php");?>
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
					<a href="schedules/P35_Beacon_2021_22_Bell_Schedule.pdf" id="buttonbb" target="_blank"><span class="pdf-label">PDF</span><div class="buttontop"></div><div class="buttonbottom">Beacon Bands</div></a>
					<a href="schedules/P35_Main_2021_22_Bell_Schedule.pdf" id="buttonms" target="_blank"><span class="pdf-label">PDF</span><div class="buttontop"></div><div class="buttonbottom">Main Schedule</div></a>
					<a href="donate.php" id="buttondn"><div class="buttontop"></div><div class="buttonbottom">Donate</div></a>
				</div>
			</section>
			<section class="contentleft">
				<h2 class="contenthead">Important Logins</h2>
				<div class="maincontent">
					<a href="https://pupilpath.skedula.com" id="buttonpp" target="_blank"><div class="buttontop"></div><div class="buttonbottom">PupilPath</div></a>
					<a href="https://mystudent.nyc" class="buttonnsa" target="_blank"><div class="buttontop"></div><div class="buttonbottom">NYCSA</div></a>
				</div>
			</section>
		</div>
		<div id="right">
			<section class="contentright">
				<h2 class="contentheadright">Helpful Links</h2>
				<div class="sidecontent">
					<a href="https://www.schools.nyc.gov/about-us/news/2021-2022-school-year-calendar" id="buttoncl" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Calendar</div><div id="calm"><?php echo date("M"); ?></div><div id="cald"><?php echo date("d"); ?></div></a>
					<a href="http://www.nysed.gov/common/nysed/files/programs/state-assessment/regents-exams-schedule-january-2022.pdf" id="buttonrg" target="_blank"><span class="pdf-label">PDF</span><div class="buttontop"></div><div class="buttonbottom">Regents</div></a>
					<a href="https://infohub.nyced.org/docs/default-source/default-document-library/acpolicy-graduationrequirementscard.pdf" id="buttongr" target="_blank"><span class="pdf-label">PDF</span><div class="buttontop"></div><div class="buttonbottom">Graduation</div></a>
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
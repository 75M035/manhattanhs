<?php 
$page_title = "Students";
$page_description = "Manhattan High School Students Page";

include("includes/header.php");
?>

	<main id="subcontent">
		<div id="left">
			<section class="contentleft">
				<h2 class="contenthead">School Information</h2>
				<div class="maincontent">
					<a href="directory.php" id="buttondy"><div class="buttontop"></div><div class="buttonbottom">Directory</div></a>
					<a href="courses.php" id="buttoncs"><div class="buttontop"></div><div class="buttonbottom">Courses</div></a>
					<a href="schedules/P35_Beacon_2023_24_Bell_Schedule.pdf" id="buttonbb" target="_blank"><span class="pdf-label">PDF</span><div class="buttontop"></div><div class="buttonbottom">Beacon Bands</div></a>
					<a href="schedules/P35_Main_2023_24_Bell_Schedule.pdf" id="buttonms" target="_blank"><span class="pdf-label">PDF</span><div class="buttontop"></div><div class="buttonbottom">Main Schedule</div></a>
				</div>
			</section>
			<section class="contentleft">
				<h2 class="contenthead">Important Logins</h2>
				<div class="maincontent">
					<a href="https://teachhub.schools.nyc" id="buttonth" target="_blank"><div class="buttontop"></div><div class="buttonbottom">TeachHub</div></a>
					<a href="https://classroom.google.com" id="buttongc" target="_blank"><div class="buttontop"></div><div class="buttonbottom">G Classroom</div></a>
					<a href="https://test.mapnwea.org" id="buttonmap" target="_blank"><div class="buttontop"></div><div class="buttonbottom">MAP</div></a>
					<a href="https://selfservice.schools.nyc/Profile/Index" id="buttonpw" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Pass Reset</div></a>
				</div>
			</section>
		</div>
		<div id="right">
			<section class="contentright">
				<h2 class="contentheadright">Other Resources</h2>
				<div class="sidecontent">
					<a href="https://www.khanacademy.org" id="buttonka" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Khan Academy</div></a>
					<a href="https://www.geogebra.org" id="buttongb" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Geogebra</div></a>
					<a href="https://www.desmos.com" id="buttonds" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Desmos</div></a>
					<a href="https://www.flocabulary.com" id="buttonfl" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Flocabulary</div></a>
					<a href="https://www.bookshare.org/cms" id="buttonbks" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Bookshare</div></a>
					<a href="https://spark.adobe.com/ex/edu/?" id="buttonas" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Adobe Spark</div></a>
					<a href="https://education.minecraft.net/" id="buttonmc" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Minecraft</div></a>
				</div>
			</section>
			<section class="contentright">
				<h2 class="contentheadright">Other Websites and Links</h2>
				<div class="sidecontent">
					<a href="http://schools.nyc.gov" id="buttonnyc" target="_blank"><div class="buttontop"></div><div class="buttonbottom">NYCDOE</div></a>
					<a href="http://www.nysed.gov" id="buttonnys" target="_blank"><div class="buttontop"></div><div class="buttonbottom">NYSED</div></a>
					<a href="http://www.beaconschool.org" id="buttonbs" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Beacon</div></a>
					<a href="http://www.nychealthandhospitals.org/bellevue/" id="buttonbl" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Bellevue</div></a>
					<a href="http://www.psal.org" id="buttonpl" target="_blank"><div class="buttontop"></div><div class="buttonbottom">PSAL</div></a>
					<a href="https://www.schools.nyc.gov/docs/default-source/default-document-library/school-year-2023-24-calendar-corrected" id="buttoncl" target="_blank"><div class="buttontop"></div><div class="buttonbottom">Calendar</div><div id="calm"><?php echo date("M"); ?></div><div id="cald"><?php echo date("d"); ?></div></a>
					<a href="https://www.nysed.gov/sites/default/files/programs/state-assessment/regents-exams-schedule-january-2024.pdf" id="buttonrg" target="_blank"><span class="pdf-label">PDF</span><div class="buttontop"></div><div class="buttonbottom">Regents</div></a>
					<a href="https://infohub.nyced.org/docs/default-source/default-document-library/acpolicy-graduationrequirementscard.pdf" id="buttongr" target="_blank"><span class="pdf-label">PDF</span><div class="buttontop"></div><div class="buttonbottom">Graduation</div></a>
					<a href="https://supporthub.schools.nyc" id="buttondi" target="_blank"><div class="buttontop"></div><div class="buttonbottom">SupportHub</div></a>
				</div>
			</section>
		</div>
	</main>

<?php include("includes/footer.php");?>
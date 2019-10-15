<?php 
$page_title = "Spring 2019 Courses";
$page_description = "Manhattan High School Spring 2019 Courses";

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
	include_once($path);
?>

	<main id="directory">
		<ul class="contenthead"><li><a href="/pastcourses.php"><h2>Past Courses</h2></li></a><li><h2>Spring 2019 Courses</h2></li><span class="rightlink"><button class="btn btn-warning excelexport btn-md" type="button"></button></span></ul>
		<table id="directorylist" class="directorylist" data-paging="true" data-filtering="true" data-filter-position="center" data-sorting="true" data-paging-limit="4" data-filter-placeholder="Search (options on the right)" data-exporting="true">
			<thead>
			<tr class="header">
				<th>Title</th>
				<th data-breakpoints="xs sm md">Department</th>
				<th>Teacher</th>
				<th data-breakpoints="xs sm">Room</th>
				<th data-breakpoints="xs">Period/Band</th>
				<th data-breakpoints="xs sm md">Site</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Algebra I 2/4</td>
				<td>Mathematics</td>
				<td>Flores</td>
				<td>222</td>
				<td>E</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>Algebra I 2/4</td>
				<td>Mathematics</td>
				<td>Gasero</td>
				<td>411</td>
				<td>3, 7</td>
				<td>Main</td>
			</tr>
			<tr>
				<td>Algebra I 2/4</td>
				<td>Mathematics</td>
				<td>Glynn</td>
				<td>302</td>
				<td>2, 3</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Algebra_I_2_4_Syllabus_Thomas.pdf" target="_blank">Algebra I 2/4</a></td>
				<td>Mathematics</td>
				<td>Thomas</td>
				<td>222</td>
				<td>A, C, H, G</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>Algebra I 4/4</td>
				<td>Mathematics</td>
				<td>Gasero</td>
				<td>411</td>
				<td>4</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Algebra_I_4_4_Syllabus_Jin.pdf" target="_blank">Algebra I 4/4</a></td>
				<td>Mathematics</td>
				<td>Jin</td>
				<td>216</td>
				<td>B, C, E, F</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>Algebra I 4/4</td>
				<td>Mathematics</td>
				<td>Torres</td>
				<td>415</td>
				<td>3, 4, 5, 7</td>
				<td>Main</td>
			</tr>
			<tr>
				<td>Algebra II 2/2</td>
				<td>Mathematics</td>
				<td>Pe&ntilde;a</td>
				<td>207</td>
				<td>B</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Anatomy_Syllabus_Rojas.pdf" target="_blank">Anatomy</a></td>
				<td>Life Science</td>
				<td>Rojas</td>
				<td>204</td>
				<td>A13, A25, D24, E13</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\AP_Calculus_BC_Syllabus_Roberts.pdf" target="_blank">AP Calculus BC</a></td>
				<td>Mathematics</td>
				<td>Roberts</td>
				<td>216</td>
				<td>H124, G2</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Auto_Shop_Syllabus_Sarno.pdf" target="_blank">Auto Shop</a></td>
				<td>Careers</td>
				<td>Sarno</td>
				<td>106</td>
				<td>5, 7</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Chemistry_2_2_Syllabus_Tahir.pdf" target="_blank">Chemistry 2/2</a></td>
				<td>Physical Science</td>
				<td>Tahir</td>
				<td>212 204 212</td>
				<td>D, H, G</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>Computer Art</td>
				<td>Arts</td>
				<td>Ayala</td>
				<td>310</td>
				<td>1, 2, 7, 8</td>
				<td>Main</td>
			</tr>
			<tr>
				<td>Cosmetology</td>
				<td>Careers</td>
				<td>Dejesus</td>
				<td>210</td>
				<td>1, 3, 4, 8</td>
				<td>Main</td>
			</tr>
			<tr>
				<td>Culinary</td>
				<td>Human Services</td>
				<td>Santana</td>
				<td>227</td>
				<td>C13, C24, H14, H25, G24, G35</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Culinary_Syllabus_Sarno.pdf" target="_blank">Culinary</a></td>
				<td>Human Services</td>
				<td>Sarno</td>
				<td>104</td>
				<td>1, 2</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Current_Events_Syllabus_Turner.pdf" target="_blank">Current Events</a></td>
				<td>Social Studies</td>
				<td>Turner</td>
				<td>206</td>
				<td>H14, H25</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>Digital Film</td>
				<td>Arts</td>
				<td>Manas</td>
				<td>210 222 210</td>
				<td>A13, B35, C13, C24</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>Devised Theater</td>
				<td>Arts</td>
				<td>Manas</td>
				<td>210</td>
				<td>A25, H14</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Earth_Science_2_2_Syllabus_George.pdf" target="_blank">Earth Science 2/2</a></td>
				<td>Physical Science</td>
				<td>George</td>
				<td>410</td>
				<td>2, 4</td>
				<td>Main</td>
			</tr>
			<tr>
				<td>Earth Science 2/2</td>
				<td>Physical Science</td>
				<td>Glynn</td>
				<td>302</td>
				<td>4, 5</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Earth_Science_2_2_Syllabus_Tahir.pdf" target="_blank">Earth Science 2/2</a></td>
				<td>Physical Science</td>
				<td>Tahir</td>
				<td>208</td>
				<td>C, F</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>Earth Science Lab 2/2</td>
				<td>Physical Science</td>
				<td>Wybaillie</td>
				<td>215</td>
				<td>T2, T4, T6, T7, T8, W3, W4, W5</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\English_2_8_Syllabus_Bennett.pdf" target="_blank">English 2/8</a></td>
				<td>Core English</td>
				<td>Bennett</td>
				<td>205</td>
				<td>A, B, C, E</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>English 2/8</td>
				<td>Core English</td>
				<td>Lopez</td>
				<td>308</td>
				<td>2, 3</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\English_2_8_Syllabus_Powell.pdf" target="_blank">English 2/8</a></td>
				<td>Core English</td>
				<td>Powell</td>
				<td>404</td>
				<td>3, 7</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\English_4_8_Syllabus_Bennett.pdf" target="_blank">English 4/8</a></td>
				<td>Core English</td>
				<td>Bennett</td>
				<td>205</td>
				<td>H</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\English_4_8_Syllabus_Geiger.pdf" target="_blank">English 4/8</a></td>
				<td>Core English</td>
				<td>Geiger</td>
				<td>218 218 205</td>
				<td>A, E, F</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\English_4_8_Syllabus_Powell.pdf" target="_blank">English 4/8</a></td>
				<td>Core English</td>
				<td>Powell</td>
				<td>404</td>
				<td>4, 8</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\English_6_8_Syllabus_Geiger.pdf" target="_blank">English 6/8</a></td>
				<td>Core English</td>
				<td>Geiger</td>
				<td>211 205</td>
				<td>C, G</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>English 6/8</td>
				<td>Core English</td>
				<td>Lane</td>
				<td>218</td>
				<td>F, H</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>English 6/8</td>
				<td>Core English</td>
				<td>Paik</td>
				<td>413</td>
				<td>5, 6, 7</td>
				<td>Main</td>
			</tr>
			<tr>
				<td>English 8/8</td>
				<td>Core English</td>
				<td>Lane</td>
				<td>218</td>
				<td>B, C, G</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>English 8/8</td>
				<td>Core English</td>
				<td>Paik</td>
				<td>413</td>
				<td>3</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Food_Biochemistry_2_2_Syllabus_Brandes.pdf" target="_blank">Food Biochemistry 2/2</a></td>
				<td>Life Science</td>
				<td>Brandes</td>
				<td>211</td>
				<td>D</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>Food Biochemistry 2/2</td>
				<td>Life Science</td>
				<td>Santana</td>
				<td>227</td>
				<td>A</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Forensics_Syllabus_Katz.pdf" target="_blank">Forensics</a></td>
				<td>Science</td>
				<td>Katz</td>
				<td>207</td>
				<td>G24, G35</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Geometry_2_2_Syllabus_Jin.pdf" target="_blank">Geometry 2/2</a></td>
				<td>Mathematics</td>
				<td>Jin</td>
				<td>216</td>
				<td>A</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>Geometry 2/2</td>
				<td>Mathematics</td>
				<td>Pe&ntilde;a</td>
				<td>207</td>
				<td>C, D, F</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>Geometry 2/2</td>
				<td>Mathematics</td>
				<td>Torres</td>
				<td>415</td>
				<td>5</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Global_2_4_Syllabus_Afzal.pdf" target="_blank">Global 2/4</a></td>
				<td>Social Studies</td>
				<td>Afzal</td>
				<td>402</td>
				<td>6</td>
				<td>Main</td>
			</tr>
			<tr>
				<td>Global 2/4</td>
				<td>Social Studies</td>
				<td>Lopez</td>
				<td>308</td>
				<td>4, 5</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Global_2_4_Syllabus_Williams.pdf" target="_blank">Global 2/4</a></td>
				<td>Social Studies</td>
				<td>Williams</td>
				<td>220</td>
				<td>B, C, E, F, H</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Global_4_4_Syllabus_Afzal.pdf" target="_blank">Global 4/4</a></td>
				<td>Social Studies</td>
				<td>Afzal</td>
				<td>402</td>
				<td>2, 3, 7</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Global_4_4_Syllabus_Turner.pdf" target="_blank">Global 4/4</a></td>
				<td>Social Studies</td>
				<td>Turner</td>
				<td>206</td>
				<td>B, C, F</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>Government &amp; Economics 2/2</td>
				<td>Social Studies</td>
				<td>Morell</td>
				<td>417</td>
				<td>2, 5, 8</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Government_Economics_2_2_Syllabus_Brandes.pdf" target="_blank">Government &amp; Economics 2/2</a></td>
				<td>Social Studies</td>
				<td>Brandes</td>
				<td>220 212 214</td>
				<td>A, C, F</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Government_Economics_2_2_Syllabus_Turner.pdf" target="_blank">Government &amp; Economics 2/2</a></td>
				<td>Social Studies</td>
				<td>Turner</td>
				<td>206</td>
				<td>E</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Health_Syllabus_George.pdf" target="_blank">Health</a></td>
				<td>PE and Health</td>
				<td>George</td>
				<td>410</td>
				<td>8</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Health_Syllabus_Gerdes.pdf" target="_blank">Health</a></td>
				<td>PE and Health</td>
				<td>Gerdes</td>
				<td>207 214 214</td>
				<td>A, D, H</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Health_Syllabus_Verde.pdf" target="_blank">Health</a></td>
				<td>PE and Health</td>
				<td>Verde</td>
				<td>317</td>
				<td>3, 4, 6</td>
				<td>Main</td>
			</tr>
			<tr>
				<td>Honors Art</td>
				<td>Arts</td>
				<td>DiLorenzo</td>
				<td>211</td>
				<td>A13, H25</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Keyboard_Syllabus_Brickel.pdf" target="_blank">Keyboard</a></td>
				<td>Arts</td>
				<td>Brickel</td>
				<td>C43</td>
				<td>A13, A25, H14, H25</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>Life Skills</td>
				<td>Guidance</td>
				<td>Flores</td>
				<td>227 222</td>
				<td>B, F</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Life_Skills_Syllabus_George.pdf" target="_blank">Health</a></td>
				<td>Guidance</td>
				<td>George</td>
				<td>410</td>
				<td>7</td>
				<td>Main</td>
			</tr>
			<tr>
			<td><a href="\syllabi\2018_2\Living_Environment_2_4_Syllabus_Katz.pdf" target="_blank">Living Environment 2/4</a></td>
				<td>Life Science</td>
				<td>Katz</td>
				<td>212</td>
				<td>A, B, F, H</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Living_Environment_2_4_Syllabus_Phillips.pdf" target="_blank">Living Environment 2/4</a></td>
				<td>Life Science</td>
				<td>Phillips</td>
				<td>406</td>
				<td>6, 8</td>
				<td>Main</td>
			</tr>
			<tr>
				<td>Living Environment Lab 2/4</td>
				<td>Life Science</td>
				<td>Wybaillie</td>
				<td>215</td>
				<td>M3, M6, T4, T6</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Living_Environment_4_4_Syllabus_Phillips.pdf" target="_blank">Living Environment 4/4</a></td>
				<td>Life Science</td>
				<td>Phillips</td>
				<td>406</td>
				<td>3, 7</td>
				<td>Main</td>
			</tr>
			<tr>
				<td>Living Environment 4/4</td>
				<td>Life Science</td>
				<td>Rojas</td>
				<td>204</td>
				<td>B, F, G</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>Living Environment Lab 4/4</td>
				<td>Life Science</td>
				<td>Wybaillie</td>
				<td>215</td>
				<td>M4, M7, M8, T4, T6</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Physical_Education_Syllabus_Geller.pdf" target="_blank">Physical Education</a></td>
				<td>PE and Health</td>
				<td>Geller</td>
				<td>226</td>
				<td>C13, C24, F13, F24, G24, G35</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Physical_Education_Syllabus_Geller.pdf" target="_blank">Physical Education</a></td>
				<td>PE and Health</td>
				<td>Geller</td>
				<td>702B</td>
				<td>A13, A25, H14, H25</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Physical_Education_Syllabus_Gerdes.pdf" target="_blank">Physical Education</a></td>
				<td>PE and Health</td>
				<td>Gerdes</td>
				<td>226</td>
				<td>B35</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Physical_Education_Syllabus_Gerdes.pdf" target="_blank">Physical Education</a></td>
				<td>PE and Health</td>
				<td>Gerdes</td>
				<td>702B</td>
				<td>B14, G24, G35</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Physical_Education_Syllabus_Verde.pdf" target="_blank">Physical Education</a></td>
				<td>PE and Health</td>
				<td>Verde</td>
				<td>317</td>
				<td>8</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Physical_Education_Syllabus_Waver.pdf" target="_blank">Physical Education</a></td>
				<td>PE and Health</td>
				<td>Waver</td>
				<td>Gym</td>
				<td>1, 4, 5, 6</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Rock_Band_Syllabus_Brickel.pdf" target="_blank">Rock Band</a></td>
				<td>Arts</td>
				<td>Brickel</td>
				<td>210</td>
				<td>B14, B35, D13, G24, G35</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Song_Writing_Syllabus_Brickel.pdf" target="_blank">Song Writing</a></td>
				<td>Arts</td>
				<td>Brickel</td>
				<td>210</td>
				<td>E24</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Spanish_2_6_Syllabus_Dubizh.pdf" target="_blank">Spanish 2/6</a></td>
				<td>Foreign Language</td>
				<td>Dubizh</td>
				<td>208</td>
				<td>A, B, H, G</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Spanish_2_2_Syllabus_Velez.pdf" target="_blank">Spanish 2/2</a></td>
				<td>Foreign Language</td>
				<td>Velez</td>
				<td>408</td>
				<td>1, 2, 6, 7</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Spanish_4_6_Syllabus_Dubizh.pdf" target="_blank">Spanish 4/6</a></td>
				<td>Foreign Language</td>
				<td>Dubizh</td>
				<td>208</td>
				<td>D</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>Statistics 2/2</td>
				<td>Mathematics</td>
				<td>Pe&ntilde;a</td>
				<td>207</td>
				<td>H</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\Studio_Art_Syllabus_Collins.pdf" target="_blank">Studio Art</a></td>
				<td>Arts</td>
				<td>Collins</td>
				<td>319</td>
				<td>2, 3, 5, 6</td>
				<td>Main</td>
			</tr>
			<tr>
				<td>Studio Art</td>
				<td>Arts</td>
				<td>DiLorenzo</td>
				<td>211</td>
				<td>A25, B14, B25, F13, F24, G24, G35</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>Theater</td>
				<td>Arts</td>
				<td>Manas</td>
				<td>210 222 210 210</td>
				<td>A13, B14, F13, F24, H25</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\US_History_2_2_Syllabus_Brandes.pdf" target="_blank">US History 2/2</a></td>
				<td>Social Studies</td>
				<td>Brandes</td>
				<td>214</td>
				<td>B</td>
				<td>Beacon</td>
			</tr>
			<tr>
				<td>US History 2/2</td>
				<td>Social Studies</td>
				<td>Morell</td>
				<td>417</td>
				<td>5, 6</td>
				<td>Main</td>
			</tr>
			<tr>
				<td><a href="\syllabi\2018_2\US_History_2_2_Syllabus_Prisco.pdf" target="_blank">US History 2/2</a></td>
				<td>Social Studies</td>
				<td>Prisco</td>
				<td>214</td>
				<td>A, C, G</td>
				<td>Beacon</td>
			</tr>
			</tbody>
		</table>
		<div id="rowcount">
			<ul>
				<li>Rows to display:</li>
				<li><button type="button" data-page-size="10">10</button></li>
				<li><button type="button" data-page-size="20">20</button></li>
				<li><button type="button" data-page-size="50">50</button></li>
				<li><button type="button" data-page-size="100">100</button></li>
				<li><button type="button" data-page-size="200">200</button></li>
			</ul>
		</div>
	</main>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("directorysearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("directorylist");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
        var tds = tr[i].getElementsByTagName("td");
        var found = false;
        for (ii = 0; ii < tds.length && !found; ii++) {
            if (tds[ii].textContent.toUpperCase().indexOf(filter) > -1) {
                found = true;
                break;
            }
        }
        tr[i].style.display = found?"":"none";
    }
}
</script>
	
<script>jQuery(function($){
	$('.directorylist').footable();
});</script>
	
<script>
$('[data-page-size]').on('click', function(e){
	e.preventDefault();
	var newSize = $(this).data('pageSize');
	FooTable.get('#directorylist').pageSize(newSize);
});</script>
	
<script>
$('.excelexport').on('click', function (e) {
    var csv = FooTable.get('#directorylist').toCSV(true);
    /*  console.log ("csv: " + csv);*/
    var hiddenElement = document.createElement('a');
    hiddenElement.href = 'data:application/csv;charset=utf-8,' + encodeURI(csv);
    hiddenElement.target = '_blank';
    hiddenElement.download = 'Courses_2018_1.csv';
    hiddenElement.click();
}); 
</script>

<?php include("includes/footer.php");?>
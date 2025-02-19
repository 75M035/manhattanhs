<?php 
$page_title = "Spring 2023 Courses";
$page_description = "Manhattan High School Spring 2023 Courses";

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
	include_once($path);
?>

	<main id="directory">
		<ul class="contenthead"><li><a href="/pastcourses.php"><h2>Past Courses</h2></li></a><li class="lastcontenthead"><h2>Spring 2023 Courses</h2></li><li class="rightcontenthead"><span class="rightlink"><button class="btn btn-warning excelexport btn-md" type="button" title="Excel Export"></button></span></li></ul>
		<table id="directorylist" class="directorylist" data-paging="true" data-filtering="true" data-filter-position="center" data-sorting="true" data-paging-limit="4" data-filter-placeholder="Search (options on the right)" data-exporting="true">
			<thead>
			<tr class="header">
				<th>Title (PDF links for syllabi)</th>
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
					<td>Heath</td>
					<td>222</td>
					<td>A, D, H</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Algebra_I_2_4_Syllabus_Jin.pdf" target="_blank">Algebra I 2/4</a></td>
					<td>Mathematics</td>
					<td>Jin</td>
					<td>216</td>
					<td>B</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Algebra_I_2_4_Syllabus_Khanum.pdf" target="_blank">Algebra I 2/4</a></td>
					<td>Mathematics</td>
					<td>Khanum</td>
					<td>308</td>
					<td>2, 3, 5, 7</td>
					<td>Main</td>
				</tr>
				<tr>
					<td>Algebra I 4/4</td>
					<td>Mathematics</td>
					<td>Ducret</td>
					<td>212</td>
					<td>D</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Algebra_I_4_4_Syllabus_Jin.pdf" target="_blank">Algebra I 4/4</a></td>
					<td>Mathematics</td>
					<td>Jin</td>
					<td>216</td>
					<td>A, C, E, G</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Algebra_I_4_4_Syllabus_Lopez.pdf" target="_blank">Algebra I 4/4</a></td>
					<td>Mathematics</td>
					<td>Lopez</td>
					<td>306</td>
					<td>3, 4, 5, 8</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Algebra_II_2_2_Syllabus_Pena.pdf" target="_blank">Algebra II 2/2</a></td>
					<td>Mathematics</td>
					<td>Pe&ntilde;a</td>
					<td>207</td>
					<td>B</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Chemistry_2_2_Syllabus_Tahir.pdf" target="_blank">Chemistry 2/2</a></td>
					<td>Physical Science</td>
					<td>Tahir</td>
					<td>212</td>
					<td>E, H</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Computer_Science_Syllabus_Morell.pdf" target="_blank">Computer Science</a></td>
					<td>STEM Elective</td>
					<td>Morell</td>
					<td>417</td>
					<td>6</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Core_Music_Syllabus_Brickel.pdf" target="_blank">Core Music</a></td>
					<td>Arts</td>
					<td>Brickel</td>
					<td>210</td>
					<td>D13, D24</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td>Core Music</td>
					<td>Arts</td>
					<td>Sexton</td>
					<td>115</td>
					<td>1, 4, 7, 8</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Culinary_Syllabus_Gonzalez.pdf" target="_blank">Culinary</a></td>
					<td>Human Services</td>
					<td>Gonzalez</td>
					<td>104</td>
					<td>1, 3</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Earth_Science_2_2_Syllabus_Dotter.pdf" target="_blank">Earth Science 2/2</a></td>
					<td>Physical Science</td>
					<td>Dotter</td>
					<td>315</td>
					<td>7, 8</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Earth_Science_2_2_Syllabus_Tahir.pdf" target="_blank">Earth Science 2/2</a></td>
					<td>Physical Science</td>
					<td>Tahir</td>
					<td>212</td>
					<td>C, F</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/English_2_8_Syllabus_Crisci.pdf" target="_blank">English 2/8</a></td>
					<td>Core English</td>
					<td>Crisci</td>
					<td>205</td>
					<td>A, B, E, F</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td>English 2/8</td>
					<td>Core English</td>
					<td>Bell</td>
					<td>313</td>
					<td>2, 3, 5, 7</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/English_4_8_Syllabus_Geiger.pdf" target="_blank">English 4/8</a></td>
					<td>Core English</td>
					<td>Geiger</td>
					<td>205</td>
					<td>C, D, H</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td>English 4/8</td>
					<td>Core English</td>
					<td>Wiltshire</td>
					<td>302</td>
					<td>2, 4, 5, 8</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/English_6_8_Syllabus_Geiger.pdf" target="_blank">English 6/8</a></td>
					<td>Core English</td>
					<td>Geiger</td>
					<td>218</td>
					<td>F, G</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/English_6_8_Syllabus_Lane.pdf" target="_blank">English 6/8</a></td>
					<td>Core English</td>
					<td>Lane</td>
					<td>218</td>
					<td>E</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/English_6_8_Syllabus_Medina.pdf" target="_blank">English 6/8</a></td>
					<td>Core English</td>
					<td>Medina</td>
					<td>404</td>
					<td>5, 6, 7</td>
					<td>Main</td>
				</tr>
				<tr>
					<td>English 8/8</td>
					<td>Core English</td>
					<td>Lane</td>
					<td>218</td>
					<td>A, B, C</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/English_8_8_Syllabus_Medina.pdf" target="_blank">English 8/8</a></td>
					<td>Core English</td>
					<td>Medina</td>
					<td>404</td>
					<td>3</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/English_8_8_Syllabus_Paik.pdf" target="_blank">English 8/8</a></td>
					<td>Core English</td>
					<td>Paik</td>
					<td>413</td>
					<td>5</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Financial_Literacy_2_2_Syllabus_Gonzalez.pdf" target="_blank">Financial Literacy 2/2</a></td>
					<td>Business Elective</td>
					<td>Gonzalez</td>
					<td>104</td>
					<td>6</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Financial_Literacy_2_2_Syllabus_Turner.pdf" target="_blank">Financial Literacy 2/2</a></td>
					<td>Business Elective</td>
					<td>Turner</td>
					<td>206</td>
					<td>A, D</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Geography_Syllabus_Kennedy.pdf" target="_blank">Geography</a></td>
					<td>Social Studies Elective</td>
					<td>Kennedy</td>
					<td>222</td>
					<td>C14, C25</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Geometry_2_2_Syllabus_Dotter.pdf" target="_blank">Geometry 2/2</a></td>
					<td>Mathematics</td>
					<td>Dotter</td>
					<td>315</td>
					<td>2, 5</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Geometry_2_2_Syllabus_Pena.pdf" target="_blank">Geometry 2/2</a></td>
					<td>Mathematics</td>
					<td>Pe&ntilde;a</td>
					<td>207</td>
					<td>C, D, F</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Global_2_4_Syllabus_Curry.pdf" target="_blank">Global 2/4</a></td>
					<td>Social Studies</td>
					<td>Curry</td>
					<td>208</td>
					<td>B, C, E, G</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Global_2_4_Syllabus_Mccarthy.pdf" target="_blank">Global 2/4</a></td>
					<td>Social Studies</td>
					<td>McCarthy</td>
					<td>304</td>
					<td>3, 4, 6, 8</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Global_4_4_Syllabus_Afzal.pdf" target="_blank">Global 4/4</a></td>
					<td>Social Studies</td>
					<td>Afzal</td>
					<td>402</td>
					<td>2, 3, 6, 7</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Global_4_4_Syllabus_Turner.pdf" target="_blank">Global 4/4</a></td>
					<td>Social Studies</td>
					<td>Turner</td>
					<td>206</td>
					<td>B, C, F</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td>Government &amp; Economics 2/2</td>
					<td>Social Studies</td>
					<td>Gonzalez</td>
					<td>104</td>
					<td>2</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Government_Economics_2_2_Syllabus_Kennedy.pdf" target="_blank">Government &amp; Economics 2/2</a></td>
					<td>Social Studies</td>
					<td>Kennedy</td>
					<td>214</td>
					<td>D, F, G</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Health_Syllabus_Geller.pdf" target="_blank">Health</a></td>
					<td>PE and Health</td>
					<td>Geller</td>
					<td>208</td>
					<td>D</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Health_Syllabus_Gerdes.pdf" target="_blank">Health</a></td>
					<td>PE and Health</td>
					<td>Gerdes</td>
					<td>214</td>
					<td>A</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Health_Syllabus_Verde.pdf" target="_blank">Health</a></td>
					<td>PE and Health</td>
					<td>Verde</td>
					<td>317</td>
					<td>1, 6, 7, 8</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Honors_English_8_8_Syllabus_Lane.pdf" target="_blank">Honors English 8/8</a></td>
					<td>Core English</td>
					<td>Lane</td>
					<td>218</td>
					<td>H</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Keyboard_Syllabus_Brickel.pdf" target="_blank">Keyboard</a></td>
					<td>Arts</td>
					<td>Brickel</td>
					<td>210</td>
					<td>G13, G24</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td>Literature</td>
					<td>English Elective</td>
					<td>Bennett</td>
					<td>208 205 208</td>
					<td>A, G, H</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td>Living Environment 2/4</td>
					<td>Life Science</td>
					<td>Ducret</td>
					<td>212 220 212</td>
					<td>B, C, F, G</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td>Living Environment 2/4</td>
					<td>Life Science</td>
					<td>Robinson</td>
					<td>415</td>
					<td>2, 4, 7, 8</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Living_Environment_4_4_Syllabus_Rojas.pdf" target="_blank">Living Environment 4/4</a></td>
					<td>Life Science</td>
					<td>Rojas</td>
					<td>220</td>
					<td>A, E, H</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td>Living Environment 4/4</td>
					<td>Life Science</td>
					<td>Wybaillie</td>
					<td>215</td>
					<td>3, 6, 7, 8</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Medical_Science_Syllabus_Rojas.pdf" target="_blank">Medical Science</a></td>
					<td>Science Elective</td>
					<td>Rojas</td>
					<td>220</td>
					<td>G13, G24</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Paint_Draw_Syllabus_Dilorenzo.pdf" target="_blank">Paint &amp; Draw</a></td>
					<td>Arts</td>
					<td>DiLorenzo</td>
					<td>211</td>
					<td>A14, A35, C14, C25</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Physical_Education_Syllabus_Geller.pdf" target="_blank">Physical Education</a></td>
					<td>PE and Health</td>
					<td>Geller</td>
					<td>226</td>
					<td>B13, B25, G13, G24</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Physical_Education_Syllabus_Geller.pdf" target="_blank">Physical Education</a></td>
					<td>PE and Health</td>
					<td>Geller</td>
					<td>702</td>
					<td>A14, A35, H24, H35</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Physical_Education_Syllabus_Gerdes.pdf" target="_blank">Physical Education</a></td>
					<td>PE and Health</td>
					<td>Gerdes</td>
					<td>226</td>
					<td>C14, C25, F13, F24</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Physical_Education_Syllabus_Gerdes.pdf" target="_blank">Physical Education</a></td>
					<td>PE and Health</td>
					<td>Gerdes</td>
					<td>702</td>
					<td>G13, G24</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Physical_Education_Syllabus_Waver.pdf" target="_blank">Physical Education</a></td>
					<td>PE and Health</td>
					<td>Waver</td>
					<td>GYM</td>
					<td>1, 4, 5, 6</td>
					<td>Main</td>
				</tr>
				<tr>
					<td>Robotics</td>
					<td>STEM Elective</td>
					<td>Heath</td>
					<td>222</td>
					<td>B13, B25, G13, G24</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Rock_Band_Syllabus_Brickel.pdf" target="_blank">Rockband</a></td>
					<td>Arts</td>
					<td>Brickel</td>
					<td>210</td>
					<td>B13, B25, H24, H35</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Sculpture_Syllabus_Dilorenzo.pdf" target="_blank">Sculpture</a></td>
					<td>Arts</td>
					<td>DiLorenzo</td>
					<td>211</td>
					<td>H24, H35</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Sketch_Comedy_Syllabus_Manas.pdf" target="_blank">Sketch Comedy</a></td>
					<td>Arts</td>
					<td>Manas</td>
					<td>210</td>
					<td>A14, A35</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Spanish_2_2_Syllabus_Velez.pdf" target="_blank">Spanish 2/2</a></td>
					<td>World Language</td>
					<td>Velez</td>
					<td>408</td>
					<td>1, 2, 6, 7</td>
					<td>Main</td>
				</tr>
				<tr>
					<td>Spanish 2/6</td>
					<td>World Language</td>
					<td>Nevarez</td>
					<td>204</td>
					<td>A, B, D, G, H</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Studio_Art_Syllabus_Collins.pdf" target="_blank">Studio Art</a></td>
					<td>Arts</td>
					<td>Collins</td>
					<td>319</td>
					<td>1, 3, 7, 8</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Studio_Art_Syllabus_Dilorenzo.pdf" target="_blank">Studio Art</a></td>
					<td>Arts</td>
					<td>DiLorenzo</td>
					<td>211</td>
					<td>D13, D24, F13, F24</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Technical_Theater_Syllabus_Manas.pdf" target="_blank">Technical Theater</a></td>
					<td>Arts</td>
					<td>Manas</td>
					<td>701</td>
					<td>B13, B25, H24, H35</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/Theater_Syllabus_Manas.pdf" target="_blank">Theater</a></td>
					<td>Arts</td>
					<td>Manas</td>
					<td>210</td>
					<td>C14, C25, F13, F24</td>
					<td>Beacon</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/US_History_2_2_Syllabus_Morell.pdf" target="_blank">US History 2/2</a></td>
					<td>Social Studies</td>
					<td>Morell</td>
					<td>417</td>
					<td>3, 4, 8</td>
					<td>Main</td>
				</tr>
				<tr>
					<td><a href="/syllabi/2022_2/US_History_2_2_Syllabus_Prisco.pdf" target="_blank">US History 2/2</a></td>
					<td>Social Studies</td>
					<td>Prisco</td>
					<td>214</td>
					<td>B, C, H</td>
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
    hiddenElement.download = 'Courses_2020_7.csv';
    hiddenElement.click();
}); 
</script>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/footer.php";
	include_once($path);
?>
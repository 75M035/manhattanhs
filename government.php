<?php 
$page_title = "Student Government";
$page_description = "Manhattan High School Student Government";

include("includes/header.php");
?>

	<main id="subcontent">
		<section id="left">
			<div class="contentleft">
				<h3 class="contenthead">Beacon Student Government</h3>
				<div class="maincontent government">
					<div id="buttonpt"><div class="govtbtntop">Alaina <br /> F.</div><div class="govtbtnbottom">President</div></div>
					<div id="buttonvp"><div class="govtbtntop">Lenissa <br /> R.</div><div class="govtbtnbottom">Vice President</div></div>
					<div id="buttontr"><div class="govtbtntop">Samantha <br /> M.</div><div class="govtbtnbottom">Treasurer</div></div>
					<div id="buttonsy"><div class="govtbtntop">Juliel <br /> P.</div><div class="govtbtnbottom">Secretary</div></div>
				</div>
			</div>
		</section>
		<section id="right">
			<div class="contentright">
				<h3 class="contentheadright">Beacon Grade Representatives</h3>
				<div class="maincontent representatives">
					<div id="buttonfr"><div class="repbtntop">Jordee <br /> J.</div><div class="repbtnbottom">9</div></div>
					<div id="buttonso"><div class="repbtntop">Sacora <br /> I.</div><div class="repbtnbottom">10</div></div>
					<div id="buttonju"><div class="repbtntop">Gabriela <br /> J.</div><div class="repbtnbottom">11</div></div>
					<div id="buttonsr"><div class="repbtntop">Juliel <br /> P.</div><div class="repbtnbottom">12</div></div>
				</div>
			</div>
		</section>
	</main>

<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Candidate', 'Votes'],
          ['Brianalee R.',     18],
          ['Aramis B.',      6],
          ['Wisdom G.',  6],
          ['Luis L.', 7],
          ['Alaina F.',    24],
		  ['David D.',    20]
        ]);

        var options = {
          title: 'President',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
        chart.draw(data, options);
      }
</script>

<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Candidate', 'Votes'],
          ['Lance H.',     20],
          ['Lenissa R.',      40],
          ['Wisdom G.',  7],
          ['Luis L.', 14]
        ]);

        var options = {
          title: 'Vice President',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
        chart.draw(data, options);
      }
</script>

<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Candidate', 'Votes'],
          ['Samantha M.',     44],
          ['Sacora I.',      37]
        ]);

        var options = {
          title: 'Treasurer',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
        chart.draw(data, options);
      }
</script>

<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Candidate', 'Votes'],
          ['Juliel P.',     47],
          ['Ashley T.',      34]
        ]);

        var options = {
          title: 'Secretary',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart4'));
        chart.draw(data, options);
      }
</script>

	<section id="govtresults">
		<h3 class="contenthead">Election Results</h3>
		<div class="fullcontent">
			<div class="piechart_3d" id="piechart1" style="width: 594px; height: 330px;"></div>
			<div class="piechart_3d" id="piechart2" style="width: 594px; height: 330px;"></div>
			<div class="piechart_3d" id="piechart3" style="width: 594px; height: 330px;"></div>
			<div class="piechart_3d" id="piechart4" style="width: 594px; height: 330px;"></div>
		</div>
	</section>

<?php include("includes/footer.php");?>
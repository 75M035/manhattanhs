<?php 
$page_title = "Beacon Pep Rally";
$page_description = "Photos from Pep Rally 2018-19";

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
	include_once($path);
?>

	<div id="fullwidth">
		<ul class="contenthead"><li><a href="/photos.php"><h3>Photos</h3></li></a><li><h3>Beacon Pep Rally</h3></li></ul>
		<div class="fullcontent">
			<!-- The expanding image grid (hidden by default) -->
			<div id="Pep Rally 1" class="expandedImg">
				<img src="/images/photos/2018_2019/peprally_2018/peprally_2018_1_lg.jpg" alt="Pep Rally 1" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2018_2019/PepRally_2018/peprally_2018_1.jpg" class="printbutton" target="_blank">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">Pep Rally 1</div>
			</div>
			
			<div id="Pep Rally 2" class="expandedImg">
				<img src="/images/photos/2018_2019/PepRally_2018/peprally_2018_2_lg.jpg" alt="Pep Rally 2" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2018_2019/PepRally_2018/peprally_2018_2.jpg" class="printbutton" target="_blank">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">NBA Game 2</div>
			</div>
			
			<div id="Pep Rally 3" class="expandedImg">
				<img src="/images/photos/2018_2019/PepRally_2018/peprally_2018_3_lg.jpg" alt="Pep Rally 3" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2018_2019/PepRally_2018/peprally_2018_3.jpg.jpeg" class="printbutton" target="_blank">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">NBA Game 3</div>
			</div>
			
			<div id="Pep Rally 4" class="expandedImg">
				<img src="/images/photos/2018_2019/PepRally_2018/peprally_2018_4_lg.jpg" alt="Pep Rally 4" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2018_2019/PepRally_2018/peprally_2018_4.jpg" class="printbutton" target="_blank">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">NBA Game 4</div>
			</div>
			<div id="Pep Rally 5" class="expandedImg">
				<img src="/images/photos/2018_2019/PepRally_2018/peprally_2018_5_lg.jpg" alt="Pep Rally 5" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2018_2019/PepRally_2018/peprally_2018_5.jpg" class="printbutton" target="_blank">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">NBA Game 5</div>
			</div>
			
			<script>
				var slideIndex = -1;
				showDivs(slideIndex);
				
function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("expandedImg");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
	if (n == -1) return;
	if (n > x.length) {slideIndex = 1}    
	if (n < 1) {slideIndex = x.length}
  x[slideIndex -1].style.display = "block";  
}
</script>
			
			<!-- The gallery columns -->
			<div class="loading"><span class="fooicon fooicon-loader"></span></div>
			<div class="row">
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2018_2019/peprally_2018/peprally_2018_1_th.jpg" alt="Pep Rally 1" style="width:100%" onclick="currentDiv(1)">
				</div>
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2018_2019/PepRally_2018/peprally_2018_2_th.jpg" alt="Pep Rally 2" style="width:100%" onclick="currentDiv(2)">
				</div>
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2018_2019/PepRally_2018/peprally_2018_3_th.jpg" alt="Pep Rally 3" style="width:100%" onclick="currentDiv(3)">
				</div>
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2018_2019/PepRally_2018/peprally_2018_4_th.jpg" alt="Pep Rally 4" style="width:100%" onclick="currentDiv(4)">
				</div>
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2018_2019/PepRally_2018/peprally_2018_5_th.jpg" alt="Pep Rally 5" style="width:100%" onclick="currentDiv(5)">
				</div>
			</div>
			
		<script>
				$( window ).on( "load", function() {
					$('.row').css('visibility','visible');
					$('.loading').css('display','none');
				});
			</script>
			
<script>
	var slideIndex = -1;
	showDivs(slideIndex);
	
function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("expandedImg");
  var dots = document.getElementsByClassName("gallerythumbnail");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" opacity-off", "");
  }
	if (n == -1) return;
	if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " opacity-off";
}
</script>
			
		</div>
	</div>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/footer.php";
	include_once($path);
?>
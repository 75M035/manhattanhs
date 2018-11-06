<?php 
$page_title = "Halloween at Beacon";
$page_description = "Photos from Pep Rally 2018-19";

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
	include_once($path);
?>

	<div id="fullwidth">
		<ul class="contenthead"><li><a href="/photos.php"><h3>Photos</h3></li></a><li><h3>Halloween</h3></li></ul>
		<div class="fullcontent">
			<!-- The expanding image grid (hidden by default) -->
			<div id="Halloween 1" class="expandedImg">
				<img src="/images/photos/2018_2019/halloween2018/halloween2018_beacon_1lg.jpg" alt="Halloween 1" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2018_2019/halloween2018/halloween2018_beacon_1.JPG" class="printbutton" target="_blank">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">Halloween 1</div>
			</div>
			
			<div id="Halloween 2" class="expandedImg">
				<img src="/images/photos/2018_2019/halloween2018/halloween2018_beacon_2lg.jpg" alt="Halloween 2" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2018_2019/halloween2018/halloween2018_beacon_2.JPG" class="printbutton" target="_blank">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">Halloween 2</div>
			</div>
			
			<div id="Halloween 3" class="expandedImg">
				<img src="/images/photos/2018_2019/halloween2018/halloween2018_beacon_3lg.jpg" alt="Halloween 3" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2018_2019/halloween2018/halloween2018_beacon_3.JPG" class="printbutton" target="_blank">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">Halloween 3</div>
			</div>
			
			<div id="Halloween 4" class="expandedImg">
				<img src="/images/photos/2018_2019/halloween2018/halloween2018_beacon_4lg.jpg" alt="Halloween 4" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2018_2019/halloween2018/halloween2018_beacon_4.JPG" class="printbutton" target="_blank">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">Halloween 4</div>
			</div>
			
			<div id="Halloween 5" class="expandedImg">
				<img src="/images/photos/2018_2019/halloween2018/halloween2018_beacon_5lg.jpg" alt="Halloween 5" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2018_2019/halloween2018/halloween2018_beacon_5.JPG" class="printbutton" target="_blank">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">Halloween 5</div>
			</div>
			
			<div id="Halloween 6" class="expandedImg">
				<img src="/images/photos/2018_2019/halloween2018/halloween2018_beacon_6lg.jpg" alt="Halloween 6" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2018_2019/halloween2018/halloween2018_beacon_6.JPG" class="printbutton" target="_blank">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">Halloween 6</div>
			</div>
			
			<div id="Halloween 7" class="expandedImg">
				<img src="/images/photos/2018_2019/halloween2018/halloween2018_beacon_7lg.jpg" alt="Halloween 7" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2018_2019/halloween2018/halloween2018_beacon_7.JPG" class="printbutton" target="_blank">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">Halloween 7</div>
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
					<img class="gallerythumbnail" src="/images/photos/2018_2019/halloween2018/halloween2018_beacon_1th.jpg" alt="Halloween 1" style="width:100%" onclick="currentDiv(1)">
				</div>
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2018_2019/halloween2018/halloween2018_beacon_2th.jpg" alt="Halloween 2" style="width:100%" onclick="currentDiv(2)">
				</div>
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2018_2019/halloween2018/halloween2018_beacon_3th.jpg" alt="Halloween 3" style="width:100%" onclick="currentDiv(3)">
				</div>
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2018_2019/halloween2018/halloween2018_beacon_4th.jpg" alt="Halloween 4" style="width:100%" onclick="currentDiv(4)">
				</div>
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2018_2019/halloween2018/halloween2018_beacon_5th.jpg" alt="Halloween 5" style="width:100%" onclick="currentDiv(5)">
				</div>
			</div>
			<div class="row">
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2018_2019/halloween2018/halloween2018_beacon_6th.jpg" alt="Halloween 6" style="width:100%" onclick="currentDiv(6)">
				</div>
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2018_2019/halloween2018/halloween2018_beacon_7th.jpg" alt="Halloween 7" style="width:100%" onclick="currentDiv(7)">
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
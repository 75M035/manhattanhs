<?php 
$page_title = "Pink Day 2018";
$page_description = "Photos from Pink Day 2018-19";

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
	include_once($path);
?>

<main id="content">
	<div class="fullwidth">
		<ul class="contenthead"><li><a href="/photos.php"><h2>Photos</h2></li></a><li><h2>Pink Day</h2></li></ul>
		<div class="fullcontent">
			<!-- The expanding image grid (hidden by default) -->
			<div id="Pink Day 1 (Beacon)" class="expandedImg">
				<img src="/images/photos/2018_2019/pinkday2018/beacon/pinkday_2018_beacon_1_lg.jpg" alt="Pink Day 1 (Beacon)" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2018_2019/pinkday2018/beacon/pinkday_2018_beacon_1.jpg" class="printbutton" target="_blank" aria-label="Print">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">Pink Day 1 (Beacon)</div>
			</div>
			
			<div id="Pink Day 2 (Beacon)" class="expandedImg">
				<img src="/images/photos/2018_2019/pinkday2018/beacon/pinkday_2018_beacon_2_lg.jpg" alt="Pink Day 2 (Beacon)" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2018_2019/pinkday2018/beacon/pinkday_2018_beacon_2.jpg" class="printbutton" target="_blank" aria-label="Print">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">Pink Day 2 (Beacon)</div>
			</div>
			
			<div id="Pink Day 3 (Beacon)" class="expandedImg">
				<img src="/images/photos/2018_2019/pinkday2018/beacon/pinkday_2018_beacon_3_lg.jpg" alt="Pink Day 3 (Beacon)" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2018_2019/pinkday2018/beacon/pinkday_2018_beacon_3.jpg" class="printbutton" target="_blank" aria-label="Print">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">Pink Day 3 (Beacon)</div>
			</div>
			
			<div id="Pink Day 4 (Main)" class="expandedImg">
				<img src="" alt="Pink Day 4 (Main)" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="" class="printbutton" target="_blank" aria-label="Print">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">Pink Day 4 (Main)</div>
			</div>
			
			<div id="Pink Day 5 (Main)" class="expandedImg">
				<img src="" alt="Pink Day 4 (Main)" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="" class="printbutton" target="_blank" aria-label="Print">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">Pink Day 5 (Main)</div>
			</div>
			
			<div id="Pink Day 6 (Main)" class="expandedImg">
				<img src="" alt="Pink Day 4 (Main)" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="" class="printbutton" target="_blank" aria-label="Print">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">Pink Day 6 (Main)</div>
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
					<img class="gallerythumbnail" src="/images/photos/2018_2019/pinkday2018/beacon/pinkday_2018_beacon_1_th.jpg" alt="Pink Day 1 (Beacon)" style="width:100%" onclick="currentDiv(1)">
				</div>
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2018_2019/pinkday2018/beacon/pinkday_2018_beacon_2_th.jpg" alt="Pink Day 2 (Beacon)" style="width:100%" onclick="currentDiv(2)">
				</div>
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2018_2019/pinkday2018/beacon/pinkday_2018_beacon_3_th.jpg" alt="Pink Day 3 (Beacon)" style="width:100%" onclick="currentDiv(3)">
				</div>
				<div class="column">
					<img class="gallerythumbnail" src="" alt="Pink Day 4 (Main)" style="width:100%" onclick="currentDiv(3)">
				</div>
					<div class="column">
					<img class="gallerythumbnail" src="" alt="Pink Day 5 (Main)" style="width:100%" onclick="currentDiv(3)">
				</div>
					<div class="column">
					<img class="gallerythumbnail" src="" alt="Pink Day 6 (Main)" style="width:100%" onclick="currentDiv(3)">
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
	
document.onkeydown = function(e) {
        e = e || window.event;
        if (e.keyCode == '37') {
            plusDivs(-1) //left <- show Prev image
        } else if (e.keyCode == '39') {
            // right -> show next image
            plusDivs(1)
		}
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
</main>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/footer.php";
	include_once($path);
?>
<?php 
$page_title = "Main NBA Game";
$page_description = "Photos from NBA Game 2017-2018";

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/header.php";
	include_once($path);
?>

<main id="content">
	<div class="fullwidth">
		<ul class="contenthead"><li><a href="/photos.php"><h2>Photos</h2></li></a><li><h2>Main NBA Game</h2></li></ul>
		<div class="fullcontent">
			<!-- The expanding image grid (hidden by default) -->
			<div id="NBA Game 1" class="expandedImg">
				<img src="/images/photos/2017_2018/nbagame/nbagame2017_1lg.jpg" alt="NBA Game 1" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2017_2018/nbagame/nbagame2017_1.jpeg" class="printbutton" target="_blank" aria-label="Print">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">NBA Game 1</div>
			</div>
			
			<div id="NBA Game 2" class="expandedImg">
				<img src="/images/photos/2017_2018/nbagame/nbagame2017_2lg.jpg" alt="NBA Game 2" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2017_2018/nbagame/nbagame2017_2.jpeg" class="printbutton" target="_blank" aria-label="Print">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">NBA Game 2</div>
			</div>
			
			<div id="NBA Game 3" class="expandedImg">
				<img src="/images/photos/2017_2018/nbagame/nbagame2017_3lg.jpg" alt="NBA Game 3" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2017_2018/nbagame/nbagame2017_3.jpeg" class="printbutton" target="_blank" aria-label="Print">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">NBA Game 3</div>
			</div>
			
			<div id="NBA Game 4" class="expandedImg">
				<img src="/images/photos/2017_2018/nbagame/nbagame2017_4lg.jpg" alt="NBA Game 4" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2017_2018/nbagame/nbagame2017_4.jpeg" class="printbutton" target="_blank" aria-label="Print">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">NBA Game 4</div>
			</div>
			<div id="NBA Game 5" class="expandedImg">
				<img src="/images/photos/2017_2018/nbagame/nbagame2017_5lg.jpg" alt="NBA Game 5" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2017_2018/nbagame/nbagame2017_5.jpeg" class="printbutton" target="_blank" aria-label="Print">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">NBA Game 5</div>
			</div>
			
			<div id="NBA Game 6" class="expandedImg">
				<img src="/images/photos/2017_2018/nbagame/nbagame2017_6lg.jpg" alt="NBA Game 6" style="width:100%">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<button class="leftphotobutton" onclick="plusDivs(-1)">&#10094;</button>
				<button class="rightphotobutton" onclick="plusDivs(1)">&#10095;</button>
				<a href="/images/photos/2017_2018/nbagame/nbagame2017_6.jpeg" class="printbutton" target="_blank" aria-label="Print">
					<i class="fa fa-print fa-lg" aria-hidden="true"></i>
				</a>
				<div class="imgtext">NBA Game 6</div>
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
					<img class="gallerythumbnail" src="/images/photos/2017_2018/nbagame/nbagame2017_1th.jpg" alt="NBA Game 1" style="width:100%" onclick="currentDiv(1)">
				</div>
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2017_2018/nbagame/nbagame2017_2th.jpg" alt="NBA Game 2" style="width:100%" onclick="currentDiv(2)">
				</div>
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2017_2018/nbagame/nbagame2017_3th.jpg" alt="NBA Game 3" style="width:100%" onclick="currentDiv(3)">
				</div>
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2017_2018/nbagame/nbagame2017_4th.jpg" alt="NBA Game 4" style="width:100%" onclick="currentDiv(4)">
				</div>
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2017_2018/nbagame/nbagame2017_5th.jpg" alt="NBA Game 5" style="width:100%" onclick="currentDiv(5)">
				</div>
				<div class="column">
					<img class="gallerythumbnail" src="/images/photos/2017_2018/nbagame/nbagame2017_6th.jpg" alt="NBA Game 6" style="width:100%" onclick="currentDiv(6)">
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
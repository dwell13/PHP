<html>
<head>
     <link href="assets/css/index.css" rel="stylesheet">
<title> dWell Academy </title>
</head>
<body>
    <div class="header">
      <div class="header_title" style="margin-top:5px;">
        <?php
$title[0]="Monika Shakya";
$title[1]="Dharam dev Mahato";
$title[2]="Vicky Virus";
$title[3]="dWell";
$title[4]="Dileep Mahato";
echo $title[3];
?> </div>
<div class="search">
<form>
  <input type="text" name="search" placeholder="Search..">
</form>
</div>
<div class="search_button">
    <button type="search" style="padding:5px;"> Go Search </button>
      </div>
         </div>
               <div class="menu">
                 <div class="home">
                   <?php 
				     $title[0]="Home";
					 $title[1]="About";
					 $title[2]="More";
					 echo $title[0]; ?>
                       </div>
                  <div class="about">
                  <?php 
				  $about[0]="Home";
				  $about[1]="About";
				  $about[2]="Shalu";
				  $about[3]="Shayri";
				  $about[4]="More";
				  echo $about[1]; ?>
                  </div>
                  <div class="contact">
                  <?php
				  $title[0]="Home";
				  $title[1]="About";
				  $title[2]="Shayri";
				  $title[3]="Contact";
				  $title[4]="More";
				  $title[5]="Updates";
				  echo $title[3]; ?>
                  </div>
                  <div class="picx">
                  <?php 
				  $picx[0]="images";
				  $picx[1]="photos";
				  $picx[2]="Picx";
				  $picx[3]="Pictures";
				  $picx[4]="More";
				  echo $picx[2]; ?>
                  </div>
                  <div class="vid">
                  <?php 
				  $vid[0]="vid";
				  $vid[1]="Videos";
				  $vid[2]="vidmt";
				  echo $vid[1]; ?>
                    </div>
                    </div>
        
    <div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="assets/images/slide.jpg" height="200px" width="1000">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="assets/images/slide.jpg"  height="200px" width="1000">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3/ 3</div>
  <img src="assets/images/slide.jpg"  height="200px" width="1000">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onClick="plusSlides(-1)">&#10094;</a>
<a class="next" onClick="plusSlides(1)">&#10095;</a>

</div>
<br>
<!--
<div style="text-align:center">
  <span class="dot" onClick="currentSlide(1)"></span> 
  <span class="dot" onClick="currentSlide(2)"></span> 
  <span class="dot" onClick="currentSlide(3)"></span> 
</div> -->

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

                   <div class="background">
                     </div>



</body>
</html>
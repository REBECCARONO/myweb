<?php 

function login(){
	$title="LOGIN";
	?>
	
                   
                    
                    <div>
                        <form role="form" action="" method="post" name="loginform" onSubmit="return validateLogin()">
                            <fieldset>
                                <input type="hidden" value="loginuser" name="loginuser"  />
                                <div class="form-group">
                                    <input class="" placeholder="User name" name="username" id="username" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="" placeholder="Password" name="password" id="password" type="password" value="" required>
                                </div>
                                <input type="submit"  value="LOGIN" onClick="" />
                            </fieldset>
                        </form>
                        
                     </div>

	          <?php 
			  

	  
			  }
			  
			  
function validateLogin(){	
$username=$_POST['username'];
$password=$_post['password'];

if($username="rebecca" && $password="becky"){
	header("Location:index.php?action=archive.php");
	
	}else{
		header("Location:index.php");
			}
	
	}


	
function experience(){
	
	$title="Experience";
	?>
	<p><b>Experince</b></p>
<p><b>mDex:</b> is an application that was Show cased in the Imagine Cup world Finals (2014).mDex is a smart phone base lower cost alternative to diagnosing sickle cell disease.it runs on any phone with windows 8.0 operating system.This application was and is still being developed using C#.  
I was the Software Lead Developer. The actions behind every widget, I was responsible for that.co-designed the mDex application.
The choice of colors, widget placements and flow of actions/activities.</p>
</br>

<p><b>Developed an Arcade Management System:</b>  This system is used to manage renting of rooms in the building, payments made by the tenants,
show the financial stand of the arcade. This system was developed using java programming language.  I was heading the requirements engineering team
in the process of gathering the system, user requirements. I participated in the initial design, where we came up use cases, activity diagrams
and flow of activities. In the graphical design, I was responsible for the placement of different widgets, colors used</p>
</br>

<p><b>BloodLifeSaver:</b> is a web based application that Was presented in our final year. This application was developed using PHP,MYSQL,HTML and CSS.
I co-developed the user interface, database and helped in writing of the SQL statements.  </p>
	
	
	<?php	
	
	
	}		  
			  
function archive(){?>

	<table id="tab" border="1" cellspacing="1" cellpadding="0" align="left">

<tr> <td align="center"><font color="black" ><b>YEAR</b></font></td><td align="center"><font color="black"><b>QUALIFICATION</b></font></td><td align="center"><font color="black"><b>INSTITUTION</b></font></td></tr>
<tr><td></td><td></td><td></td></tr>

<tr> <td align="center">July 2014</td><td align="center">world finals imagine cup </td><td align="center">Microsoft Imagine Cup</td></tr>

<tr> <td align="center">July 2014</td><td align="center">Certificate in Design using Photoshop</td><td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Computing Palace Technologies</td></tr>

<tr> <td align="center">June 2014</td><td align="center">Visual studio Online Boost 2014 Winner </td><td align="center">Microsoft Imagine Cup</td></tr>

<tr> <td align="center">June 2014</td><td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Certificate of innovation 2014 World Semifinalist</td><td align="center">Microsoft Imagine Cup</td></tr>

<tr> <td align="center">April 2014</td><td align="center">Certificate in Creativity and Innovation </td><td align="center">Microsoft Imagine Cup</td></tr>

</table>
	<?php
	
	
	}	
	
	
	
function interest(){?>
	
<p><b>Vice president students’ Disciplinary committee St. Paul’s Collage Mbale(2009-2010)</b></p><p>I solved conflicts between and among the students</p>
<p> I provided same guidance and counseling services to students.</p>  
<p><b>Cashier SPACOM club St. Paul’s Collage Mbale(2009-2010).</b></p><p> kept accounts on the clubs’ finances.</p>   
<p><b>Member of the students’ Electro commission St. Paul’s Collage Mbale(2009-2010).</b></p><p>I made sure there was a peaceful and just voting exercise.</p>   
<p><b>Intern with computing palace technologies (July – August).</b></p><p>I used Photoshop to design the different company projects.Prototyping websites using word press.</p>   
	
	
	
	<?php }
	
	
function gallery(){?>
<br />
<div style="max-width:500px;min-width:250px;position:relative;margin:auto;">
<p align="left"><b><a href="index.php" >Exit</a></b></p>
</div>

<div style="max-width:500px;min-width:250px;position:relative;margin:auto;">

<div class="mySlides fade" style="display: block;">
  <div class="numbertext">1 / 4</div>
  <img src="img_nature_wide.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade" style="display: none;">
  <div class="numbertext">2 / 4</div>
  <img src="img_fjords_wide.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade" style="display: none;">
  <div class="numbertext">3 / 4</div>
  <img src="img_lights_wide.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade" style="display: none;">
  <div class="numbertext">4 / 4</div>
  <img src="img_mountains_wide.jpg" style="width:100%">
  <div class="text">Caption Four</div>
</div>


<a class="slprev" onclick="plusSlides(-1)">❮</a>
<a class="slnext" onclick="plusSlides(1)">❯</a>

</div>

<br>

<div style="text-align:center">
  <a href="javascript:void(0)" class="dot slideractive" onclick="currentSlide(1)" title="slide 1"></a> 
  <a href="javascript:void(0)" class="dot" onclick="currentSlide(2)" title="slide 2"></a> 
  <a href="javascript:void(0)" class="dot" onclick="currentSlide(3)" title="slide 3"></a> 
  <a href="javascript:void(0)" class="dot" onclick="currentSlide(4)" title="slide 4"></a> 
</div>

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
  if (n < 1) {slideIndex = slides.length} ;
  for (i = 0; i < slides.length; i++) {
     slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].classList.remove("slideractive");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].classList.add("slideractive");
}
</script>
<script type="text/javascript">
var stickyadstatus = "";
function fix_stickyad() {
  var elem = document.getElementById("stickyadcontainer");
  if (!elem) {return false;}
  if (document.getElementById("skyscraper")) {
    var skyWidth = Number(w3_getStyleValue(document.getElementById("skyscraper"), "width").replace("px", ""));  
    }
  else {
    var skyWidth = Number(w3_getStyleValue(document.getElementById("right"), "width").replace("px", ""));  
  }
  elem.style.width = skyWidth + "px";
  if (window.innerWidth <= 992) {
    elem.style.position = "";
    elem.style.top = stickypos + "px";
    return false;
  }
  var stickypos = document.getElementById("stickypos").offsetTop;
  var docTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
  var adHeight = Number(w3_getStyleValue(elem, "height").replace("px", ""));
  if (stickyadstatus == "") {
    if ((stickypos - docTop) < 60) {
      elem.style.position = "fixed";
      elem.style.top = "60px";
      stickyadstatus = "sticky";
    }
  } else {
    if ((docTop + 60) - stickypos < 0) {  
      elem.style.position = "";
      elem.style.top = stickypos + "px";
      stickyadstatus = "";
    }
  }
  if (stickyadstatus == "sticky") {
    if ((docTop + adHeight + 60) > document.getElementById("footer").offsetTop) {
      elem.style.position = "absolute";
      elem.style.top = (document.getElementById("footer").offsetTop - adHeight) + "px";
    } else {
        elem.style.position = "fixed";
        elem.style.top = "60px";
        stickyadstatus = "sticky";
    }
  }
}
function w3_getStyleValue(elmnt,style) {
  if (window.getComputedStyle) {
    return window.getComputedStyle(elmnt,null).getPropertyValue(style);
  } else {
    return elmnt.currentStyle[style];
  }
}
</script>

	
	
	
	<?php  }	
	
	
function signout(){
		session_start();
        session_destroy();
		header("location:index.php");
		exit();
			}			  
			  
			  

?>
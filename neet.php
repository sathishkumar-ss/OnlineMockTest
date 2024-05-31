<?php
require 'dbconfig.php';
session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>relative</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <style type="text/css">
	  .menu{
    	margin:30px;
			padding:40px;
			
		}
		.menu a{
			padding: 20px;
			font-size: 28px;
		}
		.total img{
			width:100%;
			height:200px;
		}
		
		.box{
			position:relative;
     		width:50%;/* Make the width of box same as image */
     		margin-left:23%;
     		text-align: center;
       	}
       
		.box .text{
        position: absolute;
        z-index: 999;
        left: 16%;
        top:0;
       	right:0;
        width:70%;/* Adjust this value to move the positioned div up and down */
        text-align: center;
         /* Set the width of the positioned div */
        color:white;
        font-family: timesofindia;
       
		}
		
		
		
		.btn button{
		background-color: red;
		width:100px;
		height:60px;
		color: white;
		font-size: 18px;
		border-radius: 10px;
		}
.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: green;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.3s;
  padding: 20px;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 23%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #fff;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 28px;
  color: #fff;
  display: block;
  border: none;
  background: none;
  width: 100%;
  padding: 22px;
  text-align: left;
  cursor: pointer;
  outline: none;
  font-family: timesofindia;
}
.dropdown-container{
  background-color: #fff;
}
.dropdown-container a{
  color:#111;
  margin-left: 20px;





}
.dropdown-container a:hover{
  color:blue;
  border:0 solid;
  border-fill: green;
}


/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #fff;

}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: black;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: white;
  padding-left: 8px;
  color:black;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
.container {
  position: relative;
  text-align: center;
  color: white;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.btn{
    padding:20px;
    text-decoration: none;
    font-size: 30px;
    font-family: timesofindia;
    font-weight: bold;
    background-color: red;
    color:#fff;
    border-radius: 10px;
}

		

</style>
</head>
<body>
	<div class="total">
	<img src="images.jpg">
	<div class="menu">
		<a href="index.php">home </a>  >>
		<a href="course.php">course </a>  >>
		<a href="exams.php">exams</a>  >>
		<button style="float: right;border-radius: 10px;background-color: skyblue;height:60px;margin-right: 20px;"><a href="signin.php">Signin</a></button>
    <button style="float: right;border-radius: 10px;background-color: skyblue;height: 60px;list-style: none"><a href="login.php">LogIn</a></button>
	</div>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

  <button class="dropdown-btn">Aptitude<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
     
          <li><a href="vr.php">Quantitive Aptitude</a></li>
          <li><a href="#">Logical Reasoning</a></li>
          <li><a href="#">English</a></li>
          <li><a href="#">Verbal Reasoning</a></li>
          
      </ul>
    </div>
  

  <button class="dropdown-btn">English<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-container">
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li> 
      </ul>
    </div>
    
  <button class="dropdown-btn">VerbalReasoning<i class="fa fa-caret-down"></i></button>
 <div class="dropdown-container">
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li> 
      </ul>
    </div>

  <button class="dropdown-btn">Data Interpretation<i class="fa fa-caret-down"></i></button>
      <div class="dropdown-container">
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li> 
      </ul>
    </div>

  <button class="dropdown-btn">Logical Reasoning<i class="fa fa-caret-down"></i></button>
      <div class="dropdown-container">
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li> 
      </ul>
    </div>
   
  <button class="dropdown-btn">Mathematics<i class="fa fa-caret-down"></i></button>
       <div class="dropdown-container">
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li> 
      </ul>
    </div>
  
  <button class="dropdown-btn">Computer Science<i class="fa fa-caret-down"></i></button>
     <div class="dropdown-container">
          <li><a href="#">Engineering Mathematics</a></li>
          <li><a href="#"></a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li> 
      </ul>
    </div>
    
  <button class="dropdown-btn">GK questions<i class="fa fa-caret-down"></i></button>
     <div class="dropdown-container">
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li>
          <li><a href="#">Aptitude</a></li> 
      </ul>
    </div>

  </ul>
</div>
</div>

<table>

<div id="mySidebar2" class="sidebar">
<ul>
  <a href="javascript:void(0vm)" class="closebtn" onclick="closeNav2()">×</a>
  <a href="#">Verbal reasoning</a>
  <a href="#">Numerical Reasoning</a>
  <a href="#">Neet</a>
  <a href="#">Contact</a>
</ul>
</div>
</table>








<div class="container">
  <img src="bg1.jpg" alt="Snow" style="width:40%;height:10%">
  <div class="centered">
    <h1>To Start the Test,click Start</h1>
    <button class="btn" onclick="openNav()">Start</button>
  </div>


</div>
<div class="container">
  <img src="bg1.jpg" alt="" style="width:40%;height:15%">
  <div class="centered">
    <h1>To Start the Study,click Start</h1>
    <button class="btn" onclick="openNav2()">Start</button>
  </div>


</div>



<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("total").style.marginLeft = "250px";

}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
function openNav2() {
  document.getElementById("mySidebar2").style.width = "250px";
  document.getElementById("total").style.marginLeft = "250px";
  
}

function closeNav2() {
  document.getElementById("mySidebar2").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}

</script>
</body>
</html>




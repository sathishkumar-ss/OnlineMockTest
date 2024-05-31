<!DOCTYPE html>
<html>
<head>
  <title>text</title>
  <style type="text/css">
    *{
      font-family: timesofindia;
      margin-left:15px;
      margin-right: 15px; 
      padding-top: 8px;
      padding-bottom: 8px;
    }
    .menu a{
      
      font-family: timesofindia;
      font-size: 18px;
    }
    .para p{
      font-size: 18px;
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
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("bg.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
 
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  border-radius: 3px;
  background-color: skyblue;
  text-align: center;
  cursor: pointer;

}

.hero-text button:hover {
  background-color: red;
  color: white;
} 

  
  </style>
</head>
<body>
  
  <div class="menu">
  <a href="index.php">Home</a>
  <a href="course.php">Course</a>
  <a href="aptitude.php">Bank / PO</a>

  </div>
  <div class="para">
  <h1>Bank/PO Questions</h1>
  <p>An aptitude test is a way for employers to assess a candidate's abilities through a variety of different testing formats. Aptitude tests will test your ability to perform tasks and react to situations at work. This includes problem-solving, prioritisation and numerical skills, amongst other things.</p>
  </div>
  <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <button class="dropdown-btn">Aptitude<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
     <ul>
          <li><a href="vr2.php">Simpilification</a></li>
          <li><a href="#">Average</a></li>
          <li><a href="#">Interest</a></li>
          <li><a href="#">Mensuration</a></li>
          
      </ul>
    </div>
   

  <button class="dropdown-btn">Verbal Reasoning<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
     <ul>
          <li><a href="vr.php">Cause And Effect</a></li>
         
      </ul>
    </div>

  <button class="dropdown-btn">Computer<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
     <ul>
          <li><a href="vr.php">Hardware</a></li>
          <li><a href="#">Memory</a></li>
          <li><a href="#">Internet</a></li>
      </ul>
    </div>

  <button class="dropdown-btn">English<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
     <ul>
          <li><a href="vr.php">Grammar</a></li>
          <li><a href="#">Verbal Ability</a></li>
 
          
      </ul>
    </div><br><br><br>
  </div>
  

 
 
  

</div>

<table>

  <div class="hero-image">
    <div class="hero-text">
    <h1 style="font-size:30px">Course | Bank/PO </h1>
    <p style="font-size: 20px;">To start the Practice , Click Start</p>
    <button onclick="openNav()">Start</button>
  </div>
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "300px";
  document.getElementById("total").style.marginLeft = "300px";
 

}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
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
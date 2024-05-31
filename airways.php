<!DOCTYPE html>
<html>
<head>
  <title>text</title>

  
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
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
  scroll-behavior: smooth;
  background-color: #969826;
  overflow-x: hidden;
  transition: 0.8s;
  padding-top: 60px;
  scroll-behavior: auto;
}
.sidebar i{
  font-size: 22px;

}

.sidebar a {
  padding: 8px 8px 8px 36px ;
  
  text-decoration: none;
  font-size: 25px;
  color:white;
  display: block;
   transition: 0.5s;
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
#sidebar{
 box-shadow:0 0 0 10000px rgba(0,0,0,.50);
}


/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 23%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #348268;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 28px;
  color: white;
  display: block;
  border: none;
  background: none;
  width: 100%;
  padding: 20px;
  text-align: left;
  cursor: pointer;
  outline: none;
  border:2px solid #969826;
  font-family: timesofindia;
}
.dropdown-container{
  background-color: #969826;
  border-radius: 20px;
  overflow: hidden;
  
  
}
.dropdown-container a{
  color:#111;
  margin-left: 20px;
}
.dropdown-container a:hover{
  color:blue;
  border:0 solid;
  border-fill:#fff;
  margin-right: 5px;

}
/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: lightblue;

}
/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}
/* Add an active class to the active dropdown button */
.active {
  background-color: #969826;
  color: #fff;
}
/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  transition: 2s;
  background-color: #fff;
  padding-left: 8px;
  color:black;
}
.dropdown-container ul li a{
  transition:0.8s;

}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
  padding-top: 4px;
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

  article{

  width:auto;
  padding:10px;
  margin: 5px;
  overflow-x :auto;
}

.img{
  background: #f5f5f5;
  border:2px soldi black;
  padding: 10px;
  border-radius: 10px;
  margin:20px;
  overflow-x: auto;
    display: inline-block;
box-shadow: 2px 2px 10px black;
cursor:pointer;
}
.img:hover{
    transform: translateY(-0.5%);
    box-shadow:0 4rem 8rem rgba(0,0,0,0.5);
}

  </style>
</head>
<body>
  <div class="menu">
  <a href="index1.php">Home</a>
  <a href="exams.php">Course</a>
  <a href="airways.php">Airways</a>

  </div>
  <div class="para">
  <h1>Airways Questions</h1>
  <p> A job in the aviation industry, especially those which are to be performed in the plane, such as pilot, air hostess, steward, cabin crew etc. are a no-nonsense job. These jobs require a person to be communicative, responsible, spontaneous, and patient enough to handle passengers and their concerns. If you think, you have these qualities and right academic qualification, then you can surely pursue a career in Aviation.</p>
  </div>
  <div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
<button class="dropdown-btn">Aptitude<i class="fas fa-caret-down"></i></button>
  <div class="dropdown-container">
     <ul>
          
          <li><a href="quefolder/airwaysvr.php">Logical Reasoning</a></li>
          <li><a href="quefolder/airwaysgrammar.php">Grammar</a></li>
                    
      </ul>
    </div>
    <button class="dropdown-btn">Indian Aviation<i class="fas fa-caret-down"></i></button>
    <div class="dropdown-container">
     <ul>
          <li><a href="quefolder/airwaysairlinetravia.php">Airlines Aviation</a></li>
          <li><a href="quefolder/airwaysautomobile.php">Automobile</a></li>
       
      </ul>
    </div><br><br><br>
</div>


 <article>
<section style="text-align: center;">
 <div class="img">
 
<a href="question/airways.php"><img src="images\question_bank.png" width="150x" height="150px"></a>
  <h4>QUESTION BANK</h4>
  </div>
  
    <div class="img">
  <a href="./video/video11.php"><img src="images\videos.png" width="150px" height="150px"></a>
  <h4>VIDEOS</h4></div>
    
    <div class="img">
    <a href="faq/faq_airways.html"><img src="images\f&q.png" width="150px" height="150px"></a>
    <h4>FAQ</h4>
    </div>
  
    
</div>
</section>
</article>
<table>

  <div class="hero-image">
    <div class="hero-text">
    <h1 style="font-size:30px">Course | Airways </h1>
    <p style="font-size: 20px;">To start the Practice , Click Start</p>
    <button onclick="openNav()">Start</button>
  </div>
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "300px";
  document.getElementById("total").style.marginLeft = "300px";
   document.getElementById("total").style.display = "black";

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
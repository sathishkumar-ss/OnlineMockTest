<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
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

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
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
</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>  
 

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 













<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="feedback.php">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>



  <div class="box">
        <img src="bg1.jpg" alt="not found">
      <div class="text">
            <h1>course|railways</h1>
            <h2>To attend the Quiz, click start</h2>
            <div class="main">
            <div class="btn"><button class="openbtn" onclick="openNav()">StartQuiz</button></div>
              

        </div>
    </div>
<table>

<div id="mySidebar2" class="sidebar">
<ul>
  <a href="javascript:void(0vm)" class="closebtn" onclick="closeNav2()">×</a>
  <li><a href="feedback.php">Verbal reasoning</a></li>
  <li><a href="#">Numerical Reasoning</a></li>
  <li><a href="#">Clients</a></li>
  <li><a href="#">Contact</a></li>
</ul>
</div>
</table>
    <div class="box2">
        <img src="bg1.jpg" alt="not found">
      <div class="text2">
            <h1>course|railways</h1>
             <h2>To learn something new,click start</h2>
             <div class="btn"><button class="openbtn" onclick="openNav2()">Study</button></div>
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
</script>
  
</body>
</html>
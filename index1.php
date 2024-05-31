
<!DOCTYPE html>
<html>
<head>
<title>home</title>

  
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
<style>
* {
  box-sizing: border-box;
  font-family: timesofindia;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}
.column img{
  object-fit: cover;
  width: 291px;
  height:172px;

}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  top:0;
  width: 220px;
  background-color: green;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;
}
.sidebar h2{
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;

}
 
.sidebar a.active {
  background-color: #4CAF50;
  color:white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}
.main-content a{
  text-decoration: none;
  text-align: center;
  font-size: 24px;

}
.index-btn {
  float: right;
  font-family: timesofindia;
}
.index-btn a{
  float:right;
  font-family: 

}

@media screen and (max-width: 700px){
  div.main-content {
    margin-left: 20px;
    margin-right: 20px;
  }
  div.index-btn a{
      font-size: 12px;
     
      margin: 5px;

    }
}
@media screen and (min-width: 300px){
.main-content {
  margin-left:250px;
  margin-right:20px;
 }

}


@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
    font-size: 14px;
  }
  .column a{
    font-size: 14px;
  }

}

.name {
  text-align: center;
  font-weight: bold;
  padding:1px;

  color:darkblue;
}
</style>
</head>
<body>
  <div class="sidebar">
  
      <h2>My Website</h2>
      <ul>
        <a href="index1.php"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
        <a href="exams.php"><i class="fa fa-calendar-week"></i>&nbsp;&nbsp;Course</a>
        <a href="about.php"><i class="fa fa-question-circle"></i>&nbsp;&nbsp;About Us</a>
        <a href="feedback.php"><i class="fas fa-pen"></i>&nbsp;&nbsp;FeedBack</a></button>
      
        
      </ul>
  </div>


<div class="main-content">

  <h1 style="color:blue;margin:20px 0;background-color:red;text-align: center;font-family: timesofindia;padding:20px;"> Online Mock Test </h1>

  <div class="index-btn">
    
   
    <button><a href="logout.php">LogOut</a></button>
  </div>
 
<h1>Mathematics</h1>

<div class="row">
  <div class="column">
    <a href="mathsadding.php"><img src="img/mathsfraction.jpg" alt="Snow" style="width:100%">Adding & Subtracting Multiple Number</a> 
  </div>
  <div class="column">
   <a href="mathsfraction.php"><img src="img/mathsadd.png" alt="Forest" style="width:100%">Solving a fraction</a>
  </div>
  <div class="column">
    <a href="mathspercents.php"><img src="img/mathspercents.jpg" alt="Mountains" style="width:100%">Percents and decimal</a>
  </div>
</div>

<h1>English and Language arts</h1>
<div class="row">
  <div class="column">
    <a href="englishgrammar.php"><img src="img/englishgrammar.jpg" alt="Snow" style="width:100%">Grammar</a> 
  </div>
  <div class="column">
   <a href="englishverbs.php"><img src="img/englishsentence.jpg" alt="Forest" style="width:100%">Verbs</a>
  </div>
  <div class="column">
    <a href="englishnouns.php"><img src="img/englishnouns.jpg" alt="Mountains" style="width:100%">Common Proper Nouns</a>
  </div>
</div>

<h1>Aptitude</h1>
<div class="row">
  <div class="column">
    <a href="aptitudesimple.php"><img src="img/aptitudesimple.jpg" alt="Snow" style="width:100%">Simplification</a> 
  </div>
  <div class="column">
   <a href="aptitudeenglish.php"><img src="img/aptittudeenglish.jpg" alt="Forest" style="width:100%">Simple English</a>
  </div>
  <div class="column">
    <a href="aptitudemaths.php"><img src="img/aptitudemaths.jpg" alt="Mountains" style="width:100%">MatheMatics</a>
  </div>
</div>

<h1>scientificial</h1>
<div class="row">
  <div class="column">
    <a href="scienceelements.php"><img src="img/scienceelements.jpg" alt="Snow" style="width:100%">Elements and Metals</a> 
  </div>
  <div class="column">
   <a href="sciencenuclear.php"><img src="img/sciencenuclear.jpg" alt="Forest" style="width:100%">Nuclear Science</a>
  </div>
  <div class="column">
    <a href="sciencesynthetic.php"><img src="img/sciencesynthetic.jpg" alt="Mountains" style="width:100%">Synthetic Material</a>
  </div>
</div>

<h1>Computer Science</h1>
<div class="row">
  <div class="column">
    <a href="computerall.php"><img src="img/computerallaround.jpg" alt="Snow" style="width:100%">Computer All Around</a> 
  </div>
  <div class="column">
   <a href="computerai.php"><img src="img/comai.jpg" alt="Forest" style="width:100%">Artificial Intelligence</a>
  </div>
  <div class="column">
    <a href="computeros.php"><img src="img/comos.jpg" alt="Mountains" style="width:100%">Operating System</a>
  </div>
</div>
</div><br><br>




</body>
</html>

